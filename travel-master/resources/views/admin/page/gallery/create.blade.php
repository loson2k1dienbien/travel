@extends('admin.main')
@section('content')
<div class="content-wrapper" style="padding:20px">
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Gallery</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Gallery</li>
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
                <form role="form" method="POST" action="{{route('gallery.store')}}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="exampleInputPassword1">Title</label>
                        <input type="text" class="form-control"  name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File Image</label>    
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="upload">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                        </div>
                  </div>
                    <button type="submit" class="btn btn-danger">Add</button>
                </form>
            </div>
        </div>
    </div>
    </section>
</div>
@endsection