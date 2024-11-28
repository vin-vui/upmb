<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
       /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();

        return Inertia::render('Admin/Members', compact('members'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'function' => 'required|string|max:255',
            'description' => 'nullable',
        ];

        if ($request->hasFile('image')) {
            $rules['image'] = ['image', 'mimes:jpeg,jpg,png,gif,svg,webp', 'max:2048'];
        }

        $validated = $request->validate($rules);

        if ($request->hasFile('image')) {
            $path = Storage::disk('public')->put('members', $request->file('image'));
            $validated['image'] = '/storage/'.$path;
        }

        Member::updateOrCreate(['id' => $request->id], $validated);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->back();
    }
}
