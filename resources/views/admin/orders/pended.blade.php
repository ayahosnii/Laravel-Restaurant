@extends('layouts.admin')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> اللغات </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active"> @lang('admin.orders')
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">جميع لغات الموقع </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li class="breadcrumb-item active"><a href="{{route('admin.languages')}}">الرئيسية</a>
                                            </li>
                                            <li class="breadcrumb-item active"><a href="{{route('admin.languages')}}">اللغات</a>
                                            </li>
                                            <li class="breadcrumb-item "> <a href="{{route('admin.orders.pended')}}"> @lang('admin.pended')</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table
                                            class="table display nowrap table-striped table-bordered ">
                                            <thead>
                                            <tr>
                                                <th> اسم الكوبون</th>
                                                <th>نوع الكوبون</th>
                                                <th>قيمة الكوبون</th>
                                                <th>نوع الكارت</th>
                                                <th>تاريخ الانتهاء</th>
                                                <th>الإجراءات</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @isset($coupons)
                                                @foreach($coupons as $coupon)
                                            <tr>
                                                <td> {{$coupon -> code}}</td>

                                                <td> {{$coupon -> type}}  </td>

                                                @if($coupon -> type == 'fixed')
                                                <td>{{$coupon -> value}}$</td>
                                                @else
                                                    <td>{{$coupon -> value}}%</td>
                                                @endif
                                                    <td>{{$coupon -> for}}</td>
                                                <td>{{$coupon -> end_time}}</td>
                                                <td>
                                                    <div class="btn-group" role="group"
                                                         aria-label="Basic example">
                                                        <a href="{{route('admin.coupons.edit', $coupon-> id)}}"
                                                           class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>

                                                        <div class="btn-group" role="group"
                                                             aria-label="Basic example">
                                                            <a href="{{--route('admin.coupon.delete', $coupon-> id)--}}"
                                                               class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>

                                                    </div>
                                                </td>
                                            </tr>
                                                @endforeach
                                            @endisset




                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
