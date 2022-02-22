<!-- include './sessionstart.php';
require('config.php');

$id = $_GET['id'];
if ($_SESSION["type"] != "admin") { // to prevent editing others profiles
header("location: home.php");
exit;
} -->


<?php

$mysqli = mysqli_connect("localhost", "root", "1234", "comshop");
$ID = $_GET['ID'];
$query = "SELECT * from stock WHERE PartID='" . $ID . "'";
$result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
$row_user = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">


<?php include 'head.php' ?>

<body class="dashboard-analytics">

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <?php include 'header.php' ?>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <?php include 'navbar.php'; ?>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div id="content" class="main-content">
                    <br>
                    <h3 class="card-title">Edit Stock Details</h3>
                    <div class="page-header">

                        <?php
                        $status = "";
                        if (isset($_POST['new']) && $_POST['new'] == 1) {
                            $PartID = $_REQUEST['PartID'];
                            $update = "UPDATE stock set PartName='" . $_POST['PartName'] . "', ManufactureID='" . $_POST['ManufactureID'] . "', UnitPrice='" . $_POST['UnitPrice'] . "', Quantity='" . $_POST['Quantity'] . "' ,WarrantyDuration='" . $_POST['WarrantyDuration'] .  "' WHERE PartID='" . $_POST['PartID'] . "'";
                            mysqli_query($mysqli, $update) or die(mysqli_error($mysqli));
                            $status = "Record Updated Successfully. </br></br><a href='edit_stocks_interface.php'>View Updated Record</a>";
                            echo '<p style="color:#FF0000;">' . $status . '</p>';
                        } else {
                        ?>
                            <div>

                                <form class="form" name="form" method="post" action="">
                                    <div class="form-body">
                                        <input type="hidden" name="new" value="1" />
                                        <input name="PartID" type="text" value="<?php echo $row_user['PartID']; ?>" hidden="">


                                        <div class="row">



                                            <div class="col-md-6 col-12">
                                                <h6>Part Name : </h6>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <h6><input type="text" class="form-control" name="PartName" required value="<?php echo $row_user['PartName']; ?>" /></h6>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <h6>Manufacture ID : </h6>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <h6><input type="text" class="form-control" name="ManufactureID" required value="<?php echo $row_user['ManufactureID']; ?>" /></h6>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <h6>Unit Price : </h6>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <h6><input type="text" class="form-control" name="UnitPrice" required value="<?php echo $row_user['UnitPrice']; ?>" /></h6>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <h6>Quantity : </h6>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <h6><input type="text" class="form-control" name="Quantity" required value="<?php echo $row_user['Quantity']; ?>" /></h6>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <h6>Warranty Duration : </h6>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <h6><input type="text" class="form-control" name="WarrantyDuration" required value="<?php echo $row_user['WarrantyDuration']; ?>" /></h6>
                                            </div>



                                            <div class="col-md-6 col-12">
                                                <p><input name="submit" type="submit" class="btn btn-primary mr-1" value="Update" /></p>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            <?php } ?>
                            </div>

                    </div>
                </div>
                <br>
                <br>
                <br>
                <?php include 'footer.php'; ?>
            </div>
            <!--  END CONTENT AREA  -->


        </div>
        <!-- END MAIN CONTAINER -->

        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
        <script src="bootstrap/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="assets/js/app.js"></script>
        <script>
            $(document).ready(function() {
                App.init();
            });
        </script>
        <script src="assets/js/custom.js"></script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->

        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
        <script src="plugins/apex/apexcharts.min.js"></script>
        <script src="assets/js/dashboard/dash_1.js"></script>
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>



</html>