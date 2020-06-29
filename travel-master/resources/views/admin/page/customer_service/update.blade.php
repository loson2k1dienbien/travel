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
              <form role="form" method="POST" action="{{ route('customer_service.store',$customer_service->id) }}"  enctype="multipart/form-data">
                @csrf @method('PUT')

                <div class="card-body">
                      <!-- select -->
                  <div class="form-group">
                    <label>Conatct Name</label>
                    <select class="form-control" name="contact_id">
                      <option value="{{$customer_service->contact_id}}">{{$customer_service->contact->content}}</option>
                        @foreach($contact as $val)
                        @if ($customer_service->contact_id!=$val->id)
                        <option value="{{$val->id}}">{{$val->content}}</option>
                        @endif
                        @endforeach
                    </select>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Date Rep </label>
                    <input type="text" class="form-control" id="date_rep" name="date_rep" placeholder="Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Contact </label>
                    <input type="text" class="form-control" id="content" name="content" placeholder="Title">
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
