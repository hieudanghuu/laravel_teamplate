@extends('dashboards.layouts.app')

@section('title','CreateProduct')

@section('content')
<style>
    .btn.btn-default.btn-sm{
        margin-top: -5px;
    }
    .fa-check-circle{
        font-weight: 100;
        color: green;
        font-size: 24px;
        display: none;
    }
</style>
<div class="container" style="width:100% ;margin-top: 100px;">
    <form action="{{ route('dashboard.product.store') }}" method="post" enctype="multipart/form-data" >
        @csrf
        <div>
            <label for="image" class="btn btn-default btn-sm">Up Image</label>
            <span id="text_image"></span>
            <input accept=".jpg, .jpeg, .png" type="file" style="visibility:hidden;" class="form-control" id="image" onchange="change(this.value,this.id)" name="image">
        </div>
        <div>
            <label for="images" class="btn btn-default btn-sm">
                Secondary Photo</label><span><i class="far fa-check-circle" id="icon_check"  ></i></span>
            <input accept=".jpg, .jpeg, .png" type="file" style="visibility:hidden;" class="form-control" id="images" onchange="change(this.value,this.id)"  name="images[]" multiple>
        </div>
        <div>
            <label for="">Name</label>
            <input type="text" class="form-control" name="name">
            @error('name')
                <div class=" text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="">Price</label>
            <input type="text" class="form-control" name="price">
            @error('price')
            <div class=" text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="">Quanty</label>
            <input type="text" class="form-control" name="quanty">
            @error('quanty')
            <div class=" text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="row">
            <div class="form-group col-lg-4">
                <label for="sel1">Sale</label>
                <select class="form-control" name="sale" id="sel1">
                    <option value="0" selected>0 %</option>
                    <option value="10">10 %</option>
                    <option value="30">30 %</option>
                    <option value="50">50 %</option>
                </select>
            </div>
            <div class="form-group col-lg-4">
                <label for="">Hot_Deal</label>
                <select class="form-control" name="hot_deal" id="">
                    <option value="0" selected>unactive</option>
                    <option value="1">active</option>
                </select>   
            </div>
            <div  class="form-group col-lg-4">
                <label for="">Category</label><br>
                <select class="form-control"  name="category_id" >
                    @foreach ($categories as $item)
                    <option value="{{ $item['id']}}">{{ $item['name']}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        
        <button class="btn btn-primary">Submit</button>
    </form>
</div>
<script>
    function change(value,id){
        console.log(id);
        if(id === 'images'){
            document.getElementById('icon_check').style.display = 'inline';
        }else document.getElementById('text_' + id).innerHTML = value;
    }
  
</script>
@endsection