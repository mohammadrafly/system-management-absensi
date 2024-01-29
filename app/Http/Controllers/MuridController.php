<?php

namespace App\Http\Controllers;

use App\Models\Murid;

class MuridController extends Controller
{
    public function index()
    {
        $title = 'Data Murid';
        $data = Murid::all();

        return view('page.murid', compact('title', 'data'));
    }
}
