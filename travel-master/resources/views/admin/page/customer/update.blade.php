@extends('admin.main')
@section('content')
<div class="content-wrapper" style="padding:20px">
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Update customer</h3>
                    </div>
                </div>
                <form role="form" method="POST" action="{{ route('customer.update',['customer'=>$customer->id]) }}" enctype="multipart/form-data">
                @csrf @method('PUT')
                    <div class="form-group @error('name') has-error @enderror">
                        <label for="usr">Name</label>
                        <input type="text" class="form-control" id="usr" name="name" placeholder="Name" value="{{$customer->name}}">
                        @error('name')
                          <span style="" >{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password"value="{{$customer->password}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email"value="{{$customer->email}}">
                    </div>
                    <div class="form-group">
                        <label for="usr">Address</label>
                        <input type="text" class="form-control" id="usr" name="address" placeholder="Address"value="{{$customer->address}}">
                    </div>
                    <div class="form-group">
                        <label for="usr">Date Of Birth</label>
                        <input type="date" class="form-control" id="usr" name="date_of_birth" value="{{$customer->date_of_birth}}"> 
                    </div>
                    <div class="form-group">
                        <label for="usr">Phone number</label>
                        <input type="text" class="form-control" id="usr" name="phone_number" placeholder="Address"value="{{$customer->phone_number}}">
                    </div>
                    <button type="submit" class="btn btn-danger">Update</button>
                </form>
            </div>
        </div>
    </div>
    </section>
</div>
@endsection