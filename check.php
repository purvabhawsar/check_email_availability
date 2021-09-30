<?php 

$connect=mysqli_connect("localhost","root","","sourabhdb")or die("connection failed");


if(isset($_POST["user_name"]))
{
      $username=$_POST["user_name"];
      //echo $username;

     $query ="SELECT * FROM login WHERE username='".$username."'";

     $result=mysqli_query($connect,$query);

     echo mysqli_num_rows($result);


}








?>