<?php
include_once("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<style>
    .info{
        height:638px;
        width:900px;
        float:left;
        padding-left:20px;
    }
    
    .photos{
        height:638px;
        width:300px;
        float:right;
        padding-right: :20px;
    }
    .img{
        width:150px;
        height:180px;
    }
</style>
<body>
    <div class="main">
        <h1>About Us</h1>
        <div class="info"><p>We are a team of four enthusiastic first-year electrical engineering students passionate about making data come alive! This dashboard was created to explore data visualization and its ability to translate complex information into clear and insightful visuals. We believe this tool can empower users to gain a deeper understanding of electric vehicles and propulsion systems. We're constantly learning and improving, so feel free to reach out with any feedback!
            <ul>
            <li>Aary Angre - App Design and System Architecture</li>
            <li>Atharv Kulkarni - UI/UX Design</li>
            <li>Shivam Hallale - Real-time Data Acquisition and Telemetry</li>
            <li>Atharva Bedarkar - Data Migration and Visualization</li></ul></p></div>
        <div class="photos">
            <div class="row"><img class = "img float-right" src="images/angre.jpg" alt="612305005"><img class = " img tl"  src="images/kulkarni.jpg" alt="612305002"><p>Aary Angre&emsp;&emsp;&emsp;&emsp;&emsp;Atharv Kulkarni</p></div>
            <br><br><br>
            <div class="row"><img class = "img float-right" src="images/bedarkar.jpg" alt="612305027"><img class = " img bl" src="images/hallale.jpg" alt="612305009"><p>Atharv Bedarkar&emsp;&emsp;&emsp;Shivam Hallale</p></div>
        </div>
    </div>
</body>
</html>