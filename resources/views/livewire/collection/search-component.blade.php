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
            <div class="col-lg-9 col-md-8 col-12">
                <div class="grid-list-banner" style="background-image: url({{asset('assets/img/slider17.jpg')}});">
                    <div class="grid-banner-content">
                        <h4>this page is using livewire</h4>
                        <a href="{{route('restaurant.ajax')}}">Go to ajax page <i class="fa-solid fa-link"></i></a></div>
                </div>
                <div class="grid-list-area">
                    <div class="grid-list-select">
                        <ul class="grid-list">
                            <a href="{{route('restaurant.all')}}" class="btn btn-warning">All restaurant</a>
                        </ul>
                        <ul class="grid-list-selector">
                            <li>
                                <label>Sort by</label>
                                <select wire:model="sorting">
                                    <option>Featured</option>
                                    <option>Best selling</option>
                                    <option value="alphabet">Alphabetically,A-Z</option>
                                    <option value="alphabet-desc">Alphabetically,Z-A</option>
                                    <option value="price">Price, low to high</option>
                                    <option value="price-desc">Price, high to low</option>
                                    <option value="date-desc">Date new to old</option>
                                    <option value="date">Date old to new</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                    <div class="grid-pro">
                        <ul class="grid-product">
                            @isset($meals)
                                @foreach($meals as $meal)
                                    <li class="grid-items">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="{{route('meal.details',['name'=>$meal->name])}}">
                                                    <img class="img-fluid" style="height: 300px; width: 500px"  src="{{asset($meal->image)}}" alt="pro-img1">
                                                    <img class="img-fluid additional-image" style="height: 300px; width: 500px" src="{{asset($meal->image)}}" alt="additional image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-text">New</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="{{route('meal.details', ['name'=>$meal->name])}}" class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $meal->id}}"><i class="fa fa-eye"></i></a>
                                                <a href="#" class="w-c-q-icn" wire:click.prevent="addToWishList('{{ $meal->id}}', '{{$meal->name}}', '{{ $meal->price }}')"><i class="fa fa-heart"></i></a>
                                                <a href="#" wire:click.prevent="addToCart('{{ $meal->id }}', '{{ $meal->name }}', {{ ($meal->sale && $meal->sale->count() > 0) ? $meal->price * (100 - ($meal->sales ? $meal->sales->first()->percentage : 0)) / 100 : $meal->price }})" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            </div>

                                        </div>
                                        <div class="caption">
                                            <a href="{{route('meal.details',['name'=>$meal->name])}})}}" class="sb-menu-item sb-menu-item-sm sb-mb-15">
                                                <div class="sb-card-tp">
                                                    <h4 class="sb-card-title">{{ $meal->name }} / {{ $meal->provider->name }}</h4>
                                                    @if ($meal->sales->isNotEmpty())
                                                        <div class="sb-price">
                                                            <sub class="original-price">
                                                                <strike>£{{ number_format($meal->price, 2) }}</strike>

                                                            </sub>
                                                            <br>
                                                            <sub class="discounted-price">
                                                                <strong style="font-size: 13px"> £{{ number_format($meal->price * (100 - $meal->sales->first()->percentage) / 100, 2) }}</strong>
                                                            </sub>

                                                        </div>
                                                    @else
                                                        <div class="sb-price"><sub>
                                                                <strong style="font-size: 13px">
                                                                    £{{ number_format($meal->price, 2) }}
                                                                </strong>
                                                            </sub>
                                                        </div>

                                                    @endif
                                                </div>

                                            </a>
                                        </div>
                                    </li>
                                @endforeach
                            @endisset
                        </ul>
                    </div>
                </div>
                <div class="list-all-page">
                    <span class="page-title">Showing {{ $meals->firstItem() }} - {{ $meals->lastItem() }} of {{ $meals->total() }} results</span>
                    <div class="page-number">
                        {{ $meals->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('livewire.collection.partials.quick-view')

</section>

@push('scripts')
    <script>
        var sliderrange = $('#slider-range');
        var amountprice = $('#amount');
        $(function() {
            sliderrange.slider({
                range: true,
                min: 16,
                max: 400,
                values: [0, 300],
                slide: function(event, ui) {
                //amountprice.val("$" + ui.values[0] + " - $" + ui.values[1]);
                @this.set('min_price',ui.values[0]);
                @this.set('max_price',ui.values[1]);
                }
            });
        });
    </script>
@endpush
