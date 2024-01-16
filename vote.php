<?php
include("header.php");
?>



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">



            <form action="" method="POST">
                <div class="row">

                    <?php
                    if (isset($_GET["id"])) {
                        $categoryId = $_GET["id"];
                        $sql = "SELECT * FROM contestant WHERE category_id = $categoryId";
                        $result = $conn->query($sql);

                        while ($row = $result->fetch_assoc()) {
                            $id = $row['id'];
                            $category_id = $row['category_id'];
                            $name = $row['name'];

                            echo ' 
                       

                        <div class="col-lg-4">
                        <label>
<div class="card">
    <div class="card-body">
    <img class="card-img-top img-fluid" src="admin/product_images/" alt="Card image cap" height="20000px" >
    <div class="card-body">
        <h4 class="card-title">' . $name . '</h4>
       
        </div>  
        <input type="hidden" name="contestant_id" value="' . $id . '">
        <div class="d-grid mb-3">
                                               <button type="submit" name="vote" class="btn btn-primary btn-lg waves-effect waves-light">Vote </button>
                                            </div>
    </div>
</div>
</label>
</div>

';
                        }
                    }

                    ?>








                </div>
            </form>





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

<?php



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["vote"])) {
    $userId = $_SESSION["user"];
    $contestantId = $_POST["contestant_id"];
    $categoryId = $_GET["id"]; // Retrieve category ID from the URL parameter



    // Check if the user has already voted in this category
    $checkVoteQuery = "SELECT * FROM vote WHERE user_id = '$userId' AND contestant_id IN (SELECT id FROM contestant WHERE category_id = '$categoryId')";
    $checkVoteResult = $conn->query($checkVoteQuery);


    if ($checkVoteResult->num_rows == 0) {
        // Update contestant's vote count and insert the vote record
        $updateContestantQuery = "UPDATE contestant SET votes = votes + 1 WHERE id = '$contestantId'";

        $insertVoteQuery = "INSERT INTO vote (user_id, contestant_id) VALUES ('$userId', '$contestantId')";

        if ($conn->query($updateContestantQuery) && $conn->query($insertVoteQuery)) {
            echo '<script>alert("Vote Successful.");</script>';
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo '<script>alert("You have already voted in this category.");</script>';
    }
}
?>