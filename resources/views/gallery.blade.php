@extends('layouts.app')

@section('content')

<div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-24">
    <div class="-m-1 flex flex-wrap md:-m-2">
      <div class="flex w-1/2 flex-wrap">
        <div class="w-1/2 p-1 md:p-2">
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="https://thumbs.dreamstime.com/b/young-happy-woman-facing-eiffel-tower-paris-france-attractive-hands-up-35173107.jpg" />
        </div>
        <div class="w-1/2 p-1 md:p-2">
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="https://hillcitybride.com/wp-content/uploads/2023/11/01-187763-post/Man-Traveling-Eurail-Interrail-in-Europe.jpg" />
        </div>
        <div class="w-full p-1 md:p-2">
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="https://planebeauty.co.uk/wp-content/uploads/2022/08/pexels-photo-1170184.jpeg" />
        </div>
      </div>
      <div class="flex w-1/2 flex-wrap">
        <div class="w-full p-1 md:p-2">
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="https://c.files.bbci.co.uk/4D77/production/_102313891_teenspacksgetty19jul10berlin.jpg" />
        </div>
        <div class="w-1/2 p-1 md:p-2">
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAPtAqfoschh7exQU6QFP4NBxoQRr9TljbZEvq8hPf3xdwhliA85bXwsncMrBd7CbsuS0&usqp=CAU" />
        </div>
        <div class="w-1/2 p-1 md:p-2">
          <img
            alt="gallery"
            class="block h-full w-full rounded-lg object-cover object-center"
            src="https://as2.ftcdn.net/v2/jpg/02/21/77/33/1000_F_221773340_KES3B0Ezf9fVMkobPUXTpKaS8V254OSE.jpg" />
        </div>
      </div>
    </div>
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