<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        $services = Service::all();
        return view('about', ['services' => $services]);
    }

    public function contact()
    {
        return view('contact', []);
    }
}
