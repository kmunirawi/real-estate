<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {

        $randomProperties = Property::inRandomOrder()->limit(3)->get();
        $randomProperties = Property::inRandomOrder()->limit(3)->get();
        // dd($randomProperties);
        $latestProperties = Property::orderBy('id', 'desc')->limit(5)->get();
        return view('site.index', compact('latestProperties', 'randomProperties'));
    }
    
    public function showAllProperties()
    {
        $properties = Property::paginate(9);
        return view('site.property', compact('properties'));
    }
}
