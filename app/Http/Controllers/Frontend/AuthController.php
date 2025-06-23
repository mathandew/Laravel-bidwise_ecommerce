<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationEmail;

use PragmaRX\Google2FA\Google2FA;
use Illuminate\Support\Facades\Session;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Writer;

class AuthController extends Controller
{

    public function enableTwoFactorAuthentication(Request $request)
{
    $user = Auth::user();

    $google2fa = new Google2FA();
    $secret = $google2fa->generateSecretKey();

    $user->google2fa_secret = $secret;
    $user->is_two_factor_enabled = true;
    $user->save();

    // Generate QR code
    $renderer = new ImageRenderer(
        new RendererStyle(400, 1),
        new SvgImageBackEnd()
    );
    
    $writer = new Writer($renderer);
    $qrCode = $writer->writeString(
        'otpauth://totp/' . config('app.name') . ':' . $user->email . '?secret=' . $secret . '&issuer=' . config('app.name')
    );

    return view('frontend.auth.2fa_setup', compact('qrCode', 'secret'));
}



    public function login(){
        return view('frontend.auth.login');
    }
    public function register(){
        return view('frontend.auth.register');
    }


    public function register_user(Request $request)
{
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone_no = $request->phone_no;
    $user->contact_number = $request->phone_no;
    $user->password = bcrypt($request->password);

    if (isset($request->reg_type)) {
        if ($request->reg_type == 1) {
            $user->login_type = 1;
            $user->seller_status = 1;
            $user->buyer_status = 0;
        } else {
            $user->buyer_status = 1;
        }
    } else {
        $user->buyer_status = 1;
    }

    $user->verification_token = \Str::random(32);
    $user->email_verified_at = null;
    
    $user->save();

    Mail::to($user->email)->send(new VerificationEmail($user));

    return redirect('login')->with('status', 'Please check your email to verify your account.');
}


    public function register_seller(Request $request)
    {

        $userId = Auth::id();
        $CNIC = $request->cnic;
        $contactNo = $request->contact_no;
        $businessUserName = $request->b_username;
        User::where('id', $userId)->update([
           'cnic' => $CNIC,
           'contact_number' => $contactNo,
           'business_username' => $businessUserName,
           'login_type' => 1,
           'seller_status' => 1,
           'buyer_status' => 0,
        ]);
        return redirect('/seller');

    }

    public function register_buyer(Request $request)
    {
        
        $userId = Auth::id();
        User::where('id', $userId)->update([
           'login_type' => 0,
           'buyer_status' => 1,
           'seller_status' => 0,
        ]);
        return redirect('/buyer');

    }
    

public function login_user(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($request->only('email', 'password'))) {
        $user = Auth::user();

        if (!$user->email_verified_at) {
            return redirect('/')->with('warning', 'Your account is not verified. Please check your email to verify.');
        }

        if ($user->is_two_factor_enabled) {
            // Store user ID in session and redirect to 2FA verification page
            Session::put('2fa:user:id', $user->id);
            Auth::logout();
            return redirect()->route('2fa.verify');
        }

        return $user->login_type == 1 ? redirect('/seller') : redirect('/');
    }

    return redirect()->route('login')->with('status', 'Invalid email or password');
}




    public function logout(){
        Auth()->logout();
        return redirect('/');
    }

    public function verifyEmail($token)
{
    $user = User::where('verification_token', $token)->first();

    if (!$user) {
        return redirect('login')->with('error', 'Invalid verification token.');
    }

    $user->email_verified_at = now();
    $user->verification_token = null;
    $user->save();

    
    return redirect('/')->with('status', 'Your email has been verified!');
}

public function resendVerificationEmail()
{
    $user = Auth::user();

    if ($user && !$user->email_verified_at) {
        $user->verification_token = \Str::random(32);
        $user->save();

        Mail::to($user->email)->send(new VerificationEmail($user));

        return back()->with('status', 'Verification email resent! Please check your inbox.');
    }

    return back()->with('status', 'Your account is already verified.');
}

public function verifyTwoFactor()
{
    return view('frontend.auth.2fa_verify');
}

public function postVerifyTwoFactor(Request $request)
{
    $loggeduser = Auth::user();

    $request->validate([
        '2fa_code' => 'required|digits:6',
    ]);

    $userId = Session::get('2fa:user:id');
    $user = User::find($userId);

    if (!$user) {
        return $loggeduser->login_type == 1 ? redirect('/seller') : redirect('/');
    }

    $google2fa = new Google2FA();
    $isValid = $google2fa->verifyKey($user->google2fa_secret, $request->input('2fa_code'));

    if ($isValid) {
        Session::forget('2fa:user:id');
        Auth::login($user);
        return redirect($user->login_type == 1 ? '/seller' : '/');
    }

    return back()->withErrors(['2fa_code' => 'Invalid authentication code']);
}


}
