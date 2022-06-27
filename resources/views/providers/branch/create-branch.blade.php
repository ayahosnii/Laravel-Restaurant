@extends('providers.includes.layout')
@section('providers-containers')
    <!-- order history start -->
    <section class="order-histry-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="order-history">
                        <div class="branch-form">
                            <h3 class="create">Create A Branch</h3>
                            <form action="{{route('branch.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="pro-img">
                                    <div class="custom-file h-auto" style="display: block; height: auto!important;">
                                        <input type="file" name="image" class="file-upload custom-file-input hidden" id="input_scr" onchange="previewFile()" hidden>
                                        <label class="border-0 mb-0 cursor" for="restaurant-logo">
                                            <img src="{{asset('provider-assets/images/camera-icon.png')}}" id="img_scr" alt="img" class="img-fluid" style="width: 130px; height: 130px">
                                            <span id="img_here"></span>
                                            <img src="{{asset('provider-assets/images/camera-icon.png')}}" id="img_scr" alt="img" class="provider-rest-img d-none" style="width: 130px; height: 130px">

                                    </div>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>Branch's name</label>
                                        <input type="text" name="bran_name" placeholder="Branch's name" value="">
                                    </li>
                                    <li>
                                        <label>Branch's Category</label>
                                        <select class="custom-select text-gray font-body-md"  name="category_id" id="scategory_id" required>


                                            @foreach($cats as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat-> name  }}</option>
                                            @endforeach
                                        </select>                                    </li>
                                </ul>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>Branch's address (en)</label>
                                        <input type="text" name="bran_address_en" placeholder="Address" value="">
                                    </li>
                                    <li>
                                        <label>Branch's address (ar)</label>
                                        <input type="text" name="bran_address_ar" placeholder="Address" value="">
                                    </li>
                                </ul>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>Delivery price</label>
                                        <input type="text" name="deli_price" placeholder="Delivery price £" value="">
                                    </li>
                                    <li>
                                        <label>Phone number</label>
                                        <input type="text" name="bran_phone" placeholder="Phone number" value="">
                                    </li>
                                </ul>
                                    <ul class="pro-input-label">
                                    <li>
                                        <label>Password</label>
                                        <input type="password" name="director_password" placeholder="Password" value="">
                                    </li>
                                </ul>
                                <ul class="pro-input-label">
                                <li>
                                    <label>Work Hours</label>
                                    <textarea class="form__input form-control font-body-md" type="text" name="work_hours" placeholder="Work Hours" style="width: 600px; height: 100px; margin: 9px"></textarea>
                                     <label>Details In English</label>
                                    <textarea class="form__input form-control font-body-md" type="text" name="bran_en_details" placeholder="English Details" style="width: 600px; height: 100px; margin: 9px"></textarea>
                                    <label>Details In Arabic</label>
                                    <textarea class="form__input form-control font-body-md" type="text" name="bran_ar_details" placeholder="Arabic Details" style="width: 600px; height: 100px; margin: 9px"></textarea>
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
