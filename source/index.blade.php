@extends('_layouts.master')

@section('body')
<div
    class="bg-image relative flex flex-col-reverse lg:flex-row pt-[17.1875rem] sm:pt-52 md:pt-[15rem] lg:pt-72 xl:pt-80 pb-[26.8125rem]">
    <div class="mx-auto text-center max-w-[794px]">
        <h1 class="font-bold tracking-wider">Developer guideline<span class="text-secondary-900">.</span></h1>

        <p class="text-primary-500 md:text-xl tracking-wide md:max-w-md lg:max-w-[38.75rem] mx-auto mt-4">A full guide
            for developers
            at
            cierra. These
            docs
            help you
            to work on
            projects as a developer in
            our team. Welcome to the team.</p>

        <div class="flex justify-center mt-8">
            <a href="/docs/getting-started" title="cierra Developer guideline getting started"
                class="bg-secondary-900 hover:scale-105 transition text-white font-medium tracking-wide text-18 leading-6 rounded-md py-3 px-8 mr-5 sm:mr-8  no-underline">Get
                started</a>

            <a href="https://cierra.de" title="cierra website"
                class="self-center text-primary-700 hover:scale-105 font-medium text-20 leading-30 transition hover:text-secondary-900 after:ml-1 after:bg-secondary-900 after:inline-flex after:p-1 after:rounded-full after:align-middle after:hover:bg-primary-700 after:transition no-underline">About
                cierra</a>
        </div>
    </div>

    <div class="absolute left-[-8.5rem] top-180 sm:top-[30rem] md:top-[40rem] lg:top-180">
        @include ('_assets.svg.wave')
    </div>
</div>

<div
    class="text-center max-w-[343px] sm:max-w-sm md:max-w-lg lg:max-w-full lg:flex lg:space-x-[3.25rem] pl-2 sm:pl-0 lg:pl-2 mx-auto -mt-20 sm:-mb-16 sm:-mt-40 lg:my-0">
    <div
        class="px-5 pt-7 mb-8 lg:mb-0 sm:pb-7.5 lg:w-1/3 border border-secondary-900 rounded-[0.3125rem] shadow-[-0.5rem_0.5rem_0_-0.1rem_#fffefd,-0.5rem_0.5rem_0_-0.03rem_#f35627]">
        @include ('_assets.svg.document')
        <p class="text-primary-900 font-semibold text-22 leading-30 mt-5 mb-4">Easy to follow guidelines</p>
        <div class="h-px w-[14.25rem] bg-primary-300 mx-auto"></div>
        <p class="mt-4 mb-5 sm:mb-0">Building things at cierra is following a given standard. You can find all our
            best-practices in these docs.
        </p>
    </div>

    <div
        class="px-5 pt-7 mb-8 lg:mb-0 sm:pb-7.5 lg:w-1/3 border border-secondary-900 rounded-[0.3125rem] shadow-[-0.5rem_0.5rem_0_-0.1rem_#fffefd,-0.5rem_0.5rem_0_-0.03rem_#f35627]">
        @include ('_assets.svg.thunder')
        <p class="text-primary-900 font-semibold text-22 leading-30 mt-5 mb-4">Environments as easy as 1,2,3</p>
        <div class="h-px w-[14.25rem] bg-primary-300 mx-auto"></div>
        <p class="mt-4 mb-5 sm:mb-0">Find the correct guideline for your OS to get started with our stack.</p>
    </div>

    <div
        class="px-5 pt-7 mb-8 lg:mb-0 sm:pb-7.5 lg:w-1/3 border border-secondary-900 rounded-[0.3125rem] shadow-[-0.5rem_0.5rem_0_-0.1rem_#fffefd,-0.5rem_0.5rem_0_-0.03rem_#f35627]">
        @include ('_assets.svg.lightbulb')
        <p class="text-primary-900 font-semibold text-22 leading-30 mt-5 mb-4">Useful Links</p>
        <div class="h-px w-[14.25rem] bg-primary-300 mx-auto"></div>
        <p class="mt-4 mb-5 sm:mb-0">In our time as team we found a lot of useful stuff like nice packages for specific
            usecases. All of them can
            be found here later on! </p>
    </div>
</div>
@endsection

<style>
    .bg-image {
        background-image: url('assets/img/heroBackgroundMobile.svg');
        background-size: 100%;
        background-position: left 50% top 9rem;
        background-repeat: no-repeat;
        padding: 0 1rem;
        margin: 0 -1rem;
    }

    @media (min-width: 375px) {
        .bg-image {
            background-position: left 50% top 7rem;
        }
    }

    @media (min-width: 440px) {
        .bg-image {
            background-size: 80%;
        }
    }

    @media (min-width: 530px) {
        .bg-image {
            background-size: 70%;
        }
    }

    @media (min-width: 640px) {
        .bg-image {
            background-image: url('assets/img/heroBackground.svg');
            background-size: 100%;
            background-position: left 50% top 6rem;

        }
    }
</style>
