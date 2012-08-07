
<div id="sidebar">		
		
		<ul id="mainNav">			
			<li id="navDashboard" class="nav active">
				<span class="icon-home"></span>
				<a href="<?php echo base_url();?>index.php/">Dashboard</a>				
			</li>
						
		
			<li id="navTables" class="nav">
				<span class="icon-article"></span>
				<a href="javascript:;">User Accounts</a>	
				<ul class="subNav">
					<li><a href="<?php echo base_url();?>index.php/admincontrol/user">Create User</a></li>					
					<li><a href="<?php echo base_url();?>#">View All Users</a></li>					
				</ul>
			</li>

			<li id="navTables" class="nav">
				<span class="icon-list"></span>
				<a href="<?php echo base_url();?>index.php/admincontrol/schedule">Teacher's Schedule</a>	
			</li>
			<li id="navForms" class="nav">
				<span class="icon-article"></span>
				<a href="javascript:;">Request Substitution </a>	
				<ul class="subNav">
					<li><a href="<?php echo base_url();?>index.php/admincontrol/request">Teachers Substitute</a></li>					
					<li><a href="<?php echo base_url();?>index.php/admincontrol/viewabsent">View All Request</a></li>					
				</ul>
			</li>
		

			<li id="navpages" class="nav">
				<span class="icon-document-alt-stroke"></span>
				<a href="<?php echo base_url();?>index.php/admincontrol/vouch">Vouch Teacher's </a>	
								
			</li>

			<li id="navpages" class="nav">
				<span class="icon-document-alt-stroke"></span>
				<a href="<?php echo base_url();?>index.php/admincontrol/remind">Remind Substitute</a>	
								
			</li>
			

			<li id="navType" class="nav">
				<span class="icon-info"></span>
				<a href="javascript:;">Teacher's Records</a>	
				<ul class="subNav">
					<li><a href="<?php echo base_url();?>index.php/admincontrol/viewabsent">Absent Teacher's</a></li>
					<li><a href="<?php echo base_url();?>index.php/admincontrol/viewsubstitute">Substitute Teacher's</a></li>					
					<li><a href="<?php echo base_url();?>#">Teacher's Schedule</a></li>		
				</ul>	
			</li>


		</ul>
				
	</div> <!-- #sidebar -->