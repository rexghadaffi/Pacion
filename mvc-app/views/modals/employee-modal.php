<!-- Employee Form Sample -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #87CEFA">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create New User Record</h4>
      </div>
	   <form>
		  <div class="modal-body">
	    	<div class="form-group">
				<label for="txtusername">Username</label>
				<input type="text" class="form-control" id="txtusername" placeholder="Username">
			</div>
			
			<div class="form-group">
				<label for="txtpassword">Password</label>
				<input type="password" class="form-control" id="txtpassword" placeholder="Password">
			</div>
			
			<div class="form-group">
				<label for="txtFname">First Name</label>
				<input type="text" class="form-control" id="txtFname" placeholder="First Name">
			</div>
			
			<div class="form-group">
				<label for="txtLname">Last Name</label>
				<input type="text" class="form-control" id="txtLname" placeholder="Last Name">
			</div>			
			
			<div class="form-group">
				<label for="txtaddress">Home Address</label>
				<input type="text" class="form-control" id="txtaddress" placeholder="Address">
			</div>

			<div class="form-group">
				<label for="txtcontact">Contact Number</label>
				<input type="text" class="form-control" id="txtcontact" placeholder="Contact Number">
			</div>
			
			<div class="form-group">
				<label for="txtemail">E-mail Address</label>
				<input type="email" class="form-control" id="txtemail" placeholder="E-mail">

			</div>
			
			<div class="form-group">
				<label for="cbotype">User Type</label>
				<select type="" class="form-control" id="cbotype">
					<option>Select</option>
					<option>Student</option>
					<option>Faculty</option>
				</select>
			</div>						
		
			<div class="form-group">
				<label for="exampleInputFile">Browse Profile Picture</label>
				<input type="file" id="exampleInputFile">
				<p class="help-block">Example block-level help text here.</p>
			</div>
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			<button type="button" class="btn btn-success">Add New</button>
		  </div>
	  </form>
    </div>
  </div>
</div>