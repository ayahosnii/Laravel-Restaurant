@extends('providers.includes.layout')
@section('providers-containers')
    <!-- order history start -->
    <section class="order-histry-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="order-history">
                        <div class="profile">
                            <div class="order-pro">
                                <div class="pro-img">
                                    <div class="custom-file h-auto" style="display: block; height: auto!important;">
                                        <label class="border-0 mb-0 cursor" for="restaurant-logo">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset($profile->images)}}" id="img_scr" alt="img" class="img-fluid"></a>
                                </div>
                                </div>
                                <div class="order-name">
                                    <h4>{{$profile->name}}</h4>
                                    <span>Joined {{$profile->created_at}}</span>
                                </div>
                            </div>
                            <div class="order-his-page">
                                <ul class="profile-ul">
                                    <li class="profile-li"><a href="https://spacingtech.com/html/vegist-final/vegist/order-history.html"><span>Orders</span> <span class="pro-count">5</span></a></li>
                                    <li class="profile-li"><a href="https://spacingtech.com/html/vegist-final/vegist/profile.html" class="active">Profile</a></li>
                                    <li class="profile-li"><a href="https://spacingtech.com/html/vegist-final/vegist/pro-addresses.html">Address</a></li>
                                    <li class="profile-li"><a href="https://spacingtech.com/html/vegist-final/vegist/pro-wishlist.html"><span>Wishlist</span> <span class="pro-count">3</span></a></li>
                                    <li class="profile-li"><a href="https://spacingtech.com/html/vegist-final/vegist/pro-tickets.html"><span>My tickets</span> <span class="pro-count">4</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="profile-form">
                            <form action="{{route('providers.profile.update', $profile->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="image" class="custom-file-input" id="input_scr" onchange="previewFile()" hidden>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>Restaurant's name</label>
                                        <input type="text" name="res_name" placeholder="Restaurant's name" value="{{$profile->name}}">
                                    </li>
                                    <li>
                                        <label>Restaurant's email</label>
                                        <input type="text" name="res_email" placeholder="Restaurant's email" value="{{$profile->email}}">
                                    </li>
                                </ul>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>Restaurant's address</label>
                                        <input type="text" name="res_address" placeholder="Address" value="{{$profile->address}}">
                                    </li>
                                    <li>
                                        <label>Phone number</label>
                                        <input type="text" name="res_phone" placeholder="Phone number" value="{{$profile->phone}}">
                                    </li>
                                </ul>
                                <ul class="pro-input-label">
                                    <li>
                                        <label>New password</label>
                                        <input type="text" name="res_password" placeholder="New password" value="{{$profile->password}}">
                                    </li>
                                    <li>
                                        <label>Confirm password</label>
                                        <input type="text" name="res_pass_confirm" placeholder="Confirm password">
                                    </li>
                                </ul>
                                <ul class="pro-input-label">
                                <li>
                                    <label>Details In English</label>
                                    <textarea class="form__input form-control font-body-md" type="text" name="res_en_details" placeholder="English Details" style="width: 600px; height: 100px; margin: 9px">{{$profile->en_details}}</textarea>
                                    <label>Details In Arabic</label>
                                    <textarea class="form__input form-control font-body-md" type="text" name="res_ar_details" placeholder="Arabic Details" style="width: 600px; height: 100px; margin: 9px">{{$profile->ar_details}}</textarea>
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
