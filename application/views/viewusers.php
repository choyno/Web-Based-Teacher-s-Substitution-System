<div id="content">			
	<div id="contentHeader">
		<h1>All User Accounts</h1>
	</div> <!-- #contentHeader -->	
	<div class="container">
		<div class="grid-24">

			<div class="adduser">
				<a href="<?php echo base_url();?>index.php/admincontrol/user">
					<button class="btn btn-primary btn-blue"><span class="icon-user"></span>Add New User</button>
				</a>
			</div>

			<div class="widget widget-table">
				<div class="widget-header">
					<span class="icon-list"></span>
					<h3 class="icon chart">Users Information</h3>		
				</div>
				<div class="widget-content">
					<table class="table table-bordered table-striped data-table">
						<thead>
							<tr>
								<th>Full Name</th>
								<th>Username</th>
								<th>Password</th>
								<th>Department</th>
								<th>User Type</th>
								<th>Options</th>
							</tr>
						</thead>
				        <tbody>
							<tr>
								<th>Lomboy, Emmanuel C.</th>
								<th>LEmmanuel</th>
								<th>*****</th>
								<th>CCS</th>
								<th>Department Head</th>
								<th>
									<button class="btn btn-small btn-quaternary">
										<span class="icon-pen"></span>
										Edit
									</button>


								</th>
							</tr>	
							<tr>
								<th>Semilla, Marivic C.</th>
								<th>Smarivic</th>
								<th>*****</th>
								<th>CCS</th>
								<th>Department Head</th>
								<th>
									<button class="btn btn-small btn-quaternary">
										<span class="icon-pen"></span>
										Edit
									</button>
								</th>
							</tr>	
				        </tbody>
			         </table>
				</div> <!-- .widget-content -->
			   </div> <!-- .widget -->
			</div> <!-- .widget-content -->
		</div> <!-- .widget -->	
	</div> <!-- .grid -->			
</div>
			
			
			