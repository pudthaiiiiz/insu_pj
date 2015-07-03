      <?php $this->load->view('template/header'); ?>
        <div class="pull-right"> <a href="<?php echo base_url(); ?>HomeCtrl/slideAll" class="btn btn-success">ดูเนื้อหามั้งหมด</a></div>
        <div class="clearfix"></div>
        <br />
        <div class="panel panel-primary" data-collapsed="0">

          <div class="panel-heading">

            <div class="panel-title">
              เพิ่มภาพ Slide
            </div>
          </div>

          <div class="panel-body">

            <div class="form-horizontal form-groups-bordered">

              <div class="form-group">
                <label class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                  <input type="text" id="title" class="form-control"  placeholder="Title">
                  
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Descaption</label>

                <div class="col-sm-10">

                  <textarea id="des" class="form-control" placeholder="Descaption"></textarea>

                </div>
              </div>
                <div class="form-group">
                <label class="col-sm-2 control-label">Link Buttom</label>
                <div class="col-sm-10">
                  <input type="text" id="link" class="form-control"  placeholder="Link Buttom">
                  
                </div>
              </div>
                <div class="form-group">
                <label class="col-sm-2 control-label">Buttom Name</label>
                <div class="col-sm-10">
                  <input type="text" id="linkname" class="form-control"  placeholder="Buttom Name">
                  
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Images</label>

                <div class="col-sm-10">

                  <div class="uploadify-queue" id="file-queue"></div>
                  <input type="file" name="userfile" id="upload_btn" />
                  <input type="hidden" id="temp-img"name="temp-img" value="">
                  <div id="temp-image">

                  </div>
                 
                </div>
              </div>
             
              <div class="form-group">
                <label class="col-sm-2 control-label"></label>

                <div class="col-sm-10">

                  <input type="submit" name="send" class="btn btn-success" value="Add News" onclick="onSend();">
                

                </div>
              </div>

            </div>

          </div>
        </div>
        <?php $this->load->view('template/footer'); ?>
        <script>
          
          function alertSuccess(){
             var modal = BootstrapDialog.show({
                    title: 'Success',
                    type:BootstrapDialog.TYPE_SUCCESS,
                    closable: true,
                    
                });
                modal.getModalBody().hide();
          }
          
          function alertError(txt){
             var modal = BootstrapDialog.show({
                    title: txt,
                    type:BootstrapDialog.TYPE_WARNING,
                    closable: true
                });
                modal.getModalBody().hide();
          }
         
         
          /* global Global, CKEDTIOR */
           
          function onSend(){
            var formData = {};
            formData.title = $('#title').val();
            formData.des = $('#des').val();
            formData.temp = $('#temp-img').val();
            formData.link = $('#link').val();
            formData.linkname = $('#linkname').val();
            $.ajax({
              
              type:"POST",
              url: Global.baseUrl+"api-add-slide",
              data: formData
            })
              .success(function(res) {
                var result = JSON.parse(res);
                if(result.status == "success"){
                  alertSuccess();
                  setTimeout(function() {
                     window.location.href = Global.baseUrl+'HomeCtrl/SlideAll';
                  }, 3000);
                }else if(result.status == "bot"){
                  alertError('กรุณากรอกข้อมูลให้ครบ');
                }else{
                  console.log(result.status);
                }
                
              });
          }
        </script>


