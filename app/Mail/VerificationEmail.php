<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class VerificationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        $verificationUrl = route('verify.email', ['token' => $this->user->verification_token]);

        return $this->subject('Verify Your Email Address')
                    ->view('emails.verify-email')
                    ->with(['url' => $verificationUrl]);
    }
}
