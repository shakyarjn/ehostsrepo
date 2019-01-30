<div class="form">
          
          <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-heading">
				<h2 class="text-center">Dashboard
				<button type="button" class="close" data-dismiss="modal" style="float:right">&times;</button></h2>
			</div>
			<hr />
						<div class="modal-body">
				<form action="RegistrationController.php" role="form" method="post">
					<label><h2>Welcome <!-- <?php //echo($_SESSION['email']); ?> --></h2></label>
					<br>			    
					<label><h3>Personal Details:</h3></label>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							<input type="text" class="form-control" value="<?php echo $_SESSION['user']['uName']; ?>" name="uName" required/>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							<input type="text" class="form-control" value="<?php echo $_SESSION['user']['uAddress']; ?>" name="uAddress" required/>
						</div>
					</div>
						<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							<!-- Form validation for contact numbers -->
							<input type="tel" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value="<?php echo $_SESSION['user']['uContact1']; ?>" name="uContact1" required/><span class="note">Format: 123-456-7890</span>
							<!-- Unique contact number message alert -->
						</div>
					</div>
						<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							<!-- Form validation for contact numbers -->
							<input type="tel" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value="<?php echo $_SESSION['user']['uContact2']; ?>" name="uContact2"/><span class="note">Format: 123-456-7890</span>
						</div>
					</div>
						<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							<input type="text" class="form-control" value="<?php echo $_SESSION['user']['uChildName']; ?>" name="uChildName" required/>
						</div>
					</div>
						<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							<input type="date" class="form-control" value="<?php echo $_SESSION['user']['uChildDate']; ?>" name="uChildDate" required/>
						</div>
					</div>
						<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							<label class="gender">Gender:
							<label for="male"><input type="radio" id="male" name="uGender" <?php if (isset($_SESSION['user']['uGender']) && $_SESSION['user']['uGender']=="male") echo "checked";?> value="male" >Male</label>
							<label for="female"><input type="radio" id="female" name="uGender" <?php if (isset($_SESSION['user']['uGender']) && $_SESSION['user']['uGender']=="female") echo "checked";?>value="female">Female</label>
							<label for="other"><input type="radio" id="other" name="uGender" <?php if (isset($_SESSION['user']['uGender']) && $_SESSION['user']['uGender']=="other") echo "checked";?> value="other">Other</label>
							</label>
						</div>
					</div>

					<label><h3>Login Information</h3></label>
					<!-- <div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							// <input type="text" class="form-control" value="<?php //echo $_SESSION['user']['uEmail']; ?>" name="uEmail" locked required/>
						</div>
					</div> -->
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
							<input type="password" class="form-control" placeholder="Old Password" name="password" required/>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock"></span>
							</span>
							<input type="password" class="form-control" placeholder="Confirm password" name="password2" required/>
						</div>
					</div>

					<div class="form-group text-center">
						<button id="btnRegister" type="submit" class="btn btn-success btn-lg" name="update">Update</button>
						<button id="btnDelete" type="submit" class="btn btn-success btn-lg" name="delete" style="float:right;">Delete</button>
						<!-- <a href="#" class="btn btn-link">Cance</a> -->
					</div>

				</form>
			</div>
		</div>
	</div>

        
      
</div>
