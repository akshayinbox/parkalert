<?php

$done = False;

if(isset($_GET['time'])) {
$time = $_GET['time'];
$done = True;
//write to file the 'time' value

$file= fopen("addme.txt", "w") or die("Unable to open file!");
fwrite($file, $time);
fclose($file);

}

?>
<!DOCTYPE HTML>
<html>
<head>
<style>

body {
font-family: sans-serif;
font-size: 18px;
}

</style>
<title>ParkAlert&trade;</title>
</head>

<body>
<h2>ParkAlert&trade;</h2>

<?php
if($done):
?>
<h3 style='color:darkgreen;'>Thank you!<br>Your selection has been processed [ Added: <?php echo $time; ?> minute(s) ]</h3>
<?php
else:
?>
<h3>How much time would you like to add to meter?</h3>
<form>
  <input type="radio" name="time" value="0"> Add Nothing - $0.00<br>
  <input type="radio" name="time" value="10"> Add 10 minutes - $5.00 Flat Rate<br>
  <input type="radio" name="time" value="30"> Add 30 minutes - $12.00 Flat Rate<br>
  <input type="radio" name="time" value="60"> Add 1 hour - $20 Flat Rate<br><br>
  <em>Note:</em> The selected price will be billed to your credit card on file under CITY*PARKINGFEE.
  <br><br>
   <input type="submit" value="+Add Time">
</form>
<?php endif; ?>
</body>
</html>