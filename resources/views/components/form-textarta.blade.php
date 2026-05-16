@props([
    'label',
    'name',
    'placeholder' => '',
])

<div class="form-group">
            <label class="form-label">{{$label}}</label>
            <textarea {{ $attributes->merge(['class' => 'form-textarea']) }} rows="2" placeholder="{{ $placeholder }}" name="{{ $name }}" data-track></textarea>
          </div>

          
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
