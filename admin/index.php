<?php

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body>

    <div class="container-fluid">

        <div class="row header-panel">

            <div class="col-md-1"></div>

            <div class="col-md-4">
                <h3 class="title">Ekobits<b>Class</b></h3>
            </div>
            <div class="col-md-4">
                <h3 class="title"> Admin Login</h3>
            </div>

            <div class="col-md-2">
                <h3 class="time">12:00 pm</h3>
            </div>

        </div>

    </div>

    <div class="container">
        <div class="form-container">
            <form method="POST" action="">
                <div class="form-group">
                    <label>Email or Username</label><br>
                    <input type="text" placeholder="enter your email or username" class="form-control formInput"></input>
                    <span class="error"></span>
                </div>

                <div class="form-group">
                    <label>Password:</label><br>
                    <input type="password" placeholder="enter your password" class="form-control formInput"></input>
                    <span class="error"></span>
                </div>

                <button class="btn btn-login">Login</button>
            </form>
        
        </div>

       
    </div>

</body>
</html>