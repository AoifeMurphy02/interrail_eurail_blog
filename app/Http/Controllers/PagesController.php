<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider; // Import the Slider model
use App\Models\Post; 

class PagesController extends Controller
{
    public function index()
    {
       $recentPosts = Post::latest()->take(2)->get();
    
    return view('index', ['recentPosts' => $recentPosts]);
       
    }

    public function aboutUs()
    {
        // Retrieve sliders data from the database or any other source
        $sliders = Slider::all(); // Assuming Slider is your model and you want to retrieve all sliders
        $recentPosts = Post::latest()->take(2)->get();
        // Pass the $sliders variable to the view
        return view('aboutUs', ['sliders' => $sliders],['recentPosts' => $recentPosts]);
    }
    public function gallery()
    {
        // Retrieve sliders data from the database or any other source
        $sliders = Slider::all(); // Assuming Slider is your model and you want to retrieve all sliders
    
        // Pass the $sliders variable to the view
        return view('gallery', ['sliders' => $sliders]);
    }
    
}
