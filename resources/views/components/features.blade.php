@php
    $features = [
        [
            'title' => 'Continuous Improvement',
            'description' => 'Get high rankings with multi-team collaboration',
            'icon' => 'images/track-record-icon.png',
        ],
        [
            'title' => 'Strategic Approach',
            'description' => 'Get high rankings with multi-team collaboration help you optimize SEO.',
            'icon' => 'images/strategic-approach-icon.png',
        ],
        [
            'title' => 'Unique Design',
            'description' => 'Get high rankings with multi-team collaboration help you optimize SEO.',
            'icon' => 'images/track-record-icon.png',
        ],
        [
            'title' => 'Responsive Design',
            'description' => 'Get high rankings with multi-team collaboration help you optimize SEO.',
            'icon' => 'images/track-record-icon.png',
        ],
        [
            'title' => 'Continuous Support',
            'description' => 'Get high rankings with multi-team collaboration help you optimize SEO.',
            'icon' => 'images/track-record-icon.png',
        ],
        [
            'title' => 'Continuous Improvement',
            'description' => 'Get high rankings with multi-team collaboration help you optimize SEO.',
            'icon' => 'images/track-record-icon.png',
        ],
        
        
    ];
@endphp

<section class="section section-p section-center">
    <div class="container">
            <div class="row justify-center">
                <div class="col-8">
                    <x-section-head title="Why Web crafts ?" subtitle="Webcrafts" description="We help ambitious businesses like yours generate more profits by building awareness,
                        driving web traffic, connecting with customers growing."/>
                </div>
            </div>
        <div class="section-content">
            <div class="row">
                <div class="col-4">
                    <div class="feature-cards-container">
                       @for ($i = 0; $i < ceil(count($features) / 2); $i++)
                            @if (ceil(count($features) / 2) % 2 == 0)
                                @if (
                                    ($i == (intdiv(ceil(count($features) / 2), 2) - 1)) ||
                                    ($i == intdiv(ceil(count($features) / 2), 2))
                                    )
                                        <x-feature-card
                                            title="{{ $features[$i]['title'] }}"
                                            description="{{ $features[$i]['description'] }}"
                                            icon="{{ $features[$i]['icon'] }}"
                                        />
                                @else
                                    <x-feature-card
                                        class="margin-card"
                                        title="{{ $features[$i]['title'] }}"
                                        description="{{ $features[$i]['description'] }}"
                                        icon="{{ $features[$i]['icon'] }}"
                                    />
                                @endif
                            @else
                                @if ($i == intdiv(ceil(count($features) / 2), 2))

                                    <x-feature-card
                                        title="{{ $features[$i]['title'] }}"
                                        description="{{ $features[$i]['description'] }}"
                                        icon="{{ $features[$i]['icon'] }}"
                                    />

                                @else
                                    <x-feature-card
                                        class="margin-card"
                                        title="{{ $features[$i]['title'] }}"
                                        description="{{ $features[$i]['description'] }}"
                                        icon="{{ $features[$i]['icon'] }}"
                                    />
                                @endif
                            @endif
                            @endfor
                </div>
                </div>
                <div class="col-4 items-center ">
                    <img class="feature-logo-image" src="{{ asset('/images/logo-image.png') }}" alt="logo">
                    <img class='feature-Certified-Shopify-icon'
                        src="{{ asset('/images/Certified-Shopify-Partner.png') }}" alt="">
                </div>
                <div class="col-4">
                    <div class="feature-cards-container left">
                        @for ($i = ceil(count($features) / 2); $i < count($features); $i++)
                            @if ((count($features) - ceil(count($features)) / 2) % 2 == 0)
                                @if (
                                    ($i == ($i == intdiv((count($features) - ceil((count($features) / 2))), 2) + ceil((count($features) / 2)) - 1)) ||
                                    ($i == intdiv((count($features) - ceil((count($features) / 2))), 2) + ceil((count($features) / 2)))
                                    )
                                        <x-feature-card
                                            title="{{ $features[$i]['title'] }}"
                                            description="{{ $features[$i]['description'] }}"
                                            icon="{{ $features[$i]['icon'] }}"
                                        />
                                @else
                                    <x-feature-card
                                        class="margin-card"
                                        title="{{ $features[$i]['title'] }}"
                                        description="{{ $features[$i]['description'] }}"
                                        icon="{{ $features[$i]['icon'] }}"
                                    />
                                @endif
                            @else
                                @if ($i == intdiv((count($features) - ceil((count($features) / 2))), 2) + ceil((count($features) / 2)) )
                                    <x-feature-card
                                        title="{{ $features[$i]['title'] }}"
                                        description="{{ $features[$i]['description'] }}"
                                        icon="{{ $features[$i]['icon'] }}"
                                    />

                                @else
                                    <x-feature-card
                                        class="margin-card"
                                        title="{{ $features[$i]['title'] }}"
                                        description="{{ $features[$i]['description'] }}"
                                        icon="{{ $features[$i]['icon'] }}"
                                    />
                                @endif
                            @endif
                            @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
