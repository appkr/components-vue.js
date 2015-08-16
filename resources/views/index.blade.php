<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="token" id="token" value="{{ csrf_token() }}"/>
  <link rel="icon" href="vue-favicon.png" type="image/x-icon">
  <title>Custom Components in Vue.js</title>
  <link rel="stylesheet" href="/css/vendor.css">
  <link rel="stylesheet" href="/css/app.css"/>
</head>

<body id="demo" class="container">

<script id="coupon-template" type="x-template">
  <input type="text" v-model="coupon" v-on="blur: whenCouponHasBeenEntered"/>
  <small class="text-danger" v-text="message"></small>
</script>

<p v-show="coupon">You entered the coupon code: @{{coupon}}</p>

<coupon when-applied="@{{setCoupon}}"></coupon>

<!--<div class="debug">
    <pre>@{{$data | json}}</pre>
  </div>-->

<script src="/js/vendor.js"></script>
<script src="/js/app.js"></script>
</body>
</html>