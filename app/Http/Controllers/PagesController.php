<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    return view('blog');
    }
    public function login(){
    return view('login');
    }
    public function register(){
    return view('register');
    }
    public function about(){
    return view('blog-pos');
    }
    public function changes(){
        $status=1;
        $title='Trường cao đẳng công nghệ bách khoa';
         return view('blog',compact('status','title'));
    }
    public function search(){
        return view('xtruong');
        }
}
