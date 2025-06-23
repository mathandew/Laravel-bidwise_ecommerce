<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductKeyword;
use App\Models\Category;
use App\Models\User;
use App\Models\Bid;

use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function showProducts()
    {
        $products = Product::all(); // Fetch all products
        $auction_products = Product::where('type', 1)->with(['images', 'keywords'])->get();

        return view('frontend.product.product', compact('products', 'auction_products')); // Make sure the view path is correct
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('frontend.products.details', compact('product'));
    }

    public function product_detail($id)
    {
        $product = Product::with(['images', 'keywords'])->findOrFail($id);
        $auction_products = Product::where('type', 1)->with(['images', 'keywords'])->get();
        $user = User::where('id', $product->user_id)->first();
        $bids = Bid::where('product_id', $id)->with('user')->orderBy('bid_amount', 'desc')->get();
        $highest_bid = Bid::where('product_id', $id)->max('bid_amount');
        $latest_bid = Bid::where('product_id', $id)->with('user')->latest()->first();
        
        $user_bid = null;
        
        if (auth()->check()) {
            $user_bid = Bid::where('product_id', $id)->where('user_id', auth()->id())->first();
        }
        // dd( $user_bid);

        return view('frontend.product.product-details', compact('auction_products', 'product', 'user', 'bids', 'highest_bid', 'user_bid', 'latest_bid'));
    }
    public function add_products()
    {
        $category = Category::all();
        $products = Product::where('user_id', auth()->user()->id)->get();

        $product_count = $products->count();
        return view('frontend.sell.add-product', compact('category', 'product_count'));
    }

    public function edit($id)
    {
        $product = Product::with(['images', 'keywords'])->findOrFail($id);
        $category = Category::all();

        return view('frontend.sell.edit-product', compact('product', 'category'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'type' => 'required|in:0,1',
        ]);

        $product = Product::findOrFail($id);


        $product->title = $request->title;
        $product->description = $request->description;
        $product->condition = $request->condition;
        $product->cat_id = $request->cat_id;
        $product->price = $request->price;
        $product->type = $request->type;
        $product->city = $request->city;
        $product->area = $request->area;
        $product->save();


        if ($request->hasfile('pro_image')) {

            foreach ($product->images as $image) {
                Storage::disk('public')->delete($image->product_image);
                $image->delete();
            }

            foreach ($request->file('pro_image') as $image) {
                $uploadFolder = "Product/image";
                $imgUploadedPath = $image->store($uploadFolder, "public");

                $pro_image = new ProductImage();
                $pro_image->product_id = $product->id;
                $pro_image->product_image = $imgUploadedPath;
                $pro_image->save();
            }
        }


        $product->keywords()->delete();
        if ($request->keywords) {
            $keywords = explode(',', $request->keywords);
            foreach ($keywords as $keyword) {
                $keywordModel = new ProductKeyword();
                $keywordModel->product_id = $product->id;
                $keywordModel->keywords = $keyword;
                $keywordModel->save();
            }
        }

        return redirect('seller')->with('status', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {

        $product->images()->delete();
        $product->keywords()->delete();
        $product->delete();

        return redirect()->back()->with('status', 'Product Deleted successfully!');
    }

    public function activate($id)
    {
        $product = Product::findOrFail($id);
        $product->status = true;
        $product->save();

        return redirect()->back()->with('status', 'Product activated successfully!');
    }

    public function deactivate($id)
    {
        $product = Product::findOrFail($id);
        $product->status = false;
        $product->save();

        return redirect()->back()->with('status', 'Product deactivated successfully!');
    }



}
