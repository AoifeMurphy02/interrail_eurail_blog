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
        
            <img src="https://i.guim.co.uk/img/media/10ca7d94797154abad498bb78db212e4ab93e5f0/0_212_5368_3221/master/5368.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=7feebf18676b24fa8484899ccb1cff01" width="700" alt="">
            
      

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Thinking of Exploing Europe by train?
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
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>

        
    </div>
    <div class="flex justify-center mt-4">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/PRACK9_A5AE?si=B00G-KiLmFuI1Goj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>



    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
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
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
@endsection