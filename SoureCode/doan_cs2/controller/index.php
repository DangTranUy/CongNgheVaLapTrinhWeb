    <?php
    ob_start();
    session_start();
    include '../model/account.php';
    include '../view/header.php';

    //controller

    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'customer-support':
                include '../view/contact.php';
                break;
            case 'brand':
            case 'sport':
            case 'accessories':
            case 'new-arrival':
            case 'special-offers':
            case 'page';
                include '../view/shopProducts.php';
                break;
            case 'Adidas':
            case 'Converse':
            case 'Fila':
            case 'Jordan':
            case 'MLB':
            case 'New-Balance':
            case 'Nike':
            case 'Peak':
            case 'Puma':
            case 'Reebok':
            case 'Vans':
            case 'Basketball':
            case 'Running':
            case 'Training':
            case 'Balo':
            case 'Hat':
            case 'Glasses':
            case 'Socks':
                include '../view/shopProducts2.php';
                break;
            case 'productDetails':
                include '../view/productDetails.php';
                break;

            case 'cart':
                include '../view/cart.php';
                break;

            case 'pay2':
                include '../view/pay2.php';
                break;
            case 'payment':
                include '../view/pay.php';
                break;

            case 'dangky':
                if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                    $username2 = $_POST['username'];
                    $email2 = $_POST['email'];
                    $password2 = $_POST['password'];

                    insert_taikhoan($username2, $email2, $password2);
                    $thongbao = "Registered successfully. Please log in to experience the website better";
                }
                include '../view/signUp.php';
                break;

            case 'dangnhap':
                if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                    $username2 = $_POST['username'];
                    $password2 = $_POST['password'];
                    $checktk = check_tkdangnhap($username2, $password2);
                    $role = $checktk['role'];
                    if (is_array($checktk) && $role == 0) {
                        // Gán thông tin tài khoản cho session
                        $_SESSION['tkuser'] = $checktk;
                        header('Location: index.php?act=taikhoan');
                    } else if (is_array($checktk) && $role == 1) {
                        $_SESSION['tkuser'] = $checktk;
                        header('Location: ./indexAdmin.php');
                    } else {
                        $thongbao = "Account does not exist!";
                    }
                }
                include '../view/signIn.php';
                break;

            case 'taikhoan':
                include '../view/accountCustomer.php';
                break;
            case 'dangxuat':
            case 'dangxuatadmin':

                session_destroy();
                header('Location: index.php');
                break;

            default:
                include '../view/homePage.php';
                break;
        }
    } else {
        include '../view/homePage.php';
    }



    include '../view/footer.php';
    ob_end_flush();
    ?>
