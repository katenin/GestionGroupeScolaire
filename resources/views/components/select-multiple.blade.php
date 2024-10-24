<div class="mb-3">
    @if ($label)
        <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    @endif
    <select
        name="{{ $name }}[]"
        id="{{ $name }}"
        multiple
        class="form-select @error($name) is-invalid @enderror"
    >
        @foreach ($options as $key => $option)
            <option value="{{ $key }}"
                {{ in_array($key, old($name, $selected)) ? 'selected' : '' }}>
                {{ $option }}
            </option>
        @endforeach
    </select>

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
