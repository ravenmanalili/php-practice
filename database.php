<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'php-crud-tutorial';

$connection = mysqli_connect($host,$username,$password,$database);

if(mysqli_connect_error()){
    echo 'Error: Unable to connect to the database <br>';
    echo "Message: " .mysqli_connect_error() .'<br>';
} else {
    echo 'Succefully Connected';
}
?>