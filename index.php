<?php
 require('./read.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD TUTORIAL</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="main">
        <form class="create-main"action="/php-crud-tutorial/create.php" method="POST">
            <h3>CREATE USER</h3>
            <input type="text" name="username" placeholder="Enter your username" required/>
            <input type="text" name="password" placeholder="Enter password" required/>
            <input type="submit" name="create" value="create">
        </form>
        <table class="read-main">
            <tr>
                <th><a href="?column=id&sort=<?php echo $sort ?>">ID</a></th>
                <th><a href="?column=username&sort=<?php echo $sort ?>">Username</a></th>
                <th><a href="?column=password&sort=<?php echo $sort ?>"> Password</a></th>
                <th>ACTIONS</th>
            </tr>
        <?php  while($results = mysqli_fetch_array($sqlAccounts)){ ?>

             <tr>
                <td><?php echo $results['id'] ?></td>
                <td><?php echo $results['username'] ?></td>
                <td><?php echo $results['password'] ?></td>
                <td class="last">
                    <form action="/php-crud-tutorial/update.php" method="post">
                        <input type="submit" name="edit" value="edit">
                        <input type="hidden" name="updateId" value = "<?php echo $results['id'];?>">
                        <input type="hidden" name="updateUsername" value = "<?php echo $results['username'];?>">
                        <input type="hidden" name="updatePassword" value = "<?php echo $results['password'];?>">
                    </form>
                    <form action="/php-crud-tutorial/delete.php" method="post">
                        <input type="submit" name="delete" value="delete">
                        <input type="hidden" name="deleteId" value = "<?php echo $results['id'];?>">
                     </form>
                </td>
            </tr>
         <?php  } ?> 
        </table>
    </div>  
</body>
</html>