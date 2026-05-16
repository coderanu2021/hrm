@props([
    'label',
    'name',
    'options' => [],
    'value' => '',
])

<div class="form-group">
    <label class="form-label">{{ $label }}</label>
    <div style="position:relative;">
        <select name="{{ $name }}" class="form-input @error($name) is-invalid @enderror" style="appearance:none; width:100%; cursor:pointer;">
            <option value="">Select {{ $label }}</option>
            @foreach($options as $key => $option)
                <option value="{{ $key }}" {{ old($name, $value ?? '') == $key ? 'selected' : '' }}>
                    {{ $option }}
                </option>
            @endforeach
        </select>
        <div style="position:absolute; right:16px; top:50%; transform:translateY(-50%); pointer-events:none; color:var(--text-muted);">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
        </div>
    </div>
    @error($name) 
    <div class="invalid-feedback" style="display:block; margin-top:6px; font-size:12px; color:#ef4444;"> {{ $message }} </div>
    @enderror
</div>
{{-- <x-select-group label="Gender" name="gender" :options="[ 'male' => 'Male', 'female' => 'Female', 'other' => 'Other' ]"/> --}}