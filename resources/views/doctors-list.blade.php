@extends('adminlte::page')

@section('title', 'LVDC | Doctors')

@section('content_header')
<link rel="stylesheet" href="components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <h3 class="page-header">Doctors List</h3>
@stop

@section('logo')
    <img src="img/logo/lvdc_logo_md.png" width="85%" style="padding: 10%; padding-left: 8%;">
@stop

@section('content')
          <div class="box box-bluegreen">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Time</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Request</th>
                    <th>Options</th>
                    <th>New</th>
                    <th>New2</th>
                    <th>New</th>
                    <th>New2</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                    $i = 0;

                    while ($i < 1000) {
                      $i++;
                      echo "<tr>";
                      echo "<td>Charlie</td>";
                      echo "<td>ffbb</td>";
                      echo "<td>Charlie</td>";
                      echo "<td>Charlie</td>";
                      echo "<td>bgbg</td>";
                      echo "<td>Charlie</td>";
                      echo "<td>dddddddd</td>";
                      echo "<td>776gg</td>";
                      echo "<td>bynumi b</td>";
                      echo "</tr>";
                    }


                   ?>
                </tbody>
                 <tfoot>
                  <tr>
                  <th>Time</th>
                  <th>Name</th>
                  <th>Department</th> 
                  <th>Request</th>
                  <th>Options</th>
                  <th>New</th>
                  <th>New2</th>
                  <th>New</th>
                  <th>New2</th>
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
@stop