@extends('admin.master')
@section('content')

<section class="content-header">
  <h1>

    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tables</a></li>
    <li class="active">Data tables</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Chỉnh Sửa Thông Tin  </h3>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            @if(session('mesage'))
            <p class="alert alert-success">
              <span>{!! session('mesage') !!}</span>
            </p>
            @endif   
          </div>
        </div>
        <form action="{{ route('admin.user.postCreate')}}" method="POST">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">
          <!-- /.box-header -->
          <div class="box-body">
            <div class="col-md-6">
              <div class="form-group">
                <label>User Name  </label>
                <input type="text" class="form-control" value="{{ $userEdit['name']}}" name="UserName" >
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Age </label>
                <input type="text" class="form-control" value="{{ $userEdit['age']}}" name="Age" >
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label style="display: block;">Gender</label>
                <label class="radio-inline"><input type="radio" {{ $userEdit['gender']==1 ? 'checked':''  }} name="Gender" value="1">Nam</label>
                <label class="radio-inline"><input type="radio" name="Gender" {{ $userEdit['gender']==0 ? 'checked':''  }}  value="0">Nữ</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" value="{{ $userEdit['email']}}" name="Email" >
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" value="{{ $userEdit['password']}}" name="Password" >
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" value="{{ $userEdit['phone']}}" name="Phone" >
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Note</label>
                <input type="text" class="form-control" value="{{ $userEdit['note']}}" name="Note" >
              </div>
            </div>

          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix group-btn-footer text-center">
            <input type="submit" class="btn btn-success"  value="Lưu thay đổi" >
          </div>
        </form>
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
@endsection





















