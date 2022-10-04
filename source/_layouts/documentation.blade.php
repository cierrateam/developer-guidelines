<!DOCTYPE html>
<html lang="en">

@include('_layouts.head')

<body class="min-h-screen bg-white overflow-x-hidden">
    <header class="bg-primary-900 lg:bg-transparent z-30 absolute w-full flex items-center py-6 sm:py-5" role="banner">
        <div class="container mx-auto max-w-8xl px-4 xl:px-0">
            <div class="flex items-center justify-between">
                <a href="/" title="{{ $page->siteName }} home">
                    @include('_assets.svg.logo-dark')
                </a>
                <a class="text-white lg:text-primary-600 hover:text-secondary-900 transition tracking-wide text-18"
                    href="/" title="cierra.de">
                    cierra.de
                </a>
            </div>

            <div class="flex flex-1 justify-end items-center text-right md:pl-10">
                @if ($page->docsearchApiKey && $page->docsearchIndexName)
                @include('_nav.search-input')
                @endif
            </div>
        </div>

        @include('_nav.menu-toggle')
    </header>

    <main role="main" class="container mx-auto max-w-9xl px-4 lg:px-0">
        <div class="flex flex-col lg:flex-row">
            <nav id="js-nav-menu"
                class="lg:z-40 nav-menu hidden lg:block bg-primary-900 pt-[4.25rem] xl:pl-16 2xl:pl-[7.75rem]">

                <div class="hidden sm:block ml-4"> <a href="/" title="{{ $page->siteName }} home">
                        @include('_assets.svg.logo-dark')
                    </a> </div>

                <h4 class="text-white pl-4 pt-2 lg:pt-11 mt-[4.25rem] sm:mt-7">Content</h4>

                @include('_nav.menu', ['items' => $page->navigation])

                <li class="pb-6 ml-2.5">
                    <a href="https://jigsaw.tighten.co/docs/installation"
                        class="nav-menu__item lvl1 inline-block text-white font-semibold tracking-wide group group-hover:text-secondary-900">
                        Docs for the Docs
                        <span class="ml-1.5">@include('_assets.svg.docs-icon')</span>
                    </a>
                </li>
            </nav>

            <div class="DocSearch-content w-full lg:w-2/3 break-words lg:ml-14 mt-32 lg:mt-36 -mb-20" v-pre>

                @yield('content')

                <footer
                    class="flex flex-col sm:flex-row text-center sm:justify-center lg:justify-start pt-14 sm:pt-20 mb-5 lg:mb-8"
                    role="contentinfo">
                    <p class="text-sm tracking-wider font-medium leading-5 text-primary-600 m-0 pr-1 pb-4 sm:pb-0">
                        © {{ date('Y') }} <a href="https://www.cierra.de/">Cierra</a>. Made with
                        @include('_assets.svg.heart') in Göttingen.
                    </p>
                    <p class="text-sm tracking-wider font-medium leading-5 text-primary-600 m-0">
                        Built with <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a>
                        and <a href="https://tailwindcss.com"
                            title="Tailwind CSS, a utility-first CSS framework">Tailwind
                            CSS</a>.
                    </p>
                </footer>

            </div>
        </div>
    </main>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

    @stack('scripts')

</body>

</html>