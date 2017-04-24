<?php
/**
 * Created by PhpStorm.
 * User: 37
 * Date: 2017/4/24
 * Time: 15:53
 */

namespace App\Http\Controllers;


use App\Models\Users;

class IndexController extends Controller
{
    public function db()
    {
        // ORM查询数据
//        $res = Users::select('*')->limit(1)->get();
        dd('ORM查询数据');
    }

    public function debugbar()
    {
        return view('welcome');
    }
}