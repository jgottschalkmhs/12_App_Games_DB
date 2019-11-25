<?php

include("config.php");
// Connect to database...
$dbconnect=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);



$keyword = $_POST["keyword"];

if(!empty($keyword)) {
    
    
$dev_sql="SELECT `DevName` FROM `developer` WHERE `DevName` LIKE '%$keyword%'  ORDER BY `developer`.`DevName` ASC LIMIT 0,6";
$dev_query=mysqli_query($dbconnect, $dev_sql);
$dev_rs=mysqli_fetch_assoc($dev_query);
$dev_count = mysqli_num_rows($dev_query);
    

if(!empty($dev_rs)) {
?>
<ul id="DevName-list">
<?php
foreach($dev_query as $dev_rs) {
?>
    <li onClick="selectDevName('<?php echo $dev_rs["DevName"]; ?>');"><?php echo $dev_rs["DevName"]; ?></li>
<?php } ?>
</ul>
<?php } // end devcount if

} // end post if ?>