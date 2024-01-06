<?php
include '../model/list_menu.php';
include '../model/list_category.php';
include '../model/list_product.php';
include '../model/donhang.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../view/css/style.css" />
    <script src="../view/js/content.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

</head>

<body>

    <!-- Header -->
    <section class="working-hour">
        <div>
            Working hours: Monday to Sunday - 8:00 a.m. to 7:00 p.m
        </div>
    </section>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="header-item item-left">
                    <div class="menu-button">
                        <button class="menu-mobile" id="star-menu-mobile" onclick="menuButton()">
                            <span><i class="bi bi-list"></i></span>
                        </button>
                    </div>
                    <div class="logo">
                        <a href="../index.php"><img src="../view/images/logo/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="header-item item-center">

                    <ul class="menu-main" id="id-menu-main">
                        <li class="mobile-menu-header">
                            <!-- <div class="go-back">
                                <i class="bi bi-caret-left-fill"></i>
                            </div>
                            <div class="current-menu-title"></div> -->
                            <div class="close-menu-mobile" id="close-menu-mobile" onclick="menuButton()">
                                <i class="bi bi-x-square-fill"></i>
                            </div>
                        </li>

                        <?php
                        $list_menumain = menuMain();
                        foreach ($list_menumain as $list_menumains) :
                        ?>
                            <li class="visible-menu">
                                <a href="index.php?act=<?php echo $list_menumains['name_link_menu'] ?>&menumain_id=<?php echo $list_menumains['menumain_id'] ?>" class="menu-main-item"><?php echo  $list_menumains['menumain_name']; ?></a>

                                <div class=" sub-menu sub-menu-column-5" id="open-submenu">

                                </div>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
                <div class="header-item item-right">
                    <div class="start-search" id="start-search" onclick="searchButton()">
                        <span><i class="bi bi-search"></i></span>
                    </div>
                    <div class="account">
                        <span><i class=" bi bi-person-circle"></i></span>
                        <div class="account-item">
                            <div class="box-account-item">

                                <?php
                                if (isset($_SESSION['tkuser'])) {
                                ?>
                                    <a href="index.php?act=taikhoan">Account</a>
                                    <a href="index.php?act=dangxuat">Log out</a>
                                <?php
                                } else {
                                ?>

                                    <a href="index.php?act=dangnhap">Log in</a>
                                    <a href="index.php?act=dangky">Register</a>
                                <?php
                                }
                                ?>


                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="index.php?act=cart"><i class="bi bi-cart"></i><span class="quantity-cart"><sub></sub></span></a>
                    </div>
                    <form action="" method="post">
                        <input type="hidden" name="quantity-cart" value="" id="quantity-cart">
                    </form>


                </div>
                <div class="container-search" id="id-search">
                    <div class="wrap-close-search">
                        <span class="close-search" id="close-search" onclick="searchButton()">
                            <i class="bi bi-x-circle"></i>
                        </span>
                    </div>
                    <div class="search">
                        <form action="">
                            <div class="search-wrapper">
                                <input type="text" name="" id="" placeholder="Search here...">
                                <span class="bi bi-search"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>