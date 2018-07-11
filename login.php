<?php session_start();
    require 'config/config.php';

    /** Connecting to the database */
        $db = new db(); 
        $db = $db->connect(); 

    
    if(isset($_POST['btn_login']))
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT user_name, password FROM users WHERE user_name = :user AND password = :pswd;";

			$stmt = $db->prepare($sql);

			$stmt->bindParam('user', $username);
			$stmt->bindParam('pswd', $password);

			$stmt->execute();

			$result = $stmt->fetchAll(PDO::FETCH_OBJ);

            if(!$result) {
                echo "
                    <script>
                        alert('Username or Password Incorrect!');
                    </script>
                ";
            }
            else {

                foreach ($result as $row) {
					$_SESSION['admin'] = $row->username;
				}
				
				echo "<script>window.location.href = 'profile.php';</script>";
            }
        }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
</head>
<body>

    <div class="container-fluid">

        <div class="row header-panel">

            <div class="col-md-1"></div>

            <div class="col-md-4">
                <h3 class="title">Ekobits<b>Class</b></h3>
            </div>
            <div class="col-md-4">
                <h3 class="title"> Regular</h3>
            </div>

            <div class="col-md-2">
                <h3 class="time"><?= date('h:i:sa') ?></h3>
            </div>

        </div>

    </div>

    <div class="container">
        <div class="form-container">
            <div>
                <span class="error" id="user_error"></span>
            </div>

            <form method="POST" action="">
                <div class="form-group">
                    <label>Username</label><br>
                    <input type="text" placeholder="enter your email or username" name="username" class="form-control formInput"></input>
                </div>

                <div class="form-group">
                    <label>Password:</label><br>
                    <input type="password" placeholder="enter your password" name="password" class="form-control formInput"></input>
                </div>

                <button class="btn btn-login" name="btn_login">Login</button>
            </form>
        
        </div>

       
    </div>



    <script>
        function formValidate() {
           // var errorMsg = "Username or Password Incorrect! ";
           // document.getElementById('user_error').innerHTML = errorMsg;
           alert('Username or Password Incorrect!');
        }
    </script>
</body>
</html>