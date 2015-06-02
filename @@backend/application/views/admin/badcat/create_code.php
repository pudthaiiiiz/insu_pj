<?php $this->load->view('_header'); ?>


	<ol class="breadcrumb bc-3">
		<li><a href="#"><i class="entypo-home"></i>Home</a></li>
		<li><a href="#">Badcat</a></li>
		<li class="active"><strong>Created Codes</strong></li>
	</ol>
			
<h2>Created Codes</h2>
<br />
	<?php if(isset($success) != null){ ?>
		<blockquote class="blockquote-green">
			<p><strong>เพิ่มข้อมูลเรียบร้อยแล้ว</strong></p>
			<p>
				<small>ระบบทำการเพิ่มข้อมูลเรียบร้อยแล้ว..</small>
				<meta http-equiv="Refresh" content="2;URL=<?php echo base_url(); ?>badcat">
			</p>
		</blockquote>
	<?php } ?>
	<?php if(isset($errors) != null){ ?>
		<blockquote class="blockquote-red">
			<p><strong>เกิดข้อิผิดพลาด</strong></p>
			<p>
				<small>กรุณาเลือกข้อมูลให้ครบด้วยครับ..</small>
				<meta http-equiv="Refresh" content="2;URL=<?php echo base_url(); ?>badcat">
			</p>
		</blockquote>
	<?php } ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
			<div class="panel-heading">
				<div class="panel-title">
					Created Codes
				</div>
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			
			<div class="panel-body">


				
				<form role="form" action="<?php echo base_url(); ?>badcat/viewcode_print" method="POST" class="form-horizontal form-groups-bordered">
						<div class="form-group">
						<div class="col-sm-10">

						<div class="form-group">
						<label class="col-sm-2" >Packet</label>
							
							<div class="col-sm-9" >
							<div id="category-select">
								<select name="packet" class="select2" data-allow-clear="true" data-placeholder="เลือก Packet">
									<?php foreach ($packet as $key => $value){
										echo "<option value={$value->badcat_pk_id}>{$value->badcat_pk_name}</option>";
									}?>
								</select>
							</div>
							</div>
						</div>
						</div>


						<div class="col-sm-10">
						<div class="form-group">
						<label class="col-sm-2" >Company</label>
							
							<div class="col-sm-9" >
							<div id="category-select">
								<select name="company" class="select2" data-allow-clear="true" data-placeholder="Company">
									<option value="0">Free</option>
									<?php foreach ($company as $key => $value){
										echo "<option value={$value->badcat_cny_id}>{$value->badcat_cny_name}</option>";
									}?>
							
								</select>
							</div>
							</div>
						</div>
						</div>
				
						<div class="col-sm-10">
						<div class="form-group">
						<div class="col-sm-2" >
								
						</div>
							<div class="col-sm-9" >
								<input	class="btn btn-green btn-block" type="submit" id="wait" name="send" value="สร้างโค้ด" style="height: 40px;font-size: 18px;">
							</div>
						</div>
						</div>
						<div class="loading"></div>
					</div>

					
				</form>
				
			</div>
			
	
		</div>
	
	</div>
</div>
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/select2/select2.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/select2/select2-bootstrap.css">

	<script src="<?php echo base_url(); ?>assets/js/bootstrap-switch.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/select2/select2.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.multi-select.js"></script>



<?php $this->load->view('_footer'); ?>