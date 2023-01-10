<!DOCTYPE html>
<html>
<body style="background-color:#4978bc;">
<?php
include 'connectdb.php';
?>
<h1 style="color:white;"> Patient Information </h1>
<h2 style="color:white;"> Choose a patient from the list <p>
<?php
include 'getdata.php';
?>
<form action="getpets.php" method="post">
<input type="submit" value="Get Pet Names">
</form>

<p><a href="http://localhost/covid.php">Home Page</a></p>
</form> 
</body>
<html>