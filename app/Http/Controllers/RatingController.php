<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\User;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function store(Request $request, $seller_id)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'nullable|string|max:500',
        ]);
    
        $buyer_id = auth()->id(); 
    
        if (Rating::where('buyer_id', $buyer_id)->where('seller_id', $seller_id)->exists()) {
            return back()->with('error', 'You have already rated this seller.');
        }
    
        Rating::create([
            'buyer_id' => $buyer_id,
            'seller_id' => $seller_id,
            'rating' => $request->rating,
            'review' => $request->review, 
        ]);

        // dd($request->all());

    
        $seller = User::findOrFail($seller_id);
        $totalRating = $seller->receivedRatings()->avg('rating');
        $seller->update(['rating' => $totalRating]);


    
        return back()->with('success', 'Rating and review submitted successfully.');
    }
    

}
