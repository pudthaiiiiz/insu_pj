<?php $this->load->view('template/header'); ?>

<div class="profile-env">
	
	<header class="row">
		
		<div class="col-sm-2">
			
			<a href="#" class="profile-picture">
				<img src="${assets}images/icon-no-people.png" class="img-responsive img-circle" />
			</a>
			
		</div>
		
		<div class="col-sm-7">
			
			<ul class="profile-info-sections">
				<li>
					<div class="profile-name">
						<strong>
							<a href="#">${pFullname}</a>
							<a href="#" class="user-status is-online tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="Online"></a>
							<!-- User statuses available classes "is-online", "is-offline", "is-idle", "is-busy" -->						</strong>
						<span><a href="#">Co-Founder at Laborator</a></span>
					</div>
				</li>
				
				<li>
					<div class="profile-stat">
						<h3>${pInvite}</h3>
						<span><a href="#">หัวหน้า</a></span>
					</div>
				</li>

				<li>
					<div class="profile-stat">
						<h3>${countDownline}</h3>
						<span><a href="#">ลูกค่าย</a></span>
					</div>
				</li>
				
				<!-- <li>
					<div class="profile-stat">
						<h3>108</h3>
						<span><a href="#">following</a></span>
					</div>
				</li> -->
			</ul>
			
		</div>
		
		<!-- <div class="col-sm-3">
			
			<div class="profile-buttons">
				<a href="#" class="btn btn-default">
					<i class="entypo-user-add"></i>
					Follow
				</a>
				
				<a href="#" class="btn btn-default">
					<i class="entypo-mail"></i>
				</a>
			</div>
		</div> -->
		
	</header>
	
	<section class="profile-info-tabs">
		
		<div class="row">
			
			<div class="col-sm-offset-2 col-sm-4">
				
				<ul class="user-details">
					<li>
						<a href="#">
							<i class="entypo-vcard"></i>
							${cusIdCard}
						</a>
					</li>


					<li>
						<a href="#">
							<i class="entypo-location"></i>
							${pAddress} ${pProvince}
						</a>
					</li>
					
					<li>
						<a href="#">
							<i class="entypo-location"></i>
							${pAmphur} ${pDistrict} ${pZippost}
						</a>
					</li>
					
					<li>
						<a href="#">
							<i class="entypo-phone"></i>
							${pPhone}
						</a>
					</li>


					

					<li>
						<a href="#">
							<i class="entypo-user"></i>
							${cusUsername}
						</a>
					</li>

					<li>
						<a href="#">
							<i class="entypo-mail"></i>
							${cusEmail}
						</a>
					</li>

				</ul>
				
			
			</div>
			
		
		<div class="col-sm-5 col-sm-4">
				
				<ul class="user-details">
					<li>
						<a href="#">
							<i class="entypo-location"></i>
							${pInvite}
						</a>
					</li>
					
					<li>
						<a href="#">
							<i class="entypo-phone"></i>
							${oldCompany}
						</a>
					</li>

					<li>
						<a href="#">
							<i class="entypo-phone"></i>
							${oldInsurance}
						</a>
					</li>

					<li>
						<a href="#">
							<i class="entypo-phone"></i>
							${oldRegister}
						</a>
					</li>
					
					<li>
						<a href="#">
							<i class="entypo-calendar"></i>
							${pDate}
						</a>
					</li>
				</ul>
				
				
				<!-- tabs for the profile links -->
				<!-- <ul class="nav nav-tabs">
					<li class="active"><a href="#profile-info">Profile</a></li>
					<li><a href="#biography">Bio</a></li>
					<li><a href="#profile-edit">Edit Profile</a></li>
				</ul>
				 -->
			</div>
			
		</div>
		
	</section>
	
	
	<section class="profile-feed">
		
<div class="row">
	
  
	
	<div class="col-sm-12">
		
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">รายชื่อ Down Line</div>
				
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
			<th width="120px">ชื่อ - นามสกุล</th>
			<th>ที่อยู่</th>
			<th width="70px">เบอร์โทรศัพท์</th>
			<th width="150px">ตั้งเป็นหัวหน้า</th>
			
		</tr>
				</thead>
				<tbody>
				
				<?php foreach ($userInvite as $key => $value) { ?>
         			<tr>
						<td><a href='<?php echo base_url(); ?>HomeCtrl/viewProfile/<?php echo $value->cusToken; ?>'><?php echo $value->cusFullname; ?></a></td>
						<td><?php echo $value->PROVINCE_NAME.", ".$value->AMPHUR_NAME.", ".$value->DISTRICT_NAME; ?></td>
						<td><?php echo $value->cusPhone; ?></td>
						
						<td><a href="#" onclick="onSend('<?php echo $value->cusFullname; ?>');" class="btn btn-success">แต่งตั้ง</a></td>
					
            			
					</tr>
          
       <?php } ?>
				
				</tbody>
				
			</table>

<script type="text/javascript">

  
          function alertSuccess(){
             var modal = BootstrapDialog.show({
                    title: 'Success',
                    type:BootstrapDialog.TYPE_SUCCESS,
                    closable: true,
                    
                });
                modal.getModalBody().hide();
          }
       
         
  
           
          function onSend(tokenTo){
            var formData = {};
            formData.tokenTo = tokenTo;
            formData.thisToken = '<?php echo $thisToken; ?>'
          
            $.ajax({
              
              type:"POST",
              url: Global.baseUrl+"api-add-invite-customer",
              data: formData
            })
              .success(function(res) {
                var result = JSON.parse(res);
                if(result.status == "success"){
                  alertSuccess();
                  setTimeout(function() {
                     window.location.href = Global.baseUrl+'HomeCtrl/viewProfile/<?php echo $thisToken; ?>';
                  }, 3000);
                }else{
                  console.log(result.status);
                }
                
              });
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

		
		</div>
		
	</div>
	
</div>

<br />
	
		
	</section>
</div>

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