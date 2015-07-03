      <?php $this->load->view('template/header'); ?>
        <div class="pull-right"> <a href="<?php echo base_url(); ?>HomeCtrl/main" class="btn btn-success">หน้าหลัก</a></div>
        <div class="clearfix"></div>
        <br />
        <div class="panel panel-primary" data-collapsed="0">

          <div class="panel-heading">

            <div class="panel-title">
              แก้ไข เบี้ยประกันและสินค้า 
            </div>
          </div>

          <div class="panel-body">

            <div class="form-horizontal form-groups-bordered">

             
              <div class="form-group">
                <label class="col-sm-2 control-label">Detail</label>

                <div class="col-sm-10">

                  <textarea name="detail" id="detail" class="form-control ckeditor" >${detail}</textarea>

                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label"></label>

                <div class="col-sm-10">

                  <input type="submit" name="send" class="btn btn-success" value="Editor" onclick="onSend();">

                </div>
              </div>

            </div>

          </div>
        </div>
        <?php $this->load->view('template/footer'); ?>
        <script>
         
          
          /* global Global, CKEDTIOR */
            CKEDITOR.replace('detail');
//           


          function alertSuccess(){
             var modal = BootstrapDialog.show({
                    title: 'Success',
                    type:BootstrapDialog.TYPE_SUCCESS,
                    closable: true,
                    
                });
                modal.getModalBody().hide();
          }
          
          function onSend(){
            var formData = {};
           
            formData.detail = CKEDITOR.instances.detail.getData();
            formData.id = 2;
            $.ajax({
              
              type:"post",
              url: Global.baseUrl+"api-edit-menu",
              data: formData
            })
              .success(function(res) {
                var result = JSON.parse(res);
                if(result.status == "success"){
                  alertSuccess();
                  
                }
                
              });
          }
        </script>


