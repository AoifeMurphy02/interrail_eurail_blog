<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider; // Import the Slider model
use App\Models\Post;
use Illuminate\Support\Facades\Mail;

use App\Mail\ContactFormMail; 

class PagesController extends Controller
{
    public function index()
    {
       $recentPosts = Post::latest()->take(2)->get();
    
    return view('index', ['recentPosts' => $recentPosts]);
       
    }
public function contactUs(){
    return view('contactUs');
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

    public function send_mail(Request $request)
    {
        $this->validate($request, [
            'fullname' => ['required', 'string', 'max:255' ], 
            'email' => ['required', 'string', 'email', 'max:255' ],
            'phone_number' => ['string', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:255']
        ]);

        $contactUs = [
            'fullname' => $request['fullname'], 
            'email' => $request['email'],
            'phone_number' => $request['phone_number'],
            'subject' => $request['subject'],
            'message' => $request['message'],
            'screenshot' => $request->file('screenshot')->store('contact', 'public')
        ];

    
        Mail::to('aoifetaram@gmail.com')->send(new ContactFormMail($contactUs));
        
        return redirect()->route('contact')->with('status', 'Your Mail has been received');
    }

   
}
