<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokohController extends Controller
{
    public function home() 
    {
        return view ('index');
    }
        public function Sayuran() 
{
    return view('Sayuran', ['nama' => 'Tokoh Sayur Online']);
}
}
