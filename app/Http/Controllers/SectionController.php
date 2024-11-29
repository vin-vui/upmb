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
     * Display the welcome page
     *
     * @return \Inertia\Response
     */
    public function welcome()
    {
        $sections = Section::whereIn('identifier', values: ['HERO', 'WHO', 'HISTORY', 'OFFER', 'TESTIMONY', 'PARTNERS'])->with('items')->orderBy('id')->get();
        $title = 'Accueil';

        return Inertia::render('Admin/Section', compact('sections', 'title'));
    }

    /**
     * Display the missions page
     *
     * @return \Inertia\Response
     */
    public function missions()
    {
        $sections = Section::whereIn('identifier', values: ['MISSIONS'])->with('items')->orderBy('id')->get();
        $title = 'Nos missions';

        return Inertia::render('Admin/Section', compact('sections', 'title'));
    }

    /**
     * Display the offer page
     *
     * @return \Inertia\Response
     */
    public function offer()
    {
        $sections = Section::whereIn('identifier', values: ['OFFERS', 'OFFER_PB', 'OFFER_GP', 'OFFER_GPP', 'OFFER_CP', 'OFFER_HJMB'])->with('items')->orderBy('id')->get();
        $title = 'Notre Offre de Soin';

        return Inertia::render('Admin/Section', compact('sections', 'title'));
    }

    /**
     * Display the team page
     *
     * @return \Inertia\Response
     */
    public function team(): \Inertia\Response
    {
        $sections = Section::whereIn('identifier', values: ['MEMBERS'])->with('items')->orderBy('id')->get();
        $title = 'Notre équipe';

        return Inertia::render('Admin/Section', compact('sections', 'title'));
    }

    /**
     * Display the FAQ page
     *
     * @return \Inertia\Response
     */
    public function questions(): \Inertia\Response
    {
        $sections = Section::whereIn('identifier', values: ['QUESTIONS', 'VIDEOS'])->with('items')->orderBy('id')->get();
        $title = 'FAQ';

        return Inertia::render('Admin/Section', compact('sections', 'title'));
    }

    /**
     * Display the contact page
     *
     * @return \Inertia\Response
     */
    public function contact(): \Inertia\Response
    {
        $sections = Section::whereIn('identifier', values: ['CTA'])->with('items')->orderBy('id')->get();
        $title = 'Nous contacter';

        return Inertia::render('Admin/Section', compact('sections', 'title'));
    }

    /**
     * Update a section
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Section $section
     * @return void
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

    /**
     * Update an item
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Item $item
     * @return void
     */
    public function updateItem(Request $request, Item $item)
    {
        $validatedData = $request->validate([
            'content' => 'required|string|max:255',
        ]);

        $item->update($validatedData);
    }

    /**
     * Create a new item
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function newItem(Request $request)
    {
        $validatedData = $request->validate([
            'section_identifier' => 'required|string',
            'content' => 'required|string|max:255',
        ]);

        Item::create($validatedData);
    }

    /**
     * Delete an item
     *
     * @param \App\Models\Item $item
     * @return void
     */
    public function deleteItem(Item $item)
    {
        $item->delete();
    }
}
