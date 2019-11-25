<?php 
    include "topbit.php"; 
    

    // sql to populate drop downs
    $find_sql="SELECT * FROM `game_details` 
    JOIN developer ON (game_details.DeveloperID=developer.DevID)
    JOIN genre ON (game_details.GenreID=genre.GenreID)
    ORDER BY game_details.Name ASC
    " ;
    $find_query=mysqli_query($dbconnect, $find_sql);
    $find_rs=mysqli_fetch_assoc($find_query);
    $count=mysqli_num_rows($find_query);

    
    // make searchable developer box
    
    $dev_sql="SELECT * FROM `developer`";
    $dev_query=mysqli_query($dbconnect, $dev_sql);
    $dev_rs=mysqli_fetch_assoc($dev_query);


    
    // Initialise variables

    $app_name_error = $url_error = "Oops something went wrong";

    $app_name = "";
    $url = "";
    $subtitle = "";
    $genre = "";
    $developer = "";

    // Error Checking
    
?>
               
            
        <div class="box main">
            <h2>Add an App</h2>
            
            <p>Fields marked with an <sup class="required">*</sup> are required.</p>
            
            <!-- Posts form to itself so errors can be fixed -->
            	
	       <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
               
        <p>
			<b>App Name<sup class="required">*</sup></b>&nbsp; &nbsp;<span class="required"><?php echo $app_name_error; ?></span>
            <br />
			<input type="text" name="app_name" size="45" value="<?php echo $app_name; ?>" required placeholder="App Name (required)" />
		</p>
               
        <p>
			<b>Subtitle</b><br />
			<input type="text" name="subtitle" size="45" value="<?php echo $subtitle; ?>" placeholder="Subtitle"  />
		</p>
               
        <p>
			<b>URL<sup class="required">*</sup></b>&nbsp; &nbsp;<span class="required"><?php echo $url_error; ?></span>
            
            <br />
			<input type="text" name="url" size="45" value="<?php echo $url; ?>" required  placeholder="http://" />
		</p>
               
        <div class="flex-container">
            
            <div class="genere">
            <b>Genre:</b><br />
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
            </div> <!-- / genre div -->
            
            <!-- nbsp's below add small gap between drop down boxes -->
            &nbsp; &nbsp; &nbsp;
            
            
            <div class="developer">
            <b>Developer:</b><br />
			<input type="text" name="developer" id="dev_search" placeholder="Developer Name" size="50" />
            
            <div id="suggestion-box"></div>
            </div> <!-- / developer div -->
            
        </div>  <!-- / genre / developer flexbox -->
        
        <div class="flex-container">
        
        </div>  <!-- end of rating flex container -->
        
        </form>

          
            
        </div> <!-- / main -->
        
 <?php include "bottombit.php"; ?>