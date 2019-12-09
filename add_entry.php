<?php 
    include "topbit.php"; 
    

    // sql to populate genre list
    $find_sql="SELECT * FROM `genre` ORDER BY `GenreName` ASC" ;
    $find_query=mysqli_query($dbconnect, $find_sql);
    $find_rs=mysqli_fetch_assoc($find_query);
    $count=mysqli_num_rows($find_query);

    // sql to populate genre drop down...

    
    // Initialise variables

    $app_name_error = $url_error = $age_error = $desc_error = "";

    $app_name = "";
    $url = "";
    $subtitle = "";
    $genre = "";
    $developer = "";
    $age_rating = "";
    $rating = "";
    $rating_count = "";
    $price = "";
    $in_app = "";
    $description = "";

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
        <br />
        
        <div class="flex-container">
        <div>
            <b>Age</b>
            <br />
			<input type="text" name="age_rating" size="10" value="<?php echo $age_rating; ?>" required placeholder="Age" />
        </div> <!-- / age rating div -->
                &nbsp; &nbsp; &nbsp;
            
        <div>
            
            <b>Rating</b><br />
            <select class="half_width" name="rating">
  
                <option value=1>&#9733;</option>
                <option value=2>&#9733;&#9733;</option>
                <option value=3 selected>&#9733;&#9733;&#9733;</option>
                <option value=4>&#9733;&#9733;&#9733;&#9733;</option>
                <option value=5>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
            </select>
            
        </div> <!-- / rating div -->
               &nbsp; &nbsp; &nbsp; 
        <div>
            <b>Rating Count</b>
            <br />
			<input type="text" name="rating_count" size="10" value="<?php echo $rating_count; ?>" required placeholder="# of Ratings" />
        </div> <!-- / age rating div -->
        
        
        
        </div>  <!-- end of rating flex container -->
               
        <br />
               
        <div class="flex-container"> <!-- start of price div flex -->
            
            <div>
                <b>Price</b><br >
                
                <!-- set up price box with $ sign... -->
                <div class="money flex-container">
                    <span class="dollar">$</span>
                    <input class="dollar" type="text" name="price" size="10" value="<?php echo $price; ?>" required placeholder="Price" />
                </div>  <!-- / money flex / $ container -->
                
            </div>  <!-- price div -->
            
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            
            <div>
                <b>In App Purchase...</b><br /><br />
                <!-- defaults to 'yes' -->
                <input class="radio-btn" type="radio" name="in_app" value="yes" checked="checked">Yes
                <input class="radio-btn" type="radio" name="in_app" value="no">No
                
                
                
            </div>  <!-- / in app radio -->
            
        </div>
        
        <p>
			<b>Description<sup class="required">*</sup></b>&nbsp; &nbsp;<span class="required"><?php echo $desc_error; ?></span>
            <br />
            
            <textarea name="description" rows="6" cols="100">
			<?php echo $description; ?>
            </textarea>
		</p>
               
        <p>
			<input class="add-submit" type="submit" value="Submit" />
		</p>
        
        </form>

          
            
        </div> <!-- / main -->
        
 <?php include "bottombit.php"; ?>