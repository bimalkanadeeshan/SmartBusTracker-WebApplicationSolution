<?php 
require_once('inc/connect.php');
 ?>

 <?php 


$RouteId=1;
$BusRoute='BadullatoElpitiya';
$RouteDirection=1;

$query="INSERT INTO routetable(RouteId,BusRoute,RouteDirection ('{$RouteId}','{$BusRoute}','{$RouteDirection}')";

$result=mysqli_query($connection,$query);

if($result){
	echo "Added";
}
	else{
		echo "error";
	}

  ?>



 <!DOCTYPE html>
 <html>
 <head>
 	<title>Insert</title>
 </head>
 <body>
 
 </body>
 </html>

 <?php mysqli_close($connection); ?>