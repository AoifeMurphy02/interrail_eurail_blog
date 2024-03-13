@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-left">

    <div class="py-15">
        <div class="my-8"></div>
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
        <div class="my-8"></div>
        <div class="sm:grid grid-cols-1 gap-10 w-full mx-left py-15 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <div class="w-1/2 border-r border-gray-200 pr-5">
                    <img src="{{ asset('images/' . $post->image_path) }}" alt="" class="w-full h-75 object-cover rounded-lg">
                </div>

                <div class="w-1/2 pl-5">
                    <p class="text-xl  pb-10 leading-8 font-light">
                        {{ $post->description }}
                    </p>
                </div>
            </div>

            <div class="w-full">
                <p class="text-xl  leading-8 font-light">
                    {!! nl2br(e($post->blog_body)) !!}
                </p>
            </div>
        </div>

        <div class="w-4/5 m-auto pt-20">
            <span class="">
                By <span class="font-bold italic text-orange-300">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>
        </div>
    </div>
</div>
@endsection
