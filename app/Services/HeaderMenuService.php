<?php

namespace App\Services;

use App\Models\Service;

class HeaderMenuService
{
    public function getServices()
    {
        return Service::orderBy('title')->get();
    }
}
