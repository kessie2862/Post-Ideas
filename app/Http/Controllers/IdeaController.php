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
            'content' => 'required|min:5|max:255'

        ]);

        // Validate the request
        $idea = Idea::create([
            'content' => request()->get('content', '')
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

    public function edit(Idea $idea)
    {
        $editing = true;

        // Return the idea to the view
        return view('ideas.show', compact('idea', 'editing'));
    }

    public function update(Idea $idea)
    {
        request()->validate([
            'content' => 'required|min:5|max:255'
        ]);

        $idea->content = request()->get('content', '');
        $idea->save();

        // Return the idea to the view
        return redirect()->route('ideas.show', $idea->id)->with('success', 'Idea updated successfully!');
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
