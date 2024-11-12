<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Inertia\Inertia;
use App\Models\Notice;
use App\Models\Partner;
use App\Models\Section;
use App\Models\Information;

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

    public function faq(): \Inertia\Response
    {
        $questions = Question::orderBy('order')->get();

        return Inertia::render('Guest/Faq', compact('questions'));
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

    public function informations()
    {
        $informations = Information::all();

        return $informations;
    }
}

