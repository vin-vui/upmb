<?php

namespace App\Http\Controllers;

use App\Models\Link;

use Inertia\Inertia;
use App\Models\Notice;
use App\Models\Partner;
use App\Models\Section;
use App\Models\Question;
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

    public function offer(): \Inertia\Response
    {
        $sections = Section::whereIn('identifier', values: ['OFFERS', 'OFFER_PB', 'OFFER_GP', 'OFFER_GPP'])->with('items')->get();

        return Inertia::render('Guest/Offer', compact('sections'));
    }

    public function faq(): \Inertia\Response
    {
        $questions = Question::orderBy('order')->get();

        return Inertia::render('Guest/Faq', compact('questions'));
    }

    public function contact(): \Inertia\Response
    {
        $informations = Information::all();
        $cta = $this->cta();

        return Inertia::render('Guest/Contact', compact('informations', 'cta'));
    }

    public function cta()
    {
        $cta = Section::where('identifier', 'CTA')->first();

        return $cta;
    }

    public function notices()
    {
        $notices = Notice::where('display', true)->get();

        return $notices;
    }

    public function links()
    {
        $links = Link::orderBy('order')->get();

        return $links;
    }
}

