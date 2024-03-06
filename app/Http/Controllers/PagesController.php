<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider; // Import the Slider model

class PagesController extends Controller
{
    public function index()
    {
        $sliders = Slider::all(); // Assuming Slider is your model and you want to retrieve all sliders
    
        // Pass the $sliders variable to the view
        return view('index', ['sliders' => $sliders]);
       
    }

    public function aboutUs()
    {
        // Retrieve sliders data from the database or any other source
        $sliders = Slider::all(); // Assuming Slider is your model and you want to retrieve all sliders
    
        // Pass the $sliders variable to the view
        return view('aboutUs', ['sliders' => $sliders]);
    }
    
}
