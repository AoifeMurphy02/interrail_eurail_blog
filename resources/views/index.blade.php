@extends('layouts.app')

@section('content')

<div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-5xl uppercase font-bold pb-14 text-orange-300 drop-shadow-md" style="filter: drop-shadow(0 0 10px rgba(8, 8, 8, 0.8));">
                    Do you want explore Europe?
                </h1>
                <div class="my-8"></div>
                <a 
                    href="/blog"
                    class="text-center uppercase  bg-orange-300 text-teal-700 text-s font-extrabold py-3 px-8 rounded-3xl">
                    Read More
                </a>
            </div>
        </div>
    </div>
    <div class="my-8"></div>

    <div class="sm:grid grid-cols-1 md:grid-cols-2 gap-8 w-full md:w-4/5 mx-auto py-10 border-b border-gray-200">
        <iframe class="mx-auto md:mx-0" width="100%" height="315" src="https://www.youtube.com/embed/PRACK9_A5AE?si=B00G-KiLmFuI1Goj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      
        <div class="m-auto text-left w-full">
            <h2 class="text-2xl font-extrabold pb-4">
                Thinking of Exploring Europe by train?
            </h2>
            
            <p class="py-2 text-sm">
                Memories to Last a Lifetime: InterRail isn't just a journey—it's a collection of moments that will stay with you long after you've returned home.
            </p>
            <p class="py-2 text-sm">
                InterRail isn't just about the destinations—it's about the journey. Along the way, you'll meet fellow travelers from all walks of life, each with their own stories to share.
            </p>
            <a 
                href="/blog"
                class="uppercase bg-orange-300 text-teal-700 text-xs font-extrabold py-2 px-4 rounded-3xl inline-block mt-4">
                Find Out More
            </a>
        </div>
    </div>
    <div class="my-8"></div>

    <div class="text-center py-10">
        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>
        <div class="my-8"></div>
        <p class="m-auto w-4/5 ">
            Feel free to peruse through a selection of our most sought-after posts.
        </p>
        <div class="my-8"></div>
    </div>
    
    <div class="sm:grid grid-cols-1 md:grid-cols-2 gap-20 w-4/5 mx-auto">
        @foreach ($recentPosts as $post)
            <div class="border border-gray-200 rounded-lg bg-orange-200">
                <div class="overflow-hidden">
                    <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}" class="w-full h-64 object-cover">
                </div>
                <div class="p-6">
                    <h2 class="text-teal-700 font-bold text-xl pb-4">{{ $post->title }}</h2>
                    <span class="">By <span class="font-bold italic text-teal-700">{{ $post->user->name }}</span>, Created on {{ $post->created_at->format('jS M Y') }}</span>
                    <p class="text-base pt-4 pb-6 leading-7 font-light">{{ $post->description }}</p>
                    <a href="/blog/{{ $post->slug }}" class="uppercase bg-teal-700 text-orange-300 text-s font-extrabold py-3 px-8 rounded-3xl">Keep Reading</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection