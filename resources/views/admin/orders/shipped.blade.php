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
                                                <th>Username</th>
                                                <th>Address</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th>نوع الكارت</th>
                                                <th>تاريخ الانتهاء</th>
                                                <th>الإجراءات</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @isset($orders)
                                                @foreach($orders as $order)
                                                    <tr>
                                                        <td> {{$order -> user->name}}</td>


                                                        <td>{{$order -> address}}</td>
                                                        <td>{{$order -> total}} LE</td>
                                                        <td>{{$order -> status}}</td>
                                                        <td>{{$order -> latitus}}</td>
                                                        <td>{{$order -> longitude}}</td>
                                                        <td>
                                                            <div class="order-status" data-id="{{$order->id}}" data-status="{{$order->status}}">
                                                                <select>
                                                                    <option value="ordered" {{ $order->status == 'ordered' ? 'selected' : '' }}>Pending</option>
                                                                    <option value="shipped" {{ $order->status == 'shipped' ? 'selected' : '' }}>Shipped</option>
                                                                    <option value="canceled" {{ $order->status == 'canceled' ? 'selected' : '' }}>Cancel</option>
                                                                    <option value="delivered" {{ $order->status == 'delivered' ? 'selected' : '' }}>Delivered</option>
                                                                </select>
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
@push('scripts-push')
    <script>
        console.log('work')
        $(document).on('change', '.order-status select', function (){
            console.log('changed')
            var $this = $(this);
            var orderId = $this.closest('.order-status').attr('data-id')
            var statusValue = $this.val()
            console.log(statusValue)

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{route('admin.orders.updateStatus', ':id')}}".replace(':id', orderId),
                type: 'PUT',
                data: {status: statusValue},
                success: function (response){
                    console.log(response)
                    if(response.success) {
                        $this.closest('.order-status').attr('data-status', statusValue)
                        console.log('success')
                    }
                },
                error: function (xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });

        })
    </script>

@endpush
