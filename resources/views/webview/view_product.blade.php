@extends('webview.layouts.app')

@section('title','home')

@section('content')

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
        </div>
    </div>
</section>  

<!-- End Banner Area -->
<!--================Single Product Area =================-->
<div class="product_image_area">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-6">
                <div class="s_Product_carousel">
                    <div class="single-prd-item">
                        <img class="img-fluid" src="{{asset('/storage/'.$product['image'])}}" alt="error image">
                    </div>
                    {{-- {{dd($product->picture)}} --}}
                    @foreach ($product->picture as $item)
                    <div class="single-prd-item">
                        <img class="img-fluid" src="{{asset('/storage/'.$item['image'])}}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <form action="{{route('web.cart.add',$product['id'])}}" method="post">
                        @csrf
                        <h3>{{$product['name']}}</h3>
                        <input type="hidden" name="name" value="{{$product['name']}}">
                        <h2 id="price1">$ {{$product['price'] * ( 100 - $product['sale'])/100}}</h2>
                        <span id="price-sale" class="price-sale">${{$product['price']}}</span>
                        <input type="text" hidden style="" id="price" name="price" value="{{$product['price'] * ( 100 - $product['sale'])/100}}">
                        
                        <ul class="list">
                            <li><a class="active" href="javascript:"><span>Sale :</span> - {{$product['sale']}}%</a></li>
                            <li><a class="active" href="javascript:"><span>Category :</span> {{$product->category['name']}}</a></li>
                            
                        </ul>
                        <p>{{$product['description']}}</p>
                        {{-- <div class="d-flex flex-column mt-5">
                            <select multiple class="form-control " name="size" >
                                @for ($i = 0; $i < 8; $i++)
                                    @if ($i == 0)
                                    <option value="4{{$i}}" selected>EU 4{{$i}}</option>
                                    @else
                                    <option value="4{{$i}}">EU 4{{$i}}</option>
                                    @endif 
                                @endfor
                            </select>
                        </div> --}}
                        {{-- @if (auth()->user())
                            <input type="text" hidden name="user" value="{{auth()->user()}}">
                        @endif --}}
                        <div class="product_count mt-3" >
                            <label for="qty">Quantity:</label>
                            <input type="number" name="quanty" id="sst" min="1" maxlength="12" onchange="change_value(this.value,{{$product['price'] * ( 100 - $product['sale'])/100}},{{$product['price']}})" value="1" title="Quantity:" class="input-text qty">
                            <input type="text" hidden name="sale" value="{{$product['sale']}}">
                        </div>
                        <div class="card_area d-flex align-items-center">
                            <button class="primary-btn">Add to Cart</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Deals of the Week --}}
@include('webview.components.sold_products')
<script>
    function change_value(qty,price,sale)
    {
        document.getElementById('price1').innerHTML = '$ '+price * qty;
        document.getElementById('price').value = price * qty;
        document.getElementById('price-sale').innerHTML = '$ ' + (qty * sale) 
    }
</script>
@endsection