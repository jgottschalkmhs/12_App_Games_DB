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
            
            <p>
                <span class="sub_heading">
                 
                <!-- name hyperlinked to URL -->
                <a target="_blank" href="<?php echo $find_rs['URL']; ?>">
                    <?php echo $find_rs['Name'];?></a>

                <!-- Rating in brackets -->
                (Rating: <?php echo $find_rs['Average Rating']; ?>)
                
                </span>
                
                
                </p>
                
                <!-- Rating Experiment -->
                <!-- Source: https://codepen.io/Bluetidepro/pen/GkpEa -->
                <div class="star-ratings-sprite"><span style="width:32%;" class="star-ratings-sprite-rating"></span></div>
                
                
            <p>Developer: <?php echo $find_rs['DevName'];?></p>
                
            
            <p>Genre: <?php echo $find_rs['GenreName'];?></p>
                
                <hr />
                
            <p>
                <span class="sub_heading">Description</span>
            </p>
            
            
                
            <p>
            <?php echo $find_rs['Description']; ?>    
            </p>

            
            <br />
                
           </div>  <!-- / results -->
            <br />
            
            
            <?php
                }
                
                while
                    ($find_rs=mysqli_fetch_assoc($find_query));
                
            }
    
        
            
            ?>