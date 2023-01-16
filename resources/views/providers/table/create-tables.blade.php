@extends('providers.includes.layout')
@section('providers-containers')

    <section class="order-histry-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="order-history">
                        <div class="branch-form">
                            <h3 class="create">Create A Table</h3>
                            <form action="{{route('providers.tables.store')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-body pt-4">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1"> Name
                                                </label>
                                                <input type="text" id="name" name="name"
                                                       class="block w-full appearance-none bg-white border
                                                       border-gray-400 rounded-md py-2 px-3 text-base
                                                       leading-normal transition duration-150 ease-in-out
                                                       sm:text-sm sm:leading-5" />

                                                @error("name")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1"> Guest Number
                                                </label>
                                                <input type="number" id="guest_number" name="guest_number"
                                                       class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />

                                                @error("guest_number")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row hidden pt-5" id="location_status" >
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1"> Status
                                                </label>
                                                <select id="status" name="status" class="form-multiselect block w-full mt-1">
                                                    <optgroup label="Please choose status">
                                                            @foreach (App\Enums\TableStatus::status() as $key => $status)
                                                                <option value="{{ $key }}">{{ $status }}</option>
                                                            @endforeach
                                                    </optgroup>
                                                </select>
                                                @error('status')
                                                <span class="text-danger"> {{$message}}</span>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">  Location
                                                </label>
                                                <select id="location" name="location" class="form-multiselect block w-full mt-1">
                                                    <optgroup label="Please choose Location">
                                                            @foreach (App\Enums\TableLocation::locations() as $key => $location)
                                                                <option value="{{ $key }}">{{ $location }}</option>
                                                            @endforeach
                                                    </optgroup>
                                                </select>
                                                @error('location')
                                                <span class="text-danger"> {{$message}}</span>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row hidden pt-5" id="cats_list" >
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">Your Branch
                                                </label>
                                                <select id="branch" name="branch" class="form-multiselect block w-full mt-1">
                                                    <optgroup label="من فضلك أختر القسم ">
                                                        @if($branches && $branches -> count() > 0)
                                                                @foreach($branches as $branch)
                                                                    <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                                                @endforeach
                                                        @endif
                                                    </optgroup>
                                                </select>
                                                @error('branch')
                                                <span class="text-danger"> {{$message}}</span>
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


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('tables') }}"
                   class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Table Index</a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('providers.tables.store') }}">
                        @csrf
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name"
                                       class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('name')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="guest_number" class="block text-sm font-medium text-gray-700"> Guest Number
                            </label>
                            <div class="mt-1">
                                <input type="number" id="guest_number" name="guest_number"
                                       class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('guest_number')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <div class="mt-1">
                                <select id="status" name="status" class="form-multiselect block w-full mt-1">
                                    @foreach (App\Enums\TableStatus::status() as $key => $status)
                                        <option value="{{ $key }}">{{ $status }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('status')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                            <div class="mt-1">
                                <select id="location" name="location" class="form-multiselect block w-full mt-1">
                                    @foreach (App\Enums\TableLocation::locations() as $key => $location)
                                        <option value="{{ $key }}">{{ $location }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('location')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="sm:col-span-6 pt-5">
                            <label for="branch" class="block text-sm font-medium text-gray-700">Your Branch</label>
                            <div class="mt-1">
                                <select id="branch" name="branch" class="form-multiselect block w-full mt-1">
                                    @foreach($branches as $branch)
                                        <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('branch')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mt-6 p-4">
                            <button type="submit"
                                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store</button>
                        </div>
                    </form>
                </div>

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
