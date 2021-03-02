@extends('dashboards.layouts.app')

@section('title','CreateCrategory')

@section('content')
<div class="container" style="width:100% ;margin-top: 100px;">
    <form action="{{ route('dashboard.category.store') }}" method="post" enctype="multipart/form-data" >
        @csrf
        <div>
            <label for="">Name</label>
            <input type="text" class="form-control" name="name">
            @error('name')
                <div class=" text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection