<?php
session_start();
require_once 'db.php';

if (!isset($_SESSION['Login'])) {
    $_SESSION['Login'] = "";
    header('location: ../login/index.php');
}

$_user_id = $_SESSION['user_id'];
// echo $_user_id;
// exit();

$_select = "SELECT name , profile_img   from submit_form_table WHERE id ='$_user_id'";
$_query = mysqli_query($_connect, $_select);
$_fetch = mysqli_fetch_assoc($_query);
// print_r($_fetch);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Finance</title>

    <link rel="icon" href="img/favicon.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="css/themify-icons.css" />

    <!-- select2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="css/nice-select.css" />

    <!-- gijgo css -->
    <link rel="stylesheet" href="css/gijgo.min.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/tagsinput.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- text editor css -->
    <link rel="stylesheet" href="css/summernote-bs4.css" />
    <!-- morris css -->
    <link rel="stylesheet" href="css/morris.css">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="css/material-icons.css" />

    <!-- menu css  -->
    <link rel="stylesheet" href="css/metisMenu.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" />

</head>

<body class="crm_body_bg" style="background-color: #CEE3F5;">


    <!-- sidebar part here -->
    <nav class="sidebar" style="background: #49596d;">
        <div class="logo d-flex justify-content-between">
            <a href="index.html"><img src="../img/logo_6055bcd524c62.png" alt=""></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class="">
                <a href="#" class="" style=" color:#fff" aria-expanded="false">
                    <!-- <i class="fas fa-th"></i> -->
                    <i class="fas fa-columns"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="">
                <a href="#" class="" style=" color:#fff" aria-expanded="false">
                    <i class="fas fa-columns"></i>
                    <span>Banner</span>
                </a>
                <ul>
                    <li><a class="active" style="color: #fff;" href="./add_banner.php">Add Banner Items</a></li>
                    <li><a class="text-white" href="./all_banner.php">All Banner Items</a></li>
                </ul>

            </li>


            <li class="">
                <a href="#" class="" style=" color:#fff" aria-expanded="false">
                    <i class="fas fa-columns"></i>
                    <span>Services</span>
                </a>
                <ul>
                    <li><a class="active text-white" href="./add_services.php">Add services Items</a></li>
                    <li><a class="text-white" href="./all_services.php">All services Items</a></li>
                </ul>

            </li>

            <li class="">
                <a href="#" class="" style=" color:#fff" aria-expanded="false">
                    <i class="fas fa-columns"></i>
                    <span>Why US</span>
                </a>
                <ul>
                    <li><a class="active text-white" href="./add_why_us.php">Add Why Us Items</a></li>
                    <li><a class="text-white" href="./all_why_us.php">All Why Us Items</a></li>
                </ul>

            </li>

        </ul>

    </nav>
    <!-- sidebar part end -->


    <!--/ sidebar  -->


    <section class="main_content dashboard_part">
        <!-- menu  -->
        <div class="container-fluid no-gutters">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="header_iner d-flex justify-content-between align-items-center" style="background: #49596d;">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area">
                            <div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search here...">
                                    </div>
                                    <button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
                                </form>
                            </div>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="header_notification_warp d-flex align-items-center">
                                <li>
                                    <a href="#"> <img src="img/icon/bell.svg" alt=""> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="img/icon/msg.svg" alt=""> </a>
                                </li>
                            </div>
                            <div class="profile_info">
                                <img src="./img/<?= $_fetch['profile_img'] ?>" alt="User_images">
                                <div class="profile_info_iner">
                                    <p>Welcome Admin!</p>
                                    <h5><?= $_fetch['name'] ?></h5>
                                    <div class="profile_info_details">
                                        <a href="#">My Profile <i class="ti-user"></i></a>
                                        <a href="#">Settings <i class="ti-settings"></i></a>
                                        <a href="../../login/logout.php">Log Out <i class="ti-shift-left"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ menu  -->



        <?php


        unset($_SESSION['error_title']);
        unset($_SESSION['error_detail']);
        unset($_SESSION['error_button_text']);
        unset($_SESSION['error_button_link']);

        ?>