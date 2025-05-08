<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function fastBuildings()
    {
        return view('services.fast-buildings');
    }


    public function customProduction()
    {
        return view('services.custom-production');
    }


    public function design()
    {
        return view('services.design');
    }


    public function repair()
    {
        return view('services.repair');
    }
}
