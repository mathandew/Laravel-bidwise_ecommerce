<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductKeyword;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\User;

use Auth;
class SellerController extends Controller
{
    public function index()
    {
        $category = Category::get();
        $auction_products = Product::where('type', 1)->with(['images', 'keywords'])->get();

        $products = Product::where('user_id', auth()->user()->id)->get();

        $product_count = $products->count();
        return view('frontend.sell.add-product', compact('category', 'product_count', 'auction_products'));
    }


    public function sell_product(Request $request)
    {

        $request->validate([
            'type' => 'required|in:0,1',
        ]);

        $product = new Product();
        $product->user_id = auth()->user()->id;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->condition = $request->condition;
        $product->cat_id = $request->cat_id;
        $product->price = $request->price;
        $product->type = $request->type;
        $product->city = $request->city;
        $product->area = $request->area;
        $product->save();
        // dd(request()->$transaction);

        $pro_id = $product->id;

        if ($request->hasfile('pro_image')) {
            foreach ($request->file('pro_image') as $image) {
                $uploadFolder = "Product/image";
                $imgUploadedPath = $image->store($uploadFolder, "public");

                $pro_image = new ProductImage();
                $pro_image->product_id = $pro_id;
                $pro_image->product_image = $imgUploadedPath;
                $pro_image->save();
            }
        }

        // Save product keywords
        if ($request->keywords) {
        $keywords = explode(',', $request->keywords);
        foreach ($keywords as $keyword) {
            $keywordModel = new ProductKeyword();
            $keywordModel->product_id = $pro_id;
            $keywordModel->keywords = $keyword;
            $keywordModel->save();
        }
     }
        return redirect('/seller');
    }

    public function become_seller()
    {
        $UserInfo = Auth::User();
        if(isset($UserInfo) && $UserInfo->seller_status == 1)
        {
            $userId = $UserInfo->id;
            User::where('id', $userId)->update([
                'login_type' => 1,
                'buyer_status' => 0,
             ]);
             return redirect('/seller');

            // $category = Category::get();
            // return view('frontend.sell.become-seller', compact('category'));
        }
        else
        {
            $category = Category::get();
            $auction_products = Product::where('type', 1)->with(['images', 'keywords'])->get();

            return view('frontend.sell.become-seller', compact('category', 'auction_products'));
        }
        
    }



    // Show edit form
public function editProduct($id)
{
    $product = Product::findOrFail($id);
    return view('seller.products.edit', compact('product'));
}

// Handle product update
public function updateProduct(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'status' => 'required|boolean',
    ]);

    $product->update([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'status' => $request->status,
    ]);

    return redirect()->route('seller.products')->with('success', 'Product updated successfully');
}

public function deleteProduct($id)
{
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect()->route('seller.products')->with('success', 'Product deleted successfully');
}

public function edit_profile(){

    $user = Auth::User();
    $auction_products = Product::where('type', 1)->with(['images', 'keywords'])->get();

    return view('frontend.seller.update-seller-profile', compact('user', 'auction_products'));
}

public function updateProfile(Request $request)
{
    $user = Auth::user();

    $user->name = $request->name;
    $user->last_name = $request->last_name;
    $user->phone_no = $request->phone_no;
    $user->date_of_birth = $request->date_of_birth;
    $user->contact_number = $request->contact_number;
    $user->cnic = $request->cnic;
    $user->business_username = $request->business_username;

    
    if ($request->hasFile('pro_image')) {
        if ($user->image) {
            Storage::disk('public')->delete($user->image);
        }

        $path = $request->file('pro_image')->store('profile_images', 'public');
        $user->image = $path; 
    }

    if ($user->save()) {
        $updatedUser = $user->fresh();
    }

    if(Auth::check() && Auth::user()->login_type == '1'){
        return redirect('/seller');
    }else{
        return redirect('/buyer');
    }

}




}
