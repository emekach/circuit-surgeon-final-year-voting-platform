<?php
include("header.php");
?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Contestants</h4>


                    </div>
                </div>
            </div>
            <!-- end page title -->



        </div>


        <div class="row">

            <?php

            $sql = "SELECT * FROM category ORDER BY 1 DESC";
            $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            while ($row = mysqli_fetch_array($query)) {
                $id = $row['id'];
                $category = $row['category_name'];
                $image = $row['category_image'];

                echo ' <div class="col-lg-4">
<div class="card">
    <div class="card-body">
    <img class="card-img-top img-fluid" src="admin/product_images/' . $image . '" alt="Card image cap" height="20000px" >
    <div class="card-body">
        <h4 class="card-title">' . $category . '</h4>
       
        </div>  
        <div class="d-grid mb-3">
                                               <a href="vote.php?id=' . $id . '&name=' . $category . '" button type="button" class="btn btn-primary btn-lg waves-effect waves-light">Vote </a>
                                            </div>
    </div>
</div>
</div>';
            }

            ?>








        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Upcube.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->



<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>

<!-- masonry pkgd -->
<script src="assets/libs/masonry-layout/masonry.pkgd.min.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>