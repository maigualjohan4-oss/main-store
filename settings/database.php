// Database connection 
/*
    To test connection, please go to:
    http://localhost/main-store/settings/database.php
*/
<?php
$host = "localhost";
    $port = "5432";
    $dbname = "mainstore";
    $user = "postgres";
    $password = "postgres";
 
    $local_conn = pg_connect("
        host=$host
        port=$port
        dbname=$dbname
        user=$user
        password=$password"
    );
 
    if (!$conn) {
        die("Error al conectar con PostgreSQL");
    }
?>