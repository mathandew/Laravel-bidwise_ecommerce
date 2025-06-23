<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryFController extends Controller
{
    public function index(){
        $data = Category::get();
        return view('frontend.category.category', compact('data'));
    }
}
