<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Item;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function welcome()
    {
        $sections = Section::whereIn('identifier', values: ['HERO', 'MISSIONS', 'HISTORY', 'OFFER', 'TESTIMONY', 'PARTNERS'])->with('items')->orderBy('id')->get();

        return Inertia::render('Admin/Guest/Welcome', compact('sections'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Section $section)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string|max:255',
            'paragraph' => 'nullable|string',
            'image' => 'nullable',
        ]);

        if ($request->hasFile('image')) {
            if ($section->image) {
                Storage::disk('public')->delete($section->image);
            }
            $path = $request->file('image')->store('section_images', 'public');
            $section->image = Storage::url($path);
        }

        $section->title = $validatedData['title'] ?? $section->title;
        $section->paragraph = $validatedData['paragraph'] ?? $section->paragraph;

        $section->save();
    }

    public function updateItem(Request $request, Item $item)
    {
        $validatedData = $request->validate([
            'content' => 'required|string|max:255',
        ]);

        $item->update($validatedData);
    }

    public function newItem(Request $request)
    {
        $validatedData = $request->validate([
            'section_identifier' => 'required|string',
            'content' => 'required|string|max:255',
        ]);

        Item::create($validatedData);
    }

    public function deleteItem(Item $item)
    {
        $item->delete();
    }
}
