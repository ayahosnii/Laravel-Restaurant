<section class="order-histry-area section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="order-history">
                    <div class="profile">
                        <div class="order-pro">
                            <div class="pro-img">
                                <a href="javascript:void(0)"><img src="./order_files/user-ava.jpg" alt="img" class="img-fluid"></a>
                            </div>
                            <div class="order-name">
                                <h4>{{$user->name}}</h4>
                                <span>Joined april 06, 2021</span>
                            </div>
                        </div>
                        <div class="order-his-page">
                            <ul class="profile-ul">
                                <li class="profile-li"><a href="{{route('order-history')}}" class="active"><span>Orders</span> <span class="pro-count">{{$orders->count()}}</span></a></li>
                                <li class="profile-li"><a href="https://spacingtech.com/html/vegist-final/vegist/profile.html">Profile</a></li>
                                <li class="profile-li"><a href="https://spacingtech.com/html/vegist-final/vegist/pro-addresses.html">Address</a></li>
                                <li class="profile-li"><a href="{{route('wishlist')}}"><span>Wishlist</span> <span class="pro-count">{{Cart::instance('wishlist')->count()}}</span></a></li>
                                <li class="profile-li"><a href="https://spacingtech.com/html/vegist-final/vegist/pro-tickets.html"><span>My tickets</span> <span class="pro-count">4</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="order-info">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Order Name #</th>
                                <th>Date purchased</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            @foreach($orders as $order)
                                @if($order->status == 'ordered')

                                    <td><a href="#" class="btn-outline-warning">{{$order->firstname}}</a> </td>
                                    <td>{{$order->created_at}}</td>
                                    <td>{{$order->total}} LE</td>
                                    <td class="process">{{$order->status}}</td>
                                    <td><a href="{{$order->firstname}}" wire:click.prevent="cancelOrder('{{ $order->id}}')" style="margin-right:20px;" class="btn btn-warning pull-right">Cancel Order</a></td>
                                @endif

                                @if($order->status == 'delivered')
                                    <td><a href="#" class="btn-outline-warning">{{$order->firstname}}</a></td>
                                    <td>{{$order->delivered_date}}</td>
                                    <td>{{$order->total}} LE</td>
                                    <td class="delivered">{{$order->status}}</td>
                                    <td></td>
                                @endif


                                @if($order->status == 'canceled')

                                    <td><a href="#" class="btn-outline-warning">{{$order->firstname}}</a></td>
                                    <td>{{$order->canceled_date}}</td>
                                    <td>{{$order->total}} LE</td>
                                    <td class="canceled">{{$order->status}}</td>
                                    <td><a href="#" wire:click.prevent="orderOrder('{{ $order->id}}')" style="margin-right:20px;" class="btn btn-success pull-right">Order Again</a></td>
                                    @endif

                            </tr>
                            @endforeach

{{--                            <tr>--}}
{{--                                <td>34VB5540K83</td>--}}
{{--                                <td>April 11, 2021</td>--}}
{{--                                <td class="canceled">In progress</td>--}}
{{--                                <td>$760.50</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>78A643CD409</td>--}}
{{--                                <td>April 15, 2021</td>--}}
{{--                                <td class="delayed">Delayed</td>--}}
{{--                                <td>$760.50</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>78A643CD409</td>--}}
{{--                                <td>April 18, 2021</td>--}}
{{--                                <td class="delivered">Delivered</td>--}}
{{--                                <td>$760.50</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>78A643CD409</td>--}}
{{--                                <td>April 21, 2021</td>--}}
{{--                                <td class="delivered">Delivered</td>--}}
{{--                                <td>$760.50</td>--}}
{{--                            </tr>--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
