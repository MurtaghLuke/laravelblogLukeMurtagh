<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attraction;

class AttractionController extends Controller
{
    public function index()
    {
        $attractions = Attraction::all();
        return view('attractions.index', compact('attractions'));
    }
}
