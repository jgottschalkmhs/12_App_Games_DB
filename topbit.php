<!DOCTYPE HTML>

<html lang="en">

<?php

session_start(); // to allow variable transfer between pages...
include("config.php");

// Connect to database...
$dbconnect=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

if(mysqli_connect_errno()) {
	echo "Connection failed:".mysqli_connect_error();
	exit;
}

?>

<head>
    <meta charset="utf-8">
    <meta name="description" content="Reading, log, books">
    <meta name="GTT" content="Game Apps">
    <meta name="keywords" content="games, apps">
    
    <title>Game App Database</title>

    <!-- for multiple fonts change | to %7c * no spaces*  -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet">  

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/appstyle.css">    <!-- custom style sheet -->
    
    <!-- ajax / jquery code for autocomplete -->
    
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
        $("#dev_search").keyup(function(){
        $.ajax({
        type: "POST",
        url: "readDeveloper.php",
        data:'keyword='+$(this).val(),
        beforeSend: function(){
        $("#dev_search").css("background-color:#FFF; url(LoaderIcon.gif) no-repeat 165px");
        },
        success: function(data){
        $("#suggestion-box").show();
        $("#suggestion-box").html(data);
        $("#search-box").css("background","#FFF");
        }
        });
        });
        });

        function selectDevName(val) {
        $("#dev_search").val(val);
        $("#suggestion-box").hide();
        }
    </script>

    
</head>

<body>
    
    <p class="message">Eek!  Your browser does not support grid.  Please upgrade your system.</p>
        
    <div class="wrapper">
    
        <!-- logo / small image goes here -->
        <div class="box logo">
            <a href="index.php"><img src="images/apps_logo.png" width="199" height="145" alt="" /></a>
        </div> <!-- / logo -->
        
        <div class="box banner">
            <h1>Game Apps</h1>        
        </div> <!-- / banner -->