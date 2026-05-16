@props([
    'label',
    'name',
    'type' => 'text',
    'placeholder' => '',
    'value' => '',
    'required' => false
])

<div class="form-group {{ $required ? 'required' : '' }}">

    <label class="form-label">
        {{ $label }}
    </label>

    <div class="input-icon-wrap">

        {{ $slot }}

        <input
            type="{{ $type }}"
            name="{{ $name }}"
            value="{{ old($name, $value) }}"
            placeholder="{{ $placeholder }}"
            {{ $attributes->merge([
                'class' => 'form-input'
            ]) }}
        >

    </div>

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

</div>