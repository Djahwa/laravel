<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('view');
    }

    public function save(Request $req)
    {
        $data = array();
        $data['npm'] = $req->npm;
        $data['nama']  = $req->nama;
        return view('result', ['data' => $data]);
    }
    //
}
