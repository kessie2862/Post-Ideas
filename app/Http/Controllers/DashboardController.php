<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $idea = new Idea([
            'content' => 'My name is Lionel Richie.',
        ]);
        $idea->save();

        return view('dashboard', [
            'ideas' => Idea::orderBy('created_at', 'DESC')->get()
        ]);
    }
}
