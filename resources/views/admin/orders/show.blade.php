@extends('layouts.admin')
@section('content')
    <div>
        <div id="map" style="height: 500px;"></div>
    </div>
    @push('scripts-push')
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOnrM9ISkivX_c_h82WzlOx-REJHnQLKQ&callback=initMap"async defer></script>
        <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
        <script>
            var orders = [];
            // Initialize the map
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 10,
                    center: {lat: 24.087179591431045, lng: 32.89878996796},
                });

                // Add markers for each order
                orders.forEach(function(order) {
                    var marker = new google.maps.Marker({
                        position: {lat: parseFloat(order.latitude), lng: parseFloat(order.longitude)},
                        map: map,
                        title: order.order_number,
                    });
                });

                // Update markers in real time when an order is updated
                var pusher = new Pusher('255cc5afb800d9ebca0b', {
                    cluster: 'mt1',
                });
                var channel = pusher.subscribe('order-orders');
                channel.bind('App\\Events\\OrderStatusChanged', function(data) {
                    var order = data.order;

                    // Find the marker for the order and update its position
                    orders.forEach(function(o) {
                        if (o.id === order.id) {
                            var marker = o.marker;
                            marker.setPosition({lat: parseFloat(order.latitude), lng: parseFloat(order.longitude)});
                        }
                    });
                });
            }

            // Fetch orders from the server and initialize the map
            Livewire.on('adminLiveTrackingLoaded', function(data) {
                orders = data.orders;
                initMap();
            });
        </script>
    @endpush
@endsection
