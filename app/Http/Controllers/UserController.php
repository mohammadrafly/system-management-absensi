<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $title = 'Data Users';
        $data = User::all();
        
        return view('page.users', compact('title', 'data'));
    }
}
