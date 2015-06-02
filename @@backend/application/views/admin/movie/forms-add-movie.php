<?php $this->load->view('_header'); ?>


<ol class="breadcrumb bc-3">
		<li><a href="index.html"><i class="entypo-home"></i>Home</a></li>
		<li><a href="forms-main.html">Movies</a></li>
		<li class="active"><strong>Added New Movies</strong></li>
	</ol>
			
<h2>Added New Movies</h2>
<br />
	<?php if(isset($errors) != null){ ?>
		<blockquote class="blockquote-gold">
			<p>
				<strong>กรุณาใส่ข้อมูลให้ครบครับ</strong>
			</p>
			<p>
				<small>
					ใส่ชื่อเรื่อง
				</small>
				<small>
					ใส่ stream url
				</small>
				<small>
					เลือก หมวดหมู่ หนัง
				</small>
				<small>
					เลือก Sound
				</small>

				<small>
					เลือก Tags
				</small>
				<small>
					เลือก Rating
				</small>
			</p>
		</blockquote>
	<?php } ?>
	<?php if(isset($errors2) != null){ ?>
		<blockquote class="blockquote-gold">
			<p>
				<strong>กรุณาใส่ข้อมูลให้ครบครับ</strong>
			</p>
			<p>
				<small>
					เลืือกรูปภาพ
				</small>
				
			</p>
		</blockquote>
	<?php } ?>
	<?php if(isset($success) != null){ ?>
		<blockquote class="blockquote-green">
			<p>
				<strong>เพิ่มข้อมูลเรียบร้อยแล้ว</strong>
			</p>
			<p>
				<small>
					ระบบทำการเพิ่มข้อมูลเรียบร้อยแล้ว..
				</small>
				<meta http-equiv="Refresh" content="2;URL=<?php echo base_url(); ?>main/addMovies">
				
			</p>
		</blockquote>
	<?php } ?>
<div class="row">
	<div class="col-md-12">
		
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					Added New Movies
				</div>
		
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			
			<div class="panel-body">


				
				<form role="form" action="<?php echo base_url(); ?>main/addMovies" method="POST" enctype="multipart/form-data" class="form-horizontal form-groups-bordered">
						<div class="form-group">
						<div class="col-sm-1">&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge badge-danger">ตั้งเป็นหนังใหม่</span> <br/ >
								<div class="make-switch" data-on="primary" data-off="info">
									<input name="shownew" type="checkbox" value="1" checked>
								</div>
						</div>
						<div class="col-sm-2" style="height: 315px;">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 200px; height: 270px;" data-trigger="fileinput">
									<img src="http://placehold.it/200x270" alt="รูปตัวอย่าง">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 270px"></div>
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
						<label class="col-sm-2" >Name Movie</label>
							<div class="col-sm-9" >
							<input type="text" class="form-control" name="names" id="names" placeholder="Name Movies" value="<?php echo $this->input->post('names'); ?>">
							</div>
						</div>
						</div>


						<div class="col-sm-6">

						<div class="form-group">
						<label class="col-sm-2" >Stream URL</label>
							<div class="col-sm-9" >
							<textarea class="form-control autogrow" name="urlstream" placeholder="Streaming URL" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 48px;" required><?php echo $this->input->post('urlstream'); ?></textarea>

							</div>
						</div>
						</div>

						<div class="col-sm-6">

						<div class="form-group">
						<label class="col-sm-2" >Category Movies</label>
							
							<div class="col-sm-7" >
							<div id="category-select">
								<select name="category"  class="select2" data-allow-clear="true" data-placeholder="Category Movies">
										<option></option>
										<option value="1">Movie Thai</option>
										<option value="2">Movie Inter</option>
										<option value="3">Movie Asian</option>
										<option value="4">Movie Set</option>
										<option value="5">Movie HD</option>
										<option value="5">Secret 18+</option>
							
								</select>
								</div>
								<input type="text" name="category_new" class="form-control" id="category-input"  value="<?php echo $this->input->post('category_new'); ?>" placeholder="New Category">
							</div>

							<div class="col-sm-1" >
							<a href="javascript:;" id="toggle-cate" class="btn btn-danger">เพิ่มหมวดใหม่</a>
							</div>
						</div>
						</div>





						<div class="col-sm-6">

						<div class="form-group">
						<label class="col-sm-2">Tags Movie</label>
							<div class="col-sm-4" >
							<select name="sound[]" class="select2" multiple data-placeholder="เลือก ภาษา" required>
									<option value="0">ไม่มี</option>
									<option value="1">พากย์ไทย</option>
									<option value="2">บรรยายไทย</option>
						
							</select>
							</div>
							<div class="col-sm-5" >
							<select name="tags[]" class="select2" multiple data-placeholder="Tags Movies" required>
								<option value="0">ไม่มี</option>
								<option value="แอ็คชัน">แอ็คชัน</option>
								<option value="อาชญากรรม" >อาชญากรรม</option>
								<option value="ผจญภัย" >ผจญภัย</option>
								<option value="โรแมนติก" >โรแมนติก</option>
								<option value="ตลก" >ตลก</option>
								<option value="ดราม่า" >ดราม่า</option>
								<option value="แฟนตาซี" >แฟนตาซี</option>
								<option value="ชีวิต" >ชีวิต</option>
								<option value="วิทยาศาสตร์" >วิทยาศาสตร์</option>
								<option value="ระทึกขวัญ" >ระทึกขวัญ</option>
								<option value="สยองขวัญ" >สยองขวัญ</option>
							</select>
							</div>
						</div>
						</div>


						<div class="col-sm-6">
						<div class="form-group">
						<label class="col-sm-2 " >Rat Movies</label>
							
							<div class="col-sm-7" >
							<select name="rating" id="rating" class="select2" data-allow-clear="true" data-placeholder="Last Movies">
									<option value="0" selected>ไม่ระบุ</option>
									<option value="1">ทั่วไป</option>
									<option value="2">น 13+</option>
									<option value="3">น 15+</option>
									<option value="4">น 18+</option>
									<option value="5">ฉ 20+</option></option>
								
							</select>
							</div>
							<div class="col-sm-1" >
								<div id="rating-img">
									<img src="<?php echo base_url();?>assets/images/rating/rating_5.png" style="margin-top: 3px;">
								</div>
							</div>
						</div>
						</div>
						<div class="col-sm-6">
						<div class="form-group">
						<div class="col-sm-2" >
								
						</div>
							<div class="col-sm-9" >
							<input	class="btn btn-green btn-block" type="submit" name="send" value="Added Movies" />
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