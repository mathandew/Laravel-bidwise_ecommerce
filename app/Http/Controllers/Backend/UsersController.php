<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index(){
        $data = User::get();
        return view('backend.Users.user',compact('data'));
    }

    public function block_customer($id)
    {
        $customer = User::find($id);
        $customer->status = 'blocked';
        $customer->save();

        return redirect()->back()->with('status', 'User blocked successfully');
    }

    public function unblock_customer($id)
    {
        $customer = User::find($id);
        $customer->status = 'active';
        $customer->save();

        return redirect()->back()->with('status', 'User unblocked successfully');
    }

}
