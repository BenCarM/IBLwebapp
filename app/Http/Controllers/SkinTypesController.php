<?php

namespace App\Http\Controllers;

use App\Models\SkinType;
use App\Models\SkinTypes;
use Illuminate\Http\Request;

class SkinTypesController extends Controller
{
    public function index()
    {
        // Retrieve all skin types
        return view('index');
    }

    public function create()
    {
        // Show form to create a new skin type
        return view('create');
    }



}
