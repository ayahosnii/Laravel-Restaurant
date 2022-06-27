@extends('providers.includes.layout')
@section('providers-containers')
    <!-- order history start -->
    <section class="order-histry-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="order-history">
                        <div class="branch-form">
                            <h3 class="create">Create A Category</h3>
                            <form action="{{route('providers.categories.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label> صوره القسم </label>
                                    <input type="file" name="image" class="file-upload custom-file-input hidden" id="input_scr" onchange="previewFile()" hidden>
                                    <label class="border-0 mb-0 cursor" for="restaurant-logo">
                                        <img src="{{asset('provider-assets/images/camera-icon.png')}}" id="img_scr" alt="img" class="img-fluid" style="width: 130px; height: 130px">
                                        <span id="img_here"></span>
                                        <img src="{{asset('provider-assets/images/camera-icon.png')}}" id="img_scr" alt="img" class="provider-rest-img d-none" style="width: 130px; height: 130px">

                                        <span class="file-custom"></span>
                                    </label>
                                    @error('photo')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-body">

                                    <h4 class="form-section"><i class="ft-home"></i> بيانات القسم </h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1"> اسم القسم
                                                </label>
                                                <input type="text" id="name"
                                                       class="form-control"
                                                       placeholder="  "
                                                       value="{{old('name')}}"
                                                       name="name">
                                                @error("name")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1"> اسم بالرابط
                                                </label>
                                                <input type="text" id="name"
                                                       class="form-control"
                                                       placeholder="  "
                                                       value="{{old('slug')}}"
                                                       name="slug">
                                                @error("slug")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row hidden" id="cats_list" >
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="projectinput1"> اختر القسم الرئيسي
                                                </label>
                                                <select name="parent_id" class="select2 form-control">
                                                    <optgroup label="من فضلك أختر القسم ">
                                                        @if($categories && $categories -> count() > 0)
                                                            @foreach($categories as $category)
                                                                <option
                                                                    value="{{$category -> id }}">{{$category -> name }}</option>
                                                            @endforeach
                                                        @endif
                                                    </optgroup>
                                                </select>
                                                @error('parent_id')
                                                <span class="text-danger"> {{$message}}</span>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mt-1">
                                                <span>الحالة</span>
                                                <input type="checkbox" value="1" name="is_active" id="s6" checked="" hidden />
                                                <label class="slider-v3" for="s6" style="margin-bottom: 9px"></label>

                                                @error("is_active")
                                                <span class="text-danger">{{$message }}</span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="col-md-3">
                                            <div>
                                                <input type="radio" name="type" id="radio2" class="radio" value="1"/>
                                                <label for="radio2">قسم رئيسي</label>
                                            </div>
                                            @error("type")
                                            <span class="text-danger">{{$message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-3">
                                            <div>
                                                <input type="radio" name="type" id="radio3" class="radio" value="2"/>
                                                <label for="radio3">قسم فرعي</label>
                                                @error("type")
                                                <span class="text-danger">{{$message }}</span>
                                                @enderror
                                            </div>



                                            </div>
                                        </div>
                                    </div>


                        <ul class="pro-submit">
                            <li>
                                <button type="submit"  class="btn btn-style1" style="margin: 20px;">Update profile</button>
                            </li>
                        </ul>
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

@stop

{{--
@section('script')

    <script>
        $('input:radio[name="type"]').change(
            function(){
                if (this.checked && this.value == '2') {  // 1 if main cat - 2 if sub cat
                    $('#cats_list').removeClass('hidden');
                }else{
                    $('#cats_list').addClass('hidden');
                }
            });
    </script>
@stop
                                </li>

                                </ul>
                                <ul class="pro-submit">
                                    <li>


                                        <button type="submit"  class="btn btn-style1">Update profile</button>
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
--}}
