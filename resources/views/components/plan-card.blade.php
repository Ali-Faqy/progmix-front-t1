@foreach ($plans as $plan)
    <div class="col-4 d-flex">
        <div class="plan-card {{ $loop->first ? 'bg-primary' : 'bg-white' }}">
            <div class="plan-info">
                <div class="plan-type">{{ $plan['title'] }}</div>
                <div class="plan-price">${{ $plan['price'] }}<span>/Per month</span></div>
                <ul class="plan-features">
                    @foreach ($plan['features'] as $feature)
                        <li>{{ $feature }}</li>
                    @endforeach
                </ul>
            </div>
            <a href="#" class="pay-btn outline-btn">Get Started</a>
        </div>
    </div>
@endforeach
