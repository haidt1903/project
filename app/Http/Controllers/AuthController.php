<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getLogin() {
        return view('client.login');
    }
    public function postLogin(Request $request) {
        $data = $request->only('username','password');
        if (Auth::attempt($data)) {
            return redirect()->route('index');
        }else{
            return redirect()->back()->with('message','Username hoặc mật khẩu không đúng');
        }
    }
    public function getRegister() {
        return view('client.signup');
    }
    public function uploadFile(Request $request,$filename) {
        if ($request->hasFile($filename)) {
            return $request->file($filename)->store('images');
        }
        return null;
    }
    public function postRegister(Request $request)  {
        $data = $request->validate([
        'fullname'=> ['required'],
        'username'=> ['required'],
        'image' =>['nullable','image'],
        'email'=> ['required','email','unique:users'],
        'password'=> ['required','min:5'],
        'confirm_password'=> ['required','same:password']
        ]);
        $data['image']= $this->uploadFile($request,'image');
        User::query()->create($data);
        return redirect()->route('login')->with('message','Đăng ký thành công');
    }
}
