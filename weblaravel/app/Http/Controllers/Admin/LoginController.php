<?php
// php artisan make:controller [目录名/]名称Controller 回车
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login() {
        return '后台登录';
    }

    // 用户
    public function user(int $id) {
        dump($id);
    }
}
