<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function show($slug)
    {
        $service = Service::with('defaultImages')->where('slug', $slug)->firstOrFail();

        return view('services.' . $slug, compact('service'));
    }
}
