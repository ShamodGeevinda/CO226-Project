<!DOCTYPE html>
<html lang="en">

<!-- begin head -->
<?php include 'head.php'; ?>
<!-- end head -->

<body class=" dashboard-sales">
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
    <?php include 'header.php'; ?>
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

                <div class="page-header">
                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Sales</a></li>
                        </ol>
                    </nav>
                </div>

                <div class="row layout-top-spacing">




                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-table-three">

                            <div class="widget-heading">
                                <h5 class="">Top Selling Product</h5>
                            </div>

                            <div class="widget-content">
                                <div class="table-responsive">
                                    <table class="table table-scroll">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="th-content">Product</div>
                                                </th>
                                                <th>
                                                    <div class="th-content th-heading">Price</div>
                                                </th>
                                                <th>
                                                    <div class="th-content th-heading">Discount</div>
                                                </th>
                                                <th>
                                                    <div class="th-content">Sold</div>
                                                </th>
                                                <th>
                                                    <div class="th-content">Source</div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="td-content product-name"><img src="assets/img/product-headphones.jpg" alt="product">
                                                        <div class="align-self-center">
                                                            <p class="prd-name">Headphone</p>
                                                            <p class="prd-category text-primary">Digital</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="pricing">$168.09</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="discount-pricing">$60.09</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content">170</div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><a href="javascript:void(0);" class="text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right">
                                                                <polyline points="13 17 18 12 13 7"></polyline>
                                                                <polyline points="6 17 11 12 6 7"></polyline>
                                                            </svg> Direct</a></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="td-content product-name"><img src="assets/img/product-shoes.jpg" alt="product">
                                                        <div class="align-self-center">
                                                            <p class="prd-name">Shoes</p>
                                                            <p class="prd-category text-warning">Faishon</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="pricing">$108.09</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="discount-pricing">$47.09</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content">130</div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><a href="javascript:void(0);" class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right">
                                                                <polyline points="13 17 18 12 13 7"></polyline>
                                                                <polyline points="6 17 11 12 6 7"></polyline>
                                                            </svg> Google</a></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="td-content product-name"><img src="assets/img/product-watch.jpg" alt="product">
                                                        <div class="align-self-center">
                                                            <p class="prd-name">Watch</p>
                                                            <p class="prd-category text-danger">Accessories</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="pricing">$88.00</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="discount-pricing">$20.00</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content">66</div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><a href="javascript:void(0);" class="text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right">
                                                                <polyline points="13 17 18 12 13 7"></polyline>
                                                                <polyline points="6 17 11 12 6 7"></polyline>
                                                            </svg> Ads</a></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="td-content product-name"><img src="assets/img/product-laptop.jpg" alt="product">
                                                        <div class="align-self-center">
                                                            <p class="prd-name">Laptop</p>
                                                            <p class="prd-category text-primary">Digital</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="pricing">$110.00</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="discount-pricing">$33.00</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content">35</div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><a href="javascript:void(0);" class="text-info"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right">
                                                                <polyline points="13 17 18 12 13 7"></polyline>
                                                                <polyline points="6 17 11 12 6 7"></polyline>
                                                            </svg> Email</a></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="td-content product-name"><img src="assets/img/product-camera.jpg" alt="product">
                                                        <div class="align-self-center">
                                                            <p class="prd-name">Camera</p>
                                                            <p class="prd-category text-primary">Digital</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="pricing">$126.04</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="discount-pricing">$26.04</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content">30</div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><a href="javascript:void(0);" class="text-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right">
                                                                <polyline points="13 17 18 12 13 7"></polyline>
                                                                <polyline points="6 17 11 12 6 7"></polyline>
                                                            </svg> Referral</a></div>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-table-three">

                            <div class="widget-heading">
                                <h5 class="">Best Value Product</h5>
                            </div>

                            <div class="widget-content">
                                <div class="table-responsive">
                                    <table class="table table-scroll">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="th-content">Product</div>
                                                </th>
                                                <th>
                                                    <div class="th-content th-heading">Price</div>
                                                </th>
                                                <th>
                                                    <div class="th-content th-heading">Discount</div>
                                                </th>
                                                <th>
                                                    <div class="th-content">Sold</div>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="td-content product-name"><img src="assets/img/product-headphones.jpg" alt="product">
                                                        <div class="align-self-center">
                                                            <p class="prd-name">Headphone</p>
                                                            <p class="prd-category text-primary">Digital</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="pricing">$168.09</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="discount-pricing">$60.09</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content">170</div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="td-content product-name"><img src="assets/img/product-shoes.jpg" alt="product">
                                                        <div class="align-self-center">
                                                            <p class="prd-name">Shoes</p>
                                                            <p class="prd-category text-warning">Faishon</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="pricing">$108.09</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="discount-pricing">$47.09</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content">130</div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="td-content product-name"><img src="assets/img/product-watch.jpg" alt="product">
                                                        <div class="align-self-center">
                                                            <p class="prd-name">Watch</p>
                                                            <p class="prd-category text-danger">Accessories</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="pricing">$88.00</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="discount-pricing">$20.00</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content">66</div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="td-content product-name"><img src="assets/img/product-laptop.jpg" alt="product">
                                                        <div class="align-self-center">
                                                            <p class="prd-name">Laptop</p>
                                                            <p class="prd-category text-primary">Digital</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="pricing">$110.00</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="discount-pricing">$33.00</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content">35</div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="td-content product-name"><img src="assets/img/product-camera.jpg" alt="product">
                                                        <div class="align-self-center">
                                                            <p class="prd-name">Camera</p>
                                                            <p class="prd-category text-primary">Digital</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="pricing">$126.04</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content"><span class="discount-pricing">$26.04</span></div>
                                                </td>
                                                <td>
                                                    <div class="td-content">30</div>
                                                </td>

                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
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
    <script src="assets/js/dashboard/dash_2.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

<!-- Mirrored from designreset.com/cork/ltr/demo9/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Jul 2021 05:12:40 GMT -->

</html>