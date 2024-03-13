@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Create Post
        </h1>
    </div>
</div>
 
@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-20">
    <form 
        action="/blog"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <input 
            type="text"
            name="title"
            placeholder="Post Title..."
            class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

           

        <textarea 
            name="description"
            placeholder="Description..."
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

            <textarea 
            type="text"
            name="blog_body" 
            placeholder="Blog Post ..."
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>


            <div class="w-1/4 mx-auto">
                <label class="block bg-gray-lighter pt-15">
                    <span class="block w-full px-2 py-3 bg-white rounded-lg shadow-lg uppercase border border-blue cursor-pointer text-center">Select a file</span>
                    <input type="file" name="image" class="hidden">
                </label>
            </div>

        <button    
            type="submit"
            class="uppercase mt-15  bg-orange-300 text-teal-700 text-s font-extrabold py-3 px-8 rounded-3xl">
            Submit Post
        </button>
    </form>
</div>

@endsection