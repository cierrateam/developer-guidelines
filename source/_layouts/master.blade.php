<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

    <meta property="og:site_name" content="{{ $page->siteName }}" />
    <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}" />
    <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />
    <meta property="og:url" content="{{ $page->getUrl() }}" />
    <meta property="og:image" content="/assets/img/cierra-dark.png" />
    <meta property="og:type" content="website" />

    <meta name="twitter:image:alt" content="{{ $page->siteName }}">
    <meta name="twitter:card" content="summary_large_image">

    @if ($page->docsearchApiKey && $page->docsearchIndexName)
    <meta name="generator" content="tighten_jigsaw_doc">
    @endif

    <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

    <link rel="home" href="{{ $page->baseUrl }}">
    <link rel="icon" type="image/png" href="/favicon.png" />

    @stack('meta')

    @if ($page->production)
    <!-- Insert analytics code here -->
    @endif

    <link rel="stylesheet" href="{{ $page->basePath . mix('css/main.css', 'assets/build') }}">

    @if ($page->docsearchApiKey && $page->docsearchIndexName)
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
    @endif
</head>

<body class="min-h-screen bg-white overflow-x-hidden">
    <header class="z-30 absolute w-full flex items-center py-6 sm:py-5" role="banner">
        <div class="container mx-auto max-w-8xl px-4 xl:px-0">
            <div class="flex items-center justify-between">
                <a href="/" title="{{ $page->siteName }} home">
                    {{-- <img class="h-8 md:h-10 mr-3" src="/assets/img/cierra-dark.png"
                        alt="{{ $page->siteName }} logo" /> --}}
                    @include('_assets.svg.logo')
                </a>
                <a class="text-primary-600 hover:text-secondary-900 transition" href="/" title="cierra.de">
                    cierra.de
                </a>
            </div>

            <div class="flex flex-1 justify-end items-center text-right md:pl-10">
                @if ($page->docsearchApiKey && $page->docsearchIndexName)
                @include('_nav.search-input')
                @endif
            </div>
        </div>

        @yield('nav-toggle')
    </header>

    <main role="main" class="container mx-auto max-w-8xl px-4 xl:px-0">
        @yield('body')
    </main>

    <script src="{{ $page->basePath . mix('js/main.js', 'assets/build') }}"></script>

    @stack('scripts')

    <footer
        class="absolute bottom:0 flex text-center justify-center flex-col sm:flex-row w-full pt-16 sm:pt-40 pb-5 sm:pb-8"
        role="contentinfo">
        <p class="text-sm tracking-wider font-medium leading-5 text-primary-600 m-0 pr-1 pb-4 sm:pb-0">
            © {{ date('Y') }} <a href="https://www.cierra.de/">Cierra</a>. Made with
            @include('_assets.svg.heart') in Göttingen.
        </p>
        <p class="text-sm tracking-wider font-medium leading-5 text-primary-600 m-0">
            Built with <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a>
            and <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind
                CSS</a>.
        </p>
    </footer>
</body>

</html>