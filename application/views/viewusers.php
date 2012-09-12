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
				<?php if ($useraccounts):?>
				<div class="widget-content">
					<table class="table table-bordered table-striped data-table">
						<thead>
							<tr>
								<th>Full Name</th>
								<th>Username</th>
								<th>Department</th>
								<th>User Type</th>
								<th>Status</th>
								<th>Action</th> 
							</tr>
						</thead>
				        <tbody>
				        	<?php foreach ($useraccounts as $user):?>	
									<tr>
										<th><?php echo $user->fullname;?></th>
										<th><?php echo $user->username;?></th>
										<th>
											 <?php echo $user->namely;?>
										</th>
										<th>
											<?php echo $user->name;?>
										</th>
										<th>
										<?php
												if($user->status === '1')
												{
													 echo 'Active';
												}
												else
												{
													 echo 'Inactive';
												}
											 ?></th>
										<th>
											<button class="btn btn-small btn-quaternary">
												<span class="icon-pen"></span>
												Edit
											</button>
										</th>	
									</tr>
							<?php endforeach;?>

							<!-- <tr>
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
							</tr>	 -->
				        </tbody>
			         </table>
				</div> <!-- .widget-content -->
				<?php endif;?>
			   </div> <!-- .widget -->
			</div> <!-- .widget-content -->
		</div> <!-- .widget -->	
	</div> <!-- .grid -->			
</div>
			
			
			