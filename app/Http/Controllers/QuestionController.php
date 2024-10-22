<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        $questions = Question::orderBy('order')->get();

        return Inertia::render('Admin/Questions/Index', compact('questions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'link' => 'nullable|string',
        ]);

        Question::create($validated);

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param string $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, string $id)
    {
        $question = Question::findOrFail($id);

        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'link' => 'nullable|string',
        ]);

        $question->update($validated);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(string $id)
    {
        Question::destroy($id);

        return redirect()->back();
    }

    /**
     * Reorder the questions
     *
     * @param Request $request
     * @return void
     */
    public function reorder(Request $request)
    {
        $orderedIds = $request->input('orderedIds');

        foreach ($orderedIds as $item) {
            Question::where('id', $item['id'])->update(['order' => $item['order']]);
        }
    }

}
