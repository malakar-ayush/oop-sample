<?php
//including the database connection file
include_once( "classes/Crud.php" );
include_once( "classes/Validation.php" );

$crud       = new Crud();
$validation = new Validation();


$name  = $crud->escape_string( $_POST['name'] );
$age   = $crud->escape_string( $_POST['age'] );
$email = $crud->escape_string( $_POST['email'] );

$msg         = $validation->check_empty( $_POST, array( 'name', 'age', 'email' ) );
$check_age   = $validation->is_age_valid( $_POST['age'] );
$check_email = $validation->is_email_valid( $_POST['email'] );
$data        = array(
	'error_code' => 99999,
	'msg'        => ''
);

// checking empty fields
if ( $msg != null ) {
	$data = array(
		'error_code' => 1,
		'msg'        => $msg
	);

	//link to the previous page

} elseif ( ! $check_age ) {
	$data = array(
		'error_code' => 2,
		'msg'        => 'Please provide proper age.'
	);
} elseif ( ! $check_email ) {
	$data = array(
		'error_code' => 3,
		'msg'        => 'Please provide proper email.'
	);
} else {
	// if all the fields are filled (not empty)

	//insert data to database
	$result = $crud->execute( "INSERT INTO users(name,age,email) VALUES('$name','$age','$email')" );

	//display success message

	$data = array(
		'error_code' => 0,
		'msg'        => 'Data added successfully',
	);

}


echo json_encode( $data );

?>
