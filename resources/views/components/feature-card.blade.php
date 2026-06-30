@props(['title', 'description', 'icon'])
<div {{ $attributes->merge(['class' => 'feature-card']) }}>
    <div class="feature-card-content">
        <div class="feature-card-content-title">
            {{ $title }}
        </div>

        <div class="feature-card-content-title-description element-spacing">
            {{ $description }}
        </div>
    </div>

    <div class="feature-card-icon">
        <img src="{{ asset($icon) }}" alt="">
    </div>
</div>
