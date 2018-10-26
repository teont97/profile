@extends('admin.master')
@section('content')
<script>
  $(function(){
    $('#ListUser').DataTable({
     // "scrollX": true
   });
  });
</script>
<section class="content-header">
  <h1>
    Danh Sách Thể Loại
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
          <table id="ListUser" class="table table-bordered table-striped" style="width:100%;">
            <thead>
              <tr>
                <th>STT</th>
                <th>User Name </th>
                <th>Age </th>
                <th>Email</th>
                <th>Action</th>              
              </tr>
            </thead>
            <tbody>
              <?php $stt=0; ?>
              @foreach($Users as $User) 
              <?php $stt++ ?>
              <tr>
                <td>{!! $stt !!}</td>
                <td>{!! $User->name !!}</td>
                <td>{!! $User->age  !!}</td>
                <td>{!! $User->email  !!}</td>
                <td>
                  <a href="{{ route('admin.user.getEdit',$User->id) }}" class="Modal   edit" data-catalog="{!!$User->id!!}" > <i class="fa fa-edit" ></i> </a>
                  <button type="button" class="Modal trash" data-catalog="{!!$User->id!!}" data-toggle="modal"  data-target="#ModalDelete"  > <i class="fa fa-trash" ></i> </button>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>STT</th>
                <th>User Name </th>
                <th>Age </th>
                <th>Email</th>
                <th>Action</th>               
              </tr>
           </tfoot>
         </table>
       </div>
       <!-- /.box-body -->
       <div class="box-footer clearfix group-btn-footer">
        <a href="{{ route('admin.user.getCreate')}}" class="btn btn-success" > Thêm Mới  </a>
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
          <button type="button" class="btn btn-primary" id="delete_User">Xác Nhận</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  $('#ListUser tbody').on( 'click','button.trash', function(){
    var delete_ojb = $(this).attr('data-catalog');  
    var ValueDelete = $('#id_delete').val(delete_ojb);   
  });
  $('#delete_User').click(function(){ 
    var idDelete = $('#id_delete').val();
    $.ajax({
      url: "/admin/user/post-delete",
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