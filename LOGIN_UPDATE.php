<?php 
    include "db_connection.php";
    include "login_fonction.php" ;
    if(isset($_POST['update'])){ 
        update();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Add Bootstrap stylesheet link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <fieldset>
            <legend>Personal information</legend>
            <form action="" method="post" class="form-horizontal"> 
                <div class="form-group">
                    <label class="col-sm-2 control-label">Name:</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" placeholder="Your name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Last name:</label>
                    <div class="col-sm-10">
                        <input type="text" name="lastName" class="form-control" placeholder="Your last name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">E-mail:</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" placeholder="E-mail">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" placeholder="Your password" minlength="8" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">ID:</label>
                    <div class="col-sm-10">
                        <select name="id" class="form-control">
                            <?php getId(); // call function ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>

    <!-- Add Bootstrap JavaScript and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
