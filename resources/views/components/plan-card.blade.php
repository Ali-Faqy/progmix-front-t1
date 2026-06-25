<div class="col-4">
                <div class="plan-card element-spacing">
                    <div class="plan-info">
                        <div class="plan-type">{{ $plan['title'] }}</div>
                        <div class="plan-price element-spacing">${{ $plan['price'] }}<span>/Per month</span></div>
                        <ul class="plan-features element-spacing">
                            @foreach ($plan['features'] as $feature)
                            <li class="element-spacing">{{ $feature }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <button class="pay-btn outline-btn">Get Started</button>
                    </div>
                </div>
            </div>
