<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Leave Management System</title>
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/bootstrap.css">
    <!-- <script defer src="../fontawesome/js/all.min.js"></script> -->
    <script src="https://kit.fontawesome.com/24229652dd.js" crossorigin="anonymous"></script>
    <script src="<?php echo URL ?>assets/js/automatic.js" type="module"></script>
    <script src="./js/team.js" type="module"></script>
    <link rel="stylesheet" href="<?php echo URL ?>assets/vendors/chartjs/Chart.min.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/app.css">
    <style type="text/css">
        .notif:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header" style="height: 50px;margin-top: -30px">
                    <div class="logo"><img src="./assets/images/Assembler-Logo.png"></div>

                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item ">
                            <a href="./dashboard-info.html" class='sidebar-link'>
                                <i class="fa fa-home text-success"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../../src/dashboard.php" class='sidebar-link'>
                                <i class="fa-solid fa-people-group text-success"></i>
                                <span>Manage Team</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../../src/employee.php" class='sidebar-link'>
                                <i class="fa-solid fa-user-plus text-success"></i>
                                <span>Add Player</span>
                            </a>
                        </li>
                        <li class="sidebar-item active">
                            <a href="./team.html" class='sidebar-link'>
                                <i class="fa fa-users text-success"></i>
                                <span>The Team</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                        <li class="dropdown nav-icon">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="bell"></i><span class="badge bg-info">2</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-large">
                                <h6 class='py-2 px-4'>Notifications</h6>
                                <ul class="list-group rounded-none">
                                    <li class="list-group-item border-0 align-items-start">
                                        <div class="row mb-2">
                                            <div class="col-md-12 notif">
                                                <a href="leave_details.html">
                                                    <h6 class='text-bold'>John Doe</h6>
                                                    <p class='text-xs'>
                                                        applied for leave at 05-21-2021
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="col-md-12 notif">
                                                <a href="leave_details.html">
                                                    <h6 class='text-bold'>Jane Doe</h6>
                                                    <p class='text-xs'>
                                                        applied for leave at 05-21-2021
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar me-1">
                                    <img src="<?php echo URL ?>assets/images/admin.png" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">Hi, Admin</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../../src/library/loginController.php"><i
                                        data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Meet the Team</h3>
                </div>
                <section class="section">
                    <div class="cards-container">
                        <div id="cards-column" class="cards-column">


                        </div>

                    </div>
                </section>
            </div>
        </div>
    </div>
    <script src="<?php echo URL ?>assets/js/feather-icons/feather.min.js"></script>
    <script src="<?php echo URL ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo URL ?>assets/js/app.js"></script>
    <script src="<?php echo URL ?>assets/vendors/chartjs/Chart.min.js"></script>
    <script src="<?php echo URL ?>assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="<?php echo URL ?>assets/js/main.js"></script>
</body>

</html>