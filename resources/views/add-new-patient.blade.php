@extends('adminlte::page')

@section('title', 'LVDC | Add Patients')

@section('content_header')
	<h3 class="page-header">Take Patient In</h3>
@stop

@section('logo')
    <img src="img/logo/lvdc_logo_md.png" width="85%" style="padding: 10%; padding-left: 8%;">
@stop

@section('content')
<div class="row">
	<div class="col-md-6">
	  <div class="box box-bluegreen" style="font-size: 10px; height: 480px; overflow: hidden; overflow: scroll;">
	    <div class="box-body" style="overflow: hidden;">
	     	
	    	<table id="example1" class="table table-bordered table-striped table-condensed" style="font-size: 12px;">
                <thead>
                  <tr>
                  	<th hidden="">Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Birthdate</th>
                    <th>Options</th>
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
                        <td>
	                        <a href="add-patient/clicked/{{$patient->id}}">
	                        	<button class="btn btn-primary btn-xs">
	                        	Patient In
	                        	</button>
	                        </a>
	                    </td>
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
                    <th>Options</th>
                  </tr>
                 </tfoot>
              </table>

	    </div>
	  </div>
	</div>

	<div class="col-md-6">
	  <div class="box box-bluegreen">
	    <div class="box-header with-border">
	      <h4>Add New Patient</h4>
	    </div>
	    <form action="/add-patient/add" method="post">
	    	{{ csrf_field() }}
		    <div class="box-body">
		    	<input class="form-control" type="text" id="fNameInput" name="firstName" placeholder="First Name" style="border-bottom: none;">
		    	<input class="form-control" type="text" id="mNameInput" name="middleName" placeholder="Middle Name" style="border-bottom: none;">
		    	<input class="form-control" type="text" id="lNameInput" name="lastName" placeholder="Last Name">
		    	<br>
	            <div class="row">
	            	<div class="col-md-12">
				  		<textarea class="form-control" rows="2" name="address" placeholder="Address ..."></textarea>
				  	</div>
				</div>
				<br>
				<div class="row">	
					<div class="col-md-3" style="width: 19%;">
						<input class="form-control remove-spin" id="ageInput" name="age" type="number" oninput="" placeholder="Age">
					</div>
					<div class="col-md-1" style="padding: 6px 0 6px 0px; width: 15px;">
						<i class="fa fa-birthday-cake"></i>
					</div>
					<div class="col-md-4" style="padding-left: 6px;">
	          			<input type="date" class="form-control remove-spin" id="dateInput" name="birthdate" style="padding-left: 7px;">
		            </div>
	                <div class="col-md-5 pull-right" style="padding-left: 6px;">

	                	<div class="well well-sm" id="genderRadioBtn" style="padding: 6px; background-color: white; border: none; box-shadow: none; margin: 0;">
	                		<label class="radio-inline"><input type="radio" class="genderInput" id="maleRadioBtn" name="gender" value="male">
	                			<i class="fa fa-male" style="color: #005cab;"></i>
	                		Male</label>
	                		&nbsp&nbsp
							<label class="radio-inline"><input type="radio" class="genderInput" id="femaleRadioBtn" name="gender" value="female">
	                			<i class="fa fa-female" style="color: #f55672;"></i>
	                		Female</label>
	                	</div>
	                </div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-4">
						<input class="form-control remove-spin" name="contact" oninput="this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="11" value="09">
					</div>
					<div class="col-md-8">
						<div class="form-group">
		                  <select class="form-control" name="status">
		                    <option hidden>Civil Status</option>
		                    <option>Single</option>
		                    <option>Married</option>
		                    <option>Widowed</option>
		                  </select>
		                </div>
					</div>
				</div>
				<div class="row">				
					<div class="col-md-12">
						<div class="form-group">
		                  <select class="form-control" name="religion">
		                    <option hidden>Religion</option>
		                    <option>Members Church of God International</option>
		                    <option>Catholic</option>
		                    <option>Born Again</option>
		                  </select>
		                </div>
					</div>
				</div>

			    <div class="row pull-right">
			    	<div class="col-md-12">
			    		<button class="btn btn-warning">Cancel</button>
			    		&nbsp&nbsp
			    		<input class="btn btn-success" type="submit" name="submit">
			    	</div>
				</div>
		    </div>
		</form>
	  </div>
	</div>
</div>
@stop


@section('script')
    <script src="components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

	<script>
	  $(function () {
	    $('#example1').DataTable({
	    	'paging'      : false,
	      	'lengthChange': true,
	      	'searching'   : true,
	     	'ordering'    : false,
	      	'info'        : false,
	      	'autoWidth'   : true
	  	});
	  });
	</script>
<script type="text/javascript">
	$(document).ready(function(){

		$("#ageInput").on('input', function(){
			var age = $(this).val();
			if (age < 1 || age >= 155 || age == "e" || age == "+" || age == "-" || age == "e") {
				$("#ageInput").val("");
			}else{

			}

			$(this).on("keydown", function(event){
				var x = event.keyCode;
				// console.log(x);
				if (x == 190 || x == 110) {
					$("#ageInput").val("");
				}else{

				}
			});
		});

		$("#dateInput").change(function(bday){
			var date = bday.target.value.split('-');
			var year = date[0];
			var month = date[1];
			var day = date[2];
			console.log("Bday: "+year+month+day);

			var dateToday = new Date();
			var thisYear = dateToday.getFullYear();
			var thisMonth = dateToday.getMonth();
				thisMonth += 1;
			var thisDay = dateToday.getDate();
			console.log("Date: "+thisYear+thisMonth+thisDay);
			// console.log(thisYear);
			var ageNow = 0;
			ageNow = (thisYear - year)-1;

			if (thisMonth == month) {
				if (thisDay >= day) {
					ageNow += 1;
				}else{

				}
			}else if (thisMonth > month) {
				ageNow += 1;
			}else{}

			if (ageNow < 1 || ageNow > 150) {
				$("#ageInput").val("");
			}else{
				$("#ageInput").val(ageNow);
			}
			// console.log(ageNow);
		});

		// $("#genderRadioBtn").change(function(gender){
		// 	var x = $("input[name='gender']:checked").val();
		// 	console.log(x);
		// });

	});
</script>
@stop
