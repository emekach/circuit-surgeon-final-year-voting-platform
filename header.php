<?php

include("includes/db.php");

if (!isset($_SESSION['user'])) {
    header("location:login.php");
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

<body data-topbar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/logos-sm.png" alt="logo-sm" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logso-dark.png" alt="logo-dark" height="20">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/losgo-sm.png" alt="logo-sm-light" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/losgo-light.png" alt="logo-light" height="20">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                        <i class="ri-menu-2-line align-middle"></i>
                    </button>



                </div>

                <div class="d-flex">








                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">



                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="/" class="waves-effect">
                                <i class="ri-dashboard-line"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="logout.php" class=" waves-effect">
                                <i class="ri-calendar-2-line"></i>
                                <span>Logout</span>
                            </a>
                        </li>






                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->