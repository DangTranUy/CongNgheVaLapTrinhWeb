<?php
//nhúng thư viện
require "PHPMailer-master/src/PHPMailer.php";
require "PHPMailer-master/src/SMTP.php";
require 'PHPMailer-master/src/Exception.php';
$mail = new PHPMailer\PHPMailer\PHPMailer(true);  //true: enables exceptions
try {
    // $mail->SMTPDebug = 2;  // 0,1,2: chế độ debug. khi mọi cấu hình đều tớt thì chỉnh lại 0 nhé
    $mail->isSMTP();
    $mail->CharSet  = "utf-8";
    $mail->Host = 'smtp.gmail.com';  //SMTP servers
    $mail->SMTPAuth = true; // Enable authentication
    $nguoigui = 'uydt.22it@vku.udn.vn'; //SMTP Username: địa chỉ google mail của bạn
    $matkhau = 'o f s w z u b y z x m x a z q g'; // SMTP Password: mật khẩu ứng dụng 
    $tennguoigui = 'ĐẶNG TRẦN UY';
    $mail->Username = $nguoigui; // SMTP username
    $mail->Password = $matkhau;   // SMTP password
    $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL (nếu tls --> 587)
    $mail->Port = 465;  // port to connect to                
    $mail->setFrom($nguoigui, $tennguoigui);
    $to = "tranuydang1004@gmail.com";
    $to_name = "Uy Đặng";

    $mail->addAddress($to, $to_name); //mail và tên người nhận

    $mail->isHTML(true);  // Set email format to HTML
    $mail->Subject = 'Gửi thư từ php';
    $noidungthu = "<b>Chào bạn toi la uydt.22it@vku.udn.vn!</b><br>ABC1!";
    $mail->Body = $noidungthu;
    // $mail->AddAttachment("4.jpg","picture");
    $mail->smtpConnect(array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
            "allow_self_signed" => true
        )
    ));
    $mail->send();
    echo 'Đã gửi mail xong';
} catch (Exception $e) {
    echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
}
