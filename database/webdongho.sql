-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2019 at 04:11 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdongho`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `IdAdmin` int(156) NOT NULL,
  `NameAdmin` varchar(156) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(156) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pass` varchar(156) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(156) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(156) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`IdAdmin`, `NameAdmin`, `Email`, `Pass`, `Address`, `Phone`) VALUES
(1, 'admin', '', '123456', '', ''),
(2, 'bay', '', '1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bill`
--

CREATE TABLE `tbl_bill` (
  `IdBill` int(156) NOT NULL,
  `IdCustomer` int(156) DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` int(15) NOT NULL,
  `tongTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_bill`
--

INSERT INTO `tbl_bill` (`IdBill`, `IdCustomer`, `Email`, `Date_time`, `Address`, `Phone`, `tongTien`) VALUES
(38, 1, 'nguyenvanbay.no1@gmail.com', '2019-03-12 15:03:44', 'Hanoi, Hoàn Kiếm, Hanoi, Vietnam', 962199791, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bill_detail`
--

CREATE TABLE `tbl_bill_detail` (
  `Id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_bill_detail`
--

INSERT INTO `tbl_bill_detail` (`Id`, `bill_id`, `product_id`, `soLuong`) VALUES
(1, 38, 75, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `IdCustomer` int(156) NOT NULL,
  `NameCustomer` varchar(156) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pass` varchar(156) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`IdCustomer`, `NameCustomer`, `Pass`) VALUES
(1, 'bay', '1'),
(2, 'tam', '123456'),
(3, 'chin', '123456'),
(4, 'muoi', '10101997'),
(5, 'admin', 'abc'),
(8, 'bay', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news_detail`
--

CREATE TABLE `tbl_news_detail` (
  `IdNews` int(156) NOT NULL,
  `Title` varchar(156) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Content` varchar(156) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdNewsGroup` int(156) NOT NULL,
  `Image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_news_detail`
--

INSERT INTO `tbl_news_detail` (`IdNews`, `Title`, `Content`, `Description`, `IdNewsGroup`, `Image`) VALUES
(17, 'Chuyên gia nói gì về đề xuất cấm xe máy trên đường Nguyễn Trãi, Lê Văn Lương?', 'Các chuyên gia giao thông vừa có chia sẻ liên quan đến đề xuất thí điểm cấm xe máy trên tuyến đường Lê Văn Lương hoặc đường Nguyễn Trãi.', '<p>Mới đ&acirc;y, &ocirc;ng Vũ Văn Viện, Gi&aacute;m đốc Sở GTVT H&agrave; Nội cho biết, Sở GTVT đang phối hợp với Viện Chiến lược của Bộ GTVT, nghi&ecirc;n cứu x&acirc;y dựng đề &aacute;n quản l&yacute; phương tiện giao th&ocirc;ng, trong đ&oacute;, dự kiến phương &aacute;n sẽ chọn một trong 2 tuyến đường: L&ecirc; Văn Lương hoặc Nguyễn Tr&atilde;i để th&iacute; điểm cấm xe m&aacute;y. Lộ tr&igrave;nh chung của đề &aacute;n l&agrave; từ năm 2030 nhưng một trong hai tuyến đường n&agrave;y sẽ được thực hiện sớm hơn từ 2 đến 3 năm.</p>\r\n\r\n<p><strong>Cấm đường sẽ g&acirc;y &aacute;p lực đường kh&aacute;c, th&ecirc;m &ugrave;n tắc giao th&ocirc;ng</strong></p>\r\n\r\n<p>Tiến sĩ Nguyễn Xu&acirc;n Thủy, người c&oacute; hơn 30 năm nghi&ecirc;n cứu về giao th&ocirc;ng đ&ocirc; thị H&agrave; Nội cho rằng, việc cấm xe m&aacute;y tr&ecirc;n tuyến đường L&ecirc; Văn Lương hoặc Nguyễn Tr&atilde;i l&agrave; việc l&agrave;m kh&ocirc;ng khả thi, kh&ocirc;ng được người d&acirc;n hưởng ứng kể cả trong 10 năm nữa.</p>\r\n\r\n<p>&Ocirc;ng cho biết, xe m&aacute;y chỉ chiếm mặt đường khoảng 1/5 so với &ocirc; t&ocirc;, lượng thải ra cũng &iacute;t hơn so với &ocirc; t&ocirc;. Ch&iacute;nh v&igrave; vậy, một số &yacute; kiến của cơ quan quản l&yacute; n&oacute;i rằng xe m&aacute;y l&agrave; nguy&ecirc;n nh&acirc;n g&acirc;y &ugrave;n tắc giao th&ocirc;ng, tai nạn l&agrave; ho&agrave;n to&agrave;n kh&ocirc;ng đ&uacute;ng.</p>\r\n\r\n<p><img alt=\"Chuyên gia nói gì về đề xuất cấm xe máy trên đường Nguyễn Trãi, Lê Văn Lương? - 2\" src=\"https://cdn.24h.com.vn/upload/1-2019/images/2019-03-12/1552373872-633-53491986_535985883558944_1398482402875015168_n-1552371621-width700height463.jpg\" /></p>\r\n\r\n<p>Tiến sĩ Nguyễn Xu&acirc;n Thủy. Ảnh: Ho&agrave;ng Lực</p>\r\n\r\n<p>&ldquo;Hiện nay c&oacute; tới gần 90% người d&acirc;n sử dụng phương tiện xe m&aacute;y để đi lại, bu&ocirc;n b&aacute;n mưu sinh. Trong khi đ&oacute;, giao th&ocirc;ng c&ocirc;ng cộng hiện nay mới chỉ đ&aacute;p ứng được 10%, năng lực phục vụ chưa tốt. Vậy nếu cấm xe m&aacute;y người d&acirc;n sẽ đi bằng g&igrave;. Th&ecirc;m nữa, cấm tuyến đường n&agrave;y người d&acirc;n sẽ luồn l&aacute;ch đi tuyến đường kh&aacute;c g&acirc;y &aacute;p lực giao th&ocirc;ng, th&ecirc;m &ugrave;n tắc giao th&ocirc;ng&rdquo;, &ocirc;ng Thủy n&oacute;i.</p>\r\n\r\n<p>Vị chuy&ecirc;n gia giao th&ocirc;ng n&agrave;y cho biết th&ecirc;m, hiện nay phương tiện xe m&aacute;y rất thuận lợi, c&oacute; tốc độ, &iacute;t g&acirc;y &ocirc; nhiễm, cơ động, đi được ng&otilde; ng&aacute;ch v&agrave; đặc biệt ph&ugrave; hợp với người ngh&egrave;o. &ldquo;Trong điều kiện vận tải c&ocirc;ng cộng chưa đ&aacute;p ứng, yếu k&eacute;m, đường chưa th&ocirc;ng, h&egrave; chưa tho&aacute;ng th&igrave; xe m&aacute;y l&agrave; phương tiện hiệu quả trong việc giải quyết hạ tầng giao th&ocirc;ng&rdquo;, &ocirc;ng Thủy b&agrave;y tỏ quan điểm.</p>\r\n\r\n<p>TS. Đinh Thị Thanh B&igrave;nh, nguy&ecirc;n Viện trưởng Viện Quy hoạch v&agrave; Quản l&yacute; GTVT cho hay, hiện nay, tr&ecirc;n tuyến đường Nguyễn Tr&atilde;i, L&ecirc; Văn Lương c&oacute; nhiều nh&agrave; cao tầng,&nbsp;mật độ d&acirc;n cư, phương tiện đ&ocirc;ng.</p>\r\n\r\n<p>Trong khi đ&oacute;, tuyến đường Nguyễn Tr&atilde;i mới chỉ c&oacute; một tuyến đường sắt C&aacute;t Linh- H&agrave; Đ&ocirc;ng. Trong trường hợp cấm tuyến đường n&agrave;y b&agrave; B&igrave;nh cho rằng số lượng người d&acirc;n đi từ điểm đầu đến điểm cuối tuyến đường sắt chỉ chiếm khoảng 30%.</p>\r\n\r\n<p>Số c&ograve;n lại 70% người d&acirc;n chỉ đi một đoạn tr&ecirc;n tuyến đường sắt C&aacute;t Linh- H&agrave; Đ&ocirc;ng v&agrave; sau đ&oacute; phải sử dụng xe bu&yacute;t để tiếp tục di chuyển đến nơi cần đến. Tương tự, tuyến đường L&ecirc; Văn Lương cũng mới chỉ c&oacute; phương tiện BRT, chưa c&oacute; tuyến đường sắt.</p>\r\n\r\n<p>&ldquo;Nếu như phương tiện giao th&ocirc;ng c&ocirc;ng cộng kh&ocirc;ng được tăng cường th&ecirc;m, cải thiện th&igrave; kh&ocirc;ng đ&aacute;p ứng được nhu cầu người d&acirc;n hoặc g&acirc;y kh&oacute; khăn th&igrave; họ sẽ lại chọn phương tiện xe m&aacute;y để di chuyển. Nhiều người tr&aacute;nh đường cấm sẽ đi v&agrave;o ng&otilde; ng&aacute;ch hoặc c&aacute;c tuyến đường song song với trục sẽ g&acirc;y th&ecirc;m &aacute;p lực giao th&ocirc;ng, &ugrave;n tắc xảy ra&rdquo;, b&agrave; B&igrave;nh ph&acirc;n t&iacute;ch.</p>\r\n\r\n<p><strong>Giao th&ocirc;ng c&ocirc;ng cộng thuận lợi, người d&acirc;n sẽ tự từ bỏ đi xe m&aacute;y</strong></p>\r\n\r\n<p><img alt=\"Chuyên gia nói gì về đề xuất cấm xe máy trên đường Nguyễn Trãi, Lê Văn Lương? - 3\" src=\"https://cdn.24h.com.vn/upload/1-2019/images/2019-03-12/1552373872-104-ha-noi-cam-duong-nguyen-trai-le-van-luong-khong-kha-thi-cang-them-tac-duong-3-1552371858-width960height720.jpg\" /></p>\r\n\r\n<p>Đường L&ecirc; Văn Lương d&agrave;y đặc nh&agrave; cao tầng</p>\r\n\r\n<p>&Ocirc;ng Phạm Văn Thịnh (50 tuổi) ở phường Mộ Lao, quận H&agrave; Đ&ocirc;ng&nbsp;cũng lo ngại, hiện nay hệ thống giao th&ocirc;ng c&ocirc;ng cộng&nbsp;kh&ocirc;ng bảo đảm, l&agrave;m như vậy sẽ g&acirc;y kh&oacute; khăn lớn cho người d&acirc;n. &Ocirc;ng Thịnh n&oacute;i: &ldquo;Ngo&agrave;i việc d&ugrave;ng xe m&aacute;y đi l&agrave;m ch&uacute;ng t&ocirc;i c&ograve;n sử dụng xe m&aacute;y đi chợ, chở h&agrave;ng, đưa đ&oacute;n trẻ con đến trường, học th&ecirc;m. Nếu cấm đường ch&uacute;ng t&ocirc;i sẽ gặp kh&oacute; khăn, kh&ocirc;ng phải ai cũng c&oacute; điều kiện đưa đ&oacute;n con bằng taxi, hoặc c&oacute; &ocirc; t&ocirc; ri&ecirc;ng&rdquo;.</p>\r\n\r\n<p>Tiến sĩ B&igrave;nh cho rằng, cơ quan chức năng trước mắt chỉ n&ecirc;n khuyến kh&iacute;ch người d&acirc;n đi phương tiện c&ocirc;ng cộng, kh&ocirc;ng n&ecirc;n cấm ho&agrave;n to&agrave;n xe m&aacute;y. Trường hợp đối với c&aacute;c tuyến phố cấm, cơ quan chức năng cần phải ph&acirc;n luồng cho xe m&aacute;y đi v&agrave;o đường tr&aacute;nh, v&ograve;ng, hoặc tuyến đường chạy song song.</p>\r\n\r\n<p>Ngo&agrave;i ra, phải tăng cường phương tiện giao th&ocirc;ng c&ocirc;ng cộng, n&acirc;ng cao năng lực phục vụ đối với xe bu&yacute;t tr&ecirc;n h&agrave;nh lang của c&aacute;c tuyến c&ograve;n lại. Nếu H&agrave; Nội muốn cấm phương tiện c&aacute; nh&acirc;n giao th&ocirc;ng c&ocirc;ng cộng phải đạt được &iacute;t nhất 40% nhu cầu đi lại của nh&acirc;n d&acirc;n.</p>\r\n\r\n<p>Tiến sĩ Nguyễn Xu&acirc;n Thủy cũng cho rằng, H&agrave; Nội cần thực hiện dần dần, theo lộ tr&igrave;nh từng bước, trước mắt phải x&oacute;a bỏ c&aacute;c điểm đen giao th&ocirc;ng (32 điểm), x&acirc;y dựng th&ecirc;m c&aacute;c tuyến đường sắt tr&ecirc;n cao, cầu vượt, mở rộng đường cửa ng&otilde; v&agrave;o Thủ đ&ocirc;.</p>\r\n\r\n<p>Ph&aacute;t triển giao th&ocirc;ng c&ocirc;ng cộng th&agrave;nh mạng lưới giao th&ocirc;ng kết nối, kh&ocirc;ng x&acirc;y dựng đường độc đạo. Tại c&aacute;c con ng&otilde;, phải x&acirc;y dựng được c&aacute;c phương tiện xe đạp hoặc c&aacute;c b&atilde;i gửi xe. Song song với đ&oacute;, sẽ nghi&ecirc;n cứu hạn chế phương tiện &ocirc; t&ocirc; v&agrave;o c&aacute;c tuyến phố hẹp, trung t&acirc;m theo ng&agrave;y chẵn, lẻ.</p>\r\n\r\n<p>&ldquo;Khi giao th&ocirc;ng c&ocirc;ng cộng tốt l&ecirc;n, đ&aacute;p ứng được nhu cầu của người d&acirc;n th&igrave; tự họ sẽ thay đổi th&oacute;i quen bỏ phương tiện c&aacute; nh&acirc;n. L&uacute;c đ&oacute;, kh&ocirc;ng cần cấm phương tiện c&aacute; nh&acirc;n họ cũng sẽ từ bỏ&rdquo;, &ocirc;ng Thủy n&oacute;i.</p>\r\n', 3, 'aa_zing.jpg'),
(18, 'Tổng Kiểm toán Nhà nước thông tin ', 'Tại phiên họp Ủy ban Thường vụ Quốc hội ngày 11/3, Tổng KTNN Hồ Ðức Phớc lý giải vụ việc “10 vụ kiện cơ quan thuế thua cả 10” và “kết luận kiểm toán hai lần', '<p>Tổng KTNN Hồ Đức Phớc cho biết, đ&atilde; y&ecirc;u cầu c&aacute;n bộ tới l&agrave;m việc cụ thể với Tổng Cục thuế. Trong tổng số 13 vụ kiện m&agrave; Bộ trưởng&nbsp;<a href=\"https://www.24h.com.vn/tai-chinh-bat-dong-san-c161.html\" title=\"Tài chính\">T&agrave;i ch&iacute;nh</a>&nbsp;phản &aacute;nh, theo &ocirc;ng Hồ Đức Phớc, c&oacute; một vụ kiện Cục thuế TP HCM nhưng To&agrave; &aacute;n đ&atilde; b&aacute;c đơn v&agrave; giữ nguy&ecirc;n kết luận kiểm to&aacute;n. Vụ thứ hai, doanh nghiệp kiện Cục Thuế tỉnh Thanh Ho&aacute;, nhưng ở đ&acirc;y l&agrave; kiện thanh tra thuế chứ kh&ocirc;ng phải kiểm to&aacute;n.</p>\r\n\r\n<p>&ldquo;11 vụ c&ograve;n lại, KTNN thực hiện kiểm to&aacute;n tại cơ quan thuế chứ kh&ocirc;ng trực tiếp đối chiếu với doanh nghiệp. Kiểm to&aacute;n chỉ kiến nghị cơ quan thuế kiểm tra l&agrave;m r&otilde; v&agrave; xử l&yacute;. Nghĩa l&agrave; c&aacute;c bằng chứng của kiểm to&aacute;n kh&ocirc;ng phải từ doanh nghiệp n&ecirc;n n&oacute;i kết luận kiểm to&aacute;n sai khiến doanh nghiệp kiện l&agrave; ho&agrave;n to&agrave;n kh&ocirc;ng đ&uacute;ng&rdquo;, Tổng KTNN phản biện.</p>\r\n\r\n<p><img alt=\"Tổng Kiểm toán Nhà nước thông tin &quot;10 vụ kiện cơ quan thuế thua cả 10&quot; - 1\" src=\"https://cdn.24h.com.vn/upload/1-2019/images/2019-03-12/Tong-Kiem-toan-Nha-nuoc-thong-tin-1-1552353020-139-width660height439.jpg\" /></p>\r\n\r\n<p>D&acirc;y chuyền sản xuất bia chai S&agrave;i G&ograve;n - Sabeco. &nbsp;Ảnh: H.A</p>\r\n\r\n<p>Ri&ecirc;ng đối với vụ kết luận &ldquo;kiểm to&aacute;n hai lần ra hai số kh&aacute;c nhau&rdquo;, &ocirc;ng Hồ Đức Phớc l&yacute; giải: Tại Unilever, kết luận đầu ti&ecirc;n KTNN đề nghị truy thu 882 tỷ đồng tr&ecirc;n cơ sở kiểm tra hồ sơ tại cơ quan thuế. Sau đ&oacute; l&agrave;m việc với doanh nghiệp th&igrave; Unilever kh&ocirc;ng cung cấp được bằng chứng v&agrave; uỷ quyền cho c&ocirc;ng ty kiểm to&aacute;n kh&aacute;c tư vấn về thuế. Tại cuộc l&agrave;m việc cuối c&ugrave;ng, doanh nghiệp đồng &yacute; nộp 316 tỷ đồng, số c&ograve;n lại đang tiếp tục l&agrave;m r&otilde;. &ldquo;N&oacute;i như vậy để thấy kết luận của kiểm to&aacute;n phải t&acirc;m phục khẩu phục v&agrave; minh bạch&rdquo;, &ocirc;ng Phớc nhấn mạnh.</p>\r\n\r\n<p>Đối với vụ truy thu thuế Sabeco, theo Tổng kiểm to&aacute;n, từ khi ph&aacute;t hiện chuyển gi&aacute; của doanh nghiệp n&agrave;y, KTNN đ&atilde; kiến nghị v&agrave; phối hợp với Thanh tra Ch&iacute;nh phủ kiến nghị nộp 4.700 tỷ đồng v&agrave; doanh nghiệp đ&atilde; nộp v&agrave;o ng&acirc;n s&aacute;ch đầy đủ. Số c&ograve;n lại l&agrave; số phạt chậm nộp v&agrave; khoản n&agrave;y hiện c&ograve;n bị &ldquo;treo&rdquo; lại do Ch&iacute;nh phủ chưa trả lời. &ldquo;KTNN kết luận đ&uacute;ng v&agrave; đầy đủ bằng chứng tại thời điểm kiểm to&aacute;n chứ kh&ocirc;ng c&oacute; g&igrave; sai&rdquo;, &ocirc;ng Phớc khẳng định.</p>\r\n', 3, 'Tong-Kiem-toan-Nha-nuoc-thong-tin-1-1552353020-139-width660height439.jpg'),
(19, 'U23 Việt Nam ', 'HLV Park Hang Seo thể hiện sự ân cần, chăm chút nhưng cũng rất nghiêm khắc trong buổi tập ', '<p>Trở về đội tuyển sau khi nhận giải fair-play tại TP.HCM tối qua, HLV&nbsp;<a href=\"https://www.24h.com.vn/hlv-park-hang-seo-c48e5068.html\" title=\"Park Hang Seo\">Park Hang Seo</a>&nbsp;c&ugrave;ng c&aacute;c học tr&ograve; bước ra s&acirc;n tập s&aacute;ng nay trong tiết trời m&aacute;t mẻ, c&oacute; nắng nhẹ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>U23 Việt Nam tập s&aacute;ng 12/3 trong điều kiện thời tiết thuận lợi</p>\r\n\r\n<p>D&ugrave; vậy, bầu kh&ocirc;ng kh&iacute; của&nbsp;<a href=\"https://www.24h.com.vn/u23-viet-nam-c48e3423.html\" title=\"U23 Việt Nam\">U23 Việt Nam</a>&nbsp;sớm trở n&ecirc;n &quot;n&oacute;ng&quot; hơn bao giờ hết khi ngay sau m&agrave;n khởi động chạy chậm, c&aacute;c cầu thủ đ&atilde; phải &quot;nếm m&ugrave;i đau khổ&quot; với b&agrave;i tập thể lực.</p>\r\n\r\n<p>To&agrave;n bộ phần tập thể lực của c&aacute;c cầu thủ U23 Việt Nam được kết hợp với d&acirc;y chun. Những động t&aacute;c k&eacute;o h&ocirc;ng, đ&ugrave;i, vai... của hai cầu thủ với nhau khiến tất cả phải mướt mồ h&ocirc;i v&igrave; động t&aacute;c kh&oacute; v&agrave; đ&ograve;i hỏi nhiều về sức mạnh. B&agrave;i tập thể lực c&oacute; nhiều động t&aacute;c kh&oacute; v&agrave; c&aacute;c trợ l&yacute; của thầy Park li&ecirc;n tục phải sửa tư thế cho cầu thủ như động t&aacute;c vừa chống đẩy, vừa k&eacute;o d&acirc;y chun...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>HLV Park Hang Seo đ&iacute;ch th&acirc;n gi&aacute;m s&aacute;t buổi tập thể lực của c&aacute;c tuyển thủ</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trước b&agrave;i tập kh&oacute;, đ&iacute;ch th&acirc;n HLV Park Hang Seo đ&atilde; hướng dẫn c&aacute;c cầu thủ. &Ocirc;ng thầy người H&agrave;n Quốc kh&ocirc;ng ngần ngại chỉnh sửa động t&aacute;c cho c&aacute;c học tr&ograve;.&nbsp;</p>\r\n\r\n<p>Kh&ocirc;ng chỉ &acirc;n cần, chăm ch&uacute;t, &ocirc;ng thầy 60 tuổi c&oacute; l&uacute;c c&ograve;n nổi c&aacute;u khi học tr&ograve; thực hiện sai động t&aacute;c qu&aacute; nhiều. HLV Park Hang Seo tỏ ra kh&aacute; sốt ruột khi thời gian chuẩn bị cho v&ograve;ng loại U23 ch&acirc;u &Aacute; 2020 kh&ocirc;ng c&ograve;n nhiều.</p>\r\n\r\n<p><em>Những h&igrave;nh ảnh của buổi tập s&aacute;ng 12/3</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 2, '20190312-u23-viet-nam-nem-mui-dau-kho-voi-bai-tap-the-luc-cua-thay-park-4.jpg'),
(20, 'MU thua Arsenal: Báo Anh tiếc cho De Gea, chuyên gia chỉ ra nguyên nhân', 'MU đã chơi không tồi khi làm khách của Arsenal ở vòng 30 giải Ngoại hạng Anh. Tiếc rằng đội bóng của HLV Ole Gunnar Solskjaer vẫn thất thủ 0-2 tại Emirates.', '<p><strong>Chuy&ecirc;n gia chỉ ra nguy&ecirc;n nh&acirc;n MU thất bại</strong></p>\r\n\r\n<p>V&agrave;i giờ sau trận đấu, tờ DailyMail (Anh) xuất bản th&ecirc;m một b&agrave;i phỏng vấn HLV Graeme Souness về thất bại của MU trước Arsenal. Trong đ&oacute;, Souness nhận định &ldquo;h&agrave;ng tiền vệ MU phải nhận lỗi về trận thua n&agrave;y&rdquo;. Cả 3 c&aacute;i t&ecirc;n đ&aacute; giữa của MU trận n&agrave;y l&agrave; Fred, Matic v&agrave; Pogba đều bị Souness b&igrave;nh luận &ldquo;đ&aacute; như hết hơi&rdquo;.</p>\r\n\r\n<p>&ldquo;H&atilde;y nh&igrave;n Matic ở t&igrave;nh huống mở tỉ số, cậu ta cần phải nhanh hơn. MU trận n&agrave;y kh&ocirc;ng giống với họ v&agrave;i tuần gần đ&acirc;y&rdquo;, Souness cho hay. Trong khi đ&oacute;, b&igrave;nh luận vi&ecirc;n Jamie Carragher chỉ cho rằng MU &ldquo;k&eacute;m may&rdquo; chứ kh&ocirc;ng c&oacute; &yacute; định đả k&iacute;ch cầu thủ n&agrave;o.</p>\r\n\r\n<p>Một b&agrave;i b&aacute;o ăn theo sự kiện kh&aacute;c cho hay, c&aacute;c CĐV Arsenal đ&atilde; chế ti&ecirc;u đề b&agrave;i h&aacute;t m&agrave; c&aacute;c&nbsp;<a href=\"https://www.24h.com.vn/manchester-united-c48e1521.html\" title=\"CĐV MU\">CĐV MU</a>d&agrave;nh cho Solskjaer để &aacute;p dụng cho HLV Emery. Cụ thể, &ldquo;Ole&rsquo;s at the wheel&rdquo; đ&atilde; được chuyển thể th&agrave;nh &ldquo;Unai&rsquo;s at the wheel&rdquo;. Trang Twitter của Arsenal sau đ&oacute; đ&atilde; đ&oacute;n nhận rất nhiều lượt tương t&aacute;c từ c&aacute;c fan sau khi đăng tấm h&igrave;nh HLV Emery mỉm cười k&egrave;m b&igrave;nh luận như tr&ecirc;n.</p>\r\n\r\n<p>Ở một diễn biến kh&aacute;c, trang Sky Sport c&oacute; hẳn một video ph&acirc;n t&iacute;ch t&igrave;nh huống để thua của De Gea với ti&ecirc;u đề &ldquo;Liệu De Gea c&oacute; thể l&agrave;m tốt hơn kh&ocirc;ng?&rdquo;. Đ&acirc;y l&agrave; t&igrave;nh huống m&agrave; thủ m&ocirc;n người T&acirc;y Ban Nha đ&atilde; mắc một phần lỗi, song phải thừa nhận c&uacute; đ&aacute; của Xhaka c&oacute; độ lượn qu&aacute; &ldquo;hiểm&rdquo;.</p>\r\n\r\n<p><strong>B&aacute;o Anh tiếc &quot;Quỷ đỏ&quot; tự thua Arsenal, b&aacute;o Ph&aacute;p hả h&ecirc;</strong></p>\r\n\r\n<p>Sau khi xuất sắc hạ gục PSG để lọt v&agrave;o tứ kết Champions League,&nbsp;<strong>MU</strong>&nbsp;trở về Anh l&agrave;m kh&aacute;ch của đại k&igrave;nh địch Arsenal ở v&ograve;ng 30 giải&nbsp;<a href=\"https://www.24h.com.vn/bong-da-ngoai-hang-anh-c149.html\" title=\"Ngoại hạng Anh\">Ngoại hạng Anh</a>. &ldquo;Quỷ đỏ&rdquo; đ&atilde; chơi rất cố gắng nhưng lại rất k&eacute;m may mắn khi b&oacute;ng 2 lần dội x&agrave; ngang v&agrave; cột dọc &ldquo;Ph&aacute;o thủ&rdquo; tr&ecirc;n s&acirc;n Emirates sau những c&uacute; dứt điểm hỏng ăn của Romelu Lukaku v&agrave; Fred.</p>\r\n\r\n<p>Pha s&uacute;t b&oacute;ng đập đất của Granit Xhaka ở ph&uacute;t 12 từ một t&igrave;nh huống đ&oacute;n b&oacute;ng c&oacute; lỗi lớn của David De Gea v&agrave; c&uacute; dứt điểm phạt đền th&agrave;nh c&ocirc;ng của Pierre-Emerick Aubameyang ph&uacute;t 69 từ t&igrave;nh huống đẩy người vụng về của Fred đ&atilde; mang về 3 điểm quan trọng v&agrave; vị tr&iacute; thứ tư tr&ecirc;n BXH Premier League sau v&ograve;ng 30 cho Arsenal.</p>\r\n\r\n<p>Nhận định về kết quả cuộc thư h&ugrave;ng ở Emirates vừa qua, tờ Daily Mail c&oacute; b&agrave;i viết với nhan đề &ldquo;Chuỗi bất bại tại giải quốc nội của thầy tr&ograve; Solskjaer cuối c&ugrave;ng cũng kết th&uacute;c khi United bị Arsenal n&eacute;m xuống Tr&aacute;i Đất để đoạt lại vị tr&iacute; thứ tư.&rdquo;</p>\r\n\r\n<p>Cũng tr&ecirc;n tờ n&agrave;y, b&igrave;nh luận vi&ecirc;n b&oacute;ng đ&aacute; Gary Neville (Sky Sports) &ndash; một cựu hậu vệ lừng danh của MU đ&atilde; c&oacute; những nhận định đ&aacute;ng ch&uacute; &yacute; khi cho rằng David De Gea đ&atilde; phải chịu &ldquo;qu&aacute; nhiều tiếng ồn b&ecirc;n tai&rdquo; khi cho rằng c&aacute;c cuộc đ&agrave;m ph&aacute;n tăng lương để gia hạn hợp đồng với&nbsp;<u>MU</u>&nbsp;đ&atilde; l&agrave; một phần nguy&ecirc;n nh&acirc;n khiến thủ m&ocirc;n người T&acirc;y Ban Nha mắc sai lầm tai hại khi kh&ocirc;ng cản ph&aacute; được c&uacute; s&uacute;t của Xhaka.</p>\r\n', 2, 'MU-guc-nga-Bao-Anh-tiec-thay-tro-Solskjaer-tu-thua-Arsenal-trach-2-toi-do-daily-mail-1552247861-327-width660height662.jpg'),
(21, 'Diễn biến mới nhất vụ Châu Việt Cường nhét tỏi vào mồm cô gái', 'iện kiểm sát nhân dân (VKSND) TP.Hà Nội vừa hoàn tất cáo trạng tuy tố Châu Việt Cường.', '<p>Cụ thể, bị can Nguyễn Việt Cường (SN 1978, t&ecirc;n gọi kh&aacute;c l&agrave;&nbsp;<a href=\"https://www.24h.com.vn/chau-viet-cuong-c51e5271.html\" title=\"Châu Việt Cường\">Ch&acirc;u Việt Cường</a>, thường tr&uacute; tại phường M&ocirc;ng Dương, TP.Cẩm Phả, Quảng Ninh) bị truy tố về tội &ldquo;Giết người&rdquo;.</p>\r\n\r\n<p>Trong vụ &aacute;n, một bị can kh&aacute;c l&agrave; Phạm Đức Thế (SN 1981, th&ocirc;n Ph&uacute; Hậu, x&atilde; Kh&aacute;nh Thiện, Y&ecirc;n Kh&aacute;nh, Ninh B&igrave;nh) bị VKSND TP.H&agrave; Nội truy tố tội &ldquo;T&agrave;ng trữ tr&aacute;i ph&eacute;p chất ma t&uacute;y&rdquo;.</p>\r\n\r\n<p>Theo c&aacute;o trạng, trong khoảng thời gian từ 24 giờ ng&agrave;y 4.3.2018 đến 10 giờ 30 ph&uacute;t ng&agrave;y 5.3.2018, Ch&acirc;u Việt Cường c&ugrave;ng Đo&agrave;n Qu&yacute; Nguy&ecirc;n (tức ca sỹ Nam Khang) đến nh&agrave; Thế đang thu&ecirc; tại căn hộ ở phố Nguyễn Văn Ngọc (phường Cống Vị, quận Ba Đ&igrave;nh, H&agrave; Nội) chơi.</p>\r\n\r\n<p>L&uacute;c n&agrave;y, Nguy&ecirc;n gọi điện thoại rủ th&ecirc;m bạn l&agrave; Đỗ Phượng Anh (SN 1995, thị trấn N&ocirc;ng trường Mộc Ch&acirc;u, Mộc Ch&acirc;u, tỉnh Sơn La) đến chơi c&ugrave;ng.</p>\r\n\r\n<p><img alt=\"Diễn biến mới nhất vụ Châu Việt Cường nhét tỏi vào mồm cô gái - 1\" src=\"https://cdn.24h.com.vn/upload/1-2019/images/2019-01-05/Dien-bien-moi-nhat-vu-Chau-Viet-Cuong-nhet-toi-vao-mom-co-gai-chau-viet-cuong-1546689408-737-width660height436.jpg\" /></p>\r\n\r\n<p>Ch&acirc;u Việt Cường v&igrave; sử dụng ma t&uacute;y đ&aacute; dẫn đến ảo gi&aacute;c, nam ca sĩ đ&atilde; g&acirc;y ra c&aacute;i chết cho một c&ocirc; g&aacute;i c&ugrave;ng nh&oacute;m.</p>\r\n\r\n<p>Khoảng 3 giờ c&ugrave;ng ng&agrave;y, chị Anh đi c&ugrave;ng bạn l&agrave; chị Trần Mỹ Huyền (SN 1998, tr&uacute; tại th&ocirc;n Đồi 1, x&atilde; Đ&ocirc;ng Phương Y&ecirc;n, Chương Mỹ, TP.H&agrave; Nội) đến nh&agrave; Thế.</p>\r\n\r\n<p>Tại đ&acirc;y, tất cả đ&atilde; 3 lần c&ugrave;ng nhau sử dụng ma t&uacute;y tổng hợp Ketamin, sau đ&oacute;, Nguy&ecirc;n đi về trước.</p>\r\n\r\n<p>Đến khoảng 8 giờ ng&agrave;y 5.3.2018, Cường v&agrave; chị Huyền bị ảo gi&aacute;c ma t&uacute;y dẫn tới kh&oacute;c l&oacute;c ngồi v&aacute;i lạy nhau. Cường nghĩ chị Huyền bị ma nhập n&ecirc;n chạy xuống s&acirc;n tập thể, bốc một vốc tỏi của chị Đ&agrave;o Thị Sợi (l&agrave; người b&aacute;n h&agrave;ng) mang l&ecirc;n n&eacute;m về ph&iacute;a chị Huyền đang ngồi.</p>\r\n\r\n<p>Nghĩ vậy, Cường tự ăn tỏi v&agrave; nh&eacute;t nguy&ecirc;n củ tỏi chưa b&oacute;c vỏ c&oacute; k&iacute;ch thước 4,5 cm x 6 cm v&agrave;o miệng chị Huyền.</p>\r\n\r\n<p>Thế v&agrave; Phượng Anh nghĩ Cường v&agrave; chị Huyền bị ma nhập n&ecirc;n cũng mang tỏi đ&atilde; b&oacute;c n&eacute;m về ph&iacute;a Cường v&agrave; xung quanh ph&ograve;ng. Khi chị Huyền nằm xuống đệm, Cường tiếp tục ngồi l&ecirc;n bụng chị Huyền để nh&eacute;t tổng cộng 33 nh&aacute;nh, củ tỏi v&agrave;o trong khoang miệng của chị Huyền g&acirc;y tử vong v&igrave; ngạt cơ học do b&iacute;t tắc ho&agrave;n to&agrave;n đường h&ocirc; hấp. Sau đ&oacute; Thế bị lực lượng chức năng ph&aacute;t hiện v&agrave; thu giữ trong v&iacute; 1,326 gam ma t&uacute;y tổng hợp Ketamin, số n&agrave;y để sử dụng.</p>\r\n', 1, '1552223171-778-nong-trong-tuan-nhet-toi-lam-ban-chet-chau-viet-cuong-tuong-minh-gioi-chua-benh-1-1552222796-width660height440.jpg'),
(22, 'Cơn cuồng ghen của thanh niên với con gái ông chủ và cái kết', 'Tại tòa, bị cáo khai chỉ vì quá yêu chị A. và tức giận với việc người yêu nói chuyện thân mật với người khác nên đã gây ra tội ác.', '<p>TAND tỉnh T&acirc;y Ninh&nbsp;vừa x&eacute;t xử sơ thẩm vụ &aacute;n h&igrave;nh sự đối với&nbsp;bị c&aacute;o Nguyễn Đức H&ograve;a (SN 1994, ngụ x&atilde; Thạnh B&igrave;nh, huyện T&acirc;n Bi&ecirc;n, tỉnh T&acirc;y Ninh), bị truy tố về tội giết người.</p>\r\n\r\n<p>Theo c&aacute;o trạng, bị c&aacute;o H&ograve;a (t&ecirc;n kh&aacute;c l&agrave; Quẹo) v&agrave; chị A. c&oacute; t&igrave;nh cảm với nhau được hơn một năm. Đ&ecirc;m 29-9-2018, H&ograve;a nh&igrave;n thấy chị A. n&oacute;i chuyện th&acirc;n mật với anh C. tại đ&aacute;m cưới thuộc ấp Thạnh Lộc, x&atilde; Thạnh B&igrave;nh, huyện T&acirc;n Bi&ecirc;n,&nbsp;<a href=\"https://www.24h.com.vn/tay-ninh-c46e4372.html\" title=\"tỉnh Tây Ninh\">tỉnh T&acirc;y Ninh</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Cơn cuồng ghen của thanh niên với con gái ông chủ và cái kết - 1\" src=\"https://cdn.24h.com.vn/upload/1-2019/images/2019-03-10/Con-cuong-ghen-cua-thanh-nien-voi-con-gai-ong-chu-va-cai-ket-nguyenduchoap1994_hzsl-1552214482-376-width800height514.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bị c&aacute;o H&ograve;a tại phi&ecirc;n xử</p>\r\n\r\n<p>Đến khoảng 16 giờ chiều h&ocirc;m sau, H&ograve;a chạy xe m&ocirc; t&ocirc; đến đ&aacute;m cưới. Tại đ&acirc;y, H&ograve;a gặp chị A., hai b&ecirc;n cự c&atilde;i&nbsp;</p>\r\n\r\n<p>Liền sau đ&oacute;, H&ograve;a chạy ra xe m&ocirc;-t&ocirc; lấy con dao để sẵn dưới y&ecirc;n xe, rồi trở lại chỗ chị A. đang đứng, đ&acirc;m v&agrave;o bụng, khiến chị A. gục ng&atilde;. Đ&acirc;m xong H&ograve;a bu&ocirc;ng dao, bỏ chạy ra đường ĐT 795 lao người v&agrave;o rơ mooc của xe m&aacute;y c&agrave;y đang lưu th&ocirc;ng tr&ecirc;n đường tự tử. B&aacute;nh xe b&ecirc;n phải của rơ mooc c&aacute;n qua người l&agrave;m H&ograve;a bất tỉnh.</p>\r\n\r\n<p>Sau khi sự việc xảy ra, chị A. v&agrave; H&ograve;a được đưa đi cấp cứu tại Bệnh viện Đa khoa tỉnh&nbsp;<a href=\"https://www.24h.com.vn/tay-ninh-c46e4372.html\" title=\"Tây Ninh\">T&acirc;y Ninh</a>, đến 20 giờ 30 ph&uacute;t c&ugrave;ng ng&agrave;y chị A. tử vong. Ri&ecirc;ng H&ograve;a tiếp tục điều trị đến ng&agrave;y 9-11-2018 được xuất viện v&agrave; bị bắt tạm giam.</p>\r\n\r\n<p>Tại phi&ecirc;n t&ograve;a, bị c&aacute;o khai chỉ v&igrave; qu&aacute; y&ecirc;u chị A. v&agrave; tức giận việc người y&ecirc;u n&oacute;i chuyện th&acirc;n mật với người kh&aacute;c. Được biết H&ograve;a l&agrave; người l&agrave;m thu&ecirc; cho gia đ&igrave;nh chị A.</p>\r\n\r\n<p>Ph&iacute;a gia đ&igrave;nh bị hại đề nghị HĐXX xử phạt bị c&aacute;o với mức &aacute;n cao nhất l&agrave; tử h&igrave;nh. Vị đại diện VKSND tỉnh đề nghị HĐXX tuy&ecirc;n phạt bị c&aacute;o mức &aacute;n từ 18 đến 20 năm t&ugrave;.</p>\r\n\r\n<p>HĐXX nhận định, h&agrave;nh vi phạm tội của bị c&aacute;o l&agrave; nguy hiểm cho x&atilde; hội, mang t&iacute;nh chất c&ocirc;n đồ, đ&atilde; trực tiếp x&acirc;m phạm đến t&iacute;nh mạng của chị A., g&acirc;y mất m&aacute;t đau thương cho gia đ&igrave;nh nạn nh&acirc;n.</p>\r\n\r\n<p>H&agrave;nh vi cũng g&acirc;y ảnh hưởng đến trật tự trị an tại địa phương n&ecirc;n cần nghi&ecirc;m trị để răn đe v&agrave; ph&ograve;ng ngừa tội phạm chung cho x&atilde; hội.</p>\r\n\r\n<p>Cuối c&ugrave;ng HĐXX đ&atilde; tuy&ecirc;n phạt bị c&aacute;o H&ograve;a t&ugrave; chung th&acirc;n v&agrave; buộc bị c&aacute;o bồi thường cho gia đ&igrave;nh bị hại gần 225 triệu đồng v&agrave; c&oacute; tr&aacute;ch nhiệm cấp dưỡng cho con của chị A. mỗi th&aacute;ng 890.000 đồng.</p>\r\n', 1, 'Con-cuong-ghen-cua-thanh-nien-voi-con-gai-ong-chu-va-cai-ket-nguyenduchoap1994_hzsl-1552214482-376-width800height514.jpg'),
(23, 'Biểu đồ toàn cảnh ', 'Sự thay đổi về lượng thuê bao chuyển đến, rời đi các nhà mạng đã thể hiện sơ bộ sau 4 tháng triển khai chuyển mạng giữ số.', '<p>T&iacute;nh đến hiện tại, dịch vụ&nbsp;<strong>chuyển mạng giữ số</strong>&nbsp;đ&atilde; được c&aacute;c nh&agrave; mạng VinaPhone, MobiFone, Viettel v&agrave; Vietnamobile triển khai được gần 4 th&aacute;ng.</p>\r\n\r\n<p>Theo số liệu cập nhật mới nhất từ Cục Viễn th&ocirc;ng (thuộc Bộ Th&ocirc;ng tin v&agrave; Truyền th&ocirc;ng), t&iacute;nh từ ng&agrave;y 16/11/2018 đến ng&agrave;y 10/3/2019, to&agrave;n quốc đ&atilde; c&oacute; 167.597 thu&ecirc; bao đăng k&yacute; chuyển mạng. Trong đ&oacute; c&oacute; 109.561 thu&ecirc; bao chuyển mạng th&agrave;nh c&ocirc;ng (đạt 65,4%) v&agrave; 48.272 thu&ecirc; bao bị từ chối cung cấp dịch vụ chuyển mạng (chiếm 34,6%).</p>\r\n\r\n<p>Kể từ ng&agrave;y c&aacute;c nh&agrave; mạng bắt đầu triển khai dịch vụ&nbsp;<a href=\"https://www.24h.com.vn/chuyen-mang-giu-so-c55e5656.html\" title=\"chuyển mạng giữ số\">chuyển mạng giữ số</a>, Cục Viễn th&ocirc;ng đ&atilde; 4 lần cập nhật số liệu chuyển mạng của từng nh&agrave; mạng. Cụ thể l&agrave; v&agrave;o c&aacute;c ng&agrave;y 13/2/2019, 20/2/2019, 4/3/2019 v&agrave; 10/3/2019. Th&ocirc;ng qua c&aacute;c mốc thời gian n&agrave;y, c&oacute; thể thấy được sự thay đổi về lượng thu&ecirc; bao đăng k&yacute; chuyển đến/rời đi, chuyển đến/rời đi th&agrave;nh c&ocirc;ng&nbsp;ở từng nh&agrave; mạng cũng như tỉ lệ tương ứng.</p>\r\n\r\n<p><img alt=\"Biểu đồ toàn cảnh &quot;cuộc chiến&quot; chuyển mạng giữ số giữa Vina, Mobi, Viettel và Vietnamobile - 1\" src=\"https://cdn.24h.com.vn/upload/1-2019/images/2019-03-12/1552378233-718-didk-1552376237-width660height455.jpg\" /></p>\r\n\r\n<p>Lượng thu&ecirc; bao đăng k&yacute; rời đi của từng nh&agrave; mạng.</p>\r\n\r\n<p><img alt=\"Biểu đồ toàn cảnh &quot;cuộc chiến&quot; chuyển mạng giữ số giữa Vina, Mobi, Viettel và Vietnamobile - 2\" src=\"https://cdn.24h.com.vn/upload/1-2019/images/2019-03-12/1552378233-569-dendk-1552376320-width660height455.jpg\" /></p>\r\n\r\n<p>Lượng thu&ecirc; bao đăng k&yacute; gia nhập từng nh&agrave; mạng.</p>\r\n\r\n<p><img alt=\"Biểu đồ toàn cảnh &quot;cuộc chiến&quot; chuyển mạng giữ số giữa Vina, Mobi, Viettel và Vietnamobile - 3\" src=\"https://cdn.24h.com.vn/upload/1-2019/images/2019-03-12/1552378233-287-dentc-1552376381-width660height455.jpg\" /></p>\r\n\r\n<p>Lượng thu&ecirc; bao chuyển mạng giữ số th&agrave;nh c&ocirc;ng đến&nbsp;từng nh&agrave; mạng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Biểu đồ toàn cảnh &quot;cuộc chiến&quot; chuyển mạng giữ số giữa Vina, Mobi, Viettel và Vietnamobile - 4\" src=\"https://cdn.24h.com.vn/upload/1-2019/images/2019-03-12/1552378233-469-ditc-1552376420-width660height437.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lượng thu&ecirc; bao bị từ chối chuyển mạng.</p>\r\n\r\n<p><img alt=\"Biểu đồ toàn cảnh &quot;cuộc chiến&quot; chuyển mạng giữ số giữa Vina, Mobi, Viettel và Vietnamobile - 6\" src=\"https://cdn.24h.com.vn/upload/1-2019/images/2019-03-12/1552378233-886-den-1552375684-width660height451.jpg\" /></p>\r\n\r\n<p>Biểu đồ cột thể hiện lượng thu&ecirc; bao đăng k&yacute; chuyển đi của từng nh&agrave; mạng v&agrave; lượng thu&ecirc; bao đ&atilde; chuyển đi th&agrave;nh c&ocirc;ng. Biểu đồ đường l&agrave; tỉ lệ phần trăm giữa lượng thu&ecirc; bao chuyển đi th&agrave;nh c&ocirc;ng so với tổng số lượng thu&ecirc; bao đăng k&yacute; chuyển đi.</p>\r\n\r\n<p><img alt=\"Biểu đồ toàn cảnh &quot;cuộc chiến&quot; chuyển mạng giữ số giữa Vina, Mobi, Viettel và Vietnamobile - 7\" src=\"https://cdn.24h.com.vn/upload/1-2019/images/2019-03-12/1552378233-295-di-1552376160-width660height452.jpg\" /></p>\r\n\r\n<p>Biểu đồ cột thể hiện lượng thu&ecirc; bao đăng k&yacute; chuyển đến&nbsp;từng nh&agrave; mạng (m&agrave;u xanh)&nbsp;v&agrave; lượng thu&ecirc; bao đ&atilde; chuyển đến&nbsp;th&agrave;nh c&ocirc;ng (m&agrave;u cam). Biểu đồ đường l&agrave; tỉ lệ phần trăm giữa lượng thu&ecirc; bao chuyển đến&nbsp;th&agrave;nh c&ocirc;ng so với tổng số lượng thu&ecirc; bao đăng k&yacute; chuyển đến.</p>\r\n\r\n<p><img alt=\"Biểu đồ toàn cảnh &quot;cuộc chiến&quot; chuyển mạng giữ số giữa Vina, Mobi, Viettel và Vietnamobile - 8\" src=\"https://cdn.24h.com.vn/upload/1-2019/images/2019-03-12/1552378233-794-diden-1552377318-width660height450.jpg\" /></p>\r\n\r\n<p>Biểu đồ cột thể hiện lượng thu&ecirc; bao chuyển đi th&agrave;nh c&ocirc;ng (m&agrave;u xanh) v&agrave; lượng thu&ecirc; bao đ&atilde; chuyển đến&nbsp;th&agrave;nh c&ocirc;ng (m&agrave;u cam). Biểu đồ đường l&agrave; hiệu (tổng số lượng thu&ecirc; bao đăng k&yacute; chuyển đến -&nbsp;lượng thu&ecirc; bao chuyển đến&nbsp;th&agrave;nh c&ocirc;ng) của từng nh&agrave; mạng.</p>\r\n\r\n<p><img alt=\"Biểu đồ toàn cảnh &quot;cuộc chiến&quot; chuyển mạng giữ số giữa Vina, Mobi, Viettel và Vietnamobile - 9\" src=\"https://cdn.24h.com.vn/upload/1-2019/images/2019-03-12/1552378233-501-tile-1552377975-width660height159.jpg\" /></p>\r\n\r\n<p>Tỉ lệ % giữa thu&ecirc; bao chuyển đi v&agrave; tổng số thu&ecirc; bao của từng nh&agrave; mạng, t&iacute;nh tới ng&agrave;y 10/3/2019</p>\r\n', 4, '1552378233-718-didk-1552376237-width660height455.jpg'),
(24, 'Trình duyệt CỐC CỐC ra mắt giao diện trang chủ mới, ứng dụng trí tuệ nhân tạo (AI)', 'Cốc Cốc vừa ra mắt giao diện hoàn toàn mới của trang chủ với tên gọi Cốc Cốc Newtab 4.0, sử dụng trí tuệ nhân tạo (AI) để cá nhân hóa trình duyệt, nhằm đưa ', '<p>Bằng việc ứng dụng c&ocirc;ng nghệ tr&iacute; tuệ nh&acirc;n tạo (AI), tr&igrave;nh duyệt Cốc Cốc tổng hợp lại những nội dung từ c&aacute;c trang b&aacute;o mạng, bản tin, blog&hellip; m&agrave; người d&ugrave;ng muốn đọc nhất, v&agrave;o ngay Tab mới của họ. Nhờ đ&oacute;, hơn 24 triệu người đang d&ugrave;ng tr&igrave;nh duyệt Cốc Cốc giờ đ&acirc;y c&oacute; thể cập nhật th&ocirc;ng tin về c&aacute;c chủ đề ưa th&iacute;ch của m&igrave;nh một c&aacute;ch dễ d&agrave;ng, nhanh ch&oacute;ng v&agrave; kh&ocirc;ng bị qu&aacute; tải th&ocirc;ng tin.</p>\r\n\r\n<p><img alt=\"Trình duyệt CỐC CỐC ra mắt giao diện trang chủ mới, ứng dụng trí tuệ nhân tạo (AI) - 1\" src=\"https://cdn.24h.com.vn/upload/1-2019/images/2019-03-07/Trinh-duyet-CoC-CoC-ra-mat-giao-dien-trang-chu-moi-ung-dung-tri-tue-nhan-tao-40AI41-cong-nghe--1--1551948723-454-width660height440.jpg\" /></p>\r\n\r\n<p>Nội dung được c&aacute; nh&acirc;n h&oacute;a hiển thị ngay tr&ecirc;n tab mới của tr&igrave;nh duyệt Cốc Cốc</p>\r\n\r\n<p>Cốc Cốc Newtab 4.0 sử dụng tr&iacute; tuệ nh&acirc;n tạo (AI) để tự động đề xuất c&aacute;c b&agrave;i viết dựa tr&ecirc;n th&ocirc;ng tin mỗi người d&ugrave;ng cung cấp: những nội dung người d&ugrave;ng hay truy cập khi d&ugrave;ng tr&igrave;nh duyệt, mức độ ưa th&iacute;ch, đ&aacute;nh gi&aacute; về nội dung, mức độ sẵn s&agrave;ng nhận những nội dung c&ugrave;ng chủ đề - v.v. Như vậy, khi người d&ugrave;ng đọc c&aacute;c b&agrave;i b&aacute;o li&ecirc;n quan đến xe hơi, họ sẽ nhận được nhiều hơn nội dung li&ecirc;n quan đến xe hơi tr&ecirc;n tab mới. Kh&ocirc;ng chỉ dừng lại ở việc giới thiệu những b&agrave;i viết theo trang b&aacute;o v&agrave; chủ đề y&ecirc;u th&iacute;ch, Cốc Cốc Newtab 4.0 c&ograve;n cung cấp nội dung c&oacute; t&iacute;nh tương quan cao với sở th&iacute;ch của người d&ugrave;ng. V&iacute; dụ, nếu người d&ugrave;ng th&iacute;ch đọc tin về showbiz Việt, Cốc Cốc Newtab 4.0 c&oacute; thể sẽ giới thiệu th&ecirc;m cho họ c&aacute;c b&agrave;i b&aacute;o li&ecirc;n quan đến c&aacute;c diễn vi&ecirc;n H&agrave;n Quốc.</p>\r\n\r\n<p>Để tạo ra Cốc Cốc Newtab 4.0, c&ocirc;ng ty c&ocirc;ng nghệ Cốc Cốc đ&atilde; hợp t&aacute;c với Yandex - c&ocirc;ng ty c&ocirc;ng nghệ h&agrave;ng đầu của Nga. Yandex đ&atilde; từng x&acirc;y dựng th&agrave;nh c&ocirc;ng nền tảng tin tức theo sở th&iacute;ch c&aacute; nh&acirc;n đầu ti&ecirc;n v&agrave; lớn nhất tr&ecirc;n thế giới, mang t&ecirc;n Yandex Zen. C&ocirc;ng nghệ tr&iacute; tuệ nh&acirc;n tạo (AI) m&agrave; Yandex đ&atilde; hỗ trợ Cốc Cốc Newtab 4.0 bao gồm c&ocirc;ng nghệ xử l&yacute; ng&ocirc;n ngữ tự nhi&ecirc;n, thị gi&aacute;c m&aacute;y t&iacute;nh v&agrave; Matrixnet - một thuật to&aacute;n m&aacute;y học độc quyền.</p>\r\n\r\n<p><img alt=\"Trình duyệt CỐC CỐC ra mắt giao diện trang chủ mới, ứng dụng trí tuệ nhân tạo (AI) - 2\" src=\"https://cdn.24h.com.vn/upload/1-2019/images/2019-03-07/Trinh-duyet-CoC-CoC-ra-mat-giao-dien-trang-chu-moi-ung-dung-tri-tue-nhan-tao-40AI41-cong-nghe--2--1551948723-653-width660height371.jpg\" /></p>\r\n\r\n<p>&nbsp;Giao diện mới của Cốc Cốc, t&iacute;ch hợp AI mang đến trải nghiệm tối ưu cho người d&ugrave;ng.</p>\r\n\r\n<p>Ngo&agrave;i việc ra mắt t&iacute;nh năng n&agrave;y, Cốc Cốc c&ograve;n thay đổi to&agrave;n bộ giao diện trang tab mới, gi&uacute;p n&acirc;ng cao trải nghiệm người d&ugrave;ng v&agrave; được kỳ vọng sẽ gia tăng lượng tương t&aacute;c giữa người d&ugrave;ng v&agrave; tr&igrave;nh duyệt. Giao diện mới c&oacute; k&egrave;m theo một thanh c&ocirc;ng cụ ph&iacute;a b&ecirc;n tr&aacute;i m&agrave;n h&igrave;nh, cho ph&eacute;p người d&ugrave;ng chat facebook kể cả khi lướt c&aacute;c web kh&aacute;c v&agrave; ghim c&aacute;c trang web y&ecirc;u th&iacute;ch để truy cập nhanh.</p>\r\n\r\n<p><img alt=\"Trình duyệt CỐC CỐC ra mắt giao diện trang chủ mới, ứng dụng trí tuệ nhân tạo (AI) - 3\" src=\"https://cdn.24h.com.vn/upload/1-2019/images/2019-03-07/Trinh-duyet-CoC-CoC-ra-mat-giao-dien-trang-chu-moi-ung-dung-tri-tue-nhan-tao-40AI41-cong-nghe--3--1551948723-885-width660height367.jpg\" /></p>\r\n\r\n<p>Thanh truy cập nhanh gi&uacute;p người d&ugrave;ng chat facebook khi đang tr&ecirc;n trang web kh&aacute;c, v&agrave; ghim c&aacute;c trang web y&ecirc;u th&iacute;ch để tiện truy cập</p>\r\n\r\n<p>Theo b&agrave; Anastasia Zholobova, quản l&yacute; ph&aacute;t triển sản phẩm của Cốc Cốc: &ldquo;Ch&uacute;ng t&ocirc;i tin rằng việc cung cấp trải nghiệm c&aacute; nh&acirc;n l&agrave; c&aacute;ch tốt nhất để gia tăng sự gắn b&oacute; của người d&ugrave;ng với Cốc Cốc. Ch&iacute;nh v&igrave; vậy, từ đầu năm 2018, ch&uacute;ng t&ocirc;i đ&atilde; bắt đầu thử nghiệm Newtab 4.0 tr&ecirc;n một lượng người d&ugrave;ng nhất định. Thử nghiệm đ&atilde; cho thấy những kết quả t&iacute;ch cực, cụ thể, thời gian sử dụng tab mới tăng l&ecirc;n 10% v&agrave; nhiều khả năng sẽ c&ograve;n tăng l&ecirc;n nữa. Đ&acirc;y ch&iacute;nh l&agrave; l&yacute; do tại sao bắt đầu từ năm nay, ch&uacute;ng t&ocirc;i muốn ra mắt t&iacute;nh năng n&agrave;y cho to&agrave;n bộ người d&ugrave;ng Cốc Cốc với sự hỗ trợ từ Yandex. Với sự hiểu biết của Cốc Cốc về ng&ocirc;n ngữ tiếng Việt v&agrave; thị trường Việt Nam, cũng như kinh nghiệm của Yandex trong việc x&acirc;y dựng c&aacute;c giải ph&aacute;p dựa tr&ecirc;n c&ocirc;ng nghệ AI, ch&uacute;ng t&ocirc;i tin tưởng rằng Cốc Cốc Newtab 4.0 sẽ gi&uacute;p người Việt dễ d&agrave;ng nắm bắt lượng th&ocirc;ng tin v&ocirc; c&ugrave;ng lớn tr&ecirc;n internet một c&aacute;ch dễ d&agrave;ng th&ocirc;ng qua việc x&aacute;c định những nội dung ph&ugrave; hợp nhất cho mỗi người.&rdquo;</p>\r\n\r\n<p>Gi&aacute;m đốc điều h&agrave;nh của Cốc Cốc - b&agrave; Đ&agrave;o Thu Phương n&oacute;i th&ecirc;m rằng: &ldquo;Việc ra mắt một t&iacute;nh năng đề xuất tin tức ph&ugrave; hợp theo sở th&iacute;ch người d&ugrave;ng l&agrave; bước đi chiến lược của Cốc Cốc, phục vụ mục đ&iacute;ch trở th&agrave;nh tr&igrave;nh duyệt tiện lợi nhất d&agrave;nh cho người d&ugrave;ng Việt. Tr&igrave;nh duyệt Cốc Cốc được biết đến với những giải ph&aacute;p internet d&agrave;nh ri&ecirc;ng cho người Việt như kiểm tra ch&iacute;nh tả tiếng Việt, tra từ điển Anh-Việt, v.v. Cốc Cốc Newtab 4.0 dự kiến ​​sẽ đ&oacute;ng g&oacute;p nhiều cho hệ sinh th&aacute;i của tr&igrave;nh duyệt.&rdquo;</p>\r\n\r\n<p>Cải tiến mới mang t&ecirc;n Cốc Cốc Newtab 4.0 hiện đ&atilde; c&oacute; sẵn tr&ecirc;n phi&ecirc;n bản m&aacute;y t&iacute;nh v&agrave; dự kiến ​​sẽ được t&iacute;ch hợp v&agrave;o tr&igrave;nh duyệt Cốc Cốc tr&ecirc;n smartphone trong thời gian tới. Người d&ugrave;ng ngay b&acirc;y giờ đ&atilde; c&oacute; thể tải v&agrave; trải nghiệm tr&igrave;nh duyệt Cốc Cốc với c&aacute;c t&iacute;nh năng hữu &iacute;ch tr&ecirc;n phi&ecirc;n bản m&aacute;y t&iacute;nh qua đường link (URL) hoặc v&agrave;o qua trang web:&nbsp;<a href=\"http://click.vn/24h_redirectout.php?to=aHR0cHM6Ly9jb2Njb2MuY29tLw==&amp;tk=68b010a2103bc694fb1fcb2b7a29c6601552380615a440525bee7fc2f922f66299bd2f7ad2\" rel=\"nofollow\" target=\"_blank\">https://coccoc.com/</a></p>\r\n', 4, '1-1552023470775564375580-crop-1552023474927313044896.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news_group`
--

CREATE TABLE `tbl_news_group` (
  `IdNewsGroup` int(156) NOT NULL,
  `NameNewsGroup` varchar(156) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_news_group`
--

INSERT INTO `tbl_news_group` (`IdNewsGroup`, `NameNewsGroup`) VALUES
(1, 'Tin tức hình sự'),
(2, 'Tin tức thể thao'),
(3, 'Tin tức văn hóa'),
(4, 'Công nghệ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_producer`
--

CREATE TABLE `tbl_producer` (
  `IdProducer` int(156) NOT NULL,
  `NameProducer` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_producer`
--

INSERT INTO `tbl_producer` (`IdProducer`, `NameProducer`) VALUES
(1, 'Italia'),
(2, 'China'),
(3, 'Japan'),
(4, 'Korea'),
(5, 'Chine'),
(6, 'Iran'),
(7, 'Việt Nam'),
(8, 'Tây ban nha'),
(9, 'Bồ đào nha');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_detail`
--

CREATE TABLE `tbl_product_detail` (
  `IdProduct` int(156) NOT NULL,
  `NameProduct` varchar(156) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OldPrice` int(156) NOT NULL,
  `NewPrice` int(156) NOT NULL,
  `IdProducer` int(156) NOT NULL,
  `Description` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdGroupProduct` int(156) NOT NULL,
  `Amount` int(156) NOT NULL,
  `Image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_product_detail`
--

INSERT INTO `tbl_product_detail` (`IdProduct`, `NameProduct`, `OldPrice`, `NewPrice`, `IdProducer`, `Description`, `IdGroupProduct`, `Amount`, `Image`) VALUES
(75, '', 0, 0, 1, '', 1, 0, 'anhnen4.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_group`
--

CREATE TABLE `tbl_product_group` (
  `IdGroupProduct` int(156) NOT NULL,
  `NameGroupProduct` varchar(156) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_product_group`
--

INSERT INTO `tbl_product_group` (`IdGroupProduct`, `NameGroupProduct`) VALUES
(1, 'Đồ hồ nhật'),
(2, 'Đồng hồ trung quốc'),
(3, 'Đồng hồ thụy sĩ'),
(4, 'Đồng hồ hàn quốc'),
(5, 'Đồng hồ mĩ'),
(6, 'Đồng hồ ý');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`IdAdmin`);

--
-- Indexes for table `tbl_bill`
--
ALTER TABLE `tbl_bill`
  ADD PRIMARY KEY (`IdBill`),
  ADD KEY `IdCustomer` (`IdCustomer`);

--
-- Indexes for table `tbl_bill_detail`
--
ALTER TABLE `tbl_bill_detail`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `bill_id` (`bill_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`IdCustomer`);

--
-- Indexes for table `tbl_news_detail`
--
ALTER TABLE `tbl_news_detail`
  ADD PRIMARY KEY (`IdNews`),
  ADD KEY `IdNewsGroup` (`IdNewsGroup`);

--
-- Indexes for table `tbl_news_group`
--
ALTER TABLE `tbl_news_group`
  ADD PRIMARY KEY (`IdNewsGroup`);

--
-- Indexes for table `tbl_producer`
--
ALTER TABLE `tbl_producer`
  ADD PRIMARY KEY (`IdProducer`);

--
-- Indexes for table `tbl_product_detail`
--
ALTER TABLE `tbl_product_detail`
  ADD PRIMARY KEY (`IdProduct`),
  ADD KEY `IdProducer` (`IdProducer`),
  ADD KEY `IdGroupProduct` (`IdGroupProduct`);

--
-- Indexes for table `tbl_product_group`
--
ALTER TABLE `tbl_product_group`
  ADD PRIMARY KEY (`IdGroupProduct`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `IdAdmin` int(156) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_bill`
--
ALTER TABLE `tbl_bill`
  MODIFY `IdBill` int(156) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_bill_detail`
--
ALTER TABLE `tbl_bill_detail`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `IdCustomer` int(156) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_news_detail`
--
ALTER TABLE `tbl_news_detail`
  MODIFY `IdNews` int(156) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_news_group`
--
ALTER TABLE `tbl_news_group`
  MODIFY `IdNewsGroup` int(156) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_producer`
--
ALTER TABLE `tbl_producer`
  MODIFY `IdProducer` int(156) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_product_detail`
--
ALTER TABLE `tbl_product_detail`
  MODIFY `IdProduct` int(156) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `tbl_product_group`
--
ALTER TABLE `tbl_product_group`
  MODIFY `IdGroupProduct` int(156) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_bill`
--
ALTER TABLE `tbl_bill`
  ADD CONSTRAINT `tbl_bill_ibfk_1` FOREIGN KEY (`IdCustomer`) REFERENCES `tbl_customer` (`IdCustomer`);

--
-- Constraints for table `tbl_bill_detail`
--
ALTER TABLE `tbl_bill_detail`
  ADD CONSTRAINT `tbl_bill_detail_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product_detail` (`IdProduct`),
  ADD CONSTRAINT `tbl_bill_detail_ibfk_2` FOREIGN KEY (`bill_id`) REFERENCES `tbl_bill` (`IdBill`);

--
-- Constraints for table `tbl_news_detail`
--
ALTER TABLE `tbl_news_detail`
  ADD CONSTRAINT `tbl_news_detail_ibfk_1` FOREIGN KEY (`IdNewsGroup`) REFERENCES `tbl_news_group` (`IdNewsGroup`);

--
-- Constraints for table `tbl_product_detail`
--
ALTER TABLE `tbl_product_detail`
  ADD CONSTRAINT `tbl_product_detail_ibfk_1` FOREIGN KEY (`IdProducer`) REFERENCES `tbl_producer` (`IdProducer`),
  ADD CONSTRAINT `tbl_product_detail_ibfk_2` FOREIGN KEY (`IdGroupProduct`) REFERENCES `tbl_product_group` (`IdGroupProduct`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
