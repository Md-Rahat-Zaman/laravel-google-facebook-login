<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <label {{ $attributes->merge(['class' => 'form-label']) }}>
        {{ $slot }}

        @if($required)
            <span class="text-danger">*</span>
        @endif
    </label>
</div>