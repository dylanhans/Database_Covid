<!DOCTYPE html>
<html>
<body style="background-color:#4978bc;">
<?php
include 'connectdb.php';
?>
<h1 style="color:white;"> Location Information </h1>
<table>
<?php
   $query = 'SELECT lotNumber, clinic, doses FROM shipsTo, vaccine WHERE shipsTo.lotNumber=vaccine.lot';
   $result=$connection->query($query);
    
    while ($row=$result->fetch()) {
	echo "<tr><td>".$row["lotNumber"]."</td><td>".$row["clinic"]."</td><td>".$row["doses"]."</td></tr>";
	}
?>
  </table>
<?php
   $connection = NULL;
?>
</body>
</html>