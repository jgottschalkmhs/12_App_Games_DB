<?php 
    include "topbit.php"; 
    
    
    // Initialise variables

    $app_name_error = "oops this is blank";

    $app_name = "";

    // Error Checking
    
?>
               
            
        <div class="box main">
            <h2>Add an App</h2>
            
            <p>Fields marked with an <sup class="required">*</sup> are required.</p>
            
            <!-- Posts form to itself so errors can be fixed -->
            	
	       <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
               
        <p>
			<b>App Name<sup class="required">*</sup></b>:&nbsp;&nbsp;
			<input type="text" name="app_name" size="25" value="<?php echo $app_name; ?>" required />&nbsp;<span class="required"><?php echo $app_name_error; ?></span>
		</p>
               
        
            </form>

          
            
        </div> <!-- / main -->
        
 <?php include "bottombit.php"; ?>