@extends('dashboards.layouts.app')

@section('title','Category')

@section('content')
<div class="container" style="width:100% ;margin-top: 70px;">
    <a href="{{route('dashboard.category.create')}}" class="btn btn-round btn-fill btn-info ml-3" >Create Product</a>

    <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Categories List</h4>
            {{-- <p class="card-category"> Here is a subtitle for this table</p> --}}
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($categories)) 
                    @foreach ($categories as $key => $item)
                        <tr>
                            <td >{{ $key+= 1 }}</td>
                            <td>{{ $item['name']}}</td>
                            <td>
                                <a href="{{route('dashboard.category.delete',$item['id'])}}"  onclick="return confirm('Are you sure?')" class="mr-2"><i class="far fa-trash-alt "></i></a>
                                <a href="{{ route('dashboard.category.edit', $item['id']) }}" class="mr-2"><i class="far fa-edit"></i></a>
                                {{-- <a href="#" class="mr-2"><i class="far fa-eye"></i></a> --}}
                            </td>
                        </tr>
                    @endforeach
                @endif  
                </tbody>
              </table>
            </div>
          </div>
        </div>
</div>

@endsection
    