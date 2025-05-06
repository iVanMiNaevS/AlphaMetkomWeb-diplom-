<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about', [
            'title' => 'О компании'
        ]);
    }

    public function contact()
    {
        return view('pages.contact', [
            'title' => 'Контакты',
            'email' => 'contact@example.com'
        ]);
    }
}
