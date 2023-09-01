<div class="modal fade" id="create-notice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title ml-auto" id="exampleModalCenterTitle">Location / Hostel</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				{{Form::open(['route' => 'admin.locationcreate', 'method' => 'POST', 'class' => 'create-hostel'])}}
				
				<div class=" form-group">
					<label for="name" class="col-form-label font-weight-bold">Name:
					</label>
					{{Form::text('name', null, ['class' => 'form-control'])}}
				</div>
				
				<div class="form-group">
					<label for="message-text" class="col-form-label font-weight-bold">Description:
					</label>
					<textarea class="form-control" id="description" rows="3" name="description"></textarea>
				</div>



			</div>
			<div class="create-hostel-footer d-flex">
				<div class="col">
					{{Form::submit('Save', ['class' => 'btn btn-block btn-success'])}}
					{{Form::close()}}
				</div>
				<div class="col">
					<button type="button" class="btn btn-block btn-danger" data-dismiss="modal">Cancel</button>
				</div>
			</div>
			
		</div>
	</div>
</div>