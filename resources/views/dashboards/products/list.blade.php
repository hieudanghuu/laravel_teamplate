@extends('dashboards.layouts.app')

@section('title','Product')

@section('content')
<div class="container" style="width:100% ;margin-top: 70px;">
    <div class="d-flex justify-content-between">
        <a href="{{route('dashboard.product.create')}}" class="btn btn-round btn-fill btn-info ml-3 h-100 ">Create Product</a>
        <form class="navbar-form " action="{{route('dashboard.product.search')}}">
            <div class="input-group no-border">
              <input type="text" name="search" class="form-control" placeholder="Search...">
              <button type="submit" class="btn btn-white btn-round btn-just-icon">
                <i class="material-icons">search</i>
                <div class="ripple-container"></div>
              </button>
            </div> 
          </form>
    </div>



    <div class="card">
        <div class="card-header card-header-warning">
          <h4 class="card-title">Product List</h4>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-hover">
            <thead class="text-warning">
                <th>STT</th>
                <th></th>
                <th>Product_Code</th>
                <th>Name</th>
                <th>Active</th>
                <th></th>
            </thead>
            <tbody>
                @if (count($products) > 0) 
                @foreach ($products as $key => $item)
                    <tr>
                        <td >{{ $key += 1 }}</td>
                        <td >
                            <div class="customs-img">
                                @if ($item['image'])
                                <img src="{{asset('storage/'.$item['image'])}}" width="100px" alt="image_product">
                                {{-- <div class="profile-img" style="background-image:url({{asset('storage/'.$item['image'])}}); "></div> --}}
                                @endif
                            </div>
                        </td>
                       
                        <td>{{ $item['product_code']}}</td>
                        <td>{{ $item['name']}}</td>
                        <td>{{ $item['status'] == 1? 'active':'unactive'}}</td>
                        <td>
                            <a  rel="tooltip" title="Remove" class=" btn-link btn-sm" href="{{ route('dashboard.product.delete',$item['id'])}}"  onclick="return confirm('Are you sure?')" ><i class="far fa-trash-alt "></i></a>
                            <a href="{{ route('dashboard.product.edit', $item['id']) }}" class="mr-2"><i class="far fa-edit"></i></a>
                            <a href="{{ route('dashboard.product.view', $item['id']) }}" class="mr-2"><i class="far fa-eye"></i></a>
                            <a href="{{ route('dashboard.product.image', $item['id'])}}" class="mr-2"><i class="far fa-images"></i></a>
                        </td>
                    </tr>
                @endforeach
            @else 
            {{-- {{dd($search)}} --}}
                @if (isset($search))
                <p class="text-danger text-center">"{{$search}}" not found</p>
                @else
                <p class="text-danger text-center">No Data</p>
                @endif
                    
            @endif    
            </tbody>
          </table>
        </div>
      </div>
    
    {{-- <table id="example" class="table table-striped table-bordered " >
    <thead>
        <tr>
            <th>STT</th>
            <th></th>
            <th>Product_Code</th>
            <th>Name</th>
            <th>Active</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
           
    </tbody>
</table> --}}
<div>
    {{ $products->links() }}
</div>
</div>

@endsection
    