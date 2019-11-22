<?php 
    include "topbit.php"; 
    

// if search button pushed...

if(isset($_POST['find_rating']))
    
{
    
    $amount = $_POST['amount'];
    $stars= $_POST['stars'];
    
    if ($amount=="more")
    { 
    
    $find_sql="SELECT * FROM `game_details` 
    JOIN developer ON (game_details.DeveloperID=developer.DevID)
    JOIN genre ON (game_details.GenreID=genre.GenreID)
     WHERE `Average Rating` >= $stars
    ORDER BY game_details.Name ASC
    " ;
    
    }
    else {
            $find_sql="SELECT * FROM `game_details` 
    JOIN developer ON (game_details.DeveloperID=developer.DevID)
    JOIN genre ON (game_details.GenreID=genre.GenreID)
     WHERE `Average Rating` <= $stars
    ORDER BY game_details.Name ASC
    " ;
    
        
    }
    
    $find_query=mysqli_query($dbconnect, $find_sql);
    $find_rs=mysqli_fetch_assoc($find_query);
    $count=mysqli_num_rows($find_query);
    
?>
               
            
        <div class="box main">
            <h2>All Results</h2>
            
           <?php include("results.php");
            } // end isset
            ?>
          
            
        </div> <!-- / main -->
        
 <?php include "bottombit.php"; ?>