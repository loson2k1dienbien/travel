@extends('admin.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
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
    <!-- /.content-header -->
 <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Users</h3>
              </div>
            <form class="form-inline ml-3 mb-5">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
            <a href="{{route('role.create')}}" class="btn btn-primary form-control" style="width=70px">Thêm</a>

              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Content</th>
                      <th>Active</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($role as $model)
                      <tr>
                        <td>{{ $model->id }}</td>
                          <td>{{ $model->title }}</td>
                           <td>{!! $model->description!!}</td>
                           <td>{{ $model->content}}</td>
                           <td>{{ $model->active}}</td>
                            <td>
                                <a href="{{ route('role.edit',['role'=>$model->id]) }}" class="btn  btn-primary form-control">sửa</a>
                              <form action="{{ route('role.destroy',$model->id) }}" method="POST" accept-charset="utf-8">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn form-control btn-danger  " onclick="return confirm('Bạn có chắc muốn xóa không') " >Xóa</button>
                              </form>
                            </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
@endsection
