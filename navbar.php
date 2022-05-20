<div class="sidebar-wrapper sidebar-theme">

    <nav id="compactSidebar">
        <ul class="navbar-nav theme-brand flex-row">
            <li class="nav-item theme-logo">
                <a href="home.php">
                    <img src="assets/img/logo2.svg" class="navbar-logo" alt="logo">
                </a>
            </li>
        </ul>
        <ul class="menu-categories">
            <li class="menu active">
                <a href="#stocks" data-active="true" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                <line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg>
                        </div>
                        <span>Stocks</span>
                    </div>
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </li>

            <li class="menu">
                <a href="#employees" data-active="false" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard">
                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                            </svg>
                        </div>
                        <span>Employees</span>
                    </div>
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </li>

            <li class="menu">
                <a href="#customers" data-active="false" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
                                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                            </svg>
                        </div>
                        <span>Customers</span>
                    </div>
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </li>

            <li class="menu">
                <a href="#services" data-active="false" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu">
                                <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                                <rect x="9" y="9" width="6" height="6"></rect>
                                <line x1="9" y1="1" x2="9" y2="4"></line>
                                <line x1="15" y1="1" x2="15" y2="4"></line>
                                <line x1="9" y1="20" x2="9" y2="23"></line>
                                <line x1="15" y1="20" x2="15" y2="23"></line>
                                <line x1="20" y1="9" x2="23" y2="9"></line>
                                <line x1="20" y1="14" x2="23" y2="14"></line>
                                <line x1="1" y1="9" x2="4" y2="9"></line>
                                <line x1="1" y1="14" x2="4" y2="14"></line>
                            </svg>
                        </div>
                        <span>Services</span>
                    </div>
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </li>


        </ul>
    </nav>

    <div id="compact_submenuSidebar" class="submenu-sidebar">
        <?php
        $type = "admin"; //$_SESSION["type"];

        switch ($type) {
            case "admin":
                echo
                '<div class="submenu" id="stocks">
            <ul class="submenu-list" data-parent-element="#stocks">
                <li>
                    <a href="add_stocks_interface.php"> Add Stocks </a>
                </li>
                <li>
                    <a href="edit_stocks_interface.php"> Edit Stocks </a>
                </li>
                <li>
                    <a href="delete_stocks_interface.php"> Delete Stocks </a>
                </li>
            </ul>
        </div>';
                break;
            case "client":
                echo
                '<div class="submenu" id="stocks">
            <ul class="submenu-list" data-parent-element="#stocks">
                <li>
                    <a href="#"> Add user </a>
                </li>
                
                
            </ul>
        </div>';
                break;
        }
        ?>

        <div class="submenu" id="employees">
            <ul class="submenu-list" data-parent-element="#employees">
                <li>
                    <a href="#"> Add Employee </a>
                </li>
                <li>
                    <a href="#"> Edit Employee </a>
                </li>
                <li>
                    <a href="#"> Delete Employee </a>
                </li>
                <li>
                    <a href="#"> Vacation Status</a>
                </li>
                <li>
                    <a href="#"> Payments</a>
                </li>
                <li>
                    <a href="employee_task_interface.php"> Set task</a>
                </li>


            </ul>
        </div>

        <div class="submenu" id="customers">
            <ul class="submenu-list" data-parent-element="#customers">
                <li>
                    <a href="add_customers_interface.php"> Add Customers </a>
                </li>
                <li>
                    <a href="edit_customers_interface.php"> Edit Customers </a>
                </li>
                <li>
                    <a href="delete_customers_interface.php"> Delete Customers </a>
                </li>
                <li>
                    <a href="customer_repair_status.php"> Repair Status </a>
                </li>

            </ul>
        </div>

        <div class="submenu" id="services">
            <ul class="submenu-list" data-parent-element="#services">
                <li>
                    <a href="#"> Add Repairs </a>
                </li>
                <li>
                    <a href="#"> Update Repairs </a>
                </li>
                <li>
                    <a href="#"> Add Orders </a>
                </li>

            </ul>
        </div>


    </div>

</div>