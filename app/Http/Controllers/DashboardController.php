<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Illuminate\Http\Request;
use App\Models\Murid;
use App\Models\User;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $today = Carbon::today()->toDateString();
        $title = 'Dashboard';
        $totalMurid = Murid::count(); 
        $totalUser = User::count();
        $userWithoutAbsen = Murid::whereNotExists(function ($query) use ($today) {
            $query->selectRaw(1)
                  ->from('absen')
                  ->whereColumn('absen.uid', 'murid.uid')
                  ->whereDate('absen.created_at', $today);
        })
        ->count();
        $userWithAbsen = Absen::whereRaw('DATE(created_at) = ?', [$today])->distinct('uid')->count('uid');
        return view('page.dashboard', compact('title','totalMurid','totalUser','userWithAbsen', 'userWithoutAbsen'));
    }
}
