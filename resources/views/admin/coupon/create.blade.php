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
                                <li class="breadcrumb-item"><a href="{{route('admin.languages')}}"> الكوبونات </a>
                                </li>
                                <li class="breadcrumb-item active">إضافة كوبون
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
                                    <h4 class="card-title" id="basic-layout-form"> إضافة كوبون </h4>
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
                                        <form class="form" action="{{route('admin.coupons.store')}}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> بيانات الكوبون </h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> كود الكوبون </label>
                                                            <input type="text" value="" id="code"
                                                                   class="form-control"
                                                                   placeholder="ادخل اسم الكوبون  "
                                                                   name="code">
                                                            @error('code')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput2"> قيمة الكوبون </label>
                                                            <select name="type" class="select2 form-control">
                                                                <optgroup label="من فضلك أختر قيمة الكوبون ">
                                                                    <option value="fixed">Fixed</option>
                                                                    <option value="precent">Precent</option>
                                                                </optgroup>
                                                            </select>
                                                            @error('type')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> قيمة الكوبون</label>
                                                            <input type="text" value="" id="value"
                                                                   class="form-control"
                                                                   placeholder="ادخل قيمة الكوبون     "
                                                                   name="value">
                                                            @error('value')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> قيمة الكارت</label>
                                                            <select name="for" class="select2 form-control">
                                                                <optgroup label="من فضلك أختر نوع الكوبون ">
                                                                <option value="general">General</option>
                                                                <option value="provider">Provider</option>
                                                                <option value="branch">Branch</option>
                                                                <option value="items">Items</option>
                                                            </select>
                                                            @error('for')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="start_time">تاريخ بداية الكارت</label>
                                                            <input type="datetime-local" id="start_time" name="start_time" class="form-control">
                                                            @error('start_time')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="end_time">تاريخ انتهاء الكارت</label>
                                                            <input type="datetime-local" id="end_time" name="end_time" class="form-control">
                                                            @error('end_time')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


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
        <script>
            $(function (){
                $('#expiry_date').datetimepicker({
                    format: 'Y-MM-DD H:m:s',
                })
                .on('dp.change', function (ev){
                    var data = $('#expiry_date').val();
                    set('expiry_date', data);
                })
            })
        </script>
    @endpush
@endsection
