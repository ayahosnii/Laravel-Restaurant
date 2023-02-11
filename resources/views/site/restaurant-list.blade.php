@extends('layouts.base-vue')
@section('content')
    <section class="section-tb-padding blog-page">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="blog-style-7-3-grid">
                        @foreach($branches as $branch)
                        <div class="blog-start">
                            <div class="blog-image">
                                <a href="{{route('restaurant.details', $branch->user_name)}}">
                                    <img src="{{asset($branch->logo)}}" class="img-fluid" alt="b-image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h6><a href="{{route('restaurant.details', $branch->user_name)}}">{{$branch->name}}</a></h6>
                                </div>
                                <p class="blog-description">{{$branch->en_details}}</p>
                                <div class="more-blog">
                                    <a href="https://spacingtech.com/html/vegist-final/vegist/blog-style-7-details.html" class="read-link">
                                        <span>Read more</span>
                                        <i class="ti-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="all-page">
                        <span class="page-title">Showing 1 - 5 of 6 result</span>
                        <div class="page-number style-7">
                            <a href="javascript:void(0)" class="active">1</a>
                            <a href="javascript:void(0)">2</a>
                            <a href="javascript:void(0)">3</a>
                            <a href="javascript:void(0)">4</a>
                            <a href="javascript:void(0)">5</a>
                            <a href="javascript:void(0)"><i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- grid-list start -->
<!-- quick veiw start -->
@include('site.quickview')
@include('site.includes.not-logged')
@include('site.includes.not-logged')
@include('site.includes.alert')   <!-- we can use only one with dynamic text -->
@include('site.includes.alert2')
</section>
@stop
@section('scripts')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on('click', '#addToWishlist', function (e) {
            e.preventDefault();
            @guest()
            $('.not-loggedin-modal').css('display','block');
            @endguest
            $.ajax({
                type: 'post',
                url: "{{Route('wishlist.store')}}",
                data: {
                    'productId': $(this).attr('data-product-id'),
                },
                /*success: function (data) {
                    if(data.wished) {
                        $('.alert-modal1').css('display', 'block');
                    }else {
                        $('.alert-modal2').css('display', 'block');
                    }
                }*/
            });
        });
        var completedIncrements =  [];
        $(document).on('click', '.cart-addition', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'post',
                url: "{{Route('site.cart.add')}}",
                data: {
                    'product_id': $(this).attr('data-product-id'),
                    'product_slug' : $(this).attr('data-product-slug'),
                },
                success: function (data) {
                    console.log(completedIncrements.indexOf(this.id));

                    if (completedIncrements.indexOf(this.class) == -1) {
                        var count = parseInt($(".bigcounter").text());
                        $(".bigcounter").html(count + 1);

                        completedIncrements.push(this.id);
                    }
                }
            });
        });
    </script>

@stop
