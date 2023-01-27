<x-guest-layout>
    <section id="gtco-reservation" class="bg-fixed bg-white section-padding overlay" style="background-image: url({{asset('assets/img/reservation-bg.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-content bg-white p-5 shadow">
                        <div class="heading-section text-center">
                        <span class="subheading">
                            Step1
                        </span>
                            <h2>
                                Reservation
                            </h2>
                        </div>
                        <form method="POST" action="{{ route('reservations.store.step.one') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control"
                                           value="{{ $user->name ?? '' }}" id="name" name="name" placeholder="Name">
                                </div>
                                @error('name')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror

                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control"
                                           value="{{ $user->email ?? '' }}" id="email" name="email" placeholder="Email">
                                </div>

                                @error('email')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror

                                <div class="col-md-12 form-group">
                                    <input type="number" class="form-control"
                                           value="{{ $user->mobile ?? '' }}" id="mobile" name="mobile" placeholder="Phone">
                                </div>
                                @error('mobile')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror

                                <div class="col-md-12 form-group">
                                    <select name="provider_id" class="form-control" id="selectProvider">
                                        <optgroup label="Please Choose Branch">
                                        @foreach($providers as $provider)
                                            <option value="{{ $provider->id }}">{{ $provider->name }}</option>
                                        @endforeach
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="col-md-12 form-group">
                                    <select name="branch_id" class="form-control" id="selectBranch">
                                    </select>
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="res_date" class="block text-sm font-medium text-gray-700"> Reservation
                                        Date
                                    </label>
                                    <div class="mt-1">
                                        <input type="datetime-local" id="res_date" name="res_date"
                                               min="{{ $min_date->format('Y-m-d\TH:i:s') }}"
                                               max="{{ $max_date->format('Y-m-d\TH:i:s') }}"
                                               value="{{ $reservation ? $reservation->res_date->format('Y-m-d\TH:i:s') : '' }}"
                                               class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                    <span class="text-xs">Please choose the time between 17:00-23:00.</span>
                                    @error('res_date')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="guest_number" class="block text-sm font-medium text-gray-700"> Guest
                                        Number
                                    </label>
                                    <div class="mt-1">
                                        <input type="number" id="guest_number" name="guest_number"
                                               value="{{ $reservation->guest_number ?? '' }}"
                                               class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                    @error('guest_number')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Next</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
@section('scripts')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            console.log('done')
            $(document).ready(function () {
                console.log('done')

                $('#selectProvider').on('change', function () {
                    var idBranch = this.value;
                    console.log(idBranch)
                    $("#selectBranch").html('');
                    $.ajax({
                        url: "{{url('api/fetch-branches')}}",
                        type: "POST",
                        data: {
                            branch_id: idBranch,
                            _token: '{{csrf_token()}}'
                        },
                        dataType: 'json',
                        success: function (res) {
                            console.log(res)
                            $('#selectBranch').html('<option value="">-- Select Branch --</option>');
                            $.each(res.branches, function (key, value) {
                                $("#selectBranch").append('<option value="' + value
                                    .id + '">' + value.name + '</option>');
                            });
                        }
                    });
                });

            });
        </script>

    @stop

</x-guest-layout>
