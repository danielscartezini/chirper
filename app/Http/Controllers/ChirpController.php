<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
    {
        $chirps = [
            [
                'author' => 'Daniel Scartezini',
                'message' => 'First Chirp of many! 🚀',
                'time' => '5 minutes ago'
            ],
            [
                'author' => 'John Smith',
                'message' => 'Hello chirp!',
                'time' => '1 hour ago'
            ],
            [
                'author' => 'Alice Johnson',
                'message' => 'Cool site! Loving the chirps! 🐦',
                'time' => '3 hours ago'
            ]
        ];

        return view('home', ['chirps' => $chirps]);
    }
}