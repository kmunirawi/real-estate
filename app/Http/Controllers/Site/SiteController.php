<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {
        // $randomProperties = Property::inRandomOrder()->limit(3)->get();
        // dd($randomProperties);
        // $latestProperties = Property::orderBy('id', 'desc')->limit(5)->get();
        return view('site.index');
    }
    
    public function showAllProperties()
    {
        // $latestProperties = Property::orderBy('id', 'desc')->limit(5)->get();
        // $randomProperties = Property::inRandomOrder()->limit(3)->get();
        $properties = Property::paginate(9);
        return view('site.property', compact('properties'));
    }
}
