<?php

require ('./database.php');

if (isset($_POST['create'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $queryCreate = "INSERT INTO accounts (username, password) VALUES 
    ('$username', '$password')";
    $sqlCreate = mysqli_query($connection,$queryCreate);

    echo '<script>alert("Successfully Created")</script>';
    echo '<script>window.location.href = "/php-crud-tutorial/index.php"</script>';
}else{
    echo '<script>window.location.href = "/php-crud-tutorial/index.php"</script>'; //para maredirect ka pag di mo naman clinick button
}
?>