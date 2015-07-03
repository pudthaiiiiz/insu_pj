 <?php $this->load->view('template/header'); ?>



<div class="row">
	
  

	<div class="col-sm-12">
			<div class="pull-right"><a href="<?php echo base_url();?>HomeCtrl/slide" class="btn btn-success" style="margin-bottom:3px;">Add Slide</a></div><br/>
      <div class="clearfix"></div>
		<div class="panel panel-primary">
      
			<div class="panel-heading">
				<div class="panel-title">Latest Updated Slide</div>
				
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
						<th>Images</th>
						<th>Title</th>
						<th width="300px">Descaption</th>
<!--						<th width="70px">Edit</th>
						<th width="70px">Delete</th>-->
					</tr>
				</thead>
				
				<tbody>
          ${results}
          <tr>
						
            <td width="150px"><img src="<?php echo base_url(); ?>../uploads/slides/${slImage}" width="150px"></td>
						<td>${slTitle}</td>
						<td>${slDes}</td>
<!--            <td class='text-center'><a href='contentEdit/${cId}' class='btn btn-primary'>Edit</a></td>
            <td class='text-center'><a href='javascript:void(0);' onclick="javascript:confirmDel(${cId})"class='btn btn-danger'>Del</a></td>-->
					</tr>
          ${/results}
				</tbody>
			</table>
		</div>
		
	</div>
	
</div>
<script>
    function confirmDel(id){
    var r = confirm("คุณต้องการลบข้อมูลนี้ ?");
    if (r == true) {
         window.location.assign("contentAll/"+ id);
    }
    }
</script>
<br />
<?php $this->load->view('template/footer'); ?>