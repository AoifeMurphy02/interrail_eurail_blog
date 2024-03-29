<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostsController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
     public function index(Request $request)
     {
         $search = $request->query('search');
         
         $posts = Post::orderBy('updated_at', 'DESC');
 
         if ($search) {
             $posts->where('title', 'like', '%' . $search . '%');
         }
 
         $posts = $posts->get();
 
         return view('blog.index')->with('posts', $posts);
     }
     
     public function sort(Request $request)
{
    $sortBy = $request->query('sort');
    
    // Default sort order to 'desc' if not provided or invalid
    if (!in_array($sortBy, ['asc', 'desc'])) {
        $sortBy = 'asc';
    }
    $posts = Post::orderBy('updated_at', $sortBy)->get();

    return view('blog.index')->with('posts', $posts);
}

     


    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'blog_body' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'

        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'blog_body' => $request->input('blog_body'),
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/blog')
            ->with('message', 'Your post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
{
    $post = Post::where('slug', $slug)->first();

    if (!$post) {
        return redirect()->route('posts.index')->with('error', 'Post not found.');
    }

    return view('blog.show')->with('post', $post);
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('blog.edit')
            ->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    // Update the specified resource in storage.
public function update(Request $request, $slug)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'blog_body' => 'required',
    ]);

    Post::where('slug', $slug)
        ->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'blog_body' => $request->input('blog_body'), // Include blog_body in the update
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            'user_id' => auth()->user()->id
        ]);

    return redirect('/blog')
        ->with('message', 'Your post has been updated!');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug);
        $post->delete();

        return redirect('/blog')
            ->with('message', 'Your post has been deleted!');
    }
}

