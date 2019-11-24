<?php 
    include "topbit.php"; 
    
    
    // Initialise variables

    $app_name_error = $url_error = "";

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
			<b>App Name<sup class="required">*</sup></b>:&nbsp;&nbsp;
			<input type="text" name="app_name" size="45" value="<?php echo $app_name; ?>" required />&nbsp;<span class="required"><?php echo $app_name_error; ?></span>
		</p>
               
        <p>
			<b>Subtitle</b>:&nbsp;&nbsp;
			<input type="text" name="subtitle" size="45" value="<?php echo $subtitle; ?>"  />
		</p>
               
        <p>
			<b>URL<sup class="required">*</sup></b>:&nbsp;&nbsp;
			<input type="text" name="url" size="45" value="<?php echo $url; ?>" required />&nbsp;<span class="required"><?php echo $url_error; ?></span>
		</p>
               
        
            </form>

          
            
        </div> <!-- / main -->
        
 <?php include "bottombit.php"; ?>