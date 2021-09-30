<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
  <form action="hello.php" method="post" autocomplete="off">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="username" name="username" placeholder="Enter email">
    <br>
     <span id="data1"></span>
     <span id="availability"></span>
     <br>
    <button type="submit" class="btn btn-primary" id="register" name="register" disabled>Register</button>
  </div>
 
  
</form>
  
</div>
</body>
</html>

<script>
	$(document).ready(function(){

     // $('#username').blur(function(){

     	$('#username').on("keyup",function(){

       var username=$(this).val();

       //alert(username);

       $.ajax({

             url:'check.php',
             method:"POST",
             data:{user_name:username},
             success:function(data)
             {
                   
                   $('#data1').html(data);


                    if(data == 0)
                   {
                   	 $('#availability').html('<span class="text-danger">username not available</span>');
                     $('#register').attr("disabled",false);
                   }
                   else
                   {
                       $('#availability').html('<span class="text-success">username available</span>');
                       $('#register').attr("disabled",true);
                   }

             }

       });


       	
  });
     	




	});





	




</script>