@props(['title', 'subtitle', 'description', 'labelBtn', 'linkBtn'])
<div class="section-head">
@if (!empty($subtitle))
    <div class="section-subtitle">
        <div></div>
        {{ $subtitle }}
        <div></div>
    </div>
@endif
<div class="section-title">
    {{ $title }}
</div>

@if (!empty($linkBtn) && !empty($labelBtn))
    <div class="row items-center">
        <div class="col-9">
            <div class="section-description">
                <p>{{ $description }}</p>
            </div>
        </div>
        <div class="col-3 d-flex justify-end"><a class="btn outline-btn" href="{{ $linkBtn }}">{{ $labelBtn }}</a></div>
    </div>
@elseif (!empty($description))
    <div class="section-description">
        <p>{{ $description }}</p>
    </div>
@endif
</div>