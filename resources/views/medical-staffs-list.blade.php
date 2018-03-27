@extends('adminlte::page')

@section('title', 'LVDC | Medical Staffs')

@section('content_header')
<link rel="stylesheet" href="components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<h3 class="page-header">Medical Staffs List </h3>
@stop

@section('logo')
    <img src="img/logo/lvdc_logo_md.png" width="85%" style="padding: 10%; padding-left: 8%;">
@stop

@section('content')
          <div class="box box-bluegreen">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-condensed">
                <thead>
                  <tr>
                    <th hidden="">id</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Field</th>
                    <th>Department</th>
                  </tr>
                </thead>
                <tbody>


                  @foreach ($medicalStaffs as $medicalStaff)
                    <tr>
                      <td hidden="">{{ $medicalStaff->id }}</td>
                        <td>{{ $medicalStaff->prefix }} {{ $medicalStaff->first_name }} {{ $medicalStaff->middle_name }} {{ $medicalStaff->last_name }} {{ $medicalStaff->suffix }}</td>
                        <td>{{ $medicalStaff->gender }}</td>
                        <td>{{ $medicalStaff->field }}</td>
                        <td>{{ $medicalStaff->name }}</td>
                    </tr>
                  @endforeach


                </tbody>
                 <tfoot>
                  <tr>
                    <th hidden="">id</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Field</th>
                    <th>Department</th>
                  </tr>
                 </tfoot>
              </table>
            </div>
          </div>
@stop

@section('script')
    <script src="components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $('#example1').DataTable({

      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
@stop