<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Inertia\Inertia;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function welcome()
    {
        $partners = Partner::all();

        return Inertia::render('Guest/Welcome', compact('partners'));
    }
}

