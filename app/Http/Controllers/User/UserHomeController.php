<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Talent;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    public function index()
    {
        // if($request->keyword){
        //     $user = User::search($request->keyword)->get(); 
        // }
        // else{
        //     $user = User::all();
        // }
        return view('user.home');
 
    }
    public function show()
        {
            $talents = Talent::all();
            return view('user.home', compact('talents'));
        }
}
