<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::all();

        return Inertia::render('Admin/Partners', compact('partners'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'label' => 'required|string|max:255',
        ];

        if ($request->hasFile('url')) {
            $rules['url'] = ['image', 'mimes:jpeg,jpg,png,gif,svg', 'max:2048'];
        }

        $validated = $request->validate($rules);

        if ($request->hasFile('url')) {
            $path = Storage::disk('public')->put('partners', $request->file('url'));
            $validated['url'] = '/storage/'.$path;
        }

        Partner::updateOrCreate(['id' => $request->id], $validated);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();
        return redirect()->back();
    }
}
