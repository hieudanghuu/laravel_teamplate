@extends('dashboards.layouts.app')

@section('title','User')

@section('content')
<style>
.profile-img{
    height: 100%;
    background-image: none;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    border-radius: 50%;
}
.customs-img{
    width: 50px;
    height: 50px;
    display: inline-block;
    vertical-align:top;
    margin: 5px;
    margin-left: 10px;
    border:none; 
}
</style>
<div class="container" style="width:100% ;margin-top: 70px;">

    <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">User List</h4>
            {{-- <p class="card-category"> Here is a subtitle for this table</p> --}}
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                    <tr>
                        <th>Avatar</th>
                        <th>name</th>
                        <th>Email</th>
                        <th>Rule</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($users)) 
                    @foreach ($users as $item)
                        <tr>
                            <td >
                                <div class="customs-img">
                                    @if ($item['profile_photo_path'])
                                    <div class="profile-img" style="background-image:url({{asset('storage/'.$item['profile_photo_path'])}}); "></div>
                                    @endif
                                </div>
                            </td>
                            <td>{{ $item['name']}}</td>
                            <td>{{ $item['email']}}</td>
                            <td>{{ $item['rule'] == 2?'admin':'user'}}</td>
                            <td>
                            <a href="{{route('dashboard.user.delete',$item['id'])}}"  onclick="return confirm('Are you sure?')" class="mr-2"><i class="far fa-trash-alt "></i></a>
                                <a href="{{ route('dashboard.user.edit', $item['id']) }}" class="mr-2"><i class="far fa-edit"></i></a>
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
</div>

@endsection
    