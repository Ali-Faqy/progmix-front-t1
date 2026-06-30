@php
    $plans = [
        [
            'title' => 'Basic',
            'price' => '399',
            'features' => ['Quality performance', 'Free custom domain', 'Best hosting ever'],
        ],
        [
            'title' => 'Advanced',
            'price' => '499',
            'features' => ['Quality performance', 'Free custom domain', 'Best hosting ever', 'Outstanding support'],
        ],
        [
            'title' => 'Premium',
            'price' => '599',
            'features' => [
                'Quality performance',
                'Free custom domain',
                'Best hosting ever',
                'Outstanding support',
                'web Development',
            ],
        ],
    ];
@endphp
<section class="section section-p section-center">
    <div class="container">
        <div class="section-head">
            <x-section-head title="Pick the perfect Pricing plan" subtitle="Pricing Plan" description="We help ambitious businesses like yours generate more profits by building awareness,
                        driving web traffic, connecting with customers growing."/>
        </div>
        <div class="section-content">
            <div class="row">
                <x-plan-card :plans="$plans"></x-plan-card>
            </div>
        </div>
    </div>
</section>
<section class="section section-p section-center bg-primary section-white">
    <div class="container">
        <div class="section-head">
            <x-section-head title="Pick the perfect Pricing plan" subtitle="Pricing Plan" description="We help ambitious businesses like yours generate more profits by building awareness,
                        driving web traffic, connecting with customers growing."/>
        </div>
        <div class="section-content">
            <div class="row">
                    <x-plan-card :plans="$plans"></x-plan-card>
            </div>
        </div>
    </div>
</section>
