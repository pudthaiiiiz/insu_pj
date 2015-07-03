 <?php $this->load->view('template/header'); ?>

<div class="pull-right"> <a href="<?php echo base_url(); ?>homectrl/contentAll" class="btn btn-success">ดูเนื้อหามั้งหมด</a></div>
        <div class="clearfix"></div>
        <br />
<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
        
				<div class="panel-title">
					แก้ไขข้อมูล 
				</div>
			</div>
			
			<div class="panel-body">
		
        <form method="POST" action="#" enctype="multipart/form-data" class="form-horizontal form-groups-bordered">
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Title</label>
						<div class="col-sm-10">
              <input type="text" name="title"  class="form-control" value="${cTitle}" placeholder="Title">
							
						</div>
					</div>
          <div class="form-group">
						<label class="col-sm-2 control-label">Descaption</label>
						
						<div class="col-sm-10">
              
             	<textarea name="des" class="form-control" placeholder="Descaption">${cDes}</textarea>
							
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Detail</label>
						
						<div class="col-sm-10">
              
             	<textarea name="detail"class="form-control ckeditor" >${cDetail}</textarea>
							
						</div>
					</div>
          
					<div class="form-group">
						<label class="col-sm-2 control-label">Images</label>
						
						<div class="col-sm-10">
              <input type="file" name="img" id="file" class="form-control">
              <br />
              <img src="<?php echo base_url();?>../uploads/content/${cImage}" width="120px" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label"></label>
						
						<div class="col-sm-10">
              
             	<input type="submit" name="send" class="btn btn-primary" value="Update News">
							
						</div>
					</div>
          
				</form>
				
      </div>
		</div>

    
    
    <?php $this->load->view('template/footer'); ?>