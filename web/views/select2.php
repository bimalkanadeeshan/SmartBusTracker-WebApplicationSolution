<?php 
require_once('inc/connect.php');
 ?>
<?php 

$query="SELECT BusId,City,ArrivalTime FROM bustable INNER JOIN arrivaltable ON BusId=BusIdFK where BusIdFK='B3' && Id>13";


//SELECT Orders.OrderID, Customers.CustomerName FROM Orders INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID; 


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



 ?>
 


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Select query</title>
 </head>
 <body>
 
<table border="2">
   <tr>
      <th>Name</th>
      <th>Address Line 1</th>
      <th>Address Line 2 </th>
      <th>E-mail Id </th>
    </tr>
    <?php 
    while ($array = mysql_fetch_row($result));
    {
        print "<tr> <td>";
        echo $array[0]; 
        print "</td> <td>";
        echo $array[1]; 
        print "</td> <td>";
        echo $array[2]; 
        print "</td> <td>";
        echo $array[3]; 
        print "</td> </tr>";
    }
?>

</table>
 </body>
 </html>

 <?php mysqli_close($connection); ?>