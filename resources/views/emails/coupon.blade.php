<h3>Your coupon is {{$coupon->code}}</h3>
<p>Please use this code at checkout to receive a {{ $coupon->value }}% discount on your purchase.
    This code is valid from {{ $coupon->start_time }} to {{ $coupon->end_time }}.</p>
