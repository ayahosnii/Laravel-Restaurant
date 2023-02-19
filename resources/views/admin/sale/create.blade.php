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
                                        <div class="container">
                                            <h1>Create a new sale</h1>
                                            <form method="POST" action="{{ route('admin.sales.store') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="start_date">Start Date</label>
                                                    <input type="date" name="start_date" id="start_date" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="end_date">End Date</label>
                                                    <input type="date" name="end_date" id="end_date" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="discount">Discount (%)</label>
                                                    <input type="number" name="discount" id="discount" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="items">Items</label>
                                                    <select name="items[]" id="items" class="form-control" multiple>
                                                        @foreach ($meals as $meal)
                                                            <option value="{{ $meal->id }}">{{ $meal->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Create Sale</button>
                                            </form>
                                        </div>                                    </div>
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
