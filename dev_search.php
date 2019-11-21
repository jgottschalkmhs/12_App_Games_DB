<?php 
    include "topbit.php"; 
    

// if search button pushed...

if(isset($_POST['find_dev']))
    
{
    
    $dev = $_POST['dev'];
    
    $find_sql="SELECT * FROM `game_details` 
    JOIN developer ON (game_details.DeveloperID=developer.DevID)
    JOIN genre ON (game_details.GenreID=genre.GenreID)
     WHERE `DevName` LIKE '%$dev%'
    ORDER BY game_details.Name ASC
    " ;
    $find_query=mysqli_query($dbconnect, $find_sql);
    $find_rs=mysqli_fetch_assoc($find_query);
    $count=mysqli_num_rows($find_query);
    
?>
               
            
        <div class="box main">
            <h2>All Results</h2>
            
            <?php
            
            if ($count<1)
                
            {
                ?>
            
            <div class="error">
            
                Sorry!  There are no results that match your search.  Please use the search box in the side bar to try again.
                
            </div>  <!-- end error -->
            
            <?php 
            }
            
            else
                
            {
                do {
                    
                    ?>
            
            <!-- Results go here -->
            <div class="results">
            
            <p>Game Name: <span class="sub_heading"><?php echo $find_rs['Name'];?></span></p>
                
            <p>Developer: <?php echo $find_rs['DevName'];?></p>
                
            
            <p>Genre: <?php echo $find_rs['GenreName'];?></p>

            
            <br />
                
           </div>  <!-- / results -->
            <br />
            
            
            <?php
                }
                
                while
                    ($find_rs=mysqli_fetch_assoc($find_query));
                
            }
    
} // end 'isset'
            
            
            
            ?>
        
 
          
            
        </div> <!-- / main -->
        
 <?php include "bottombit.php"; ?>