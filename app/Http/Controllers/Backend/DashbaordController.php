<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashbaordController extends Controller
{
    public function index(){
        $alladmins = User::where('role','1')->count();

        return view('backend.index',compact('alladmins'));
    }
}
