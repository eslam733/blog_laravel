@extends('layouts.app')

@section('content')
    <div class="container m-auto text-center pt-15 pb-5">
        <h1 class="text-6xl font-bold">All Posts</h1>
    </div>
    @auth
        <div class="mx-auto text-center py-12"><a class="bg-blue-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase place-self-start"
                href="/blog/create">Create Post</a></div>
    @endauth
    @foreach ($posts as $post)
        <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b border-gray-400">
            <div class="flex">
                <img class="object-cover" src="{{ $post->image }}" alt="">
            </div>
            <div class="pb-10">
                <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">{{ $post->title }}</h2>
                <span>
                    By: <span class="text-gray-500 italic">{{ $post->user->name }}</span><br>
                    <span class="mt-2 block">On: <span
                            class="text-gray-500 italic">{{ date('Y-m-d', strtotime($post->updated_at)) }}</span></span>
                    <p class="text-l text-gray-700 py-8 leading-6">
                        {{ $post->description }}
                    </p>
                </span>
                <a class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase place-self-start"
                    href="/blog/{{ $post->slug }}">Read
                    More</a>
            </div>
        </div>
    @endforeach
@endsection
