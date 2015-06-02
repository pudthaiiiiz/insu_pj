<?php $this->load->view('_header'); ?>
			<ol class="breadcrumb bc-3">
				<li><a href="#"><i class="entypo-home"></i>Home</a></li>
				<li><a href="#">Member</a></li>
				<li class="active"><strong>Member Logging</strong></li>
			</ol>
			
<h2>Member Logging</h2>



<table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr>
			<th  class='center'>ลำดับ</th>
			<th  class='center'>IP Address</th>
			<th  class='center'>Username</th>
			<th  class='center'>Category</th>
			<th  class='center'>Logging Date</th>
		</tr>
	</thead>
	<tbody>
		
	
		<?php $i = 1 ; foreach ($log as $key => $value) { ?>
			<tr class='gradeU'>
				<td width="80"  class='center'><?php echo $i; ?></td>
				<td  class='center'><?php echo $value->blu_ipadr; ?></td>
				<td  class='center'><?php echo $value->blu_username; ?></td>
				<td  class='center'><?php echo $value->blu_mvname; ?></td>
				<td  class='center'><?php echo $value->logging_date; ?></td>
			 </tr>
		<?php $i++; } ?>

	
	</tbody>
	<tfoot>
		<tr>
			<th  class='center'>ลำดับ</th>
			<th  class='center'>IP Address</th>
			<th  class='center'>Username</th>
			<th  class='center'>Category</th>
			<th  class='center'>Logging Date</th>
		</tr>
	</tfoot>
</table>

<script type="text/javascript">
function changeprepaid() {
	var getId = $("#packet").val();
    window.location.assign("<?php echo base_url(); ?>badcat/viewcode/"+getId)
}
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


	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/datatables/responsive/css/datatables.responsive.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/select2/select2.css">

	<!-- Bottom Scripts -->
	<script src="<?php echo base_url(); ?>assets/js/gsap/main-gsap.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/joinable.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/resizeable.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/pudthai-api.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/datatables/TableTools.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/datatables/jquery.dataTables.columnFilter.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/datatables/lodash.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/datatables/responsive/js/datatables.responsive.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/select2/select2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/pudthai-chat.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/pudthai-custom.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/pudthai-demo.js"></script>



<?php $this->load->view('_footer'); ?>