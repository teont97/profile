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
              <h3 class="box-title">Chỉnh sửa học vấn </h3>
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
            <form action="{{ route('admin.education.postEdit',$data_edit->id)}}" method="POST">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                 <!-- /.box-header -->
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tên Trường </label>
                        <input type="text" class="form-control" value="{{ $data_edit->name_school}}" name="name_school" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Địa Chỉ</label>
                        <input type="text" class="form-control" value="{{ $data_edit->address}}" name="address" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Năm Bắt Đầu</label>
                        <input type="text" class="form-control" value="{{ $data_edit->start}}" name="start" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Năm Kết Thúc </label>
                        <input type="text" class="form-control" value="{{ $data_edit->end}}" name="end" >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Mô Tả Chi Tiết  </label>
                            <textarea style="height: 200px;"  class="form-control" name="txtcontent" >{{ $data_edit->content}} </textarea>
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





















