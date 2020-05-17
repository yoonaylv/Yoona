<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // return view('user.index');
        $age = 30;
        $name = '林允儿';
        $html = '<a href="http://www.baidu.com/">百度一下</a>';
        $data = $data = ['name' => $name, 'age' => $age, 'html' => $html];
        return view('user.index', compact('data'));
        // return view('user.index', compact('name','age'));
    }
}
