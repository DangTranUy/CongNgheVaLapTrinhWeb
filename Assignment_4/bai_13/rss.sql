-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 01, 2023 lúc 11:48 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `rss`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `link`, `description`) VALUES
(1, 'Bài 1: Làm quen với môi trường phát triển ứng dụng PHP', 'http://hocweb.com.vn/bai-1-lam-quen-voi-moi-truong-phat-trien-ung-dung-php/', 'Mục đích: Cách sử dụng môi trường phát triển ứng dụng PHP Cài đặt và sử dụng Web Server (Xampp) Tạo và tổ chức cây thư mục trên PHPDesigner 8 Làm quen với đối tượng Form Thực hiện các thao tác: tạo, xoá trang Viết chương trình và thực thi một trang'),
(2, 'Bài 1. Xuất câu chào xử lý trên form PHP (tt)', 'http://hocweb.com.vn/bai-1-xuat-cau-chaoxu-ly-tren-form-php-tt/', 'Phần 2. Xử lý trên form PHP Tiếp tục bài 1. Ta thử nghiệm đoạn code cơ bản đầu tiên của các ngôn ngữ lập trình. Theo các bạn đó là gì nào? Đó là đoạn code nhập vào họ tên và xuất họ tên ra ngoài màn hình.'),
(3, 'Bài 2: Sử dụng hàm if trong PHP để giải phương trình bậc 1 (p1)', 'http://hocweb.com.vn/bai-2-su-dung-ham-if-de-giai-phuong-trinh-bac-1-trong-php/', 'Hôm nay hocweb.com.vn tiếp tục giới thiệu cho các bạn về hàm IF trong PHP. Tham khảo thêm từ nguồn http://www.php.net/manual/en/control-structures.if.php Cú pháp như sau: if( điều kiện) { lệnh 1; } '),
(4, 'Bài 2: Sử dụng lệnh switch case để làm bài tập chuyển số thành chữ (p2)', 'http://hocweb.com.vn/bai-2-su-dung-lenh-switch-case-de-lam-bai-tap-chuyen-thanh-chu-p2/', 'Hôm trước chúng ta đã tìm hiểu các lệnh if thông qua bài tập giải phương trình bậc 1, hôm nay Học web tiếp tục giới thiệu các bạn lệnh switch case để giải bài tập chuyển số thành chữ.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
