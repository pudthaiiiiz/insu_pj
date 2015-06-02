<?php $this->load->view('_header'); ?>
			<ol class="breadcrumb bc-3">
				<li><a href="#"><i class="entypo-home"></i>Home</a></li>
				<li><a href="#">Badcat</a></li>
				<li class="active"><strong>View Code</strong></li>
			</ol>
			
<h2>View Code</h2>

<br />
	<div id="category-select">
		<select name="packet" id="packet" class="select2" data-allow-clear="true" data-placeholder="เลือก วันเวลา" onchange="changeprepaid()">
			<option></option>
			<?php foreach ($group as $key => $value) {
				echo "<option value={$value->badcat_ref_number}>{$value->badcat_ref_create_at}</option>";
			} ?>
		</select>
	</div>
<br />

<table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr>
			<th  class='center'>ลำดับ</th>
			<th  class='center'>รหัสเติมเงิน</th>
			<th  class='center'>Serial Number</th>
			<th  class='center'>Status</th>
			<th  class='center'>Active</th>
		</tr>
	</thead>
	<tbody>
		
	
		<?php $i = 1; foreach ($code as $key => $value) { ?>
			<tr class='gradeU'>
				<td width="80"  class='center'><?php echo $i; ?></td>
				<td  class='center'><?php echo $value->badcat_ref_code; ?></td>
				<td  class='center'><?php echo $value->badcat_ref_serial; ?></td>
				<td class='center'><?php echo $value->badcat_ref_status == 0 ? "<span class='label label-success'>ยังไม่ถูกใช้</span>" : "<span class='label label-danger'>ถูกใช้แล้ว</span>"; ?></td>
				<td class='center'><?php echo $value->badcat_ref_active == 1 ? "<a href='".base_url()."badcat/activate/".$value->badcat_ref_id."/1' class='label label-success'>Enable</a>" : "<a href='".base_url()."badcat/activate/".$value->badcat_ref_id."' class='label label-danger'>Disable</a>"; ?></td>
			 </tr>
		<?php $i++; } ?>

	
	</tbody>
	<tfoot>
		<tr>
			<th  class='center'>ลำดับ</th>
			<th  class='center'>รหัสเติมเงิน</th>
			<th  class='center'>Serial Number</th>
			<th  class='center'>Status</th>
			<th  class='center'>Active</th>
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