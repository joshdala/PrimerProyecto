<div class="alert alert-{{ $type }}" role="alert">
    @isset($title)
        <h4 class="alert-heading">{{ $title }}</h4>
    @endisset

    {{ $slot }}
</div>