<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function controllerMethod()
    {
        return view('test');
        // return response()->json([
        //     'msg' => 'return only json'
        // ]);
    }
}
