<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('karma/css/linearicons.css')}}">
	<link rel="stylesheet" href="{{asset('karma/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('karma/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('karma/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('karma/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('karma/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('karma/css/nouislider.min.css')}}">
	<link rel="stylesheet" href="{{asset('karma/css/ion.rangeSlider.css')}}" />
	<link rel="stylesheet" href="{{asset('karma/css/ion.rangeSlider.skinFlat.css')}}" />
	<link rel="stylesheet" href="{{asset('karma/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('karma/css/main.css')}}">
    {{-- <script src="{{asset('js/bootstrap.min.js')}}"></script> --}}
    <style>
		.txtdeepshadow {
			text-align: center;
			font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
			font-size: 50px;
			height: 100px;
			padding-top: 40px;
			color: #e0dfdc;
			background-color: #333;
			letter-spacing: .1em;
			text-shadow: 0 -1px 0 #fff, 0 1px 0 #2e2e2e, 0 2px 0 #2c2c2c, 0 3px 0 #2a2a2a, 0 4px 0 #282828, 0 5px 0 #262626, 0 6px 0 #242424, 0 7px 0 #222, 0 8px 0 #202020, 0 9px 0 #1e1e1e, 0 10px 0 #1c1c1c, 0 11px 0 #1a1a1a, 0 12px 0 #181818, 0 13px 0 #161616, 0 14px 0 #141414, 0 15px 0 #121212, 0 22px 30px rgba(0, 0, 0, 0.9);
		}
		.image-sold-sale{
        position: relative;
        
        }
    .hover-text:hover{
        color: white;
    }
    .table-responsive{
        overflow: hidden;
    }
    .btn-warning{
        background-color: white;
    }
    .image_sale{
        position: absolute;
        top: 0;
        left: 0px;
        z-index: 100;
        
    }
    .image_sale img{
        width: 50px !important;
    }
    .image_sale p {
        position: absolute;
        top: 12px;
        left: 15px;
        z-index: 101;
        transform: rotate(-45deg);
        color: red;
        font-weight: 900;
        font-size: 16px;
        width: 100%;
    }
    .s_product_text h3{
        font-size: 34px
    }
    .s_product_text p{
        margin-bottom: 0;
    }
    .button-size{
        border: 1px solid;
    }
    .nice-select{
    padding: 0 30px;
    }
    .price-sale{
        text-decoration: line-through;
        font-size: 26px;
        color: black;
    }
</style>
    
</head>
<body>
	@include('webview.components.header')
	
    <div>
        @yield('content')
    </div>
    @include('webview.components.footer')

    <script src="{{asset('karma/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="{{asset('karma/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{asset('karma/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('karma/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('karma/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('karma/js/nouislider.min.js')}}"></script>
	<script src="{{asset('karma/js/countdown.js')}}"></script>
	<script src="{{asset('karma/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('karma/js/owl.carousel.min.js')}}"></script>
	<!--gmaps Js-->

	<script src="{{asset('karma/js/gmaps.min.js')}}"></script>
	<script src="{{asset('karma/js/main.js')}}"></script>
</body>
</html>