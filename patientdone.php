<!DOCTYPE html>
<html>
<body style="background-color:#4978bc;">

<h1 style="color:white;"> Vaccination Data </h1>
<p style="color:white;">Fill out the vaccination data</p>

<form action="/action_page.php">
  <label for="vdate" style="color:white;">Vaccination Date:</label><br>
  <input type="text" id="vdate" name="vdate"><br>
  <label for="LN" style="color:white;">Lot Number:</label><br>
  <input type="text" id="LN" name="LN"><br>
  <p style="color:white;"> Select which vaccine clinic: <p>
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
  <input type="submit" value="Submit"> <br>
  </form>
   <p><a href="http://localhost/vaccinationdata.php">View your vaccinations here</a></p>  
  <p><a href="http://localhost/covid.php">Home Page</a></p>
</form> 
</body>
<html>