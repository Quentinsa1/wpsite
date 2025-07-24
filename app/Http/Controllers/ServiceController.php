<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
   use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    // Formulaire de création
    public function create()
    {
        return view('admin.services.create');
    }


public function store(Request $request)
{
    $request->validate([
        'titre' => 'required|string|max:255',
        'description' => 'required|string',
        'categorie' => 'nullable|string|max:255',
        'icon' => 'nullable|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ]);

    $service = new Service();
    $service->titre = $request->titre;
    $service->description = $request->description;
    $service->categorie = $request->categorie;

    if ($request->hasFile('icon')) {
        $iconPath = $request->file('icon')->store('services/icons', 'public');
        $service->icon = $iconPath;
    }

    $service->save();

    return redirect()->route('admin.services.index')->with('success', 'Service créé avec succès.');
}
public function index()
{
    $services = Service::all();
    return view('admin.services.index', compact('services'));
}

}