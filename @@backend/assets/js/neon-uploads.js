  
  $(function () {
                      $('#upload_btn').uploadify({
                        'debug': false,
                        'swf': Global.baseUrl+'assets/js/lib/uploadify.swf',
                        'uploader': Global.baseUrl+'Upload/uploadify',
                        'cancelImage': Global.baseUrl+'assets/js/lib/uploadify-cancel.png',
                        'queueID': 'file-queue',
                        'buttonClass': 'button',
                        'buttonText': "Upload Files",
                        'multi': false,
                        'auto': true,
                        'fileTypeExts': '*.jpg; *.png; *.gif; *.PNG; *.JPG; *.GIF;',
                        'fileTypeDesc': 'Image Files',
                        'method': 'post',
                        'fileObjName': 'userfile',
                        'queueSizeLimit': 40,
                        'simUploadLimit': 2,
                        'sizeLimit': 10240000,
                        /*'onUploadSuccess' : function(file, data, response) {
                         alert('The file ' + file.name + ' was successfully uploaded with a response of ' + response + ':' + data);
                         },*/
                        'onUploadComplete': function (file) {
                          //alert('The file ' + file.name + ' finished processing.');
                          var res = file.name.replace(/\ /g, "_");
                          $("#temp-image").html("<div align='left'><img id='temp-show' style='width:70px;' src='"+Global.baseUrl+"uploads/temp/" + res + "' alt='...'></div>");

                          
                          $("#temp-img").val(res);
                        },
                        'onQueueFull': function (event, queueSizeLimit) {
                          //alert("Please don't put anymore files in me! You can upload " + queueSizeLimit + " files at once");
                          return false;
                        },
                      });
                    });