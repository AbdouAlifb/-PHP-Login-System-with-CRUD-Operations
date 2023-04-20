<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2>CRUD App</h2>
                <hr>
                <h3>Create Record</h3>
                <form action="create.php" method="POST">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name:</label>
                        <input type="text" class="form-control" name="lastName" required>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
                <hr>
                <h3>Read Records</h3>
                <?php 
                    include "login_fonction.php";
                    $records = getRecords();
                    if (count($records) > 0) {
                        echo '<table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>';
                        foreach ($records as $record) {
                            echo '<tr>
                                    <td>'.$record['id'].'</td>
                                    <td>'.$record['name'].'</td>
                                    <td>'.$record['lastname'].'</td>
                                    <td>'.$record['email'].'</td>
                                    <td>'.$record['password'].'</td>
                                    <td>
                                        <a href="LOGIN_UPDATE.php?id='.$record['id'].'" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="LOGIN_DELETE.php?id='.$record['id'].'" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>';
                        }
                        echo '</tbody></table>';
                    } else {
                        echo '<p>No records found.</p>';
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
