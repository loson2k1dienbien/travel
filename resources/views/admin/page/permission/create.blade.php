@extends('admin.main')
@section('content')
<div class="content-wrapper" style="padding:20px">
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Role</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add User</li>
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
                        <h3 class="card-title">Thêm mới</h3>
                    </div>
                </div>
                <form role="form" method="POST" action="{{route('permission.store')}}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group ">
                        <label for="usr">Title</label>
                        <input type="text" class="form-control" id="usr" name="title" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="usr">Description</label>
                        <textarea class="textarea" name="description" placeholder="Description"
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    <div class="form-group ">
                        <label for="usr">Content</label>
                        <input type="text" class="form-control" id="usr" name="content" placeholder="Content">
                    </div>
                    <div class="form-group">
                        <label for="usr">Active</label>
                        <input type="text" class="form-control" id="usr" name="active" placeholder="Active">
                    </div>
                    <button type="submit" class="btn btn-danger">Add</button>
                </form>
            </div>
        </div>
    </div>
    </section>
</div>
@endsection