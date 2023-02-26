@extends('layouts.admin')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('admin.meals')}}">المنتجات</a>
                                </li>
                                <li class="breadcrumb-item active">إضافة منتج
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> إضافة منتج </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form" action="{{route('admin.meals.store')}}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> بيانات المنتج </h4>
                                                <div class="form-group">
                                                    <label> صورة المنتج </label>
                                                    <label id="projectinput7" class="file center-block">
                                                        <input type="file" id="file" name="image">
                                                        <span class="file-custom"></span>
                                                    </label>
                                                    @error('image')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 ">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> السعر الأصلي</label>
                                                            <input type="text" id="regular_price"
                                                                   class="form-control"
                                                                   placeholder=""
                                                                   name="regular_price">
                                                            @error("regular_price")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 ">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> السعر بعد الخصم</label>
                                                            <input type="text" id="sale_price"
                                                                   class="form-control"
                                                                   placeholder=""
                                                                   name="sale_price">
                                                            @error("sale_price")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 ">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> Calories</label>
                                                            <input type="text" id="SKU"
                                                                   class="form-control"
                                                                   placeholder=""
                                                                   name="SKU">
                                                            @error("SKU")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput2"> حالة المخزون </label>
                                                            <select name="stock_status" class="select2 form-control">
                                                                <optgroup label="من فضلك أختر حالة المخزون ">
                                                                    <option>instock</option>
                                                                    <option>outofstock</option>
                                                                </optgroup>
                                                            </select>
                                                            @error('stock_status')
                                                            <span class="text-danger"> {{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                            @if(get_languages() -> count() > 0)
                                                    @foreach(get_languages() as $index => $lang)
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">{{__('messages.' .$lang -> abbr)}} الاسم </label>
                                                                    <input type="text" value="" id="name"
                                                                           class="form-control"
                                                                           placeholder=""
                                                                           name="product[{{$index}}][name]">
                                                                    @error("product.$index.name")
                                                                    <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput2"> أختر القسم {{__('messages.' .$lang -> abbr)}} </label>
                                                                    <select name="product[{{$index}}][category_id]"  class="select2 form-control">
                                                                        <optgroup label="من فضلك أختر القسم ">
                                                                            @if($categories && $categories -> count() > 0)
                                                                                @foreach($categories as $category)
                                                                                    <option
                                                                                        value="{{$category -> id }}">{{$category -> name}}</option>
                                                                                @endforeach
                                                                            @endif
                                                                        </optgroup>
                                                                    </select>
                                                                    @error('product.$index.category_id')
                                                                    <span class="text-danger"> {{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>




                                                            <div class="col-md-6 hidden">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> اختصار اللغة - {{__('messages.'.$lang -> abbr)}}</label>
                                                                    <input type="text" id="abbr"
                                                                           class="form-control"
                                                                           placeholder=""
                                                                           value="{{$lang -> abbr}}"
                                                                           name="product[{{$index}}][abbr]">
                                                                    @error("product.$index.abbr")
                                                                    <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                         <div class="row">
                                                <div class="col-md-12 ">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> الوصف </label>
                                                        <textarea type="text" id="description"
                                                               class="form-control"
                                                               placeholder=""
                                                                 name="product[{{$index}}][description]"></textarea>
                                                        @error("product.$index.description")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mt-1">
                                                        <input type="checkbox" name="product[{{$index}}][active]"
                                                               id="switcheryColor4" value="1"
                                                               class="switchery" data-color="success"
                                                               checked/>
                                                        <label for="switcheryColor4"
                                                               class="card-title ml-1"> الحالة </label>
                                                        @error("product.$index.active")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mt-1">
                                                        <input type="checkbox" name="featured"
                                                               id="switcheryColor4" value="0"
                                                               class="switchery" data-color="success"
                                                               />
                                                        <label for="switcheryColor4"
                                                               class="card-title ml-1"> مميز </label>
                                                        @error("featured")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                                                    @endforeach
                                                @endif
                                <div class="form-actions">
                                    <button type="button" class="btn btn-warning mr-1"
                                            onclick="history.back();">
                                        <i class="ft-x"></i> تراجع
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i> حفظ
                                    </button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </section>
        <!-- // Basic form layout section end -->
    </div>
    </div>
    </div>

@push('scripts-push')
    <script src="https://cdn.tiny.cloud/1/2hiuvs7pfrjea2zdpl7ldavojp466ihbpx4p57jxkzrr6osc/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        $(function(){
           tinymce.init({
               selector:'#short_description',
               setup:function (editor){
                   editor.on('Change',function (){
                       tinyMCE.triggerSaver();
                       var sd_data = $('#short_description').val();
                       set('short_description', sd_data);
                   })
               }
           })

            tinymce.init({
                selector:'#description',
                setup:function (editor){
                    editor.on('Change',function (){
                        tinyMCE.triggerSaver();
                        var sd_data = $('#description').val();
                        set('description', sd_data);
                    })
                }
            })
        });
    </script>
@endpush
@endsection
