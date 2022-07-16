@extends('layouts.base-vue')
@section('content')
    <section class="section-tb-padding blog-page">
        <div class="container">
            <div class="row">

                <div class="col">
                    <div class="blog-style-1-list" id="app">
                        <posts></posts>
                    </div>
                    <div class="all-page">
                        <span class="page-title">Showing 1 - 5 of 6 result</span>
                        <div class="page-number style-1">
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
@stop
