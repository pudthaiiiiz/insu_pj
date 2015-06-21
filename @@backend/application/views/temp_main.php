<?php $this->load->view('template/header'); ?>

<script type="text/javascript">
jQuery(document).ready(function($) 
{
	



function getRandomInt(min, max) 
{
	return Math.floor(Math.random() * (max - min + 1)) + min;
}
</script>


<div class="row">
	<div class="col-sm-3">
	${nums}
 
 
		<div class="tile-stats tile-red">
			<div class="icon"><i class="entypo-users"></i></div>
			<div class="num" data-start="0" data-end="${numMemberToDay}" data-postfix="" data-duration="1500" data-delay="0">0</div>
			
			<h3>Registered to day</h3>
			<p>so far in our blog, and our website.</p>
		</div>
   
		
	</div>
	
	<div class="col-sm-3">
	
		<div class="tile-stats tile-green">
			<div class="icon"><i class="entypo-chart-bar"></i></div>
			<div class="num" data-start="0" data-end="${numMemberAll}" data-postfix="" data-duration="1500" data-delay="600">0</div>
			
			<h3>All Member</h3>
			<p>this is the average value.</p>
		</div>
		
	</div>
	
	<div class="col-sm-3">
	
		<div class="tile-stats tile-aqua">
			<div class="icon"><i class="entypo-mail"></i></div>
			<div class="num" data-start="0" data-end="${numContentToDay}" data-postfix="" data-duration="1500" data-delay="1200">0</div>
			
			<h3>New Content</h3>
			<p>messages per day.</p>
		</div>
		
	</div>
	
	<div class="col-sm-3">
	
		<div class="tile-stats tile-blue">
			<div class="icon"><i class="entypo-rss"></i></div>
			<div class="num" data-start="0" data-end="${numContentAll}" data-postfix="" data-duration="1500" data-delay="1800">0</div>
			
			<h3>All Content</h3>
			<p>on our site right now.</p>
		</div>
		
	</div>
</div>
${/nums}



<br />

<div class="row">
	
  
	
	<div class="col-sm-12">
		
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">Latest Updated Profiles</div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
				
			<table class="table table-bordered table-responsive">
				<thead>
					<tr>
				
						<th>Full Name</th>
						<th>Username</th>
						<th>Phone</th>
            
					</tr>
				</thead>
				
				<tbody>
         
          ${results}
          <tr>
						
						<td>${cusFullname}</td>
						<td>${cusUsername}</td>
            <td>${cusPhone}</td>
					</tr>
          
          ${/results}
				</tbody>
			</table>
		</div>
		
	</div>
	
</div>

<br />

<?php $this->load->view('template/footer'); ?>