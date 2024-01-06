<?php
session_start();
function muahang($sotien, $id_sanpham, $user_id, $tenkhachhang, $sodienthoai, $diachi, $ghichu)
{

    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
    date_default_timezone_set('Asia/Ho_Chi_Minh');

    $vnp_TmnCode = "6P636W88"; //Mã định danh merchant kết nối (Terminal Id)
    $vnp_HashSecret = "TGJSBJPYODYFQZGDYFULFOIJQFDMYOOR"; //Secret key
    $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    $vnp_Returnurl = "http://localhost/doan_cs2/model/muahang.php?thaotac=ketquamuahang&id_sanpham=$id_sanpham&user_id=$user_id&giatien=$sotien&tenkhachhang=$tenkhachhang&sodienthoai=$sodienthoai&diachi=$diachi&ghichu=$ghichu";
    $vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
    $apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/api/transaction";
    $startTime = date("YmdHis");
    $expire = date('YmdHis', strtotime('+5 minutes', strtotime($startTime)));

    $vnp_TxnRef = rand(1, 10000); //Mã giao dịch thanh toán tham chiếu của merchant
    $vnp_Amount = (int)$sotien; // Số tiền thanh toán
    $vnp_Locale = "vn"; //Ngôn ngữ chuyển hướng thanh toán
    $vnp_BankCode = $_POST['bankCode']; //Mã phương thức thanh toán
    $vnp_IpAddr = $_SERVER['REMOTE_ADDR']; //IP Khách hàng thanh toán

    $inputData = array(
        "vnp_Version" => "2.1.0",
        "vnp_TmnCode" => $vnp_TmnCode,
        "vnp_Amount" => $vnp_Amount * 100,
        "vnp_Command" => "pay",
        "vnp_CreateDate" => date('YmdHis'),
        "vnp_CurrCode" => "VND",
        "vnp_IpAddr" => $vnp_IpAddr,
        "vnp_Locale" => $vnp_Locale,
        "vnp_OrderInfo" => "Thanh toan GD:" . $vnp_TxnRef,
        "vnp_OrderType" => "other",
        "vnp_ReturnUrl" => $vnp_Returnurl,
        "vnp_TxnRef" => $vnp_TxnRef,
        "vnp_ExpireDate" => $expire
    );

    if (isset($vnp_BankCode) && $vnp_BankCode != "") {
        $inputData['vnp_BankCode'] = $vnp_BankCode;
    }

    ksort($inputData);
    $query = "";
    $i = 0;
    $hashdata = "";
    foreach ($inputData as $key => $value) {
        if ($i == 1) {
            $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
        } else {
            $hashdata .= urlencode($key) . "=" . urlencode($value);
            $i = 1;
        }
        $query .= urlencode($key) . "=" . urlencode($value) . '&';
    }

    $vnp_Url = $vnp_Url . "?" . $query;
    if (isset($vnp_HashSecret)) {
        $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
        $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
    }
    header('Location: ' . $vnp_Url);
    die();
}


function doitien($sotien)
{
    $amount = (float)$sotien;
    $base_currency = 'USD';
    $target_currency = 'VND';

    // Tạo URL API
    $url = "https://api.exchangerate-api.com/v4/latest/{$base_currency}";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);

    if (isset($data['rates']) && isset($data['rates'][$target_currency])) {
        $exchange_rate = $data['rates'][$target_currency];

        $converted_amount = $amount * $exchange_rate;

        return $converted_amount;
    } else {
        echo "Đã xảy ra lỗi khi lấy tỷ giá chuyển đổi.";
    }
}



function insertDonHang($user_id, $product_id, $giatien, $tenkhachhang, $sodienthoai, $diachi, $ghichu)
{
    try {
        include("../db.php");
        $query = "INSERT INTO donhang (user_id, product_id, giatien,tenkhachhang,sodienthoai,diachi,ghichu) VALUES ($user_id,$product_id,$giatien,'$tenkhachhang','$sodienthoai','$diachi','$ghichu');";
        $statement = $db->prepare($query);
        $statement->execute();
        $product_details = $statement->fetchAll();
        $statement->closeCursor();
        return $product_details;
    } catch (\Throwable $th) {
        //throw $th;
    }
}

$xuly = $_REQUEST['thaotac'];
if ($xuly == "muahang") {

    $tenkhachhang = $_POST['tenkhachhang'];
    $sodienthoai = $_POST['sodienthoai'];
    $diachi = $_POST['diachi'];
    $sonha = $_POST['sonha'];
    $ghichu = $_POST['ghichu'];

    $diachi = $diachi . " " . $sonha;

    $giatien = $_REQUEST['giatien'];
    $giatien = doitien($giatien);
    $giatien = round((float)$giatien);
    $giatien = (string)$giatien;
    $id_sanpham = $_GET['id_sanpham'];
    muahang(
        $giatien,
        $id_sanpham,
        $_SESSION['tkuser']['user_id'],
        $tenkhachhang,
        $sodienthoai,
        $diachi,
        $ghichu
    );
} elseif ($xuly == "ketquamuahang") {
    $vnp_TmnCode = "6P636W88"; //Mã định danh merchant kết nối (Terminal Id)
    $vnp_HashSecret = "TGJSBJPYODYFQZGDYFULFOIJQFDMYOOR"; //Secret key
    $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    $vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
    $apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/api/transaction";
    $startTime = date("YmdHis");
    $expire = date('YmdHis', strtotime('+5 minutes', strtotime($startTime)));
    $vnp_SecureHash = $_GET['vnp_SecureHash'];
    $inputData = array();
    foreach ($_GET as $key => $value) {
        if (substr($key, 0, 4) == "vnp_") {
            $inputData[$key] = $value;
        }
    }

    unset($inputData['vnp_SecureHash']);
    ksort($inputData);
    $i = 0;
    $hashData = "";
    foreach ($inputData as $key => $value) {
        if ($i == 1) {
            $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
        } else {
            $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
            $i = 1;
        }
    }

    $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
    // echo $_GET['vnp_TxnRef'];
    // echo $_GET['vnp_Amount'];
    // echo $_GET['vnp_OrderInfo'];
    // echo $_GET['vnp_ResponseCode'];
    // echo $_GET['vnp_TransactionNo'];
    // echo $_GET['vnp_BankCode'];
    // echo $_GET['vnp_PayDate'];
    // echo $_GET['trade'];
    if ($secureHash == $vnp_SecureHash) {
        if ($_GET['vnp_ResponseCode'] == '00') {
            insertDonHang($_GET['user_id'], $_GET['id_sanpham'], $_GET['giatien'], $_GET['tenkhachhang'], $_GET['sodienthoai'], $_GET['diachi'], $_GET['ghichu']);
            echo "<script>
            alert('Đã thanh toán thành công!');
            window.location.href = '../controller/index.php';
           </script>";
        } else {
            echo "<script>
            alert('Thanh toán không thành công!');
            window.location.href = '../controller/index.php';
           </script>";
        }
    } else {
        echo "<script>
        alert('Thanh toán không hợp lệ');
        window.location.href = '../controller/index.php';
       </script>";
    };
}
