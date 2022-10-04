{{-- todo: apply text-secondary-900 on li, if child a tag isActive, to make list-disc the same color as text --}}
{{-- <li class="{{ $page->isActive($url) ? 'text-secondary-900' : '' }} pl-4"> --}}
<li class="pl-4">
    @if ($url = is_string($item) ? $item : $item->url)
    {{-- Menu item with URL--}}
    <a href="{{ $page->url($url) }}"
        class="{{ 'lvl' . $level }} {{ $page->isActiveParent($item) ? 'lvl' . $level . '-active' : '' }} {{ $page->isActive($url) ? 'active text-secondary-900' : '' }} nav-menu__item">
        {{ $label }}
    </a>

    @else
    {{-- Menu item without URL--}}
    <p class="nav-menu__item">{{ $label }}</p>
    @endif

    @if (! is_string($item) && $item->children)
    {{-- Recursively handle children --}}
    @include('_nav.menu', ['items' => $item->children, 'level' => ++$level])
    @endif

</li>