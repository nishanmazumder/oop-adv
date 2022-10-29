<?php include "function.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
</head>
<body>
<h1>User name is:</h1>

    <?php

    echo $_REQUEST['user'];
    //var_dump($_REQUEST['user']);


// function get_dta()
// {
//     if(connect()){
//         $query = "SELECT * FROM user";
//         $results = connect()->prepare($query);
//         $results->execute();

//         echo "<pre>";
//         print_r($results->fetchAll(\PDO::FETCH_ASSOC));

//     }
// }

// get_dta();

    // trigger_error('foo');

    ?>
</body>
</html>