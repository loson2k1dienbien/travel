@extends('admin/main')
@section('content')
 <!-- Main content -->
 <div class="content-wrapper">
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">list</h1>
                     </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">list</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
{{--     <section class="content">

    <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data" >
      @csrf
        <div class="form-group"  @error('CatName') has-erro  @enderror>
            <label for="">Name</label>
            <input type="text" class="form-control" name="CatName" value="{{ old('CatName') }}">
            @error('CatName')
            <small class=" help-block">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" class="form-control" name="upload">
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <select name="Keyword_Sell" >
                <option value="">chon cap do</option>
               <input type="text" class="form-control" name="Keyword_Sell" value="{{ old('Keyword_Sell') }}">
            </select>
        </div>

        <button type="" class="btn btn-primary">submit</button>
    </form>

    </section>
 --}}    <section>
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm mới</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ Route('tag.store') }}"  enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên danh mục </label>
                    <input type="text" class="form-control" id="CatName" name="Name" placeholder="Enter name">
                  </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});

@endsection
