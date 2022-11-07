<span class="alert-title">{{ $title }}</span>
<div class="alert alert-danger">
    <div class="alert-title"><h3>{{ $title }}<h3></div>
    {{ $slot }}
</div>

@props(
    ['type' => 'info', 'message']
)
<div {{ $attributes->merge(['class' => 'alert alert-'.$type])}}>
    {{ $message }}
</div>