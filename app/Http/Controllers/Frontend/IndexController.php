<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Rating;
use App\Models\Bid;
use Illuminate\Http\Request;
use Auth;
class IndexController extends Controller
{
    public function index()
    {

        $category = Category::get();

        $seller = User::where('seller_status', 1)->get();
        $auction_products = Product::where('type', 1)->with(['images', 'keywords'])->get();
        // dd($auction_products);

        return view('frontend.index', compact('category', 'seller', 'auction_products'));
    }

    public function buyerindex()
    {
        $user = Auth::user();
        $auction_products = Product::where('type', 1)->with(['images', 'keywords'])->get();
        $products = Product::where('user_id', auth()->user()->id)->get();

        $bids = Bid::with('product')->where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view('frontend.buyer.buyer-profile', compact('user', 'bids', 'auction_products', 'products'));

    }

    public function sellerindex()
    {
        $loginType = Auth::user()->login_type;
        $sellerStatus = Auth::user()->seller_status;

        if ($sellerStatus == '1') {
            $user = Auth::user();
            $category = Category::get();
            $products = Product::where('user_id', auth()->user()->id)->get();

            $product_count = $products->count();
            $auction_products = Product::where('type', 1)->with(['images', 'keywords'])->get();

            $products = Product::where('user_id', operator: auth()->user()->id)->with(['images', 'keywords'])->get();
            $bidding_products = auth()->user()->products()->whereHas('bids', function ($query) {
                $query->where('status', 'pending');
            })->with(['bids.user'])->get();
            $ratings = Rating::with('buyer')->where('seller_id', $user->id)->get(); // Fetch ratings with buyer info

            $rating_count = $ratings->count();

            return view('frontend.sell.seller-profile', compact('category', 'user', 'products', 'bidding_products', 'auction_products', 'product_count', 'ratings', 'rating_count'));

        } else {
            $category = Category::get();
            return view('frontend.sell.become-seller', compact('category'));

        }
    }

    public function seller_profile($business_username)
    {
        if (auth()->check()) {
            $user = User::where('business_username', $business_username)->first();

            if ($user) {
                $products = Product::where('user_id', $user->id)->get();
                $auction_products = Product::where('type', 1)->with(['images', 'keywords'])->get();
                $rating = Rating::where('buyer_id', auth()->user()->id)->where('seller_id', $user->id)->first();
                $ratings = Rating::with('buyer')->where('seller_id', $user->id)->get(); // Fetch ratings with buyer info
                $rating_count = $ratings->count();

                return view('frontend.sell.seller-profile', compact('user', 'rating', 'auction_products', 'products', 'ratings', 'rating_count'));
            } else {
                return redirect()->back()->with('error', 'User not found.');
            }
        }
        return view('frontend.auth.login');
    }


}
