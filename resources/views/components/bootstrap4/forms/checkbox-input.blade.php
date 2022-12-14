@php
  $exceptElementsOnInput = [
    'label-class',
    'label-jattributes',
    'error-class',
    'error-jattributes',
    'container-class',
    'container-jattributes',
    'input-jattributes',
    'hidden',
  ];
@endphp

<div {!! $attributes->get('hidden') !!}
    {{ $attributes->get('container-jattributes') }}
    class="{{ $attributes->get('container-class') }}">
    
    <div class="custom-control custom-checkbox">
    
        {{-- Errors --}}
        @if ($enableErrors == true)
            @error($name ?? $attributes->whereStartsWith('wire:model')->first())
                <span class="text-danger {{ $attributes->get('error-class') }}" {!! $attributes->get('error-jattributes') !!}>
                    {{ $message }}
                </span>
            @enderror
        @endif
    
        <input 
            type="checkbox" 
            {!! ($name != null) ? "name='{$name}'" : '' !!}
            {!! ($value != null) ? "value='{$value}'" : '' !!}
            {!! $checked ? "checked={$checked}" : '' !!}
            {!! $id ? "id={$id}" : '' !!}
            {{ $attributes->except($exceptElementsOnInput) }}
            {{ $attributes->get('input-jattributes') }}
            class="custom-control-input {{ $attributes->get('class') }}"      
            >
    
        @if ($label)
            <label 
                class="custom-control-label {{ $attributes->get('label-class') }}" 
                {{ $id ?  "for={$id}" : '' }}
                {{ $attributes->get('label-jattributes') }}
                >
                {!! $label !!} <span class="text-danger"> {{ $attributes->get('required') == true || $extraAttributes->has('requiredTextOnly') ? '*' : null }}</span>
            </label>
        @endif
    </div>    

    {{ $slot }}
</div>


