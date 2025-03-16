<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function stats()
    {
        $users = User::select(['id', 'name', 'phone', 'email'])->get();
        return view('stats', compact('users'));
    }
}
