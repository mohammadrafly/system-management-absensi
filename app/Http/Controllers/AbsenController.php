<?php

namespace App\Http\Controllers;

use App\Models\Absen;

class AbsenController extends Controller
{
    public function index()
    {
        $title = 'Data Absen';
        $data = Absen::all();
        
        return view('page.absen', compact('title', 'data'));
    }
}
