@extends('layouts.app')

@section('content')
<div class="my-8"></div>
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-teal-700 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif
<div class="my-8"></div>

@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a 
            href="/blog/create"
            class="uppercase bg-orange-300 text-teal-700 text-s font-extrabold py-3 px-8 rounded-3xl">
            Create post
        </a>
    </div>
    <div class="my-8"></div>
@endif

<div class="w-4/5 m-auto pt-4">
    <form action="{{ route('posts.search') }}" method="GET">
        <input 
            type="text" 
            name="search" 
            class="bg-gray-200 rounded-full w-3/4 py-3 px-4 mb-4 focus:outline-none focus:ring-2 focus:ring-orange-300" 
            placeholder="Search by title...">
        <button 
            type="submit" 
            class="uppercase bg-orange-300 text-teal-700 text-s font-extrabold py-3 px-8 rounded-3xl">Search
        </button>
    </form>
</div>

<div class="sm:grid grid-cols-1 md:grid-cols-3 gap-20 w-4/5 mx-auto py-15">
@foreach ($posts as $post)
    <div class="border border-gray-200 rounded-lg">
        <div class="overflow-hidden">
            <img src="{{ asset('images/' . $post->image_path) }}" alt="" class="w-full h-64 object-cover">
        </div>
        <div class="p-6">
            <h2 class="text-teal-700 font-bold text-xl pb-4">
                {{ $post->title }}
            </h2>

            <span class="">
                By <span class="font-bold italic text-orange-300">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>

            <p class="text-base  pt-4 pb-6 leading-7 font-light">
                {{ $post->description }}
            </p>
            
            <a href="/blog/{{ $post->slug }}"  class="uppercase bg-orange-300 text-teal-700 text-s font-extrabold py-3 px-8 rounded-3xl">
                Keep Reading
            </a>
            <div class="my-8"></div>
            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <div class="pt-4">
                    <a 
                        href="/blog/{{ $post->slug }}/edit"
                        class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                        Edit
                    </a>
                </div>

                <div class="pt-2">
                    <form 
                        action="/blog/{{ $post->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class="text-red-500 pr-3"
                            type="submit">
                            Delete
                        </button>

                    </form>
                </div>
            @endif
        </div>
    </div>    
@endforeach
</div>

@endsection
