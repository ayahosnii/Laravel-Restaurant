@extends('providers.includes.layout')
@section('providers-containers')
    <!-- order history start -->
    <section class="aya order-histry-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section>
                        <!--for demo wrap-->
                        <h1>Your Tables</h1>
                        <div class="tbl-header">
                            <table cellpadding="0" cellspacing="0" border="0">
                                <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Guest Number</th>
                                    <th>Status</th>
                                    <th>Location</th>
                                    <th>Branch</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="tbl-content">
                            <table cellpadding="0" cellspacing="0" border="0">
                                <tbody>
                                @foreach($tables as $table)
                                <tr>
                                    <td>{{$table->id}}</td>
                                    <td>{{$table->name}} </td>
                                    <td>{{$table->guest_number}} </td>
                                    <td>{{$table->status}}</td>
                                    <td>{{$table->location}}</td>
                                    <td>{{$table->branch->name}}</td>

                                    <td>
                                        <a href="#" ><i class="fa-solid fa-eye"></i></a>
                                        <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="#"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </section>


                    <!-- follow me template -->
                    <div class="made-with-love">
                        Made with
                        <i>♥</i> by
                        <a target="_blank" href="https://codepen.io/nikhil8krishnan">Nikhil Krishnan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic form layout section end -->
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
