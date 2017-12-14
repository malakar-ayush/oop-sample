<?php
//including the database connection file


//fetching data in descending order (lastest entry first)

//echo '<pre>'; print_r($result); exit;
include_once( "header.php" );
include_once( "templateAddUserForm.php" );
?>
    <div id="show-user-data">
		<?php
		include_once( 'templateShowUserData.php' );

		?>
    </div>


<?php include_once( "footer.php" ) ?>