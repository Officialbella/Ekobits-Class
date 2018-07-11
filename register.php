<?php

    require 'config/config.php';
    $con = new db();
    $dbcon = $con->Connect();


    if(isset($_POST['btn_reg'])){

        // Declaring Variables to store inputed data.
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $rp_password = $_POST['rp_password'];
        $user_type = "Regular";

        // Validating if password match $password = $rp_password
        if($password != $rp_password) {
            echo "
                    <script>
                        alert('Password does not match try again!');
                    </script>
                ";
        }
        else {

            // sql inserting into database;
            $sql = "INSERT INTO users (full_name, user_name, user_email, password, date_joined, user_type) VALUES (:name, :user, :email, :pass, :dated, :type)";

            // Declaring a variable for the date function;
            $date_joined = date('Y-m-d');

            // prepared statement;
            $stmt = $dbcon->prepare($sql);
            
            // Binding Values
            $stmt->bindParam('name', $name);
			$stmt->bindParam('user', $username);
			$stmt->bindParam('email', $email);
			$stmt->bindParam('pass', $password);
            $stmt->bindParam('dated', $date_joined);
            $stmt->bindParam('type', $user_type);
            
            // Executing Statement
            $result = $stmt->execute();

            if($result != null)
			{
			    echo "<script>window.location.href = 'login.php';</script>?";
			}	

			else{
				echo "Error creating the account. Please try again";
			}

			$dbcon = null;
        }
    }

?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap.min.css" />
</head>
<body>
    
    <div class="container-fluid">

        <div class="row header-panel">

            <div class="col-md-1"></div>

            <div class="col-md-4">
                <h3 class="title">Ekobits<b>Class</b></h3>
            </div>
            <div class="col-md-4">
                <h3 class="title"> Regular User</h3>
            </div>

            <div class="col-md-2">
                <h3 class="time"><?= date('h:i:sa') ?></h3>
            </div>

        </div>

    </div>

    <div class="container">
        <div class="form-container">
           
            <form method="POST" action="">
                <div class="form-group">
                    <label>Full Name</label><br>
                    <input type="text" placeholder="enter your name" name="name" class="form-control formInput"></input>
                </div>

                <div class="form-group">
                    <label>Email</label><br>
                    <input type="text" placeholder="enter your email" name="email" class="form-control formInput"></input>
                </div>

                <div class="form-group">
                    <label>Username</label><br>
                    <input type="text" placeholder="enter your username" name="username" class="form-control formInput"></input>
                </div>

                <div class="form-group">
                    <label>Password:</label><br>
                    <input type="password" placeholder="enter your password" name="password" class="form-control formInput"></input>
                </div>

                <div class="form-group">
                    <label>Re-Type Password:</label><br>
                    <input type="password" placeholder="re-enter your password" name="rp_password" class="form-control formInput"></input>
                </div>

                <button class="btn btn-login" name="btn_reg">Register</button>
            </form>

        </div>
    </div>

</body>
</html>