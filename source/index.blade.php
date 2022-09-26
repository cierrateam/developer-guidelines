@extends('_layouts.master')

@section('body')
<div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24 pt-20">
    <div class="mt-8">
        <h1 class="font-bold tracking-wider">Developer Guideline<span class="text-secondary-900">.</span></h1>

        <h2 class="">A full guide for developers at cierra. This docs helps you to work on projects as a developer in
            our team. Welcome to the team.</h2>

        <p class="text-lg">These docs help you to work on projects as a developer in our team. Welcome to the team ❤️
        </p>

        <div class="flex my-10">
            <a href="/docs/getting-started" title="{{ $page->siteName }} getting started"
                class="bg-orange-500 hover:bg-orange-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Get
                Started</a>

            <a href="https://cierra.de" title="Jigsaw by Tighten"
                class="bg-gray-400 hover:bg-gray-600 text-orange-900 font-normal hover:text-white rounded py-2 px-6">About
                cierra</a>
        </div>
    </div>

</div>

<div class="md:flex -mx-2 -mx-4">
    <div class="mb-8 mx-3 px-2 md:w-1/3">
        <img src="/assets/img/icon-window.svg" class="h-12 w-12" alt="window icon">

        <h3 id="intro-laravel" class="text-2xl text-orange-900 mb-0">Easy to follow guidelines</h3>

        <p>Building things at cierra is following a given standard. You can find all our best-practices in these docs.
        </p>
    </div>

    <div class="mb-8 mx-3 px-2 md:w-1/3">
        <img src="/assets/img/icon-terminal.svg" class="h-12 w-12" alt="terminal icon">

        <h3 id="intro-markdown" class="text-2xl text-orange-900 mb-0">Environments as easy as 1,2,3</h3>

        <p>Find the correct guideline for your OS to get started with our stack.</p>
    </div>

    <div class="mx-3 px-2 md:w-1/3">
        <img src="/assets/img/icon-stack.svg" class="h-12 w-12" alt="stack icon">

        <h3 id="intro-mix" class="text-2xl text-orange-900 mb-0">Useful Links</h3>

        <p>In our time as team we found a lot of usefull stuff like nice packages for specific usecases. All of them can
            be found here later on! </p>
    </div>
</div>
@endsection