@extends('webview.layouts.app')

@section('title','home')

@section('content')
<style> 
    .single-product{
        position: relative;
    }
    .image_sale{
        position: absolute;
        top: 0;
        left: 0;
        z-index: 100;
        
    }
    .image_sale img{
        width: 100px !important;
    }
    .image_sale p {
        position: absolute;
        top: 40px;
        left: 42px;
        z-index: 101;
        transform: rotate(-45deg);
        color: red;
        font-weight: 900;
        font-size: 20px;
    }
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
    .price{
    display: flex;
    flex-direction: row;
    align-items: center;

    }
    .prd-bottom{
        margin-top: 7px !important;
    }
    .price_sold{
        margin: 0px !important;
    }
</style>
<section class="banner-area">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-start">
            <div class="col-lg-12">
                <div class="active-banner-slider owl-carousel">
                    <!-- single-slide -->
                    <div class="row single-slide align-items-center d-flex">
                        <div class="col-lg-5 col-md-6">
                            <div class="banner-content">
                                <h1>Nike New <br>Collection!</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                <div class="add-bag d-flex align-items-center">
                                    <a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
                                    <span class="add-text text-uppercase">Add to Bag</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" src="{{asset('karma/img/banner/banner-img.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- single-slide -->
                    <div class="row single-slide">
                        <div class="col-lg-5">
                            <div class="banner-content">
                                <h1>Nike New <br>Collection!</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                <div class="add-bag d-flex align-items-center">
                                    <a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
                                    <span class="add-text text-uppercase">Add to Bag</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" src="{{asset('karma/img/banner/banner-img.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- start features Area -->
<section class="features-area section_gap">
    <div class="container">
        <div class="row features-inner">
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="{{asset('karma/img/features/f-icon1.png')}}" alt="">
                    </div>
                    <h6>Free Delivery</h6>
                    <p>Free Shipping on all order</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="{{asset('karma/img/features/f-icon2.png')}}" alt="">
                    </div>
                    <h6>Return Policy</h6>
                    <p>Free Shipping on all order</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                    <img src="{{asset('karma/img/features/f-icon3.png')}}" alt="">
                    </div>
                    <h6>24/7 Support</h6>
                    <p>Free Shipping on all order</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="{{asset('karma/img/features/f-icon4.png')}}" alt="">
                    </div>
                    <h6>Secure Payment</h6>
                    <p>Free Shipping on all order</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end features Area -->

<!-- start product  For Men -->
<div class='txtdeepshadow' >Products For Mens</div>
<section class="owl-carousel active-product-area section_gap">
  
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Latest Product</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore
                            magna aliqua.</p>
                    </div>
                </div>
            </div>          
            <div class="row">
                @if (count($mens) > 0)
                    @foreach ($mens as $item)
                        <div class="col-lg-3 col-md-6">
                            <div class="single-product">
                                @if ($item['sale'] > 0)
                                    <div  class="image_sale">
                                        <img src="{{asset('karma/img/sale1.png')}}" alt="">
                                        <p>- {{$item['sale']}}%</p>
                                    </div>
                                @endif
                                <a href="{{route('web.view',$item['id'])}}"><img class="img-fluid" src="{{asset('/storage/'.$item['image'])}}" alt="error image"></a>
                                <div class="product-details">
                                    <h6>{{$item['name']}}</h6>
                                    <div class="price">
                                        <h6>${{$item['price'] * ( 100 - $item['sale'])/100}}</h6>
                                        <h6 class="l-through">${{$item['price']}}</h6>
                                        <div class="prd-bottom">
                                            {{-- <a href="" class="social-info">
                                                <span class="ti-bag"></span>
                                                <p class="hover-text">add to bag</p>
                                            </a> --}}
                                            <a href="{{route('web.view',$item['id'])}}" class="social-info">
                                                <span class="lnr lnr-move"></span>
                                                <p class="hover-text">view more</p>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Discount Products</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore
                            magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @if (count($selling_products_mens) > 0)
                    @foreach ($selling_products_mens as $item)
                        <div class="col-lg-3 col-md-6">
                            <div class="single-product">
                                @if ($item['sale'] > 0)
                                    <div  class="image_sale">
                                        <img src="{{asset('karma/img/sale1.png')}}" alt="">
                                        <p>- {{$item['sale']}}%</p>
                                    </div>
                                @endif
                                <a href="{{route('web.view',$item['id'])}}"><img class="img-fluid" src="{{asset('/storage/'.$item['image'])}}" alt="error image"></a>
                            <div class="product-details">
                                <h6>{{$item['name']}}</h6>
                                <div class="price">
                                    <h6>${{$item['price'] * ( 100 - $item['sale'])/100}}</h6>
                                    <h6 class="l-through">${{$item['price']}}</h6>
                                    <div class="prd-bottom">
                                        <a href="{{route('web.view',$item['id'])}}" class="social-info">
                                            <span class="lnr lnr-move"></span>
                                            <p class="hover-text">view more</p>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>

{{-- product for womens --}}
<div class='txtdeepshadow' >Products For Womens</div>
<section class="owl-carousel active-product-area section_gap">
    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Latest Products</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore
                            magna aliqua.</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                {{-- {{dd(count($womens) > 0)}} --}}
                @if (count($womens) > 0)
                    @foreach ($womens as $item)
                        <div class="col-lg-3 col-md-6">
                            <div class="single-product">
                                @if ($item['sale'] > 0)
                                <div  class="image_sale">
                                    <img src="{{asset('karma/img/sale1.png')}}" alt="">
                                    <p>- {{$item['sale']}}%</p>
                                </div>
                            @endif
                                <a href="{{route('web.view',$item['id'])}}"><img class="img-fluid" src="{{asset('/storage/'.$item['image'])}}" alt="error image"></a>
                                <div class="product-details">
                                    <h6>{{$item['name']}}</h6>
                                    <div class="price">
                                        <h6>${{$item['price'] * ( 100 - $item['sale'])/100}}</h6>
                                        <h6 class="l-through">${{$item['price']}}</h6>
                                        <div class="prd-bottom">
{{--         
                                            <a href="" class="social-info">
                                                <span class="ti-bag"></span>
                                                <p class="hover-text">add to bag</p>
                                            </a>
                                             --}}
                                            <a href="{{route('web.view',$item['id'])}}" class="social-info">
                                                <span class="lnr lnr-move"></span>
                                                <p class="hover-text">view more</p>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Discount Products</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore
                            magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @if (count($selling_products_womens) > 0)
                    @foreach ($selling_products_womens as $item)
                        <div class="col-lg-3 col-md-6">
                            <div class="single-product">
                                @if ($item['sale'] > 0)
                                    <div  class="image_sale">
                                        <img src="{{asset('karma/img/sale1.png')}}" alt="">
                                        <p>- {{$item['sale']}}%</p>
                                    </div>
                                @endif
                                <a href="{{route('web.view',$item['id'])}}"><img class="img-fluid" src="{{asset('/storage/'.$item['image'])}}" alt="error image"></a>
                            <div class="product-details">
                                <h6>{{$item['name']}}</h6>
                                <div class="price">
                                    <h6>${{$item['price'] * ( 100 - $item['sale'])/100}}</h6>
                                    <h6 class="l-through">${{$item['price']}}</h6>
                                    <div class="prd-bottom">
{{--     
                                        <a href="" class="social-info">
                                            <span class="ti-bag"></span>
                                            <p class="hover-text">add to bag</p>
                                        </a> --}}
                                       
                                        <a href="{{route('web.view',$item['id'])}}" class="social-info">
                                            <span class="lnr lnr-move"></span>
                                            <p class="hover-text">view more</p>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>
<!-- end product Area -->

<!-- Start exclusive deal Area -->
<section class="exclusive-deal-area">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 no-padding exclusive-left" style="background:url({{asset('/storage/'.$hot_deal['image'])}})no-repeat center center/cover">
                <div class="row clock_sec clockdiv" style="margin-top:-250px" id="clockdiv">
                    <div class="col-lg-12">
                        <h1>Exclusive Hot Deal Ends Soon!</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="row clock-wrap">
                            <div class="col clockinner1 clockinner">
                                <h1 class="days">150</h1>
                                <span class="smalltext">Days</span>
                            </div>
                            <div class="col clockinner clockinner1">
                                <h1 class="hours">23</h1>
                                <span class="smalltext">Hours</span>
                            </div>
                            <div class="col clockinner clockinner1">
                                <h1 class="minutes">47</h1>
                                <span class="smalltext">Mins</span>
                            </div>
                            <div class="col clockinner clockinner1">
                                <h1 class="seconds">59</h1>
                                <span class="smalltext">Secs</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="" class="primary-btn">Shop Now</a>
            </div>
            <div class="col-lg-6 no-padding exclusive-right">
                <div class="active-exclusive-product-slider">
                    <!-- single exclusive carousel -->
                    @if (count($product_sold) > 0)
                        @foreach ($product_sold as $item)
                        <div class="single-exclusive-slider">
                            <a href="{{route('web.view',$item['id'])}}"><img class="img-fluid" src="{{asset('/storage/'.$item['image'])}}" alt="error image"></a>
                            <div class="product-details">
                                <div class="price justify-content-center mt-2">
                                    <h6 class="price_sold ">${{$item['price'] * ( 100 - $item['sale'])/100}}</h6>
                                    <h6 class="l-through">${{$item['price']}}</h6>
                                </div>
                                <h4>{{ $item['name'] }}</h4>
                                <div class="add-bag d-flex align-items-center justify-content-center">
                                    <a class="add-btn" href=""><span class="ti-bag"></span></a>
                                    <span class="add-text text-uppercase">Add to Bag</span>
                                </div>
                            </div>
                        </div>
                        @endforeach 
                    @endif
                    <!-- single exclusive carousel -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End exclusive deal Area -->

<!-- Start brand Area -->
{{-- <section class="brand-area section_gap">
    <div class="container">
        <div class="row">
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="{{asset('karma/img/brand/1.png')}}" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="{{asset('karma/img/brand/2.png')}}" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="{{asset('karma/img/brand/3.png')}}" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="{{asset('karma/img/brand/4.png')}}" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="{{asset('karma/img/brand/5.png')}}" alt="">
            </a>
        </div>
    </div>
</section> --}}
<!-- End brand Area -->

<!-- Start related-product Area -->

@endsection