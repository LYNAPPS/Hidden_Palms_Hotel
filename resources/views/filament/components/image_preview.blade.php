<div>
    @if ($value)
        <img src="{{ $value }}" alt="Image Preview" style="max-width: 100%; height: auto;">
    @endif
    <input type="text" name="{{ $name }}" value="{{ $value }}"
        {{ $attributes->merge(['class' => 'mt-2 form-input block w-full']) }}>
</div>
