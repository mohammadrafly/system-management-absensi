<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Murid;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        $totalMurid = Murid::count(); 
        $totalUser = User::count();
        return view('page.dashboard', compact('title','totalMurid','totalUser'));
    }
}
