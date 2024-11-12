<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $links = Link::orderBy('order')->get(); 

        return Inertia::render('Admin/Links/Index', compact('links'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'label' => 'required',
            'url' => 'required',
        ]);

        Link::create($validated);

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Link $link)
    {
        $validated = $request->validate([
            'label' => 'required',
            'url' => 'required',
        ]);

        $link->update($validated);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        $link->delete();

        return redirect()->back();
    }

    /**
     * Reorder the links
     *
     * @param Request $request
     * @return void
     */
    public function reorder(Request $request)
    {
        $orderedIds = $request->input('orderedIds');

        foreach ($orderedIds as $item) {
            Link::where('id', $item['id'])->update(['order' => $item['order']]);
        }
    }
}
