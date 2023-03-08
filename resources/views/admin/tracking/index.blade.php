@extends('layouts.admin')
@section('content')
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
                                <li class="breadcrumb-item active"> اللغات
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
                                            <li class="breadcrumb-item "> <a href="{{route('admin.languages.create')}}"> أضافة</a>
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
                                                <th> اسم العرض</th>
                                                <th>بداية العرض</th>
                                                <th>نهاية العرض</th>
                                                <th>الوجبة</th>
                                                <th>عرض فلاش</th>
                                                <th>القيمة</th>
                                                <th>الإجراءات</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @isset($orders)
                                                @foreach($orders as $order)
                                                    <tr>
                                                        <td> {{$order -> name}}</td>

                                                        <td> {{$order -> starts_at}}  </td>
                                                        <td> {{$order -> ends_at}}  </td>

                                                        @if($order -> meal_id == NULL)
                                                            <td>---</td>
                                                        @else
                                                            <td>{{$order -> meal_id}}%</td>
                                                        @endif
                                                        @if($order -> is_flash_sale == NULL)
                                                            <td>---</td>
                                                        @else
                                                            <td>{{$order -> is_flash_sale}}%</td>
                                                        @endif
                                                        <td>{{$order -> percentage}}</td>
                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="{{route('admin.sales.edit', $order-> id)}}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>

                                                                <div class="btn-group" role="group"
                                                                     aria-label="Basic example">
                                                                    <a href="{{ route('admin.sales.delete', $order->id) }}"
                                                                       class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1"
                                                                       onclick="event.preventDefault();
                                                                           document.getElementById('delete-form-{{ $order->id }}').submit();">
                                                                        @lang('messages.delete')
                                                                    </a>

                                                                    <form id="delete-form-{{ $order->id }}"
                                                                          action="{{ route('admin.sales.delete', $order->id) }}"
                                                                          method="POST"
                                                                          style="display: none;">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                    </form>


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

@endsection
