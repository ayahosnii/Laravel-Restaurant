<section class="news-letter1">
    <div class="section-tb-padding news-img" style="background-image: url({{asset('assets/img/banner3.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home-news">
                        <h2>Get the latest deals</h2>
                        <p>And receive 10% off coupon for first shopping</p>
                        <form wire:submit:prevent>
                            <input type="text" wire:model="email" placeholder="Enter your email address">
                            <button type="submit" wire:click.prevent="subscribe" class="btn btn-style3" wire:loading.class="opacity-50" wire:loading.attr="disabled">
                                <span wire:loading.remove>Subscribe</span>
                                <span wire:loading>Subscribing...</span>
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
