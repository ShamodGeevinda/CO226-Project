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
$query = "SELECT * from Customer WHERE CustomerID='" . $ID . "'";
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
                            $PartID = $_REQUEST['CustomerID'];
                            $update = "UPDATE Customer set UserName='" . $_POST['UserName'] . "', Password='" . $_POST['Password'] . "', ContactNum='" . $_POST['ContactNum'] . "', Address='" . $_POST['Address'] . "' ,NIC='" . $_POST['NIC'] .  "' WHERE CustomerID='" . $_POST['CustomerID'] . "'";
                            mysqli_query($mysqli, $update) or die(mysqli_error($mysqli));
                            $status = "Record Updated Successfully. </br></br><a href='edit_customers_interface.php'>View Updated Record</a>";
                            echo '<p style="color:#FF0000;">' . $status . '</p>';
                        } else {
                        ?>
                            <div>

                                <form class="form" name="form" method="post" action="">
                                    <div class="form-body">
                                        <input type="hidden" name="new" value="1" />
                                        <input name="CustomerID" type="text" value="<?php echo $row_user['CustomerID']; ?>" hidden="">


                                        <div class="row">



                                            <div class="col-md-6 col-12">
                                                <h6>User Name : </h6>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <h6><input type="text" class="form-control" name="UserName" required value="<?php echo $row_user['UserName']; ?>" /></h6>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <h6>Password : </h6>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <h6><input type="text" class="form-control" name="Password" required value="<?php echo $row_user['Password']; ?>" /></h6>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <h6>Contact Number : </h6>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <h6><input type="text" class="form-control" name="ContactNum" required value="<?php echo $row_user['ContactNum']; ?>" /></h6>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <h6>Address : </h6>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <h6><input type="text" class="form-control" name="Address" required value="<?php echo $row_user['Address']; ?>" /></h6>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <h6>NIC : </h6>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <h6><input type="text" class="form-control" name="NIC" required value="<?php echo $row_user['NIC']; ?>" /></h6>
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