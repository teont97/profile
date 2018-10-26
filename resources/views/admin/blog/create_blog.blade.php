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
          <h3 class="box-title">Thêm Mới Bài Viết </h3>
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
    <form action="{{ route('admin.education.postCreate')}}" method="POST">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <!-- /.box-header -->
        <div class="box-body">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tiêu Đề  </label>
                    <input type="text" class="form-control" value="" name="company" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Slug </label>
                    <input type="text" class="form-control" value="" name="position" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tóm Tắt</label>
                    <input type="text" class="form-control" value="" name="start" >
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Hình Đại Diện</label>
                    <input id="fileUpload" name="files" type="file" class="form-control" value=""> 
                    <div id="image-holder"> </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Thể Loại</label>
                    <select class="form-control" name="Typeproject">
                        <option value="1"> Real East </option>
                        <option value="2"> Education </option>
                        <option value="3"> Ecommerce  </option>
                        <option value="4"> Profile </option>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Nội Dung</label>
                    <textarea style="height: 200px;"  class="form-control" name="content" ></textarea>
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
<script type="text/javascript">
$(document).ready(function() {
        $("#fileUpload").on('change', function() {
          //Get count of selected files
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var image_holder = $("#image-holder");
          image_holder.empty();
          if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++) 
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
                  }).appendTo(image_holder);
                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              alert("This browser does not support FileReader.");
            }
          } else {
            alert("Pls select only images");
          }
        });
      });
</script>

@endsection





















