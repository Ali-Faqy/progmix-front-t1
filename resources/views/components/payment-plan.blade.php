@php
    $plans = [
    [
        'title' => 'Basic',
        'price' => '399',
        'features' => [
            'Quality performance',
            'Free custom domain',
            'Best hosting ever'
        ]
    ],
    [
        'title' => 'Advanced',
        'price' => '499',
        'features' => [
            'Quality performance',
            'Free custom domain',
            'Best hosting ever',
            'Outstanding support',
        ]
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
        ]
    ]
];
@endphp
<section class="section-secondary p-y-50">
    <div class="container">
        <div class="row">
            <div class="col-12 justify-center">
                <div class="section-sub-title gradient">
                    <div></div>
                    Pricing Plan
                    <div></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 justify-center element-spacing">
                <div class="section-title color-primary">
                    Pick the perfect Pricing plan
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
            </div>
            <div class="col justify-center element-spacing">
                <div class="section-description color-gray text-center">
                    We help ambitious businesses like yours generate more profits by building awareness,
                    driving web traffic, connecting with customers growing.
                </div>
            </div>
            <div class="col-2">
            </div>
        </div>
        <div class="row plan-cards">
            @foreach ($plans as $plan)
                <x-plan-card :plan="$plan"></x-plan-card>
            @endforeach

        </div>
    </div>
</section>
