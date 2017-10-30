<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Auth\User;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function show()
    {
        return view("mainpage");
    }

    public function create()
    {
        return view("register");
    }

    public function postLogin()
    {
        if(Auth::attempt(['email' => '$email','password' => '$password'])){
            return '{{ route("register") }}';
        }
        else{
            return '{{ route("register") }}';
        }
    }
}
