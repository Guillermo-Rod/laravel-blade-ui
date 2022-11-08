
<button type="{{ $type }}" style="gap: 4px; {{ $attributes->get('style') }}" class="btn d-flex align-items-center {{ $attributes->get('class') }}" {{ $attributes->except(['class','style']) }}>
    @if ($icon) 
        <i class="{{ $icon }}"></i>  
    @elseif ($htmlIcon)
        {!! $htmlIcon !!}
    @endif    
    
    @if ($text)
        <p class="m-0">{{ $text }}</p>    
    @endif

    {!! $slot !!}
</button>