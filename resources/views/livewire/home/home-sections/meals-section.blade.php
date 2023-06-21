<section class="our-products-tab section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <h2>Our products</h2>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="{{route('index')}}#home">SPECIAL PRODUCTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="{{route('index')}}#new">NEW PRODUCTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="{{route('bestseller')}}#best">BESTSELLER</a>
                        </li>
                    </ul>
                </div>


                <div class="tab-content pro-tab-slider">
                    <div class="tab-pane fade show active" id="home">
                        <div class="home-pro-tab swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-multirow">
                            <div class="swiper-wrapper" style="width: 1508px; transform: translate3d(-301.5px, 0px, 0px); transition-duration: 0ms;">

                                {{--Special Seller--}}
                                @for ($i = 0; $i < 1; $i++)
                                    @for ($x = 0; $x < 6; $x++)

                                        @foreach($meals as $meal)
                                            <div class="swiper-slide" data-swiper-column="{{$x}}" data-swiper-row="{{$i}}" style="-webkit-box-ordinal-group: 6; order: 6; margin-top: 30px; width: 271.5px; margin-right: 30px;">
                                                <div class="h-t-pro">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                                <img src="{{$meal->image}}" style="height: 300px; width: 500px" alt="pro-img1" class="img-fluid">
                                                                <img src="{{$meal->image}}" style="height: 300px; width: 500px" alt="additional image" class="img-fluid additional-image">
                                                            </a>
                                                        </div>
                                                        <div class="Pro-lable">
                                                            <span class="p-text">Best</span>
                                                        </div>
                                                        <div class="pro-icn">
                                                            <a href="#" wire:click.prevent="addToWishList('{{ $meal->id}}', '{{$meal->name}}', '{{ $meal->price }}')" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                            <a href="#" wire:click.prevent="addToCart('{{ $meal->id }}', '{{ $meal->name }}', {{ ($meal->sale && $meal->sale->count() > 0) ? $meal->price * (100 - ($meal->sales ? $meal->sales->first()->percentage : 0)) / 100 : $meal->price }})" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                            <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal{{$meal->id}}"><i class="fa fa-eye"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="caption">
                                                        <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">{{$meal->name}}</a></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
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
                                    @endfor
                                @endfor
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        <div class="swiper-buttons">
                            <div class="content-buttons">
                                <div class="swiper-button-next swiper-button-disabled" tabindex="0" role="button" aria-label="Next slide" aria-disabled="true"></div>
                                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="false"></div>
                            </div>
                        </div>
                    </div>

                    {{--New Product--}}
                    <div class="tab-pane fade" id="new">
                        <div class="home-pro-tab swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-multirow">
                            <div class="swiper-wrapper" style="transition-duration: 300ms;">
                                @foreach($lmeals as $lmeal)
                                    <div class="swiper-slide" style="-webkit-box-ordinal-group: 6; order: 6; margin-top: 30px; width: 271.5px; margin-right: 30px;">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                        <img style="height: 300px; width: 500px" src="{{$lmeal->image}}" alt="{{$lmeal->name}}" class="img-fluid">
                                                        <img src="{{$lmeal->image}}" style="height: 300px; width: 500px" alt="{{$lmeal->image}}" class="img-fluid additional-image">
                                                    </a>
                                                </div>
                                                @if($lmeal->sales->first()?->percentage > 0)
                                                    <div class="Pro-lable">
                                                        <span class="p-discount">%{{number_format($lmeal->sales->first()->percentage)}}</span>
                                                    </div>
                                                @endif
                                                <div class="pro-icn">
                                                    <a href="#" wire:click.prevent="addToWishList('{{ $meal->id}}', '{{$meal->name}}', '{{ $meal->price }}')" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                    <a href="#" wire:click.prevent="addToCart('{{ $meal->id }}', '{{ $meal->name }}', {{ ($meal->sale && $meal->sale->count() > 0) ? $meal->price * (100 - ($meal->sales ? $meal->sales->first()->percentage : 0)) / 100 : $meal->price }})" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $meal->id}}"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">{{$lmeal->name}} ({{$lmeal->quantity}}km)</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                    <i class="fa fa-star e-star"></i>
                                                </div>
                                                <div class="Pro-lable">
                                                    @if($lmeal->sales->first() && $lmeal->sales->first()->percentage > 0)
                                                        <span class="p-discount">%{{number_format($lmeal->sales->first()->percentage)}}</span>
                                                        <span class="old-price"><del>{{$lmeal->price}} LE</del></span>
                                                    @else
                                                        <span class="old-price"><del>{{$lmeal->price}} LE</del></span>
                                                    @endif
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        <div class="swiper-buttons">
                            <div class="content-buttons">
                                <div class="swiper-button-next swiper-button-disabled" tabindex="0" role="button" aria-label="Next slide" aria-disabled="true"></div>
                                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="false"></div>
                            </div>
                        </div>
                    </div>

                    {{--Best PRODUCTS--}}
                    <div class="tab-pane fade" id="best">
                        <div class="home-pro-tab swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-multirow">
                            <div class="swiper-wrapper" style="transition-duration: 300ms;">
                                @foreach($smeals as $smeal)
                                    <div class="swiper-slide" style="-webkit-box-ordinal-group: 6; order: 6; margin-top: 30px; width: 271.5px; margin-right: 30px;">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="https://spacingtech.com/html/vegist-final/vegist/product.html">
                                                        <img src="{{$smeal->image}}" style="height: 300px; width: 500px" alt="pro-img1" class="img-fluid">
                                                        <img src="{{$smeal->image}}" style="height: 300px; width: 500px" alt="additional image" class="img-fluid additional-image">
                                                    </a>
                                                </div>
                                                <div class="Pro-lable">
                                                    <span class="p-text">New</span>
                                                </div>
                                                <div class="pro-icn">
                                                    <a href="#" wire:click.prevent="addToWishList('{{ $meal->id}}', '{{$meal->name}}', '{{ $meal->price }}')" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                                    <a href="#" wire:click.prevent="addToCart('{{ $meal->id }}', '{{ $meal->name }}', {{ ($meal->sale && $meal->sale->count() > 0) ? $meal->price * (100 - ($meal->sales ? $meal->sales->first()->percentage : 0)) / 100 : $meal->price }})" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                                    <a href="javascript:void(0)" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $meal->id}}"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3><a href="https://spacingtech.com/html/vegist-final/vegist/product.html">{{$smeal->name}} ({{$smeal->quantity}}Kg)</a></h3>
                                                <div class="rating">
                                                    <i class="fa fa-star b-star"></i>
                                                    <i class="fa fa-star b-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="pro-price">
                                                    @isset($smeal->sales->first()->percentage)
                                                        <span class="new-price">{{ number_format($smeal->price * (100 - $smeal->sales->first()->percentage) / 100, 2) }} LE</span>
                                                        <span class="old-price"><del>{{$smeal->price}} LE</del></span>
                                                    @else
                                                        <span class="old-price">{{$smeal->price}} LE</span>
                                                    @endisset
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        <div class="swiper-buttons">
                            <div class="content-buttons">
                                <div class="swiper-button-next swiper-button-disabled" tabindex="0" role="button" aria-label="Next slide" aria-disabled="true"></div>
                                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="false"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
