<?php 
    include "topbit.php"; 
    
    
    // Initialise variables

    $app_name_error = $url_error = "Oops something went wrong";

    $app_name = "";
    $url = "";
    $subtitle = "";

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
               
        
            </form>

          
            
        </div> <!-- / main -->
        
 <?php include "bottombit.php"; ?>