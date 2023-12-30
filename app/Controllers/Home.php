<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function lamun()
    {
        return view('lamun');
    }

    public function rumputlaut()
    {
        return view('rumputlaut');
    }

    public function mangrove()
    {
        return view('mangrove');
    }

    public function karang()
    {
        return view('karang');
    }

    public function Sargassum()
    {
        return view('Sargassum');
    }

    public function kelp()
    {
        return view('kelp');
    }

    public function anemon()
    {
        return view('anemon');
    }

    public function bambulaut()
    {
        return view('bambulaut');
    }

    public function toxicplants()
    {
        return view('toxicplants');
    }
}
