<?php
include("includes/db.php");

if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($conn, strip_tags($_POST['username']));
    $pwd = mysqli_real_escape_string($conn, strip_tags($_POST['password']));
    //md5(mysqli_real_escape_string($conn,strip_tags($_POST['password'])));



    $sql = "SELECT * FROM `user` WHERE `username`='$username' and `password`='$pwd'";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $row = mysqli_num_rows($query);

    if ($row > 0) {
        $_SESSION['user'] = $username;

        header("location:index.php");
        exit();
    } else {
        echo "<script>alert('Incorrect Details')</script>";

        echo '<script>window.location.replace(\'login.php\')</script>';
        exit();
    }
}
?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Circuit Surgeon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="auth-body-bg">
    <div class="bg-overlay"></div>
    <div class="wrapper-page">
        <div class="container-fluid p-0">
            <div class="card">
                <div class="card-body">

                    <div class="text-center mt-4">
                        <div class="mb-3">
                            <h1>Circuit Surgeon</h1>
                            <!-- <a href="index.html" class="auth-logo">
                                <img src="assets/images/logo-dark.png" height="30" class="logo-dark mx-auto" alt="">
                                <img src="assets/images/logo-light.png" height="30" class="logo-light mx-auto" alt="">
                            </a> -->
                        </div>
                    </div>

                    <h4 class="text-muted text-center font-size-18"><b>Sign In To Vote</b></h4>

                    <div class="p-3">
                        <form class="form-horizontal mt-3" action="" method="POST">

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control" type="text" required="" name="username" placeholder="Username">
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control" type="password" required="" name="password" placeholder="Password">
                                </div>
                            </div>



                            <div class="form-group mb-3 text-center row mt-3 pt-1">
                                <div class="col-12">
                                    <button class="btn btn-info w-100 waves-effect waves-light" name="login" type="submit">Log
                                        In</button>
                                </div>
                            </div>


                        </form>
                    </div>
                    <!-- end -->
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end container -->
    </div>
    <!-- end -->

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>