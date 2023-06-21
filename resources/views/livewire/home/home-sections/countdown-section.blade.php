<section class="home-countdown1">
    <div class="back-img" style="background-image: url({{asset('assets/img/banner-sale.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="deal-content">
                      @if($sale && $ends_at > \Carbon\Carbon::now())
                                <h2>{{$sale->name}}</h2>
                                <span class="deal-c" style="color: #0a001f">We offer a hot deal offer every festival</span>
                                <ul class="contdown_row">
                                    <li class="countdown_section">
                                        <span id="days" class="countdown_timer" wire:key="days">{{ $days }}</span>
                                        <span class="countdown_title">Days</span>
                                    </li>
                                    <li class="countdown_section">
                                        <span id="hours" class="countdown_timer" wire:key="hours">{{ $hours }}</span>
                                        <span class="countdown_title">Hours</span>
                                    </li>
                                    <li class="countdown_section">
                                        <span id="minutes" class="countdown_timer" wire:key="minutes">{{ $minutes }}</span>
                                        <span class="countdown_title">Minutes</span>
                                    </li>
                                    <li class="countdown_section">
                                        <span id="seconds" class="countdown_timer" wire:key="seconds">{{ $seconds }}</span>
                                        <span class="countdown_title">Seconds</span>
                                    </li>
                                </ul>
                                <a href="{{ route('restaurant.index') }}" class="btn btn-style1">Shop collection</a>
                            @else
                        <h2>Wait for new sale soon</h2>
                      @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
