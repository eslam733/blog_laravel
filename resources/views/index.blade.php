@extends('layouts.app')

@section('content')
    {{-- hero --}}
    <div class="hero-bg-image flex flex-col item-center justify-center">
        <h1 class="text-gray-100 text-5xl uppercase font-bold pb-10 mx-auto">Welcome Post</h1>
        <a class="bg-gray-100 text-gray-700 py-4 px-5 rounded-lg uppercase font-bold  mx-auto text-center"
            href="/">Start reading</a>
    </div>

    <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15">
        <div class="mx-2 md:mx-0">
            <img class="sm:rounded-lg" src="https://picsum.photos/seed/picsum/920/620" alt="">
        </div>
        <div class="mx-2 md:mx-0 flex flex-col item-center justify-center pt-5 sm:pt-0">
            <h1 class="font-bold text-gray-700 text-4xl uppercase">how to be a php developer</h1>
            <p class="font-bold text-gray-600 text-xl pt-2">how to be a php developer</p>
            <p class="py-4 text-gray-500 text-sm leading-5">how to be a php developer how to be a php developerhow to be a
                php developer how to be a php developer how to be a php developer</p>
            <a class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase place-self-start"
                href="">Read More</a>
        </div>
    </div>

    <div class=" text-center p-15 bg-gray-700 text-gray-100">
        <h2 class="text-2xl">Blog Categories</h2>
        <div class="container mx-auto pt-10 sm:grid grid-cols-4">
            <div class="font-bold text-2xl py-2">UX Desgin Thinking</div>
            <div class="font-bold text-2xl py-2">UX Desgin Thinking</div>
            <div class="font-bold text-2xl py-2">UX Desgin Thinking</div>
            <div class="font-bold text-2xl py-2">UX Desgin Thinking</div>
        </div>
    </div>

    <div class="container mx-auto text-center py-15">
        <h2 class="font-bold text-5xl py-10">Recent Posts</h2>
        <p class="text-gray-400 leading-6 px-10">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
            a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
            Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions
            of Lorem Ipsum.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 mx-auto py-10">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="block m-auto pt-4 pb-15 pt-10 w-4/5">
                <ul class="md:flex text-xs gap-2">
                    <li
                        class="bg-yellow-100 text-yellow-700 p-2 rounded my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition">
                        <a href="">PHP</a></li>
                    <li
                        class="bg-yellow-100 text-yellow-700 p-2 rounded my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition">
                        <a href="">PHP</a></li>
                    <li
                        class="bg-yellow-100 text-yellow-700 p-2 rounded my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition">
                        <a href="">PHP</a></li>
                    <li
                        class="bg-yellow-100 text-yellow-700 p-2 rounded my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition">
                        <a href="">PHP</a></li>
                </ul>
                <h3 class="text-l py-10 leading-6">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum.
                </h3>

                <a class="bg-transparent border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block" href="">Read More</a>
            </div>
        </div>
        <div class="flex">
            <img class="object-cover" src="https://picsum.photos/seed/picsum/920/620" alt="">
        </div>
    </div>
@endsection
