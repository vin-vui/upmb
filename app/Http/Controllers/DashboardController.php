<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Information;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $informations = Information::all();

        return Inertia::render('Admin/Dashboard', compact('informations'));
    }

    public function updateInformation(Request $request, Information $information)
    {
        $validated = $request->validate([
            'label' => 'nullable|string|max:255',
        ]);

        $information->update($validated);

    }

}
