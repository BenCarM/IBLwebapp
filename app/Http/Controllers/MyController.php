<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function showBody()
    {
        // Pass data to the view
        $data = [
            'title' => 'Welcome to AmazingSkin',
            'description' => 'We are committed to helping you achieve the best skin possible.'
        ];

        // Return the view with the data
        return view('body', $data);
    }
}
