<div id="content">			
	<div id="contentHeader">
		<h1>Create User</h1>
	</div> <!-- #contentHeader -->	
	<div class="container">
		<div class="grid-24">
			<?php echo validation_errors(); ?>
			<?php echo form_open('form'); ?>		
			<div class="form uniformForm">					
				<div class="widget">
					<div class="widget-header">
						<span class="icon-user"></span>
						<h3>User Information</h3>
					</div>
					<div class="widget-content">
						<div class="field-group inlineField " style="float:left;">	
							<div class="field">
								<label for="fullname">Full Name :</label>
								<input id="fullname" class="" type="text" size="24" name="fullname">
							</div>
							<br/>

							<div class="field">
								<label for="username">Username :</label>
								<input id="username" class="" type="text" size="24" name="username">
							</div>
							<br/>

							<div class="field">
								<label for="password">Password :</label>
								<input id="aname" class="" type="password" size="24" name="password">
							</div>
							<br/>

						
						</div>
						<div class="field-group inlineField" style="width: 48%;float:left;">	
							<div class="field">
								<label for="department">Department :</label>
								<select name="department " id="department">
											<option>--</option>
											<option>CCS </option>
										</select>
							</div>

							<div class="field">
								<label for="fname">User Type :</label>
								<select name="reason " id="reason">
										<option>--</option>
											<option>Department Head</option>
											<option>Checker</option>
										</select>
							</div>

						</div>
					</div> <!-- .widget-content -->
				</div> <!-- .widget -->
					<button class="btn btn-primary btn-blue">Save</button>
					<button class="btn btn-primary btn-blue">Cancel</button>
				 	
			</div>
			<?php echo form_close(); ?>
		</div>
	</div> <!-- .grid -->			
</div>
			
			
			