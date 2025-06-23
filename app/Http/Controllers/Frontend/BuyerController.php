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
class BuyerController extends Controller
{
    public function index()
    {
        $category = Category::get();
        return view('frontend.sell.add-product', compact('category'));
    }


    // public function sell_product(Request $request)
    // {


    //     $product = new Product();
    //     $product->user_id = auth()->user()->id;
    //     $product->title = $request->title;
    //     $product->description = $request->description;
    //     $product->condition = $request->condition;
    //     $product->cat_id = $request->cat_id;
    //     $product->price = $request->price;
    //     $product->type = $request->type;
    //     $product->city = $request->city;
    //     $product->area = $request->area;
    //     $product->save();
    //     // dd(request()->$transaction);

    //     $pro_id = $product->id;

    //     if ($request->hasfile('pro_image')) {
    //         foreach ($request->file('pro_image') as $image) {
    //             $uploadFolder = "Product/image";
    //             $imgUploadedPath = $image->store($uploadFolder, "public");

    //             $pro_image = new ProductImage();
    //             $pro_image->product_id = $pro_id;
    //             $pro_image->product_image = $imgUploadedPath;
    //             $pro_image->save();
    //         }
    //     }

    //     // Save product keywords
    //     if ($request->keywords) {
    //     $keywords = explode(',', $request->keywords);
    //     foreach ($keywords as $keyword) {
    //         $keywordModel = new ProductKeyword();
    //         $keywordModel->product_id = $pro_id;
    //         $keywordModel->keywords = $keyword;
    //         $keywordModel->save();
    //     }
    //  }
    //     return redirect()->back()->with('status', 'Your Ad Auction is Live Now');
    // }

    public function become_buyer()
    {
        $UserInfo = Auth::User();
        $userId = $UserInfo->id;
        if($UserInfo->buyer_status == 1)
        {
            User::where('id', $userId)->update([
                'login_type' => 0,
                'seller_status' => 0,
             ]);
             return redirect('/buyer');
        }
        else
        {
            $category = Category::get();
            return view('frontend.buyer.become-buyer', compact('category'));
        }
    }
}
