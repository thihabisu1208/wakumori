<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:teacher');
    }

    public function index()
    {
        // $role = Auth::user()->roles->first()->name;
        $teacher = Auth::user();
        // $students = User::all();
        $roleName = 'student';
        $students = User::whereHas('roles', function ($q) use ($roleName) {
            $q->where('name', $roleName);
        })->get();
        
        return view('superadmin.dashboard', compact(['teacher', 'students']));
    }

    public function game()
    {
        return view('superadmin.game');
    }

    public function tutorial()
    {
        return view('superadmin.tutorial');
    }
}
