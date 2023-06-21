<section class="h-t-products1 section-t-padding section-b-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Trending products</h2>
                </div>
                <div class="trending-products owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3618px;">

                            @foreach($meals as $meal)
                                <div class="owl-item active" style="width: 271.5px; margin-right: 30px;">
                                    <div class="items">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    <img class="img-fluid" style="width: 300px; height:300px;" src="{{asset($meal->image)}}" alt="pro-img1">
                                                    <img class="img-fluid additional-image" src="./Vegist - Multipurpose eCommerce HTML Template_files/pro-img-01.jpg" alt="additional image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-text">New</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="#" wire:click.prevent="addToWishList('{{ $meal->id}}', '{{$meal->name}}', '{{ $meal->price }}')" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                <a href="#" wire:click.prevent="addToCart('{{ $meal->id }}', '{{ $meal->name }}', {{ ($meal->sale && $meal->sale->count() > 0) ? $meal->price * (100 - ($meal->sales ? $meal->sales->first()->percentage : 0)) / 100 : $meal->price }})" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal{{$meal->id}}"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                    {{$meal->name}}</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star c-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            @if($meal->sales && $meal->sales->count() > 0)
                                                <div class="pro-price">
                                                    <span class="new-price">{{ number_format($meal->price * (100 - $meal->sales->first()->percentage) / 100, 2) }} LE</span>
                                                    <span class="old-price"><del>{{$meal->price}} LEE</del></span>
                                                </div>
                                            @else
                                                <div class="pro-price">
                                                    <span class="new-price">{{ number_format($meal->price, 2) }} LE</span>
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="owl-nav">
                                <button type="button" role="presentation" class="owl-prev">
                                    <i class="fa fa-angle-left"></i>
                                </button>
                                <button type="button" role="presentation" class="owl-next">
                                    <i class="fa fa-angle-right"></i></button></div>
                            <div class="owl-dots disabled">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
