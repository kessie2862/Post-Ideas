<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store()
    {
        // Validate the request
        $idea = Idea::create([
            'content' => request()->get('idea', '')
        ]);

        // Redirect to the dashboard
        return redirect()->route('dashboard')->with('success', 'Idea created successfully!');
    }
}
