<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  </head>
  <body>
    
  <script>
      function callService(){
        console.log("callService");
        $.ajax({
          url:'http://localhost:8888/insu/api/register-customer',
          method:'POST',
          dataType:'JSON',
          data: { 'fullName' : 'pichet Kunjai' ,
                  'userName' : 'pudthaiiii' , 
                  'password' : '123456' , 
                  'email' : 'pudthaiiii@gmail.com' , 
                  'phone' : '0959356049' , 
                  'address' : '123434' }
          
        }).success(function(data){
          var result = data;
          var obj = "jQuery.parseJSON(result)";
          console.log(data);
        });
        
      }
      callService();
  </script>
  </body>
</html>
