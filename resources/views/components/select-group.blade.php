<div class="mb-3">
    <label class="form-label">{{ $label }}</label>
    <select name="{{ $name }}" class="form-control @error($name) is-invalid @enderror" >
        <option value="">Select {{ $label }}</option>
            @foreach($options as $key => $option)
                <option value="{{ $key }}" {{ old($name, $value ?? '') == $key ? 'selected' : '' }}>
                    {{ $option }}
                </option>
            @endforeach
        </select>
        @error($name) 
        <div class="invalid-feedback"> {{ $message }} </div>
        @enderror

</div>
{{-- <x-select-group label="Gender" name="gender" :options="[ 'male' => 'Male', 'female' => 'Female', 'other' => 'Other' ]"/> --}}