@extends('layouts.admin.app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('/css/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">


@endsection

@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
PRASDEL Permission
        <small>it all starts here</small>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
  <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Permission</h3>
          <a class="col-lg-offset-5 btn btn-success" href="{{route('permission.create')}}">ADD NEW</a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>

             <div class="box-body">
          <div class="box">

                      <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th>S.No</th>
                            <th>Permission Name</th>
                            <th>Permission For</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                          </thead>
                          <tbody>
                          @foreach ($permissions as $permission)
                          <tr>
                                          <td>{{$loop->index +1}}</td>
                                          <td>{{$permission->name}}</td>
                                          <td>{{$permission->for}}</td>
                                          <td><a href="{{route('permission.edit',$permission->id)}}"><span class="glyphicon glyphicon-edit"></a></td>
                                          <td>
                              <form id="delete-form-{{$permission->id }}" method="post" action="{{route('permission.destroy',$permission->id)}}" style="display:none;">
                                    {{ csrf_field() }}

                                    {{ method_field('DELETE')}}
                              </form>
                                            <a href="" onclick="
                                            if(confirm('Are you sure,You want to delete')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{$permission->id}}').submit();
                                            }
                                            else{
                                              event.preventDefault();
                                            }
                                          "><span class="glyphicon glyphicon-trash"></td>
                                        </tr>

                          @endforeach


                          </tbody>
                          <tfoot>
                            <tr>
                              <th>S.No</th>
                              <th>Permission Name</th>
                              <th>Permission For</th>
                              <th>Edit</th>
                              <th>Delete</th>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      <!-- /.box-body -->
                    </div>
                          </div>
        <!-- /.box-body -->

      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

@endsection
@section('footerSection')
<script src="{{ asset('/css/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('/css/admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection
