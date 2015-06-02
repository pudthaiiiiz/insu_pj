<?php $this->load->view('_header'); ?>


	<ol class="breadcrumb bc-3">
		<li><a href="<?php echo base_url(); ?>badcat"><i class="entypo-home"></i>Home</a></li>
		<li><a href="<?php echo $mainurl; ?>"><?php echo $main; ?></a></li>
		<li class="active"><strong><?php echo $texthead; ?></strong></li>
	</ol>
			
<h2><?php echo $texthead; ?></h2>

<div class="row">
	<div class="col-md-12">
		
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					<?php echo $texthead; ?>
				</div>
		
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			
			<div class="panel-body">


				
				<form role="form" action="<?php echo base_url(); ?>setting/slide" method="POST" enctype="multipart/form-data" class="form-horizontal form-groups-bordered">
						<div class="form-group">
			
						<div class="col-sm-6" style="height: 315px;">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail"  data-trigger="fileinput">
									<img src="http://placehold.it/1280x470" alt="รูปตัวอย่าง">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" ></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">Select image</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="images-poster" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
							
						</div>

						
						<div class="col-sm-6">
						<div class="form-group">
				
							<div class="col-sm-9" >
							<div>
								<input	class="btn btn-green btn-block" type="submit" name="send" value="เพิ่มข้อมูล" style="height:50px;font-size:28px;"/>
							</div>
							<br />
							<?php if(isset($errormessage) != null){ 
								echo "<div class='alert alert-danger'><strong>Error !</strong> {$errormessage}</div>";
							}

							if(isset($successmessage) != null){
								echo "<div class='alert alert-success'><strong>Success</strong> {$successmessage}</div>";
							}

							?>
							</div>
						</div>
						
						</div>
					</div>

					
				</form>
				
			</div>
			
	
		</div>
	
	</div>
</div>





	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/select2/select2.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/select2/select2-bootstrap.css">
	<script src="<?php echo base_url(); ?>assets/js/fileinput.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-switch.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/select2/select2.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.multi-select.js"></script>



<?php $this->load->view('_footer'); ?>