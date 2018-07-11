<?php session_start();

    require '../config/config.php';
    $db = new db(); 
    $db = $db->connect(); 

    $sql = "SELECT * FROM users;";

    $stmt = $db->prepare($sql);

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    
    if(isset($_POST['btn_submit'])) 
    {
        // Declaring variable to store the upload dir folder;
        $post_dir = "../uploads/";

        // Combining the post dir to the file name
		$post_up = $post_dir.$_FILES['postImg']['name'];

        // Uploading file to the upload dir folder;
        move_uploaded_file($_FILES['postImg']['tmp_name'], $post_up);
        
        // Declaring Variables to store  data from the Content creator;
        $postTitle = $_POST['post_title']; // getting the post title;
        $postContent = $_POST['post_content']; // getting the post content;
        $postImg = $post_up; // setting $post_up as the value for post image;

        // sql insert into database;
        $sql = "INSERT INTO blog_post (post_title, post_content, post_author, post_img, date_created) VALUES (:title, :content, :author, :img, :dated);";

        // declaring variable for the date;
        $dated = date('d-m-y');

        // prepare statement
        $stmt = $db->prepare($sql);

        // Binding parameters.
        $stmt->bindParam('title', $postTitle);
        $stmt->bindParam('content', $postContent);
        $stmt->bindParam('author', $_SESSION['admin']);
        $stmt->bindParam('img', $postImg);
        $stmt->bindParam('dated', $dated);

        // Executing binded parameters and storing it in $posted
        $posted = $stmt->execute();

        //checking if fields not empty;
        if(!$posted) {
            echo "<script>alert('Problems creating the post, check your fields');</script>";
        }
        else {
            echo "<script>window.location.href = 'dashboard.php';</script>";
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
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
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
                <h3 class="title"> Dashboard</h3>
            </div>

            <div class="col-md-2">
                <h3 class="time">Hello, Username</h3>
            </div>

        </div>

    </div>

    <div class="container-fluid">

        <div class="row">
            

            <!-- Content Creator -->
            <div class="col-md-3">
                <div class="form-container-2">               
                    <form>

                        <div class="form-group">
                            <label>Post Title</label><br>
                            <input type="text" placeholder="enter your email or username" name="post_title" class="form-control"></input>
                        </div>

                        <div class="form-group">
                            <label>Post Content</label><br>
                            <textarea placeholder="enter your email or username" name="post_content" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Post Image</label><br>
                            <input type="file" name="post_img" class="form-control"></input>
                        </div>

                        <button class="btn btn-login" name="btn_submit"> Submit </button>
                    </form>
                </div>
            </div>
            
            <!-- User Listing -->
            <div class="col-md-4 form-container">
                
                <table class="table">

                    <tr class="tr">
                        <th>s/n</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>Joined</th>
                    <tr>

                    <tr class="tr">
                        <td>1</td>
                        <td>Opeyemi Adesina</td>
                        <td>Yemistorms</td>
                        <td>yemi@mail.com</td>
                        <td>Admin</td>
                        <td>20:11:2018</td>
                    </tr>

                </table>

            </div>

            <!-- Content Editor -->
            <div class="col-md-5">
                <div class="form-container-2">

                    <table class="table">
                       
                        <tr class="tr">
                            <th>s/n</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Author</th>
                            <th></th>
                            <th></th>
                        <tr>

                        <tr class="tr">
                            <td>1</td>
                            <td>Opeyemi Adesina</td>
                            <td>Yemistorms</td>
                            <td>yemi@mail.com</td>
                            <td><button class="btn btn-login">Edit</button></td>
                            <td><button class="btn btn-danger">delete</button></td>
                        </tr>

                    </table>
                </div>
            </div>

            

        </div>

    </div>

</body>
<html>