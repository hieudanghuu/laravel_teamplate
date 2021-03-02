@extends('webview.layouts.app')

@section('title','cart')

@section('content')
<style>
    .nice-select {
        margin-right: 5px;
    }
</style>
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
        </div>
    </div>
</section>
<div class='txtdeepshadow mt-5'>Shopping Cart</div>
<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            {{-- <th class="text-center" scope="col">Size</th> --}}
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <form action="{{route('web.cart.checkout')}}" method="post">
                        @csrf
                        <tbody>
                            @if (count($carts) > 0)
                            @foreach ($carts as $item)
                            <?php $arr_id = []; array_push($arr_id,$item->id) ?>
                            <form action="{{route('web.cart.update'),$item->rowId}}" method="post">
                                @csrf
                                <tr>
                                    <td style="width:200px">
                                        <img src="{{'/storage/'.$item->name->image}}" width="100px" alt="image product">
                                    </td>
                                    <td>{{$item->name->name}}</td>
                                    <td>
                                        <h5>${{$item->name['price'] * ( 100 - $item->name['sale'])/100}}</h5>
                                    </td>
                                    {{-- <td class="d-flex"
                                        style="justify-content: center;align-items: center;height: 200px;">
                                        @foreach ($item->options['size'] as $size)
                                        <select multiple name="size[]">
                                            @for ($i = 40; $i <= 47; $i++) @if ($i==$size) <option value="{{$i}}"
                                                selected>EU {{$i}}</option>
                                                @else
                                                <option value="{{$i}}">EU {{$i}}</option>
                                                @endif
                                                @endfor
                                        </select>
                                        @endforeach
                                    </td> --}}
                                    <td>
                                        <div class="product_count">
                                            <input type="number" min="1" value="{{$item->qty}}" name="qty"
                                                data-id="{{$item->id}}"
                                                onchange="changeValue(this.value,{{$item->price}},{{$item->id}},{{count($carts)}})">
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="d-flex">$<input type="text" id="total{{$item->id}}"
                                                onchange="changeTotal(this.value)"
                                                style="border: none ;background-color: white;" value="{{$item->price}}"
                                                disabled></h5>
                                    </td>
                                    <td>
                                        <a href="{{route('web.cart.delete',$item->rowId)}}"
                                            class="btn btn-outline-danger btn-sm">X</a>
                                        <button class="btn btn-outline-primary btn-sm"><i class="fas fa-edit"></i></button>

                                    </td>
                                </tr>
                            </form>
                            @endforeach
                            @endif
                            {{-- {{dd(Cart::content())}} --}}
                            <tr class="bottom_button">
                                <td>
                                    <h3 id="subtotal" style="width:500px">Subtotal : $<input disabled
                                            id="input_value_total" style="border: none;background: white;"
                                            value="{{Cart::subtotal()}}"></h3>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <button type="submit" class="primary-btn w-100">CHECKOUT</button>
                                </td>

                            </tr>
                        </tbody>
                    </form>
                </table>
            </div>
        </div>
    </div>
</section>
<script>
    // function changeValue(value,price,id,count)
    // {
    //     var total = 'total' + id;
    //     document.getElementById(total).value = value * price;
    //     const article = document.querySelector(total);
    //     var value_total = [];
    // }
    // function changeTotal(value)
    // {
    //     console.log(value);

    //     total_input = Number(document.getElementById('input_value_total').value); 
    //     // document.getElementById('subtotal').innerHTML = 'Subtotal : $' + (total_input + total);
    // }
</script>
@include('webview.components.sold_products')
@endsection