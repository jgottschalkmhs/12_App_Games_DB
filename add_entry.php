<?php 
    include "topbit.php"; 
    

    // sql to populate genre field
  $genre_sql="SELECT * FROM `genre` ORDER BY `genre`.`GenreName` ASC 
    " ;
    $genre_query=mysqli_query($dbconnect, $genre_sql);
    $genre_rs=mysqli_fetch_assoc($genre_query);
    $count=mysqli_num_rows($genre_query);


    
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
                    <option value="<?php echo $genre_rs['GenreName'];?>"><?php echo $genre_rs['GenreName'];?></option>
                   
                   
                   <?php
                       
                   } // end do
                   
                   while($genre_rs=mysqli_fetch_assoc($genre_query))
                       
                   ?>
                   
               </select>
            </div> <!-- / genre div -->
            
            <!-- nbsp's below add small gap between drop down boxes -->
            &nbsp; &nbsp; &nbsp;
            
            <div class="developer">
            <b>Developer:</b><br />
			<select name="developer">
				<option value="companyA">companyA</option>
				<option value="card">companyB</option>
				<option value="adventure">companyC</option>
			</select>
            </div> <!-- / developer div -->
            
        </div>  <!-- / flexbox -->
        
            </form>

          
            
        </div> <!-- / main -->
        
 <?php include "bottombit.php"; ?>