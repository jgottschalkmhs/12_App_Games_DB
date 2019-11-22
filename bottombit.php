<?php

$find_sql="SELECT * FROM `genre` ORDER BY `genre`.`GenreName` ASC 
    " ;
    $find_query=mysqli_query($dbconnect, $find_sql);
    $find_rs=mysqli_fetch_assoc($find_query);
    $count=mysqli_num_rows($find_query);

?>

    <div class="box side">
           
           <h2>Search | <a class="side" href="allentries.php">Show All</a></h2>
           
           <i>Type part of a text field if desired</i>
           
           <hr />
           
           <!-- Name Search -->           
            <form method="post" action="game_name.php" enctype="multipart/form-data">
                
        
                
                <input class="search" type="text" name="game_name" size="40" value="" required placeholder="Game Name..." />
                
                
                <input class="submit" type="submit" name="find_game_name" value="&#xf002;" />
            
            
            </form>     <!-- / Title Search -->
           
           <!-- Author Search -->           
           <form method="post" action="dev_search.php" enctype="multipart/form-data">
            
                
                <input class="search" type="text" name="dev" size="50" value="" required placeholder="Developer..." />
                
                
                <input type="submit" class="submit" name="find_dev" value="&#xf002;" />
            
            </form> <!-- / Author search -->
           
           <br />
           
           <form method="post" action="genre_search.php" enctype="multipart/form-data">
               
               
               <select name="genre">
                   <option value="" disabled selected>Genre...</option>
                   
                   <!-- options from database -->
                   
                   <?php
                   
                   do{ ?>
                    <option value="<?php echo $find_rs['GenreName'];?>"><?php echo $find_rs['GenreName'];?></option>
                   
                   
                   <?php
                       
                   } // end do
                   
                   while($find_rs=mysqli_fetch_assoc($find_query))
                       
                   ?>
                   
               </select>
                
                              
               <input type="submit" class="submit" name="find_genre" value="&#xf002;" />
              
                          
           </form>  <!-- / Genre search -->
           
                      
           <form method="post" action="rating_search.php" enctype="multipart/form-data">
               
            <select class="half_width" name="amount">
                <option value="more" selected>At least...</option>
                <option value="less">At most...</option>
       
            </select>
               
            <select class="half_width" name="stars">
  
                <option value=1>&#9733;</option>
                <option value=2>&#9733;&#9733;</option>
                <option value=3 selected>&#9733;&#9733;&#9733;</option>
                <option value=4>&#9733;&#9733;&#9733;&#9733;</option>
                <option value=5>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
            </select>
               
               <input type="submit" class="submit" name="find_rating" value="&#xf002;" />
           
           
           </form>

            
        </div> <!-- / side bar -->
        
        <div class="box footer">
            <a href="mailto:jgottschalk@masseyhigh.school.nz">Contact</a> | 
            CC GTT 2018
        </div> <!-- / footer -->
                
        
    </div> <!-- / wrapper -->
    
            
</body>