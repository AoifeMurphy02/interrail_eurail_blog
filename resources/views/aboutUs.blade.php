@extends('layouts.app')

@section('content')
<div class="my-8"></div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200 ">
        
        <div>
            <img src="{{ asset('aboutUs.jpg') }}" alt="Image of me" class="zoomAboutUs">
        </div>
    
        <div class="m-auto sm:m-auto text-left w-4/5 block border-8  border-orange-200 bg-orange-200">
            <h2 class="text-3xl font-extrabold text-teal-700 ">
                Hey guys!
            </h2>
            <p class="py-8 text-teal-700 text-s">
                Upon returning from a summer filled with enriching experiences and unforgettable 
                moments shared with friends, I was inspired to embark on a new endeavor. 
                Motivated by a passion for exploration and a desire to connect with fellow adventurers.
            </p>
            <p class="py-8 text-teal-700 text-s">
                I envisioned creating a comprehensive platform—a virtual haven where individuals could converge to exchange 
                invaluable insights, advice, and tips tailored specifically for those eager to explore the enchanting continent of Europe.

         </p>
            <p class="py-8 text-teal-700 text-s">
                Driven by a deep-seated enthusiasm for travel and a belief in the transformative power of shared experiences, 
                I set out to establish a one-stop-shop—a digital sanctuary designed to cater to the diverse needs and aspirations
                 of budding explorers and seasoned adventurers alike.
            </p>
        
            <p class="py-8 text-teal-700 text-s">
                Recognizing the boundless potential for discovery and the myriad of adventures awaiting discovery across Europe's 
                picturesque landscapes and culturally rich destinations, I sought to create a platform that would serve as a beacon of inspiration 
                and a trusted resource for anyone with a thirst for adventure and a curiosity to explore beyond their comfort zones.
                   
            </p>
            <div class="my-8"></div>
            <a 
                href="/blog"
                class="uppercase bg-teal-700 text-orange-300  text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
            <div class="my-8"></div>
        </div>
    </div>
    <div class="my-8"></div>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        </head>
        <body>
          
        <div>
        
            <div class="container" style="max-width: 800px;">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($sliders as $key => $slider)
                            <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                                <img src="{{ $slider->url }}" class="d-block w-100" alt="{{ $slider->title }}">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            
    
    <div class="text-center py-15">
    
        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

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