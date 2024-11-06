<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Notice;
use App\Models\Partner;
use App\Models\Section;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function welcome(): \Inertia\Response
    {
        $partners = Partner::all();
        $sections = Section::whereIn('identifier', values: ['HERO', 'MISSIONS', 'HISTORY', 'OFFER', 'TESTIMONY', 'PARTNERS'])->with('items')->get();

        return Inertia::render('Guest/Welcome', compact('partners', 'sections'));
    }

    public function cta()
    {
        $cta = Section::whereIn('identifier', ['CTA'])->first();

        return $cta;
    }

    public function notices()
    {
        $notices = Notice::where('display', true)->get();

        return $notices;
    }
}

