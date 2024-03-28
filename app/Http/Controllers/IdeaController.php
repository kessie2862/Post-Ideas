<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store()
    {
        // Validate the request
        request()->validate([
            'idea' => 'required|min:5|max:255'

        ]);

        // Validate the request
        $idea = Idea::create([
            'content' => request()->get('idea', '')
        ]);

        // Redirect to the dashboard
        return redirect()->route('dashboard')->with('success', 'Idea created successfully!');
    }

    public function show($id)
    {
        // Find the idea by its ID
        $idea = Idea::where('id', $id)->firstOrFail();

        // Return the idea to the view
        return view('ideas.show', [
            'idea' => $idea
        ]);
    }

    public function destroy($id)
    {
        // Find the idea by its ID
        $idea = Idea::where('id', $id)->firstOrFail();

        // Delete the idea
        $idea->delete();

        // Redirect to the dashboard
        return redirect()->route('dashboard')->with('success', 'Idea deleted successfully!');
    }
}
