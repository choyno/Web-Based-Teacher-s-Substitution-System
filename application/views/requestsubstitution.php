<div id="content">			
	<div id="contentHeader">
		<h1>Request Substitution</h1>
	</div> <!-- #contentHeader -->	
	<div class="container">
		<div class="grid-24">
			<?php echo validation_errors(); ?>
			<?php echo form_open('form'); ?>		
			<div class="form uniformForm">					
				<div class="widget">
					<div class="widget-header">
						<span class="icon-user"></span>
						<h3>Teacher Informations</h3>
					</div>
					<div class="widget-content">
						<div class="field-group inlineField " style="float:left;">	
							<div class="field">
									<label>Request Type :</label>
									
										<label for="unplanned" style="float:right;text-align:left">Unplanned </label>
										<input type="radio" name="unplanned" id="Requesttype" value="Unplanned" />

									<br/>
									
										<label for="planned" style="float:right;text-align:left">Planned </label>
										<input type="radio" name="planned" id="Requesttype" value="Planned" />
									
							</div>
							<br/>
							<div class="field">
								<label for="dateabsent">Date Absent  :</label>
								<input id="dateabsent" class="" type="text" size="24" name="dateabsent" value="8/13/12">
							</div>
							<br/>

							<div class="field">
								<label for="fullname">Absent Name :</label>
								<input id="fullname" class="" type="text" size="24" name="fullname">
							</div>
							<br/>

							<div class="field">
								<label for="username">Reason :</label>
								<select id="cardtype" name="cardtype" style="opacity: 0;">
									<option>Sick Absent</option>
									<option>Personal</option>
									<option>Attending school Activity</option>

								</select>
							</div>

							<br/>
							<div class="field">
								<label for="fullname">Notes :</label>
								<textarea id="message" name="message" rows="4" cols="22"></textarea>
								</div>
							<br/>

							
						
						</div>
						<div class="field-group inlineField" style="width: 48%;float:left;">	
							

						<div class="field">
								<label for="password">Absent Subject :</label>
								<select id="cardtype" name="cardtype" style="opacity: 0;">
										<option>ICN23 Room 305	IT703 1:00 2:00 TTH</option>
										<option>ICN22 Room 305	IT703 3:00 4:00 TTH</option>
								</select>
							</div>
							<br/>


							<div class="field">
								<label for="assignedby">Assigned by :</label>
								<input  id="assignedby" class="" type="text" size="24" name="assignedby" value="user loggin">
								</div>
							<br/>

						</div>

					</div> <!-- .widget-content -->
					<div class="widget widget-table">
				<div class="widget-header">
					<span class="icon-list"></span>
					<h3 class="icon chart">Available Teacher</h3>		
				</div>
				<div class="widget-content">
					<table class="table table-bordered table-striped data-table">
						<thead>
							<tr>
								<th>Last Name</th>
								<th>First Name</th>
								<th>Start Time</th>
								<th>End Time</th>
								<th>Schedule</th>
								<th>Options</th>
							</tr>
						</thead>
				        <tbody>
						<tr>
							<th>Barsalote </th>
							<th>john</th>
							<th>1:00</th>
							<th>5:00</th>
							<th>MWF</th>
							<th>
									<a href="#">Assign</a>
							</th>
						</tr>
						<tr>
							<th>Lopez </th>
							<th>Kenneth</th>
							<th>1:00</th>
							<th>3:00</th>
							<th>TTH</th>
							<th>
									<a href="#">Assign</a>
							</th>
						</tr>
				        </tbody>
			         </table>
				</div> <!-- .widget-content -->
				
		   </div> <!-- .widget -->
				</div> <!-- .widget -->
					<button class="btn btn-primary btn-blue">Save</button>
					<button class="btn btn-primary btn-blue">Cancel</button>
				 	
			</div>
			<?php echo form_close(); ?>
		</div>
	</div> <!-- .grid -->			
</div>
			
			
