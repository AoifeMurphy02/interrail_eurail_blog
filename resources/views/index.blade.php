@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm: text-gray-60 text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want explore Europe?
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/PRACK9_A5AE?si=B00G-KiLmFuI1Goj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Thinking of Exploring Europe by train?
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Memories to Last a Lifetime: InterRail isn't just a journey—it's a collection of moments that will stay with you long after 
                you've returned home. Whether it's watching the sunset over the Mediterranean, 
                stumbling upon a hidden gem in a picturesque village, or simply sharing a laugh with newfound friends, 
                every experience is a cherished memory in the making.
            </p>
            <p class="py-8 text-gray-500 text-s">
                InterRail isn't just about the destinations—it's about the journey. 
                Along the way, you'll meet fellow travelers from all walks of life,
                 each with their own stories to share. 
                 Whether you're swapping travel tips over a meal or marveling at the passing scenery together, 
                 the connections you make on the train are part of what makes the InterRail experience so special.
            </p>

            <a 
                href="/blog"
                class="uppercase  bg-orange-300 text-teal-700 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center py-15">
        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>
        <p class="m-auto w-4/5 text-gray-500">
            Feel free to peruse through a selection of our most sought-after posts.
        </p>
    </div>
    
    <div class="sm:grid grid-cols-1 md:grid-cols-2 gap-20 w-4/5 mx-auto">
        @foreach ($recentPosts as $post)
            <div class="border border-gray-200 rounded-lg">
                <div class="overflow-hidden">
                    <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}" class="w-full h-64 object-cover">
                </div>
                <div class="p-6">
                    <h2 class="text-gray-700 font-bold text-xl pb-4">{{ $post->title }}</h2>
                    <span class="text-gray-500">By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ $post->created_at->format('jS M Y') }}</span>
                    <p class="text-base text-gray-700 pt-4 pb-6 leading-7 font-light">{{ $post->description }}</p>
                    <a href="/blog/{{ $post->slug }}" class="uppercase bg-orange-300 text-teal-700 text-s font-extrabold py-3 px-8 rounded-3xl">Keep Reading</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
