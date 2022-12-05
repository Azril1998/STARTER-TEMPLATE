<button class="btn btn-primary">
    {{ $slot }}
</button>
<button class="btn btn-{{ $theme }}">
    @if ($icon !== null)
        <i class="{{ $icon }}"></i>
    @endif
    {{ $label }}
</button>