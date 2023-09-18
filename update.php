<?php
 require('./database.php');

 if(isset($_POST['edit'])){
    $editId = $_POST['updateId'];
    $editUsername = $_POST['updateUsername']; //kukunin yung hidden value kay html then lalagay sa new container
    $editPassword = $_POST['updatePassword'];
 }

 if(isset($_POST['Update'])){
    $Uid = $_POST['bid'];
    $Uusername = $_POST['busername'];
    $Upassword = $_POST['bpassword'];

    $queryEdit = "UPDATE accounts SET username = '$Uusername', password = '$Upassword' WHERE id = '$Uid'";
    $sqlEdit = mysqli_query($connection, $queryEdit);

    echo '<script>alert("Successfully Updated)</script>';
    echo '<script>window.location.href = "/php-crud-tutorial/index.php"</script>';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE USER</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="main">
        <form class="update-main"action="/php-crud-tutorial/update.php" method="POST">
            <h3>UPDATE USER</h3>
            <input type="text" name="busername" placeholder="Enter your username" value = "<?php echo $editUsername ?>" required/>
            <input type="text" name="bpassword" placeholder="Enter password" value = "<?php echo $editPassword ?>" required/>
            <input type="submit" name="Update" value="Update">
            <input type="hidden" name="bid" value="<?php echo $editId ?>">



        </form>

    </div>  
</body>
</html>