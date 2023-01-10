<!DOCTYPE html>
<html>
<body style="background-color:#4978bc;">
<?php
include 'connectdb.php';
?>
<h1 style="color:white;"> Vaccine Information </h1>
  <p style="color:white;"> Choose a vaccine type: <p>
  <form action="getlocation.php" method="post">
  <input type="radio" id="astra" name="fav_language" value="ASTRAZENECA">
  <label for="astra" style="color:white;">Astrazeneca</label><br>
  <input type="radio" id="moderna" name="fav_language" value="MODERNA">
  <label for="moderna" style="color:white;">Moderna</label><br>
  <input type="radio" id="pfizer" name="fav_language" value="Pfizer">
  <label for="pfizer" style="color:white;">Pfizer</label><br>
  <input type="radio" id="johnson" name="fav_language" value="Johnson">
  <label for="johnson" style="color:white;">Johnson</label><br>
  <input type="submit" value="Submit"> <br>
  </form>
  <?php
$connection = NULL;
?>
  <p style="color:white;"> Choose a vaccine location: <p>
  <form>
  <input type="radio" id="summerdrive" name="fav_language" value="SUMMERDRIVE">
  <label for="summerdrive" style="color:white;">SUMMERDRIVE</label><br>
  <input type="radio" id="drivesummer" name="fav_language" value="DRIVESUMMER">
  <label for="drivesummer" style="color:white;">DRIVESUMMER</label><br>
  <input type="radio" id="belair" name="fav_language" value="BELAIR">
  <label for="belair" style="color:white;">BELAIR</label><br>
  <input type="radio" id="foudo" name="fav_language" value="FOUDO">
  <label for="foudo" style="color:white;">FOUDO</label><br>
  <input type="radio" id="honeywell" name="fav_language" value="HONEYWELL">
  <label for="honeywell" style="color:white;">HONEYWELL</label><br>
  <input type="radio" id="treetop" name="fav_language" value="TREETOP">
  <label for="treetop" style="color:white;">TREETOP</label><br>
  <input type="submit" value="Submit"> <br> <br>
  </form>
   <p><a href="http://localhost/listofpatients.php">Want to view patients?</a></p>
 <p><a href="http://localhost/covid.php">Home Page</a></p>
</form>
<?php
$connection = NULL;
?>
</body>
<html>