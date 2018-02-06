<?php 
require_once('inc/connect.php');
 ?>






 <!DOCTYPE html>
 <html>
 <head>
 	<title>Select query</title>
 </head>
 <body>
 <?php 
 //$query="SELECT BusId,ArrivalTime FROM ((routetable INNER JOIN bustable  ON RouteId=RouteIdFK) INNER JOIN arrivaltable ON BusID=BusIdFK ) where  RouteDirection=2 && City='Pambahinna' ";
$query="Select * from routetable";


/*SELECT Orders.OrderID, Customers.CustomerName, Shippers.ShipperName FROM ((Orders INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID) INNER JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID);
*/
//$query1="SELECT BusId FROM routetable,bustable where RouteIDFK="{$query}")";
//$query1="SELECT BusId FROM routetable,bustable where RouteIDFK='$query['RouteId']')";

$result_set=mysqli_query($connection,$query);

if($result_set){
	echo mysqli_num_rows($result_set)." Records found";


	while($record=mysqli_fetch_assoc($result_set)){
echo "<pre>";
	$A=print_r($record);
echo "</pre>";

}

}

echo "<table>";
echo "<tr><th>BusId</th><th>ArrivalTime</th></tr> ";

	
while($record=mysqli_fetch_assoc($result_set)){
	echo "<tr><td>";
	echo $record['RouteId'];
	echo "</td><td>";
	echo $record['BusRoute'];
	echo "</td></tr>";
	echo $record['RouteDirection'];
	echo "</td></tr>";

	}
	echo "</table>";

	


 ?>

 </body>
 </html>

 <?php mysqli_close($connection); ?>