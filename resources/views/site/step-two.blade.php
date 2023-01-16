<x-guest-layout>
    <section id="gtco-reservation" class="bg-fixed bg-white section-padding overlay" style="background-image: url({{asset('assets/img/reservation-bg.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-content bg-white p-5 shadow">
                        <div class="heading-section text-center">
                        <span class="subheading">
                            Step2
                        </span>
                            <h2>
                                Reservation
                            </h2>
                        </div>
                        <form method="POST" action="{{ route('reservations.store.step.two') }}">
                            @csrf
                            <div class="sm:col-span-6 pt-5">
                                <label for="status" class="block text-sm font-medium text-gray-700">Table</label>
                                <div class="mt-1">
                                    <select id="table_id" name="table_id"
                                            class="form-multiselect block w-full mt-1">
                                        @foreach ($tables as $table)
                                            <option value="{{ $table->id }}">
                                                {{ $table->name }}
                                                ({{ $table->guest_number }} Guests)
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('table_id')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mt-6 p-4 flex justify-between">
                                <a href="{{-- route('reservations.step.one') --}}"
                                   class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Previous</a>
                                <button type="submit"
                                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Make
                                    Reservation</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>

</x-guest-layout>
