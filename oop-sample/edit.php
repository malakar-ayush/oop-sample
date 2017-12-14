<?php
// including the database connection file
include_once( 'header.php' );


$crud = new Crud();

//getting id from url
$id = $crud->escape_string( $_GET['id'] );

//selecting data associated with this particular id
$result = $crud->getData( "SELECT * FROM users WHERE id=$id" );

foreach ( $result as $res ) {
	$name  = $res['name'];
	$age   = $res['age'];
	$email = $res['email'];
}

?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <form name="form1" method="post" action="editAction.php">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" placeholder="Enter Name"
                               value="<?php echo $name; ?>"/>
                    </div>
                    <label for="age">Age</label>
                    <div class="form-group">
                        <input class="form-control" type="number" name="age" placeholder="Enter Age"
                               value="<?php echo $age; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="text" name="email" placeholder="Enter Email"
                               value="<?php echo $email; ?>">
                        <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                    </div>
                    <button type="submit" name="update" class="btn btn-primary"
                    ">Update</button>

                </form>
            </div>
        </div>
    </div>
</div>


<?php include_once( 'footer.php' ); ?>
