@props([
    'version' => 'PHP v1'
    ])

<div>
    Version: {{$version}}, Demo: {{ $slot }}
</div>
