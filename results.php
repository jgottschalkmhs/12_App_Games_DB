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
            
                <span class="sub_heading">
                 
                <!-- name hyperlinked to URL -->
                <a target="_blank" href="<?php echo $find_rs['URL']; ?>">
                    <?php echo $find_rs['Name'];?></a>

                
                </span>
                
                

            <table>
                <tr>
                <td>
                    <!-- Partial Stars Original Source: https://codepen.io/Bluetidepro/pen/GkpEa -->
                    <div class="star-ratings-sprite"><span style="width:<?php echo $find_rs['Average Rating'] / 5 * 100; ?>%;" class="star-ratings-sprite-rating"> </span></div>
                </td>
                <td>
                    <div class="actual-rating">
                    (<?php echo $find_rs['Average Rating']; ?>)
                    </div>
                </td>
                    
                </tr>
            </table>
                
                
                            
                
            <p>Developer: <?php echo $find_rs['DevName'];?></p>
                
            <p>
                <!-- outputs 'Free' if app prices is 0, 
                otherwise shows price -->
                
                <?php 
                if ($find_rs['Price'] == 0)
                    
                {
                    
                    ?>
                    Free
                    <?php
                } // end 'if'
                    
                else {
                ?>
                Price: $<?php echo $find_rs['Price']; 
                } // end else
                
                
                // Displays 'In app purchase' if necessary
                if($find_rs['In App Purchase'] == 1) {
                      
                      ?>
                        &nbsp; &nbsp;(In App Purchase)
                    <?php
                      
                  }
                ?>
                
            </p>
                
            
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