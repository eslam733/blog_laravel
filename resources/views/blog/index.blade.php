@extends('layouts.app')

@section('content')
    <div class="container m-auto text-center pt-15 pb-5">
        <h1 class="text-6xl font-bold">All Posts</h1>
    </div>

    <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b border-gray-400">
        <div class="flex">
            <img class="object-cover" src="https://picsum.photos/seed/picsum/920/620" alt="">
        </div>
        <div class="pb-10">
            <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">How create laravel Project</h2>
            <span>
                By: <span class="text-gray-500 italic">Eslam Mohamed</span>
                <p class="text-l text-gray-700 py-8 leading-6">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </span>
            <a class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase place-self-start"
                href="">Read
                More</a>
        </div>
    </div>
    <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5">
        <div class="flex">
            <img class="object-cover" src="https://picsum.photos/seed/picsum/920/620" alt="">
        </div>
        <div class="pb-10">
            <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">How create laravel Project</h2>
            <span>
                By: <span class="text-gray-500 italic">Eslam Mohamed</span>
                <p class="text-l text-gray-700 py-8 leading-6">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </span>
            <a class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase place-self-start"
                href="">Read
                More</a>
        </div>
    </div>
@endsection
