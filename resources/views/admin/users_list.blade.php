@extends('admin.main-layout')

@section('body')
  <div class="row">
    <div class="container-fluid">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">User List</h3>
            @if(session('message'))
            <div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{session('message')}}</div>
          @endif

          </div>
          <!-- /.card-header -->
          <div class="card-body">
            @if(session('message'))
            <div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{session('message')}}</div>
          @endif

            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Address</th>
                <th>Action</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                @foreach($data as $item)
                <td>{{$item['name']}}</td>
                <td>{{$item['username']}}</td>
                <td>{{$item['email']}}</td>
                <td> {{$item['address']}}</td>
                <td>  <a href="{{route('user.edit',$item->id)}}" class="btn btn-success" role="button">Edit</a>
                </td>
                <td>  <a href="{{route('user.delete',$item->id)}}" class="btn btn-danger" role="button">Delete</a>
                </td>
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
</div>
  </div>
@endsection