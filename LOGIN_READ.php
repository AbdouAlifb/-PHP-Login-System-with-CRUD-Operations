<?php include  "db_connection.php" ;

$req = "SELECT * FROM users ";
$resulta=mysqli_query($conn , $req);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        while($row = mysqli_fetch_assoc($resulta)){
            ?>
            <pre>
                <?php
            print_r($row);
            ?>
            </pre>

        <?php
        }
    ?>

    
</body>
</html>