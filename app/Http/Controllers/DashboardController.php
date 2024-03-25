<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $users = [
            [
                'name' => 'Prosper',
                'age' => 29
            ],
            [
                'name' => 'James',
                'age' => 30
            ],
            [
                'name' => 'John',
                'age' => 17
            ]
        ];

        return view(
            'dashboard',
            [
                'users' => $users
            ]
        );
    }
}
