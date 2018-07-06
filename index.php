
<?php 
    require 'config/config.php';

    


?>






<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Simple PHP CRUD APP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="main.css" />
    <script src=""></script>
</head>
<body>
    <form action="" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input placeholder="enter your name!" id="name" name="name"></input>
            <span class="red" id="error"></span>
        <div>

        <div class="form-group">
            <label for="email">Email</label>
            <input placeholder="enter your email!" id="email" name="email"></input>
            <span class="red" id="error"></span>
        <div>

        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input placeholder="enter your phone!" id="phone" name="phone"></input>
        <div>

        <div class="form-group">
            <label for="address">Address</label>
            <input placeholder="enter your address!" id="address" name="address"></input>
        <div>

        <button class="btn-send" id="btnSend" oncliick="sendToBackEnd()" name="btnSend"> Send </button>
    </form>

    <script>
    
        
    </script>
</body>
</html>