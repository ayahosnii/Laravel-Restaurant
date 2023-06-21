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
                        @if($meal->sales->first()?->percentage > 0)
                            <div class="Pro-lable">
                                <span class="p-discount">%{{number_format($meal->sales->first()->percentage)}}</span>
                            </div>
                        @endif
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

<div class="list-all-page">
    <span class="page-title">Showing {{ $meals->firstItem() }} - {{ $meals->lastItem() }} of {{ $meals->total() }} results</span>
    <div class="page-number">
        {{ $meals->links() }}
    </div>
</div>
