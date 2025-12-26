<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    private $myvalue;
    private $myvalue2;
    private $myval = "";

    public function index()
    {
        return view('html101');
    }

    // รับค่าจากฟอร์ม แล้วส่งไปแสดงผลหน้าใหม่
    public function store(Request $request)
    {
        $data = $request->all();

        return view('myview.html_view', compact('data'));
    }

    function info(Request $req){
        echo $req->input('mynumber');
        return view('myview.info');
    }

    function calculate(Request $req){
        echo $req->input('mynumber');
        $data['num'] = $req->input('mynumber');
        return view('myview.calculate', $data);
    }

}

