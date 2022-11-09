<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'registration');

    $conn = new MySQLi(HOST,USER,PASS,BASE);



if(!$conn){
    die("Connection failed" . mysqli_connect_error());
}
//echo "Connection successfully!"

?>