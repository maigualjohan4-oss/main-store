<?php
    // get data from frontend
    $Email = $_POST['email'];
    $Password = MD5($_POST['pswd']);

    echo "<br>" . $Email;
    echo "<br>" . $Password;

?>