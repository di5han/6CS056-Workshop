
@props([
    'label',
    'name',
    'type' => 'text',
    'value' => '',
])

<div style="margin-bottom: 18px;">
    <label for="{{ $name }}">{{ $label }}</label>
    <br>

    @if($type === 'textarea')
        <textarea id="{{ $name }}" name="{{ $name }}">{{ old($name, $value) }}</textarea>
    @else
        <input
            type="{{ $type }}"
            id="{{ $name }}"
            name="{{ $name }}"
            value="{{ old($name, $value) }}"
        >
    @endif

    @error($name)
        <div class="error">{{ $message }}</div>
    @enderror
</div>
