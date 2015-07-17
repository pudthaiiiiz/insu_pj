      <?php $this->load->view('template/header'); ?>
        <div class="pull-right"> <a href="#" onclick="onOff();" class="btn btn-danger">ปิด Popup</a></div>&nbsp;
        <div class="pull-right"> <a href="#" onclick="onOn();" class="btn btn-success">เปิด Popup</a></div>
        <div class="clearfix"></div>
        <br />
        <div class="panel panel-primary" data-collapsed="0">

          <div class="panel-heading">

            <div class="panel-title">
              เพิ่มภาพ Popup
            </div>
          </div>

          <div class="panel-body">

            <div class="form-horizontal form-groups-bordered">

             
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
            formData.temp = $('#temp-img').val();
          
            $.ajax({
              
              type:"POST",
              url: Global.baseUrl+"api-add-popup",
              data: formData
            })
              .success(function(res) {
                var result = JSON.parse(res);
                if(result.status == "success"){
                  alertSuccess();
                  setTimeout(function() {
                     window.location.href = Global.baseUrl+'HomeCtrl/main';
                  }, 3000);
                }else if(result.status == "bot"){
                  alertError('กรุณาใส่รูปภาพ');
                }else{
                  console.log(result.status);
                }
                
              });
          }

          function onOn(){
            var formData = {};
            formData.temp = $('#temp-img').val();
          
            $.ajax({
              
              type:"POST",
              url: Global.baseUrl+"api-on-popup",
              data: formData
            })
              .success(function(res) {
                var result = JSON.parse(res);
                if(result.status == "success"){
                  alertSuccess();
                  setTimeout(function() {
                     window.location.href = Global.baseUrl+'HomeCtrl/main';
                  }, 3000);
                }else{
                  console.log(result.status);
                }
                
              });
          }

          function onOff(){
            var formData = {};
            formData.temp = $('#temp-img').val();
          
            $.ajax({
              
              type:"POST",
              url: Global.baseUrl+"api-off-popup",
              data: formData
            })
              .success(function(res) {
                var result = JSON.parse(res);
                if(result.status == "success"){
                  alertSuccess();
                  setTimeout(function() {
                     window.location.href = Global.baseUrl+'HomeCtrl/main';
                  }, 3000);
                }else{
                  console.log(result.status);
                }
                
              });
          }
        </script>


