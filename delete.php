<?php
    require ('./database.php');

    if (isset($_POST['delete'])){
        $deleteId = $_POST['deleteId'];
        $queryDelete = "DELETE FROM accounts where id = '$deleteId'";
        $sqlDelete = mysqli_query($connection,$queryDelete);
    
        echo '<script>alert("Successfully Deleted")</script>';
        echo '<script>window.location.href = "/php-crud-tutorial/index.php"</script>';
    }else{
        echo '<script>window.location.href = "/php-crud-tutorial/index.php"</script>'; //para maredirect ka pag di mo naman clinick button
    }
?>


