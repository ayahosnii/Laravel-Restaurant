@extends('layouts.base-vue')
@section('content')
    <section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="all-filter">
                        <div class="categories-page-filter">
                            <h4 class="filter-title">Categories</h4>
                            <form method="post" id="generate-ideas-form">
                                @csrf
                                <div class="form-group">
                                    <select id="vegetables" name="vegetables[]" multiple class="form-control select2">
                                        <!-- Loop through the $vegetables array to create the options -->
                                        @foreach($vegetables as $vegetable)
                                            <option value="{{ $vegetable->name }}">{{ $vegetable->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button id="generate-btn" type="button" class="btn btn-primary">Generate Meal Ideas</button>
                            </form>

                            <div id="meal-ideas"></div>
                            <img id="meal-photo" src="" alt="Meal Photo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#generate-btn').click(function (event) {
                event.preventDefault();
                $('#generate-ideas-form').submit();
            });

            $('#generate-ideas-form').on('submit', function(event) {
                event.preventDefault();
                $.ajax({
                    url: "{{ route('generate-ideas.create') }}",
                    method: "POST",
                    data: $('#generate-ideas-form').serialize(),
                    dataType: "json",

                    success: function (response) {
                        $('#meal-ideas').html(response.meal);
                        $('#meal-photo').attr('src', response.photo_url);
                    },
                    error: function (xhr, status, error) {
                        alert("An error occurred while generating meal ideas.");
                    }
                })
            });

            $('#vegetables').select2({
                placeholder: 'Select vegetables',
            });
        });
    </script>
@endsection
