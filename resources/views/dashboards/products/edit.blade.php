@extends('dashboards.layouts.app')

@section('title','EditProduct')

@section('content')
<style>
    .img_custom{
        position: relative;
    }
    .btn-close-img{
        position: absolute;
        top: -15px;
        right: 5px;
        border-radius: 50%;
        padding: 2px 6px;
    }
</style>
<div class="container" style="width:100% ;margin-top: 100px;">
    <form action="{{ route('dashboard.product.update',$product['id']) }}" method="post" enctype="multipart/form-data" >
        @csrf
        <div>
            {{-- {{dd($product['image'])}} --}}
            <label for="">Image</label><br> 
            <label for="image">
                @if (isset($product['image']))
                <img id="img"  src="{{asset('/storage/'.$product['image'])}}" style="width:200px" alt="No Vailable">
                @endif
            </label><br>
            <label for="image" class="btn btn-default btn-sm">Change Image</label>
            <span id="text_image"></span>
            <input accept=".jpg, .jpeg, .png" type="file" style="visibility:hidden;" class="form-control" id="image" onchange="change(this.value)" name="image">
        </div>
        {{-- <div class="row">
            @foreach ($product->picture as $key => $item)
            <div class="col-2">
                <label for="image{{$key}}">
                    <img class="img_custom" id="{{$key}}" src="{{asset('/storage/'.$item['image'])}}" width="100%" alt="product_image">
                </label>
                <input accept=".jpg, .jpeg, .png" type="file" style="visibility:hidden;" class="form-control" id="image{{$key}}" value="{{$item['image']}}" onchange="change(this.value)" name="images[]">
                <a href="#" id="close{{$key}}" onclick="close_img({{$key}})" class="btn btn-default btn-close-img">X</a>
            </div>
            @endforeach
        </div> --}}
        <div>
            <label for="">Name</label>
            <input type="text" class="form-control" value="{{ $product['name'] }}" name="name">
            @error('name')
                <div class=" text-danger">{{ $message }}</div>
            @enderror
            </div>
        <div>
            <label for="">Price</label>
            <input type="text" class="form-control" value="{{ $product['price'] }}" name="price">
            @error('price')
            <div class=" text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="">Product_Code</label>
            <input type="text" class="form-control" value="{{ $product['product_code'] }}" name="product_code">
            @error('product_code')
            <div class=" text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="">Quanty</label>
            <input type="text" class="form-control" value="{{ $product['quanty'] }}" name="quanty">
            @error('quanty')
            <div class=" text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="sel1">Sale</label>
            <select class="form-control" name="sale" id="sel1">
                <option value="0" {{$product['sale'] == 0?'selected':''}}>0 %</option>
                <option value="10" {{$product['sale'] == 10?'selected':''}}>10 %</option>
                <option value="30" {{$product['sale'] == 30?'selected':''}}>30 %</option>
                <option value="50" {{$product['sale'] == 50?'selected':''}}>50 %</option>
            </select>
        </div>
    
        <div  class="form-group">
            <label for="">Category</label><br>
            <select class="form-control"  name="category_id" >
                @foreach ($categories as $item)
                <option value="{{ $item['id']}}" {{$product['category_id'] == $item['id']?'selected':''}}>{{ $item['name']}}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary">Submit</button> <a href="javascript:history.go(-1)" class="btn btn-default">Back</a>
    </form>
</div>
<script>
    function change(value){
        console.log(value);
        
        document.getElementById('text_image').innerHTML = value;
        document.getElementById('img-1').style.display = 'none';
    }
    function close_img(id){
        document.getElementById(id).style.display= 'none';
        document.getElementById('image'+id).value= '';
        document.getElementById('close' + id).style.display= 'none';
    }
  
</script>
@endsection