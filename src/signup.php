<?php
    // get data from frontend
    $First_name = $_POST['fname'];
    $Last_name = $_POST['lname'];
    $Identification_number = $_POST['idnumber'];
    $Mobile_phone = $_POST['mphone'];
    $Email = $_POST['email'];
    $Password = MD5($_POST['pswd']);


    echo "<br>" . $First_name;
    echo "<br>" . $Last_name;
    echo "<br>" . $Identification_number;
    echo "<br>" . $Mobile_phone;
    echo "<br>" . $Email;
    echo "<br>" . $Password;

    

?>