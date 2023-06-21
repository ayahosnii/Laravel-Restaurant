@push('style')
    <style>
        .sb-price {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sb-price sub {
            margin-bottom: 10px;
        }
    </style>

@endpush
<section class="section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <!--All Filters-->
                <div class="all-filter">
                    <!--Filter By Categories-->
                @include('livewire.collection.filters.filter-category-section')

                <!--Filter By Provider-->
                @include('livewire.collection.filters.filter-provider')

                <!--Filter By Price-->
                @include('livewire.collection.filters.filter-price')

                <!--Filter By Tags-->
                @include('livewire.collection.filters.filter-tags')

                <!--Filter By Banner-->
                    @include('livewire.collection.filters.filter-banner')
                </div>
            </div>
            @include('livewire.collection.partials.grid-pro')
        </div>
    </div>
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
                                    <div class="tab-pane fade show" id="image-2">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="./products_files/prro-page-image01.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-3">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="./products_files/pro-page-image1-1.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-4">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="./products_files/pro-page-image1.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-5">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="./products_files/pro-page-image2.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-6">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="./products_files/pro-page-image2-2.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-7">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="./products_files/pro-page-image3.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="tab-pane fade show" id="image-8">
                                        <a href="javascript:void(0)" class="long-img">
                                            <img src="./products_files/pro-page-image03.jpg" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs quick-slider owl-carousel owl-theme owl-loaded owl-drag">








                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;"><div class="owl-item"><li class="nav-item items">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#image-1"><img src="./products_files/image1.jpg" class="img-fluid" alt="image"></a>
                                                </li></div><div class="owl-item"><li class="nav-item items">
                                                    <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#image-2"><img src="./products_files/image2.jpg" class="img-fluid" alt="iamge"></a>
                                                </li></div><div class="owl-item"><li class="nav-item items">
                                                    <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#image-3"><img src="./products_files/image3.jpg" class="img-fluid" alt="image"></a>
                                                </li></div><div class="owl-item"><li class="nav-item items">
                                                    <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#image-4"><img src="./products_files/image4.jpg" class="img-fluid" alt="image"></a>
                                                </li></div><div class="owl-item"><li class="nav-item items">
                                                    <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#image-5"><img src="./products_files/image5.jpg" class="img-fluid" alt="image"></a>
                                                </li></div><div class="owl-item"><li class="nav-item items">
                                                    <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#image-6"><img src="./products_files/image6.jpg" class="img-fluid" alt="image"></a>
                                                </li></div><div class="owl-item"><li class="nav-item items">
                                                    <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#image-7"><img src="./products_files/image8.jpg" class="img-fluid" alt="image"></a>
                                                </li></div><div class="owl-item"><li class="nav-item items">
                                                    <a class="nav-link" data-bs-toggle="tab" href="https://spacingtech.com/html/vegist-final/vegist/grid-list.html#image-8"><img src="./products_files/image7.jpg" class="img-fluid" alt="image"></a>
                                                </li></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></ul>
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
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-description">
                                    <p>{{$meal->description}}</p>
                                </div>
                                <div class="pro-size">
                                    <label>Size: </label>
                                    <select>
                                        <option>1 ltr</option>
                                        <option>3 ltr</option>
                                        <option>5 ltr</option>
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

</section>

@push('scripts')
    <script>
        var sliderrange = $('#slider-range');
        var amountprice = $('#amount');
        $(function() {
            sliderrange.slider({
                range: true,
                min: 0,
                max: 1000,
                values: [0, 1000],
                slide: function(event, ui) {
                    //amountprice.val("$" + ui.values[0] + " - $" + ui.values[1]);
                @this.set('min_price', ui.values[0]);
                @this.set('max_price', ui.values[1]);
                }
            });
        });
    </script>
@endpush
