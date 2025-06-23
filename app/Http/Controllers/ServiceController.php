<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Frontend - Liste des services
    public function index()
    {
        $services = Service::where('is_active', true)->get();
        return view('website.services.index', compact('services'));
    }

    // Admin - Liste des services
    public function adminIndex()
    {
        $services = Service::latest()->paginate(10);
        return view('admin.services.index', compact('services'));
    }

    // Formulaire de création
    public function create()
    {
        return view('admin.services.create');
    }

    // Enregistrement d'un nouveau service
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'icone' => 'nullable|string|max:50',
            'is_active' => 'boolean'
        ]);

        Service::create($validated);

        return redirect()->route('admin.services.index')
                         ->with('success', 'Service créé avec succès');
    }

    // Formulaire d'édition
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    // Mise à jour d'un service
    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'icone' => 'nullable|string|max:50',
            'is_active' => 'boolean'
        ]);

        $service->update($validated);

        return redirect()->route('admin.services.index')
                         ->with('success', 'Service mis à jour avec succès');
    }

    // Suppression d'un service
    public function destroy(Service $service)
    {
        $service->delete();
        return back()->with('success', 'Service supprimé avec succès');
    }
}