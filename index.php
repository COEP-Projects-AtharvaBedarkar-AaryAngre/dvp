<?php
include_once("header.php");

$link_1 = "https://app.powerbi.com/reportEmbed?reportId=d54ab86f-1f04-41e7-a2b7-11cdfc95d48f&autoAuth=true&ctid=b4c6b754-54e3-41e4-a8da-304355c62816";

$link_2 = "https://app.powerbi.com/reportEmbed?reportId=f507f193-4927-463e-aaf3-604d2b2a2cb0&autoAuth=true&ctid=b4c6b754-54e3-41e4-a8da-304355c62816";
?>
<style>
.dash{
width:1450px;
height:900px;
}
</style>

<!DOCTYPE html>
<html lang="en">

<body>

<div id="header" class = "content"></div>

<div class="main">
    <?php if($_SESSION["Name"] == "AARY" || $_SESSION["Name"] == "SHIVAM"){echo "<h2>Hello Powertrain </h2><br>";}else{echo "<h2>Hello Vehicle Dynamics</h2>";} ?>
    <iframe class = "dash" src = "<?php echo ($_SESSION["Name"] == "AARY" || $_SESSION["Name"] == "SHIVAM")? $link_1:$link_2;?>" ></iframe>
   </div>


</body>
</html>