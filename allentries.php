<?php 
    include "topbit.php"; 
    
    
    $find_sql="SELECT * FROM `game_details` JOIN developer ON (game_details.DeveloperID=developer.DevID)";
    $find_query=mysqli_query($dbconnect, $find_sql);
    $find_rs=mysqli_fetch_assoc($find_query);
    $count=mysqli_num_rows($find_query);
    


?>
               
            
        <div class="box main">
            <h2>Genre Search Results</h2>
            
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
            

            
            <br />
                
           </div>  <!-- / results -->
            <br />
            
            
            <?php
                }
                
                while
                    ($find_rs=mysqli_fetch_assoc($find_query));
                
            }
            
            
            
            ?>
        
 
          
            
        </div> <!-- / main -->
        
 <?php include "bottombit.php"; ?>