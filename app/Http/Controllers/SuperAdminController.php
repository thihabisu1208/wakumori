<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

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
        $roleName = 'teacher';
        $students = User::whereHas('roles', function ($q) use ($roleName) {
            $q->where('name', $roleName);
        })->get();
        
        return view('superadmin.home', compact(['teacher', 'students']));
    }
}
