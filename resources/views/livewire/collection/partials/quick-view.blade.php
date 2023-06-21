@foreach($meals as $meal)
    <section class="quick-view">
        <div class="modal fade" id="exampleModal{{ $meal->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Product quickview</h5>
                        <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></a>
                    </div>
                    <div class="quick-veiw-area">
                        <div class="quick-image">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="image-1">
                                    <a href="javascript:void(0)" class="long-img">
                                        <img src="{{$meal->image}}" class="img-fluid" alt="image">
                                    </a>
                                </div>
                                <!-- Other tab panes -->
                            </div>
                            <!-- Quick slider -->
                            <ul class="nav nav-tabs quick-slider owl-carousel owl-theme owl-loaded owl-drag">
                                <!-- Tab items -->
                            </ul>
                        </div>
                        <div class="quick-caption">
                            <h4>{{$meal->name}}</h4>
                            <div class="quick-price">
                                @if ($meal->sales->isNotEmpty())
                                    <span class="new-price">
                                        {{ number_format($meal->price * (100 - $meal->sales->first()->percentage) / 100, 2) }} LE</span>
                                    <span class="old-price">
                                        <strike>£{{ number_format($meal->price, 2) }}</strike>
                                    </span>
                                @else
                                    <span class="new-price">
                                        {{ number_format($meal->price, 2) }}
                                    </span>
                                @endif
                            </div>
                            <div class="quick-rating">
                                <!-- Rating stars -->
                            </div>
                            <div class="pro-description">
                                <p>{{$meal->description}}</p>
                            </div>
                            <div class="pro-size">
                                <label>Size: </label>
                                <select>
                                    <!-- Size options -->
                                </select>
                            </div>
                            <div class="plus-minus">
                                <span>
                                    <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                    <input type="text" name="name" value="1">
                                    <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                </span>
                                <a href=#" class="quick-cart" wire:click.prevent="addToCart('{{ $meal->id }}', '{{ $meal->name }}', {{ ($meal->sale && $meal->sale->count() > 0) ? $meal->price * (100 - ($meal->sales ? $meal->sales->first()->percentage : 0)) / 100 : $meal->price }})"><i class="fa fa-shopping-bag"></i></a>
                                <a href="#" class="quick-wishlist" wire:click.prevent="addToWishList('{{ $meal->id}}', '{{$meal->name}}', '{{ $meal->price }}')"><i class="fa fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endforeach
