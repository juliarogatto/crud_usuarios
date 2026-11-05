@props(['name', 'label', 'type' => 'text'])

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">
        {{ $label }}
    </label>

    <input
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{ old($name) }}"
        class="form-control @error($name) is-invalid @enderror"
    >

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>