<form action="add.php" method="post" name="form1" id="add-user-form" class="white-popup-block mfp-hide">
    <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" placeholder="Enter Name">
        <div id="name-error" class="hidden error"></div>
    </div>
    <label for="age">Age</label>
    <div class="form-group">
        <input class="form-control" type="number" name="age" placeholder="Enter Age">
        <div id="name-age" class="hidden error"></div>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="text" name="email" placeholder="Enter Email">
        <div id="name-email" class="hidden error"></div>
    </div>
    <button type="submit" class="btn btn-primary"
    ">Submit</button>

    <div id="show_message"></div>
</form>

<a class="add-user" href="#add-user-form">Add New Data</a><br/><br/>