@extends('admin.master')
@section('content')
<script>
  $(function(){
    $('#ListProject').DataTable({
     // "scrollX": true
   });
  });
</script>
<section class="content-header">
  <h1>
    Danh sách học vấn của bạn
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
          <h3 class="box-title" style="width: 100%;">
            @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
            @endif
          </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="ListProject" class="table table-bordered table-striped" style="width:100%;">
            <thead>
              <tr>
                <th>STT</th>
                <th>Tiêu Đề Website </th>
                <th>Hình Ảnh </th>
                <th width="auto">Links </th>
                <th>Thể Loại </th>
                <th>Hành Động</th>              
              </tr>
            </thead>
            <tbody>
              <?php $stt=0; ?>
              @foreach($dataProjects as $dataProject) 
              <?php $stt++ ?>
              <tr>
                <td>{!! $stt !!}</td>
                <td>{!! $dataProject->title !!}</td>
                <td><img src="{!! asset('public/client/assets/images/project/'.$dataProject->images) !!}" class="thumb-image-list"></td>
                <td><a href="{!! $dataProject->link !!}">{!! $dataProject->link !!}</a></td>
                <td>{!! $dataProject->categories !!}  </td>
                <td>
                  <a href="{{ route('admin.education.getEdit',$dataProject->id) }}" class="Modal   edit" data-catalog="{!!$dataProject->id!!}" > <i class="fa fa-edit" ></i> </a>
                  <button type="button" class="Modal eye" > <i class="fa fa-eye"  ></i> </button>
                  <button type="button" class="Modal trash" data-catalog="{!!$dataProject->id!!}" data-toggle="modal"  data-target="#ModalDelete"  > <i class="fa fa-trash" ></i> </button>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
               <th>STT</th>
               <th style="width: 20%">Tên Công Ty</th>
               <th style="width: 20%">Vị Trí</th>
               <th style="width: 30%">Mô Tả Chi Tiết </th>
               <th>Thời Gian</th>
               <th>Hành Động</th>  
             </tr>
           </tfoot>
         </table>
       </div>
       <!-- /.box-body -->
       <div class="box-footer clearfix group-btn-footer">
        <a href="{{ route('admin.education.getCreate')}}" class="btn btn-success" > Thêm Mới  </a>
      </div>
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
</section>

<!-- Modal Delete Post  -->
<div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Xóa Bài Viết </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
        
      </div>
      <form id="formDelete" role="modal">
        <input type="hidden" name="id_delete" id="id_delete" value="" >
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát </button>
          <button type="button" class="btn btn-primary" id="delete_education">Xác Nhận</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  $('#ListEducation tbody').on( 'click','button.trash', function(){
    var delete_ojb = $(this).attr('data-catalog');  
    var ValueDelete = $('#id_delete').val(delete_ojb);   
  });
  $('#delete_education').click(function(){ 
    var idDelete = $('#id_delete').val();
    // console.log(id);
    $.ajax({
      url: "/admin/education/post-delete",
      type: 'POST',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data: {id:idDelete},
      success:function(data){
        $('#exampleModal').modal('hide');
        location.reload();
      }   
    });
  });
</script>

@endsection