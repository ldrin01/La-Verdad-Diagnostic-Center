@extends('adminlte::page')

@section('title', 'LVDC |   Patients')

@section('content_header')
<link rel="stylesheet" href="components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <h3 class="page-header">Patients List</h3>
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
                    <th hidden="">Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Birthdate</th>
                    <th>Contact</th>
                    <th>Religion</th>
                    <th>Civil Status</th>
                  </tr>
                </thead>
                <tbody>
                    
                  @foreach ($patients as $patient)
                    <tr>
                      <td hidden="">{{$patient->id}}</td>
                        <td>{{ $patient->first_name }} {{ $patient->middle_name }} {{ $patient->last_name }}</td>
                        <td>{{ $patient->age }}</td>
                        <td>{{ $patient->gender }}</td>
                        <td>{{ $patient->birthdate }}</td>
                        <td>{{ $patient->contact_number }}</td>
                        <td>{{ $patient->religion }}</td>
                        <td>{{ $patient->civil_status }}</td>
                    </tr>
                  @endforeach

                </tbody>
                 <tfoot>
                  <tr>
                    <th hidden="">Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Birthdate</th>
                    <th>Contact</th>
                    <th>Religion</th>
                    <th>Civil Status</th>
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
      'autoWidth'   : false
    })
  })
</script>
@stop