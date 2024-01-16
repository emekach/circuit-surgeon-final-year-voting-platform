<?php

include("../includes/db.php");

if (!isset($_SESSION['username'])) {
    header("location:login.php");
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

<body>
    <!-- Left Panel -->
    <?php
    include("../includes/header_nav.php");
    ?>

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logos.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/losgo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Add Product Category</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="index.php">Dashboard</a></li>
                                    <li><a href="#">Add New category</a></li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">


                <div class="">




                    <div class="">
                        <div class="card">
                            <div class="card-header">
                                <strong>Add New category</strong>
                            </div>
                            <div class="card-body card-block">




                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Service Category Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="service_name" placeholder="Service Name" class="form-control" required></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-inputdds" class=" form-control-label">Image</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-inputdds" name="product_img1" class="form-control-file" required></div>
                                    </div>








                            </div>

                            <button type="submit" name="insert_category" class="btn btn-primary btn-lg btn-block">Add Service</button>

                            </form>

                        </div>
                    </div>







                </div>


            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2022 Admin
                    </div>

                </div>
            </div>
        </footer>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets\js\tinymce\tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>


</body>

</html>

<?php

if (isset($_POST['insert_category'])) {

    $service_name = mysqli_real_escape_string($conn, strip_tags($_POST['service_name']));

    $product_img1 = $_FILES['product_img1']['name'];

    $temp_name1 = $_FILES['product_img1']['tmp_name'];

    $image_type = $_FILES['product_img1']['type'];

    if ($image_type === "image/jpg" || $image_type === "image/jpeg" || $image_type === "image/png") {

        move_uploaded_file($temp_name1, "product_images/$product_img1");

        $sql = "INSERT INTO `category`(`category_name`, `category_image`) VALUES ('$service_name','$product_img1')";
        $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        if ($query) {

            echo "<script>alert('Category Has Been Created')</script>";
            echo "<script>window.open('add_service.php','_self')</script>";
        } else {
            echo "<script>alert('Category Not Created')</script>";
        }
    }
}
?>