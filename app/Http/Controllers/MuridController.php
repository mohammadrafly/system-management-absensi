<?php

namespace App\Http\Controllers;

use App\Models\Murid;

class MuridController extends Controller
{
    public function index()
    {
        $title = 'Data Murid';
        $data = Murid::orderBy('created_at', 'DESC')->get();

        return view('page.murid', compact('title', 'data'));
    }
}
