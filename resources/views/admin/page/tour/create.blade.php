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
              <li class="breadcrumb-item active">Tour</li>
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
              <form role="form" method="POST" action="{{ route('tour.store') }}"  enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                      <!-- select -->
                  <div class="form-group">
                    <label>Tên danh mục </label>
                    <select class="form-control" name="CatID">
                      <option value="" >chọn tên danh mục</option>
                        @foreach($category as $val)
                        <option value="{{ $val->id }}">{{ $val->CatName }}</option>
                        @endforeach
                    </select>
                  </div>



                   <div class="form-group">
                    <label for="exampleInputEmail1">Tên Tour </label>
                    <input type="text" class="form-control" id="Name" name="Name" placeholder="Nhập tên Tour">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Giá Tour </label>
                    <input type="text" class="form-control" id="Price " name="Price" placeholder="Nhập giá ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Lựa chọn cấp độ  </label>
                    <input type="text" class="form-control" id="Piority " name="Piority" placeholder="nhập cấp độ ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nhập số ngày Tour </label>
                    <input type="text" class="form-control" id="CatName" name="Duration" placeholder="Nhập số ngày">
                  </div>
                  <div class="card-body pad p-0 ">
                      <label for="exampleInputEmail1"> Giới thiệu </label>
                      <div class="">
                        <textarea class="textarea" placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="Content"></textarea>
                      </div>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Từ khóa Tìm kiếm</label>
                       <select class="form-control" name="TagID">
                      <option value="">chọn tên danh mục</option>
                        @foreach($tag as $val)
                        <option value="{{ $val->id }}">{{ $val->Name }}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="Status">
                    <label class="form-check-label strong" for="exampleCheck1" >Trạng thái</label>

                  </div>



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
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
@endsection
