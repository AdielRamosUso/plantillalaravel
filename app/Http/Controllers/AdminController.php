<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view('/login');
    }

    public function index(){
        return view('/index');
    }

    public function register(){
        return view('/register');
    }

    public function formulario(){
        return view('/formulario');
    }
}
