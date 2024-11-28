<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InformationController extends Controller
{
    public function informations()
    {
        $informations = Information::all();

        return Inertia::render('Admin/Dashboard', compact('informations'));
    }

    public function updateInformation(Request $request, Information $information)
    {
        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'file|mimes:pdf|max:2048',
            ]);
            $path = $request->file('file')->storeAs('plaquette_pdfs', 'plaquette.pdf', 'public');
            $information->label = Storage::url($path);
            $information->save();
        } else {
            $validated = $request->validate([
                'label' => 'nullable|string|max:255',
            ]);
            $information->update($validated);
        }
    }
}
