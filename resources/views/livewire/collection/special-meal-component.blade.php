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
                @include('livewire.collection.partials.grid-list-banner')
                @include('livewire.collection.partials.grid-list-select')
                @include('livewire.collection.partials.grid-pro')
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
