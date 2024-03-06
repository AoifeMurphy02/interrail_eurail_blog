@extends('layouts.app')

@section('content')

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ asset('aboutUs.jpg') }}" alt="Image of me">
        </div>
    
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Hey guys!
            </h2>
            <p class="py-8 text-gray-500 text-s">
                Upon returning from a summer filled with enriching experiences and unforgettable 
                moments shared with friends, I was inspired to embark on a new endeavor. 
                Motivated by a passion for exploration and a desire to connect with fellow adventurers.
            </p>
            <p class="py-8 text-gray-500 text-s">
                I envisioned creating a comprehensive platform—a virtual haven where individuals could converge to exchange 
                invaluable insights, advice, and tips tailored specifically for those eager to explore the enchanting continent of Europe.

         </p>
            <p class="py-8 text-gray-500 text-s">
                Driven by a deep-seated enthusiasm for travel and a belief in the transformative power of shared experiences, 
                I set out to establish a one-stop-shop—a digital sanctuary designed to cater to the diverse needs and aspirations
                 of budding explorers and seasoned adventurers alike.
            </p>
            <p class="py-8 text-gray-500 text-s">
             With a focus on fostering a vibrant community spirit and facilitating meaningful 
                 interactions, my goal was to curate a repository of knowledge, insights, 
                 and practical wisdom sourced directly from the collective experiences of fellow travelers.
            </p>
            <p class="py-8 text-gray-500 text-s">
                Recognizing the boundless potential for discovery and the myriad of adventures awaiting discovery across Europe's 
                picturesque landscapes and culturally rich destinations, I sought to create a platform that would serve as a beacon of inspiration 
                and a trusted resource for anyone with a thirst for adventure and a curiosity to explore beyond their comfort zones.
                   
            </p>

            <a 
                href="/blog"
                class="uppercase bg-orange-300 text-gray-100  text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>



    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Popular Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Feel free to peruse through a selection of our most sought-after posts.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="text-center py-15 bg-orange-300 text-teal-700 pt-10">
           
        
    
                <ul class="py-4 sm:text-s pt-4 text-teal-700">
                    
                    <li class="pb-1">
                        <a href="/blog/why-we-love-interrail-2">
                           Why We Love InterRail
                        </a>
                    </li>
                    <li class="pb-1">
                        <a href="/blog/night-trains-do-and-don-t">
                         Night Trains Do and Don't
                        </a>
                    </li>
                    <li class="pb-1">
                        <a href="/">
                            How to Plan Your Route
                        </a>
                    </li>
                    <li class="pb-1">
                        <a href="/">
                           What InterRali/EuroRail ticket is best for you
                        </a>
                    </li>
                </ul>
           
        </div>
        <div>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        </head>
        <body>
          
        <div class="container">
          
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
        </div>

    </div>
    
    </div>
@endsection