<!-- Including index connections and header designs  -->
<?php

?>
<!-- Login form -->

<div class="form">
          
          <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-heading">
				<h2 class="text-center">Logout<button type="button" class="close" data-dismiss="modal" style="float:right">&times;</button></h2>
			</div>
			<hr />
			<div class="modal-body">
				<!-- Login Form  -->
				<form action="RegistrationController.php" method="post" role="form">
					<div class="form-group">
						<div class="input-group">
							<label><h2>Are you sure?</h2></label>
							<!-- <span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							<input type="Email" class="form-control" placeholder="Email Address" name="uEmail"/> -->
						</div>
					</div>
					<!-- <div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock"></span>
							</span>
							<input type="password" class="form-control" placeholder="Password" name="password" />

						</div>

					</div> -->

					<div class="form-group text-center">
						<button type="submit" class="btn btn-success btn-lg" name="logout">Yes, Logout</button>
						<!-- <a href="#" class="btn btn-link">Forgot Password</a> Alert dialog for 'Please contact your system administration' -->
					</div>

				</form>
			</div>
		</div>
	</div>

        </div>
        
      
</div> 
<!-- /form -->

<!-- Including footer designs -->
<!-- <?php// include 'footer.php'; ?>