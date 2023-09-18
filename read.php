<?php
    require('./database.php');
    // need mo ilagay to para mag run si $queryaccounts
    $sort = "ASC";
    $column = "id";
    // this sort and column are just default para ma click mo si isset since walapang value si colum and sort. Magkakaroon lang sya ng new value if na clink na si <a>

    if(isset($_GET['column']) && isset($_GET['sort'])){
        $sort = $_GET['sort']; // papalitan mo na dito si default value
        $column = $_GET['column']; // dito pinapalitan mo si column (which can be username password or ID)

        $sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC'; // different if-else condition
    }

    $queryAccounts = "SELECT * FROM accounts ORDER BY $column $sort";
    $sqlAccounts = mysqli_query($connection, $queryAccounts);
?>