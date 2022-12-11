<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, "mydb");


$name = $_REQUEST["field1"];
$address = $_REQUEST["field2"];
$email = $_REQUEST["field3"];
$number = $_REQUEST["field4"];
$qualification = $_REQUEST["field5"];
$department = $_REQUEST["field6"];


$sql = "insert into students values ('$name','$address','$email',$number,'$qualification','$department')";

mysqli_query($conn, $sql);





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <style> @import url('https://fonts.googleapis.com/css2?family=La+Belle+Aurore&display=swap'); </style>
    <style> @import url('https://fonts.googleapis.com/css2?family=La+Belle+Aurore&family=Ubuntu:wght@300&display=swap'); </style>
    <style> @import url('https://fonts.googleapis.com/css2?family=Diplomata+SC&display=swap'); </style>
    <style> @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap'); </style>
    <style> @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap'); </style>
    <style> @import url('https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@1,200&display=swap'); </style>
    <style> @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap'); </style>
    <title>Thank You</title>
</head>

<style>
    .homepage{
        background-color: white;
        
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
        
    }


    .Main-content{
      
        font-family: 'Caveat', cursive;
        font-size: 30px;

    }
</style>
<body>
    <div class="container">

        <div id="nb" class="navbar">
            <div class="nav-items">
                
                <div class="nav-logo">
                    <h1>MERN</h1>   
                                </div>

                                <div class="nav-links">
                                    <a class="nill" href="index.html">Go Home</a>
                                    <a class="nill" href="reg.html">Register Again</a>
                                </div>

                            </div>
                        </div>


                 <div style="background-color: white;" class="homepage">
                 
                 
                   <center class="Main-content">
                       <?php
                            $_SESSION["name"] = $name;

                            echo "<h1>Thank you, ". $_SESSION["name"] . " for Registering.</h1>";
                        
                            ?>
                    </center>

                </div>



                <div class="footer">
            <div class="info">
                <h4>About Our Developers</h4>
                <a class="footer-links" href="https://www.linkedin.com/in/syed-dayim-shah-96b5511a5/">Syed Dayim Shah</a>
                <a class="footer-links" href="https://www.instagram.com/umer_latif__/">Umar lateef</a>
                
            </div>
            
            <div class="info">
                <h4>Follow Us</h4>
                <a class="footer-links" href="https://twitter.com">Twitter</a>
                <a class="footer-links" href="https://www.facebook.com/">Facebook</a>
                <a class="footer-links" href="https://www.instagram.com/">instagram</a>
                <a class="footer-links" href="#"></a>
            </div>

            <div class="info">

            </div>
        </div>
                    
                </div>
</body>
</html>