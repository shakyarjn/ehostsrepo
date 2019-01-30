<!-- Including index connections and header designs -->
<?php
//include 'errors.php';
 
//session_start();

?>
<!-- Registration form -->

<div class="form">
          
          <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-heading">
				<h2 class="text-center">Registration
				<button type="button" class="close" data-dismiss="modal" style="float:right">&times;</button></h2>

				<div id="result" style ="background: rgba(0, 255, 1, .5);font-size:18px;text-align:center;"></div>
			</div>
			<hr />
			<div class="modal-body">
				<form role="form" method="post" id="registration-form">
			    
					<label><h3>Personal Details:</h3></label>
					<input type="hidden" name="register" value="Register">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							<input type="text" class="form-control" placeholder="Parent's Name" name="uName" required/>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							<input type="text" class="form-control" placeholder="Address" name="uAddress" required/>
						</div>
					</div>
						<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							<!-- Form validation for contact numbers -->
							<input type="tel" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Primary Contact" name="uContact1" required/><span class="note">Format: 123-456-7890</span>
							<!-- Unique contact number message alert -->
						</div>
					</div>
						<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							<!-- Form validation for contact numbers -->
							<input type="tel" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Secondary Contact" name="uContact2"/><span class="note">Format: 123-456-7890</span>
						</div>
					</div>
						<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							<input type="text" class="form-control" placeholder="Child Name" name="uChildName" required/>
						</div>
					</div>
						<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							<input type="date" class="form-control" placeholder="Child DOB" name="uChildDate" required/>
						</div>
					</div>
						<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							<label class="gender">Gender:
							<label for="male"><input type="radio" id="male" name="uGender" value="male" checked>Male</label>
							<label for="female"><input type="radio" id="female" name="uGender" value="female">Female</label>
							<label for="other"><input type="radio" id="other" name="uGender" value="other">Other</label>
							</label>
						</div>
					</div>

				
						
						

					<label><h3>Login Information</h3></label>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							<input type="email" class="form-control" placeholder="Email Address" name="uEmail" required/>
						</div>
					</div>
					<!-- <div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							<input type="text" class="form-control" placeholder="User Name" name="username" required/>
						</div>
					</div> -->
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock"></span>
							</span>
							<input type="password" class="form-control" placeholder="Password" name="password" required/>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock"></span>
							</span>
							<input type="password" class="form-control" placeholder="Confirm Password" name="password2" required/>
						</div>
					</div>

					<div class="form-group text-center">
						<button  type="submit" class="btn btn-success btn-lg" name="register">Register</button>
						<!-- <a href="#" class="btn btn-link">Cance</a> -->
					</div>

				</form>
			</div>
		</div>
	</div>

        
      
</div>


