<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function game()
    {
        return view('admin.game');
    }

    public function usagi()
    {
        return view('admin.usagi');
    }
}
