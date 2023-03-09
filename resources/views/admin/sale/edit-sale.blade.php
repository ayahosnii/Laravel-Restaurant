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
                                            <h1>Update the sale</h1>
                                            <form method="POST" action="{{ route('admin.sales.update') }}">
                                                @csrf
                                                <input type="text" name="sale_id" id="sale_id" class="form-control" value="{{$sale->id}}" hidden required>

                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" name="name" id="name" class="form-control" value="{{$sale->name}}" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="starts_date">Start Date</label>
                                                    <input type="datetime-local" name="starts_date" id="starts_date" value="{{$sale->starts_at}}" class="form-control" required>
                                                </div>


                                                <div class="form-group">
                                                    <label for="ends_date">End Date</label>
                                                    <input type="datetime-local" name="ends_date" id="ends_date" value="{{$sale->ends_at}}" class="form-control" required>
                                                </div>


                                                <div class="form-group">
                                                    <label for="percentage">Percentage (%)</label>
                                                    <input type="number" name="percentage" id="percentage" value="{{$sale->percentage}}" class="form-control" required>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label for="meal_id">Choose Meals</label>
                                                    <select name="meal_id[]" class="select2 col-md-12"  multiple>
                                                        @foreach($meals as $meal)
                                                            <option value="{{ $meal->id }}">{{ $meal->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @php
                                                        $selected_meal_ids = $selected_meals->pluck('id')->toArray();
                                                    @endphp
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox" name="is_flash_sale"
                                                                   id="switcheryColor4" value="1"
                                                                   class="switchery" data-color="success"
                                                                   checked/>
                                                            <label for="switcheryColor4"
                                                                   class="card-title ml-1"> @lang('messages.flash') </label>

                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Update the Sale</button>
                                            </form>
                                        </div>
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


                $('select').val({!! json_encode($selected_meal_ids) !!}).trigger('change');

            $(document).ready(function() {
                $('#switcheryColor4').change(function() {
                    if (!$(this).is(':checked')) {
                        $(this).prop('value', '0');
                    } else {
                        $(this).prop('value', '1');
                    }
                });
            });

            document.querySelector('#submit-button').addEventListener('click', function() {
                console.log('Submit button clicked');
                // Check if form is valid before submitting
                if (document.querySelector('form').checkValidity()) {
                    console.log('Form is valid');
                    // Submit the form
                    document.querySelector('form').submit();
                } else {
                    console.log('Form is invalid');
                }
            });


        </script>
    @endpush
@endsection
