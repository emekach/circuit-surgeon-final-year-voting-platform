<?php
include("../includes/db.php");

if(isset($_POST['login'])){
    $opwd=mysqli_real_escape_string($conn,strip_tags($_POST['oldpass']));
    
    //password_hash(mysqli_real_escape_string($conn,strip_tags($_POST['oldpass'])), PASSWORD_DEFAULT);
    $pwd=mysqli_real_escape_string($conn,strip_tags($_POST['newpass']));

    
    if(empty($opwd) || empty($pwd)){
       echo "<script>alert('Fields cannot be blank')</script>";
    }

    $sql1="SELECT password from admin where password='$opwd'";
    $query1=mysqli_query($conn,$sql1) or die(error());
    $count=mysqli_num_rows($query1);
    if($count>0){


        $sql="UPDATE admin set password='$pwd'";
    $query=mysqli_query($conn,$sql) or die(mysqli_error());
    if($query){
        echo "<script>alert('Password Updated')</script>";
        echo '<script>window.location.replace(\'index.php\')</script>';
        exit();
        
    
    }
    }



    
}
?>

<!doctype html>
<html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin panel</title>
    <meta name="description" content="Admin panel">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-form">
                    
                       <center> <h1 >Change Password</h1></center>
                   
                </div>
                <br>
                   
                <div class="login-form">
                    <form method="POST" autocomplete="off">
                        <div class="form-group">
                            <label>Old Password</label>
                            <input type="password" name="oldpass" class="form-control" placeholder="Enter Old Password">
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" name="newpass" class="form-control" placeholder="Enter New Password">
                        </div>
                      
                        <button type="submit" name="login" class="btn btn-success btn-flat m-b-30 m-t-30">Change Password</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
