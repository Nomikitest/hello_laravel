<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',[
            'only' => ['create']
        ]);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);
        
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials, $request->has('remember'))){
            if(Auth::user()->activated){
                session()->flash('success','欢迎再次来到xxx世界');
                return redirect()->intended(route('users.show', [Auth::user()]));
            }else{
                Auth::logout();
                session()->flash('warning','您的账户没有激活，请查看邮件。');
                return redirect('/');
            }
        }else{
            session()->flash('danger','很抱歉，您的邮箱和密码不匹配');
            return redirect()->back();
        }
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success','您已成功退出！');
        return redirect('login');
    }
}
