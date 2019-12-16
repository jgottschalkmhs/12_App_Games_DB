<?php 
    include "topbit.php"; 

	// retrieves information...
	$ID = $_SESSION['ID'];

    	
	$find_sql="SELECT * FROM `game_details` JOIN developer ON (game_details.DeveloperID=developer.DevID)
    JOIN genre ON (game_details.GenreID=genre.GenreID) WHERE ID='$ID'";
	$find_query=mysqli_query($dbconnect, $find_sql);
	$find_rs=mysqli_fetch_assoc($find_query);
    $count=mysqli_num_rows($find_query);
?>
               
            
        <div class="box main">
            <h2>Congrautlations</h2>
            <p><i>You have added the following entry...</i></p>
            
           <?php include("results.php");
            
            ?>
          
            
        </div> <!-- / main -->
        
 <?php include "bottombit.php"; ?>