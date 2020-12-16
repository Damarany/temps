<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\My_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class MainController extends Controller
{
    public function MyHome()
    {
        return view('main.auth.my-home');
    }

    public function register()
    {
        return view('main.auth.register');
    }

    public function insert(Request $request)
    {
        //validation array
        $rules = ['first_name' => 'required|max:100|string',
            'second_name' => 'required|max:100|string',
            'email' => 'required| string| email| max:255| unique:my_user,email',
            'password' => 'required | string |min:2 |confirmed',
            'area_code' => 'required|max:100|string',
            'mobile' => 'required|max:100|string',
            'gender' => 'required|max:50|string'
        ];
        $messages = [
            'first_name.required' => 'First name is required',
            'second_name.required' => 'Last name is required',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
            'area_code.required' => 'Area Code  is required',
            'mobile.required' => 'Mobile is required',
            'gender.required' => 'Gender is required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        My_user::create([
            'first_name' => $request->first_name,
            'second_name' => $request->second_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'area_code' => $request->area_code,
            'mobile' => $request->mobile,
            'gender' => $request->gender,
        ]);
        return redirect()->back()->with(['success' => ('User Created Successfully')]);
    }

    //Login system
    public function login()
    {
        return view('main.auth.login');
    }

    public function CheckLogin(LoginRequest $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;
        if (Auth::guard('my-user')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('main/my-home');
        }
        return redirect()->back()->with(['error'=>'wrong user or password']);

    }
    public function logout(Request $request) {
        auth('my-user')->logout();
        return redirect()->intended('/main/login');
    }
}
