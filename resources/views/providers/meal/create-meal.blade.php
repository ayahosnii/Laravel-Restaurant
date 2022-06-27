@extends('providers.includes.layout')
@section('providers-containers')
    <!-- order history start -->
    <section class="order-histry-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="order-history">
                        <div class="branch-form">
                            <h3 class="create">Create A Meal</h3>
                            <form action="{{route('meals.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="pro-img">
                                    <div class="custom-file h-auto" style="display: block; height: auto!important;">
                                        <input type="file" name="image" class="file-upload custom-file-input hidden" id="input_scr" onchange="previewFile()" hidden>
                                        <label class="border-0 mb-0 cursor" for="restaurant-logo">
                                            <img src="{{asset('provider-assets/images/camera-icon.png')}}" id="img_scr" alt="img" class="img-fluid" style="width: 130px; height: 130px">
                                            <span id="img_here"></span>
                                            <img src="{{asset('provider-assets/images/camera-icon.png')}}" id="img_scr" alt="img" class="provider-rest-img d-none" style="width: 130px; height: 130px">

                                    </div>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>Meal's name (ar)</label>
                                        <input type="text" name="ar_name" placeholder="Meal's name (ar)" value="">
                                    </li>
                                    <li>
                                        <label>Meal's name (en)</label>
                                        <input type="text" name="en_name" placeholder="Meal's name (en)" value="">
                                    </li>
                                </ul>
                                    <ul class="pro-input-label">
                                        <li>
                                            <label>Meal's Branch</label>
                                            <select class="custom-select text-gray font-body-md"  name="branch_id" id="branch_id" required>
                                                <optgroup label="Please choose the branch">
                                                    @if($branches && $branches -> count() > 0)
                                                        @foreach($branches as $branch)
                                                            <option
                                                                value="{{$branch -> id }}">{{$branch -> name }}</option>
                                                        @endforeach
                                                    @endif
                                                </optgroup>
                                            </select>
                                        </li>
                                        <li>
                                            <label>Meal's Category [of your restaurant]</label>
                                            <select class="custom-select text-gray font-body-md"  name="category_id" id="category_id" required>
                                                <optgroup label="Please choose the category">
                                                    @if($categories && $categories -> count() > 0)
                                                        @foreach($categories as $category)
                                                            <option
                                                                value="{{$category -> id }}">{{$category -> name }}</option>
                                                        @endforeach
                                                    @endif
                                                </optgroup>
                                            </select>
                                        </li>
                                    </ul>
                                    <ul class="pro-input-label">
                                        <li>
                                            <label>Meal's MainCategory [of the site]</label>
                                            <select class="category-ajax-request custom-select text-gray font-body-md" data-action="{{ url('/providers/sub-categories') }}"  name="maincate_id" id="maincate_id" required>
                                                <optgroup label="Please choose the category">
                                                    @if($main_categories && $main_categories -> count() > 0)
                                                        @foreach($main_categories as $main_category)
                                                            <option
                                                                value="{{$main_category -> id }}">{{$main_category -> name }}</option>
                                                        @endforeach
                                                    @endif
                                                </optgroup>
                                            </select>
                                        </li>
                                        <li>
                                            <label>Meal's SubCategory [of the site]</label>
                                            <select class="sub-cate-ajax-request custom-select text-gray font-body-md"  name="sub_cat" id="sub_cat" required>
                                                <optgroup label="Please choose the category">
                                                    @if($sub_cats && $sub_cats -> count() > 0)
                                                        @foreach($sub_cats as $sub_cat)
                                                            <option
                                                                value="{{$sub_cat -> id }}">{{$sub_cat -> name }}</option>
                                                        @endforeach
                                                    @endif
                                                </optgroup>
                                            </select>
                                        </li>
                                    </ul>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>Calories</label>
                                        <input type="text" name="calories" placeholder="Calories" value="">
                                    </li>
                                    <li>
                                        <label>Price</label>
                                        <input type="text" name="price" placeholder="Price" value="">
                                    </li>
                                </ul>

                                <ul class="pro-input-label">
                                <li>
                                     <label>Details In English</label>
                                    <textarea class="form__input form-control font-body-md" type="text" name="en_details" placeholder="English Details" style="width: 600px; height: 100px; margin: 9px"></textarea>
                                    <label>Details In Arabic</label>
                                    <textarea class="form__input form-control font-body-md" type="text" name="ar_details" placeholder="Arabic Details" style="width: 600px; height: 100px; margin: 9px"></textarea>
                                </li>

                                </ul>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mt-1">
                                                <span>Publish</span>
                                                <input type="checkbox" value="1" name="published" id="s6" checked="" hidden />
                                                <label class="slider-v3" for="s6" style="margin-bottom: 9px"></label>

                                                @error("published")
                                                <span class="text-danger">{{$message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                <ul class="pro-submit">
                                    <li>
                                        <button type="submit"  class="btn btn-style1">Add the meal</button>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- order history end -->
    @stop
@section('meal-script')
    <script>
        $(document).ready(function() {


            var baseUrl = $('meta[name="base-url"]').attr('content');

            $(".category-ajax-request").on('change', function () {
                var id = $(this).find(":selected").val();

                if (id == "") {
                    $(".sub-cate-ajax-request").html("<option value=''>برجاء تحديد الدولة اولا</option>");
                    $(".sub-cate-ajax-request").focus();
                    return false;
                }

                var url = $(this).attr("data-action");

                var data = new FormData();
                data.append("category", id);

                request(url, "POST", data, function () {
                }, function (data) {
                    $(".sub-cate-ajax-request").html("<option value=''>يرجى تحديد المدينة</option>");
                    $.each(data.cities, function (k, v) {
                        $(".sub-cate-ajax-request").append("<option value='" + v.id + "'>" + v.name + "</option>");
                        $(".sub-cate-ajax-request").focus();
                    })

                }, function (error) {

                });
            });
        });
    </script>
@stop
