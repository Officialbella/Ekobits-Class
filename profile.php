<?php 

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
</head>
<body>
    <!--
        1. Navigation - blogpage, login, register
        2. Design interface for the blog post having
            i. Blog Post
            ii. Author
            iii. Date Created
            iv. Blog Image    
    -->

    <div class="container-fluid">

        <div class="row header-panel">

            <div class="col-md-1"></div>

            <div class="col-md-3">
                <h3 class="title">Ekobits<b>Class</b></h3>
            </div>
            <div class="col-md-4">
                
            </div>

            <div class="col-md-4">
                    <nav class="">
                        <ul class="navbar-nav nav">
                            <li><a href="index.php" class="title"> Blog</a></li>
                            <li><a href="register.php" class="title"> Register</a></li>
                            <li><a href="login.php" class="title"> Log in</a></li>
                            <li><a href="profile.php" class="title"> Profile </a></li>
                        </ul>
                    </nav>
            </div>

        </div>

    </div>

    <div class="container">

        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-6">
                
                <div class="blog_post">
                    
                    <div class="row">
                        <div class="col-md-8">
                            <h3>User Information</h3>
                            <hr>
                            <div class="form-group">
                                <label>Full Name: <label>
                                <input type="text" name="name" class="form-control"></input>
                            </div>

                            <div class="form-group">
                                <label>Username: <label>
                                <input type="text" name="username" class="form-control"></input>
                            </div>

                            <div class="form-group">
                                <label>Email: <label>
                                <input type="text" name="email" class="form-control"></input>
                            </div>
                            
                            <button class="btn btn-login">Update</button>

                        </div>
                        <div class="col-md-4">
                            <image src="assets/images/bg.jpg" class="img-responsive"></image>
                        </div>
                    </div>
                   
                </div>
            </div>

            <div class="col-md-5"></div>
        </div>
      
    </div>
    
</body>
</html>