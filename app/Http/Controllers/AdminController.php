<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\GameUsagi;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:student');
    }

    public function index()
    {
        return view('admin.home');
    }

    public function usagi()
    {
        // $md = new usagigame();
        // // データ取得
        // $data = $md->getData();
        $usagi = GameUsagi::all();
        return view('admin.usagi', ['usagi' => $usagi]);

    }

    public function kuma()
    {
        return view('admin.kuma');
    }

    public function risu()
    {
        return view('admin.risu');
    }
}
