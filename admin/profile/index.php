<?php 
    include "../config/config.php";

    $sql = mysqli_query($con, "SELECT * FROM tbl_users WHERE id_user='$_SESSION[id]'");
	$data = mysqli_fetch_array($sql);
?>

<div class="row">
    
</div>

