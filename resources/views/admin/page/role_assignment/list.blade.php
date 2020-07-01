@extends('admin/main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tour</h1>
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
    <!-- /.content-header -->
 <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Tour</h3>

              </div>
                <form class="form-inline ml-3">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>

              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Customer ID</th>
                      <th>Role ID</th>
                      <th>Title</th>
                      <th>Active</th>
                      <th>
                        <a href="{{ route('role_assignment.create') }}" class="btn btn-xs btn-primary">Thêm</a>
                      </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($role_assignment as $model)
                      <tr>
                        <td>{{ $model->id }}</td>
                        <td>{{ $model->role_id }}</td>
                        <td>{{ $model->customer_id }}</td>
                        <td>{{ $model->title  }}</td>
                        <th>{{ $model->active  }}</th>
                        <td>
                            <a href="{{ route('role_assignment.edit',['role_assignment'=>$model->id]) }}" class="btn btn-xs btn-primary ">Sửa</a>
                            <form action="{{ route('role_assignment.destroy',$model->id) }}" method="POST" accept-charset="utf-8">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-xs btn-danger  " onclick="return confirm('Bạn có chắc muốn xóa không') " >Xóa</button>
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
              <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
@endsection
