<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\Websitemail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function index()
    {
        return view('user.login');
    }
    /*
    public function forget_password()
    {
        return view('user.forget_password');
    }
    
    public function forget_password_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $user_data = User::where('email', $request->email)->first();
        if(!$user_data) {
            return redirect()->back()->with('error','Email address not found!');
        }

        $token = hash('sha256',time());

        $user_data->token = $token;
        $user_data->update();

        $reset_link = url('user/reset-password/'.$token.'/'.$request->email);
        $subject = 'Reset Password';
        $message = 'Please click on the following link: <br>';
        $message .= '<a href="'.$reset_link.'">Click here</a>';

        Mail::to($request->email)->send(new Websitemail($subject, $message));

        return redirect()->route('user_login')->with('success','Please check your email and follow the step there!');
    }
    */
    public function login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::guard('user')->attempt($credential)) {
            return redirect()->route('user_home');
        } else {
            return redirect()->route('user_login')->with('error', 'Information is not correct!');
        }
    }

    public function logout()
    {
        Auth::guard('user')->logout();
        return redirect()->route('user_login');
    }
    
    /*
    public function reset_password($token,$email)
    {
        $user_data = User::where('token', $token)->where('email',$email)->first();
        if(!$user_data){
            return redirect()->route('user_login');
        };

        return view('user.reset_password', compact('token','email'));
    }

    public function reset_password_submit(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);

        $user_data = User::where('token',$request->token)->where('email',$request->email)->first();
        $user_data->password = Hash::make($request->password);
        $user_data->token = '';
        $user_data->update();

        return redirect()->route('user_login')->with('success', 'Password is reset successfully');
    }
    */
}
