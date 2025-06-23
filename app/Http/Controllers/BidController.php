<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Product;
use Illuminate\Http\Request;

class BidController extends Controller
{
    public function store(Request $request, $productId)
{
    $request->validate([
        'bid_amount' => 'required|numeric|min:1',
        'quantity' => 'required|integer|min:1',
    ]);

    $product = Product::findOrFail($productId);

    if ($product->type !== 1) {
        return back()->with('error', 'This product is not available for auction.');
    }

    $existingBid = Bid::where('product_id', $productId)
                      ->where('user_id', auth()->id())
                      ->first();

    if ($existingBid) {
        
        $existingBid->update([
            'bid_amount' => $request->bid_amount,
            'quantity' => $request->quantity,
        ]);

        return back()->with('success', 'Your bid has been updated successfully!');
    } else {
        
        $bid = Bid::create([
            'product_id' => $productId,
            'user_id' => auth()->id(),
            'bid_amount' => $request->bid_amount,
            'quantity' => $request->quantity,
        ]);

        return redirect('/buyer');
    }
}

    public function index($productId)
    {
        $bids = Bid::where('product_id', $productId)->with('user')->latest()->get();
        return view('bids.index', compact('bids'));
    }

    public function acceptBid($bidId)
{
    $bid = Bid::findOrFail($bidId);
    $bid->status = 'accepted';
    $bid->save();

    return redirect()->back()->with('success', 'Bid accepted successfully.');
}

public function rejectBid($bidId)
{
    $bid = Bid::findOrFail($bidId);
    $bid->delete();

    return redirect()->back()->with('success', 'Bid rejected successfully.');
}
}

