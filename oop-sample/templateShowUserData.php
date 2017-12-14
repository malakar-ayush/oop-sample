<div class="table-responsive">
    <table class="table">
        <thead>
        <tr bgcolor='#CCCCCC'>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Update</th>
        </tr>
        </thead>
		<?php
		include_once( "classes/Crud.php" );
		$crud   = new Crud();
		$query  = "SELECT * FROM users ORDER BY id DESC";
		$result = $crud->getData( $query );
		foreach ( $result as $key => $res ) {
			//while($res = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>" . $res['name'] . "</td>";
			echo "<td>" . $res['age'] . "</td>";
			echo "<td>" . $res['email'] . "</td>";
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}
		?>
    </table>
</div>
