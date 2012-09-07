<div id="content">			
	<div id="contentHeader">
		<h1>Generate Reports</h1>
	</div> <!-- #contentHeader -->	
	<div class="container">
		<div class="grid-24">
			<?php echo validation_errors(); ?>
			<?php echo form_open('form'); ?>		
			<div class="form uniformForm">					
				<div class="widget">
					<div class="widget-header">
						<span class="icon-user"></span>
						<h3>Report Information</h3>
					</div>
					<div class="widget-content">
						
						<div class="field-group inlineField" style="width: 48%;float:left;">	
							<div class="field">
								<label for="department">Start Date :</label>
								<select name="department " id="department">
											<option>8/20/12</option>
											<option>CCS </option>
										</select>
							</div>

							<div class="field">
								<label for="department">End Date :</label>
								<select name="department " id="department">
											<option>4/4/12</option>
											<option>CCS </option>
										</select>
							</div>

						</div>
					</div> <!-- .widget-content -->
				</div> <!-- .widget -->
					<button class="btn btn-primary btn-blue">Print Preview</button>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div> <!-- .grid -->			
</div>
			
			
			