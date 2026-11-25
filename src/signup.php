<?php
    //get database connection
    include('../settings/database.php');

    // get data from frontend
    $First_name = $_POST['fname'];
    $Last_name = $_POST['lname'];
    $Identification_number = $_POST['idnumber'];
    $Mobile_phone = $_POST['mphone'];
    $Email = $_POST['email'];
    $Password = MD5($_POST['pswd']);

    // Prepare query
    $sql = "
    INSERT INTO 
    users (firstname, lastname, ident_number, email, password) 
    VALUES (
        '$First_name', 
        '$Last_name', 
        '$Identification_number', 
        '$Email', 
        '$Password'
    );
";
    // Execute query
    $res = pg_query($local_conn, $sql);

    if ($res) {
        echo "User has been created successfully.";
    } else {
        echo "Error: User hasn't been created successfully.";
    }

?>