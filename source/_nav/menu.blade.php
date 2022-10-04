@php $level = $level ?? 0 @endphp

<ul class="ml-4 mb-3">
    @foreach ($items as $label => $item)
    @include('_nav.menu-item')
    @endforeach
</ul>