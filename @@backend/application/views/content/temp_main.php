      <?php $this->load->view('template/header'); ?>
        <div class="pull-right"> <a href="<?php echo base_url(); ?>homec, CKEDITOR, CKEDITORtrl/contentAll" class="btn btn-success">ดูเนื้อหามั้งหมด</a></div>
        <div class="clearfix"></div>
        <br />
        <div class="panel panel-primary" data-collapsed="0">

          <div class="panel-heading">

            <div class="panel-title">
              เพิ่มเนื้อหาใหม่ 
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
                <label class="col-sm-2 control-label">Detail</label>

                <div class="col-sm-10">

                  <textarea name="detail" id="detail" class="form-control ckeditor" ></textarea>

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
                  <script type='text/javascript' >
                  
                  </script>
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
         
          
          /* global Global, CKEDTIOR */
            CKEDITOR.replace('detail');
//           
          function onSend(){
            var formData = {};
            formData.title = $('#title').val();
            formData.des = $('#des').val();
            formData.detail = CKEDITOR.instances.detail.getData();
            formData.temp = $('#temp-img').val();
            $.ajax({
              
              type:"post",
              url: Global.baseUrl+"api-add-content",
              data: formData
            })
              .success(function(res) {
//                alert( "Data Saved: " );
                console.log(res);
                
              });
          }
        </script>


