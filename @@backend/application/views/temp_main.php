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

<table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr>
			<th width="230px">ชื่อ - นามสกุล</th>
			<th>ที่อยู่</th>
			<th width="150px">รถปัจจุบัน</th>
			<th width="150px">ลงทะเบียนเมื่อ</th>
			<th width="20px">ยืนยัน</th>
		</tr>
	</thead>
	<tbody>
	 ${results}
         			<tr>
						<td><a href='<?php echo base_url(); ?>HomeCtrl/viewProfile/${cusToken}'>${cusFullname}</a></td>
						<td>${cusAdrs}</td>
						<td>${oldInsurance}</td>
            			<td>${cusCreateAt}</td>
            			<td><label class="btn btn-danger">ไม่ยืนยัน</label></td>
					</tr>
          
          ${/results}
		
	</tbody>
	
</table>

<script type="text/javascript">
var responsiveHelper;
var breakpointDefinition = {
    tablet: 1024,
    phone : 480
};
var tableContainer;

	jQuery(document).ready(function($)
	{
		tableContainer = $("#table-1");
		
		tableContainer.dataTable({
			"sPaginationType": "bootstrap",
			"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
			"bStateSave": true,
			

		    // Responsive Settings
		    bAutoWidth     : false,
		    fnPreDrawCallback: function () {
		        // Initialize the responsive datatables helper once.
		        if (!responsiveHelper) {
		            responsiveHelper = new ResponsiveDatatablesHelper(tableContainer, breakpointDefinition);
		        }
		    },
		    fnRowCallback  : function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
		        responsiveHelper.createExpandIcon(nRow);
		    },
		    fnDrawCallback : function (oSettings) {
		        responsiveHelper.respond();
		    }
		});
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
</script>

		
		</div>
		
	</div>
	
</div>

<br />
	<link rel="stylesheet" href="${assets}js/datatables/responsive/css/datatables.responsive.css">
	<link rel="stylesheet" href="${assets}js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="${assets}js/select2/select2.css">
	<script src="${assets}js/jquery.dataTables.min.js"></script>
	<script src="${assets}js/datatables/TableTools.min.js"></script>
	<script src="${assets}js/dataTables.bootstrap.js"></script>
	<script src="${assets}js/datatables/jquery.dataTables.columnFilter.js"></script>
	<script src="${assets}js/datatables/lodash.min.js"></script>
	<script src="${assets}js/datatables/responsive/js/datatables.responsive.js"></script>
	<script src="${assets}js/select2/select2.min.js"></script>

<?php $this->load->view('template/footer'); ?>