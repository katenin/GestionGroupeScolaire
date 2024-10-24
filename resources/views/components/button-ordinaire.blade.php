<button
    type="{{ $type }}"
    class="{{ $class }}"
    @if($disabled) disabled @endif
>
    {{ $slot }}
</button>
