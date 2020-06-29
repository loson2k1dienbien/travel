@extends('admin/main')
@section('content')
 <!-- Main content -->
 <div class="content-wrapper">
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Role Assignment</li>
        </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>  
    <section>
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm mới</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('role_assignment.store') }}"  enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                      <!-- select -->
                  <div class="form-group">
                    <label>Role name</label>
                    <select class="form-control" name="role_id">
                      <option value="" >Choose role</option>
                        @foreach($role as $val)
                        <option value="{{ $val->id }}">{{ $val->title }}</option>
                        @endforeach
                    </select>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Title </label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Active </label>
                    <input type="text" class="form-control" id="active" name="active" placeholder="Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Choose Customer</label>
                       <select class="form-control" name="customer_id">
                      <option value="">Choose Name Customer</option>
                        @foreach($customer as $cus)
                        <option value="{{ $cus->id }}">{{ $cus->name }}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
              </form>
            </div>
            <!-- /.card -->

          </div>
    </section>
</div>
@endsection
