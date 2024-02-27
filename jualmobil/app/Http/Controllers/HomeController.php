<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Fathur',
            'pekerjaan' => 'Developer'
        ];

        return view('home')->width($data);
    }
    public function contact()
    {
        return view('contact');
    }
}
