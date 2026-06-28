<div class="col-4 d-flex">
    <div class="plan-card">
        <div class="plan-info">
            <div class="plan-type">{{ $plan['title'] }}</div>
            <div class="plan-price">${{ $plan['price'] }}<span>/Per month</span></div>
            <ul class="plan-features">
                @foreach ($plan['features'] as $feature)
                    <li>{{ $feature }}</li>
                @endforeach
            </ul>
        </div>
        <div>
            <button class="pay-btn outline-btn">Get Started</button>
        </div>
    </div>
</div>
