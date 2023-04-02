
<!DOCTYPE html>
<html class="loading" lang="{{ LaravelLocalization::getCurrentLocaleNative() }}" dir="{{ LaravelLocalization::getCurrentLocaleNative() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
          content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <meta name="adminId" content="{{ auth()->guard('admin') ? auth()->guard('admin')->id() : '' }}">

    <title>  Aya's dashboard </title>
    <link rel="apple-touch-icon" href="http://127.0.0.1:8000/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="http://127.0.0.1:8000/images/ico/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">

    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/fonts/meteocons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/charts/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/forms/selects/select2.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/vendors/css/charts/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/forms/toggle/switchery.min.css')}}">
    <!-- END VENDOR CSS-->

    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/cryptocoins/cryptocoins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/extensions/datedropper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/extensions/timedropper.min.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->

    @if(app()->getLocale() == 'ar')
    <!--Start css rtl-->
        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/plugins/animate/animate.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/vendors.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/pages/chat-application.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/app.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/core/colors/palette-gradient.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/pages/timeline.css')}}">

        <link rel="stylesheet" type="text/css"
              href="admin-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}'">

        <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css-rtl/style-rtl.css')}}">


        <!--End css rtl-->
        <style>
            body, h1, h2, h3, h4, h5, h6 {
                font-family: 'Cairo', sans-serif !important;
            }
        </style>
    @else
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/site/css/font-awesome.min.css')}}">
    <!--
        <link rel="stylesheet" type="text/css" href="{{asset('assets/site/css/bootstrap.min.css')}}">
-->
        <!--Start css rtl-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/plugins/animate/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/vendors.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/core/menu/menu-types/vertical-menu.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/pages/chat-application.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/custom.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/core/menu/menu-types/vertical-menu.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/core/colors/palette-gradient.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/core/colors/palette-gradient.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/pages/timeline.css')}}">
        <!--End css rtl-->    @endif

    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>
<body class="vertical-layout vertical-menu 2-columns  @if(Request::is('http://127.0.0.1:8000/assets/admin/users/tickets/reply*')) chat-application @endif menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->
<!-- Begin Header -->
@include('admin.includes.header')
<!--End  Header -->

<!-- Begin SideBar-->
@include('admin.includes.sidebar')
<!--End Sidebare-->
@yield('content')
@include('admin.includes.footer')



<!-- BEGIN VENDOR JS-->
<script src="{{asset('admin-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<script src="{{asset('admin-assets/vendors/js/tables/datatable/datatables.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('admin-assets/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"
        type="text/javascript"></script>

<script src="{{asset('admin-assets/vendors/js/forms/toggle/bootstrap-switch.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('admin-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('admin-assets/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin-assets/js/scripts/forms/switch.js')}}" type="text/javascript"></script>
<script src="{{asset('admin-assets/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin-assets/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>

<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('admin-assets/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin-assets/vendors/js/charts/echarts/echarts.js')}}" type="text/javascript"></script>

<script src="{{asset('admin-assets/vendors/js/extensions/datedropper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin-assets/vendors/js/extensions/timedropper.min.js')}}" type="text/javascript"></script>

<script src="{{asset('admin-assets/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/scripts/pages/chat-application.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{asset('admin-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{asset('admin-assets/js/core/app.js')}}" type="text/javascript"></script>
<script src="{{asset('admin-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('admin-assets/js/scripts/pages/dashboard-crypto.js')}}" type="text/javascript"></script>


<script src="{{asset('admin-assets/js/scripts/tables/datatables/datatable-basic.js')}}"
        type="text/javascript"></script>
<script src="{{asset('admin-assets/js/scripts/extensions/date-time-dropper.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

<script src="{{asset('admin-assets/js/scripts/forms/checkbox-radio.js')}}'" type="text/javascript"></script>

<script src="{{asset('admin-assets/js/scripts/modal/components-modal.js')}}" type="text/javascript"></script>
<script src="{{asset('admin-assets/js/chart.min.js')}}" type="text/javascript"></script>

<script src="{{ asset('js/app.js') }}" defer></script>


<script>
    $('#meridians1').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians2').timeDropper({
        meridians: true,setCurrentTime: false

    });
    $('#meridians3').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians4').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians5').timeDropper({
        meridians: true,setCurrentTime: false

    });
    $('#meridians6').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians7').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians8').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians9').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians10').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians11').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians12').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians13').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians14').timeDropper({
        meridians: true,setCurrentTime: false
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('js/datetimepicker.js')}}"></script>
<script src="https://cdn.tiny.cloud/1/2hiuvs7pfrjea2zdpl7ldavojp466ihbpx4p57jxkzrr6osc/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOnrM9ISkivX_c_h82WzlOx-REJHnQLKQ"></script>
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" defer></script>
<script>
    window.OneSignal = window.OneSignal || [];
    OneSignal.push(function() {
        OneSignal.init({
            appId: "fa2f23dc-d4c3-465f-91b1-6f972529114d",
            safari_web_id: "web.onesignal.auto.5ccade99-0f35-4775-9ae0-5e2c3bfd110b",
            notifyButton: {
                enable: true,
            },
        });
    });
</script>
@yield('script')
@stack('scripts-push')

</body>
</html>

