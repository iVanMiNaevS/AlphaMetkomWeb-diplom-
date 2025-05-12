<?php

namespace App\Http\Controllers\adminControllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminServicesController extends Controller
{
    public function index()
    {
        $services = Service::latest()->paginate(10);
        return view('admin.services.index', compact('services'));
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'slug' => 'required|string|unique:services,slug,' . $service->id,
        ]);

        $service->update($validated);

        return redirect()->route('admin.services.index')
            ->with('success', 'Услуга успешно обновлена');
    }
}
