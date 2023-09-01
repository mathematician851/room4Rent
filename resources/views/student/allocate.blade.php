@extends('layouts.app')

<link rel="stylesheet" href="/style.css">
<!-- Modernizr
================================================== -->

@section('nav')
@include('inc.nav-alloc')
@endsection

@section('content')

<div class="row">
	<div class="col-12 text-center">
		<h4 class="text-center m-0 text-danger">Hostel and Bed Space Selection</h4>
	</div>
</div>
<div class="row mt-5">
	<div class="col parent">

		<div class="toggle h-100 w-100">
			<h3 class="text-center m-0 text-info" id="price"></h3>
			<div class="h-100 w-100" id="loadAvailableBed">

			</div>


		</div>

		<div class="h-100 w-100" id="loadHostelDetails">
			@if(isset($_GET['h']) && $_GET['h'] !='')

				@if($data != "")
					<div class="corousel-gallery-content">
						<div class="gallery">
							<div class="full-view owl-carousel ">
								<a class="item image-pop-up" href="/photo/{{$data->images[0]->photo}}">
									<img src="/photo/{{$data->images[0]->photo}}" alt="corousel">
								</a>

							</div>

							<div class="list-view owl-carousel">
								@foreach($data->images as $key=>$image)
									@if($key > 0)
										<div class="item">
											<img src="/photo/{{$image->photo}}" alt="corousel-image">
										</div>

									@endif
								@endforeach

							</div>
						</div> <!-- /.gallery-two -->
					</div> <!-- /.corousel-gallery-content -->
				@endif

			@endif

		</div>
	</div>

	<div class="col-md-5">
		<div class="card">
			<div class="card-header text-center">
				Choose Hostel
			</div>
			<div class="card-body justify-content-center">
				{{Form::open(['id' => 'allocform'])}}
				<div class=" form-group row">
					{{Form::label('campus_id', 'Campus:', ['class' => 'col-3 col-form-label text-md-left'])}}
					<div class="col">
						<select name="campus_id" id="campus_id" class="form-control" readonly>
							<option value="{{$student->campus->id}}">{{$student->campus->name}}</option>
						</select>
					</div>
				</div>

				<div class=" form-group row">
					{{Form::label('type', 'Type:', ['class' => 'col-3 col-form-label text-md-left'])}}
					<div class="col">
						<select name="type" id="type" class="form-control" readonly>
							<option value="{{$student->gender}}">
								<?= ($student->gender == 1)? 'Male' : 'Female' ?>
							</option>
						</select>
					</div>
				</div>

				<div class=" form-group row">
					{{Form::label('hostel_id', 'Hostel:', ['class' => 'col-3 col-form-label text-md-left'])}}
					<div class="col">
						<select name="hostel_id" id="hostel_id" class="form-control">

							@if(isset($_GET['h']) && $_GET['h'] !='')
								@if($data != "")
									<option value="{{$data->id}}">{{$data->name}}</option>
								@endif

							@else
								<option value="">Select Hostel</option>
								@foreach ($availables as $available)
									<option value="{{$available->hostel_id}}">{{$available->hostel->name}}</option>
								@endforeach
							@endif



						</select>
					</div>
				</div>

				<div class=" form-group row">
					{{Form::label('floor', 'Floor:', ['class' => 'col-3 col-form-label text-md-left'])}}
					<div class="col">
						<select name="floor" id="floor" class="form-control" disabled>
							<option value="x">Select Floor</option>
							<option value="1">First</option>
							<option value="2">Second</option>
							<option value="3">Third</option>
						</select>
					</div>
				</div>

				<div class=" form-group row">
					{{Form::label('room_no', 'Room No.:', ['class' => 'col-3 col-form-label text-md-left'])}}
					<div class="col">
						<select name="room_no" id="room_no" class="form-control" disabled>
							<option value="">Select Room Number</option>
						</select>
					</div>
				</div>

				<div class="form-group row mt-5">
					<div class="col-3"></div>
					<div class="col">
						<input type="hidden" value="" id="bedAmount">
						<input type="submit" value="Show Available Bed Space" class="btn btn-block btn-shadow btn-success" disabled>
					</div>
				</div>
				{{Form::close()}}
			</div>
		</div>
	</div>
</div>
</div>
<div>
	<div data-u="loading" class="jssorl-009-spin spin paystackspin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.5);">
		<img style="margin-top:-15px;position:relative;top:35%;width:38px;height:38px;" src="{{asset('image/spin.svg')}}" />
	</div>
</div>
<script>
	$(function () {

		var  hos = $("#hostel_id").val();

		if(hos.length != ""){
			$("#floor").attr('disabled', false)
		}

		let name = "{{ $student->name.' '.$student->surname }}",
			email = "{{$student->email}}",
			campus = "{{$student->campus->name}}",
			phone = "{{$student->phone}}",
			reg = "{{$student->regno}}",
			depart = "{{$student->department}}",
			token = "{{Session::token()}}";

		//select box manipulation
		let campus_id = $('#campus_id'),
			type = $('#type'),
			hostel = $('#hostel_id'),
			floor = $('#floor'),
			room = $('#room_no'),
			selected = $("#floor option[value='x']"),
			submit = $("input[type='submit']"),
			first = $('#first'),
			second = $('#second'),
			third = $('#third'),
			fourth = $('#fourth'),
			five = $('#five'),
			six = $('#six'),
			amount = $('#bedAmount'),
			toggle = $('.toggle').detach(),
			disabled,
			hostelText,
			enabled,
			Space;

		toggle.css('display', 'block');

		function toggleBed() {
			if (toggle == null || toggle.length == 0) {
				toggle = $('.toggle').detach();
			}
		}

		hostel.change(function () {


			//set display bed to empty
			$("#loadAvailableBed").html("")

			toggleBed();
			//reset the following
			selected.attr('selected', '');
			room.html("<option value = ''>Select Room Number</option>").attr('disabled', '');

			submit.attr('disabled', '');
			if (hostel.val()) {
				floor.removeAttr('disabled');
			} else {
				//reset room_no and floor
				floor.attr('disabled', '');
				room.html("<option value = ''>Select Room</option>").attr('disabled', '');
			}
			//clear the selected attr for reselection
			selected.removeAttr('selected');
			hostelText = $('option:selected', this).text();
		});

		floor.change(function () {
			//set display bed to empty
			$("#loadAvailableBed").html("")
			toggleBed();
			let url = "{{route('allocate.getrooms')}}";
			submit.attr('disabled', '');
			room.html("<option value = ''>Select Room Number</option>").attr('disabled', '');

			let data = {
				campus_id: campus_id.val(),
				type: type.val(),
				hostel_id: hostel.val(),
				floor: floor.val()
			}


			$.ajax({
				method: 'GET',
				url: url,
				data: data,
				success: function (data) {
					room.removeAttr('disabled');
					$.each(data, function (key, value) {
						room.append('<option value = ' + value + '>' + value + '</option>');
					});
				}
			});
		});

		room.change(function () {

			//set display bed to empty
			$("#loadAvailableBed").html("")
			toggleBed();

			if (room.val()) {
				submit.removeAttr('disabled');
			} else {
				submit.attr('disabled', '');
			}

		});

		//generate bed-spaces
		$('#allocform').submit(function (e) {
			e.preventDefault();

			let uri = "{{route('allocate.getBed')}}";

			let data = {
				campus_id: campus_id.val(),
				type: type.val(),
				hostel_id: hostel.val(),
				floor: floor.val(),
				room_no: room.val()
			}


			$.ajax({
				method: 'GET',
				url: uri,
				data: data,
				success: function (data) {
					if (toggle != null) {
						toggle.appendTo($('.parent'));
					}
					$("#loadHostelDetails").hide();

					toggle = null;
					$('.bed').off('click');

					//get Amount
					$("#bedAmount").val(data.amount);
					$("#price").text(`Price of each  GHS:  ${data.amount}.00`);


					 var loadAvailableBed = $("#loadAvailableBed");

					$.each(data.space, function (key, value) {

						  //load availabel bend in html
						var bedHtml = '<a href="" id="'+key+'" class="bed d-inline-block h-25 w-25 m-3"> ' +
								'<p class="text-center">' +
								'<i class="fas fa-bed alloc-test"></i></p>' +
								'<h3 class="text-center">'+key+'</h3> </a>';
						  loadAvailableBed.append(bedHtml);


						let na = $("#"+key);

						if (value > 0) {
							na.addClass('disabled');
							na.removeClass('text-available');
							na.attr('title', 'Sorry, this bed has booked already');
						} else {
							na.removeClass('disabled');
							na.addClass('text-available');

						}


					});




					disabled = $('.disabled');
					enabled = $('a.bed:not(.disabled)');

					clickHandler();

				}
			});
		});

		//disable click on .disableds
		function clickHandler() {


			disabled.click(function (e) {
				e.preventDefault();
			});




			enabled.click(function (e) {
				e.preventDefault();
				let urii = "{{route('allocate.check')}}";
				//gets the space selected
				space = $(this).attr('id');
				let da = {
					campus_id: campus_id.val(),
					type: type.val(),
					hostel_id: hostel.val(),
					floor: floor.val(),
					room_no: room.val(),
					space: space
				}
				//checks the room is stil available
				$.ajax({
					method: 'GET',
					url: urii,
					data: da,
					success: function (data) {
						if (data > 0) {
							//error
							toastr.error("That Space has already been taken.");
						} else if (data == 0) {
							//add loading effects
							$(".paystackspin").css({
								display: "block"
							})
							//paystack
							payWithPaystack();
						}
					},
					error: function () {
						toastr.error("Poor Newtwork Connection,Try Again.");
					}
				});
			});
		}

		function payWithPaystack() {

			  var amount = $("#bedAmount").val();

			var handler = PaystackPop.setup({
				key: 'pk_test_d0def1c19ee28833853e3ab40abd9843398e11dd',
				email: email,
				amount: parseInt(amount* 100),
				currency:'GHS',
				ref: '' + Math.floor((Math.random() * 1000000000) + 1),
				metadata: {
					custom_fields: [{
							display_name: "Full Name",
							variable_name: "full_name",
							value: name
						}, {
							display_name: "Campus",
							variable_name: "campus",
							value: campus
						}, {
							display_name: "Hostel",
							variable_name: "hostel",
							value: hostelText
						}, {
							display_name: "Department",
							variable_name: "department",
							value: depart
						},
						{
							display_name: "Registration Number",
							variable_name: "reg_no",
							value: reg
						}, {
							display_name: "Phone Number",
							variable_name: "phone_no",
							value: phone
						}
					]
				},
				callback: function (response) {
					let urll = "{{route('allocate.allocate')}}";
					let dat = {
						campus_id: campus_id.val(),
						hostel_id: hostel.val(),
						type: type.val(),
						floor: floor.val(),
						room_no: room.val(),
						space: space,
						receipt: response.reference,
						_token: token
					}
					$.ajax({
						method: 'POST',
						url: urll,
						data: dat,
						success: function (data) {
							toastr.success("Bedspace asigned successfully.");
							$(".paystackspin").css({
								display: "none"
							});
							location.href = "{{route('home')}}"
						}
					})
				},
				error: function () {
					toastr.error("Poor Newtwork Connection,Try Again.");
				},
				onClose: function () {
					$(".paystackspin").css({
						display: "none"
					});
				}
			});
			handler.openIframe();
		}
	});
</script>

<script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="/assets/js/plugins.js"></script>
<script src="/assets/js/main.js"></script> <!-- main-js -->
@endsection