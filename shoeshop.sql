-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 28, 2024 lúc 09:36 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoeshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `thuocloai` int(11) NOT NULL,
  `tieude` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noibat` int(3) NOT NULL,
  `tieude_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doi_tac`
--

CREATE TABLE `doi_tac` (
  `id` int(11) NOT NULL,
  `hinhanh` text NOT NULL,
  `thuocloai` text NOT NULL,
  `noidung` text NOT NULL,
  `trangchu` text NOT NULL,
  `mota` text NOT NULL,
  `tieude` text NOT NULL,
  `description` text NOT NULL,
  `key` text NOT NULL,
  `title` text NOT NULL,
  `tieude_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `mota_en` text NOT NULL,
  `linkurl` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `doi_tac`
--

INSERT INTO `doi_tac` (`id`, `hinhanh`, `thuocloai`, `noidung`, `trangchu`, `mota`, `tieude`, `description`, `key`, `title`, `tieude_en`, `noidung_en`, `mota_en`, `linkurl`) VALUES
(14, 'client1-1.png', '', '', '', '', 'đối tác 1', '', '', '', '', '', '', ''),
(15, 'client1-2.png', '', '', '', '', 'đối tác 2', '', '', '', '', '', '', ''),
(16, 'client1-3.png', '', '', '', '', 'đối tác 3', '', '', '', '', '', '', ''),
(17, 'client1-4.png', '', '', '', '', 'đối tác 4', '', '', '', '', '', '', ''),
(18, 'client1-5.png', '', '', '', '', 'đối tác 5', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `du_an`
--

CREATE TABLE `du_an` (
  `id` int(11) NOT NULL,
  `hinhanh` text NOT NULL,
  `thuocloai` text NOT NULL,
  `noidung` text NOT NULL,
  `trangchu` text NOT NULL,
  `mota` text NOT NULL,
  `tieude` text NOT NULL,
  `description` text NOT NULL,
  `key` text NOT NULL,
  `title` text NOT NULL,
  `tieude_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `mota_en` text NOT NULL,
  `linkurl` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `du_an`
--

INSERT INTO `du_an` (`id`, `hinhanh`, `thuocloai`, `noidung`, `trangchu`, `mota`, `tieude`, `description`, `key`, `title`, `tieude_en`, `noidung_en`, `mota_en`, `linkurl`) VALUES
(13, '', '', '', '', 'Massage Ngọc Ánh thật tuyệt vời! Không gian sạch sẽ, thoải mái và kỹ thuật viên rất chuyên nghiệp. Tôi cảm thấy như được tái sinh sau mỗi liệu trình.', 'Nguyễn Minh Anh', '', '', '', '', '', '', ''),
(14, '', '', '', '', 'Tôi đã thử nhiều nơi nhưng Massage Ngọc Ánh để lại ấn tượng sâu sắc nhất. Dịch vụ chu đáo, đội ngũ nhân viên nhiệt tình và thân thiện.', 'Trần Thị Mai', '', '', '', '', '', '', ''),
(15, '', '', '', '', 'Đây là địa chỉ massage yêu thích của tôi. Liệu trình massage nam thật sự giúp tôi thư giãn và nạp lại năng lượng sau những ngày làm việc căng thẳng.', 'Lê Văn Hùng', '', '', '', '', '', '', ''),
(16, '', '', '', '', 'Massage Ngọc Ánh không chỉ mang đến cảm giác thư thái mà còn giúp tôi cải thiện sức khỏe. Rất hài lòng với dịch vụ tại đây.', 'Phạm Hương Giang', '', '', '', '', '', '', ''),
(17, '', '', '', '', 'Mỗi lần đến Massage Ngọc Ánh, tôi đều cảm thấy được chăm sóc tận tình. Liệu trình massage cho các cặp đôi thật sự đáng trải nghiệm.', 'Trần Thị Ngọc Thắm', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `du_lieu_1_tin`
--

CREATE TABLE `du_lieu_1_tin` (
  `id` int(11) NOT NULL,
  `noidung_en` text NOT NULL,
  `noidung` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `du_lieu_1_tin`
--

INSERT INTO `du_lieu_1_tin` (`id`, `noidung_en`, `noidung`) VALUES
(1, 'tuyển dụng tiếng anh<br />', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d465.63799566354777!2d108.20911908202152!3d16.05210562648356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b9947aa77f%3A0x6a97c7be14f57ee!2zODgsIDk5IE5ndXnhu4VuIEjhu691IFRo4buNLCBIw7JhIFRodeG6rW4gVMOieSwgSOG6o2kgQ2jDonUsIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1596514489049!5m2!1svi!2s\" width=\"100%\" height=\"350\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>'),
(2, '<img width=\"271\" height=\"380\" src=\"/hinhanh_fckeditor/hinh2.png\" alt=\"\" />', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3843.3975560295244!2d108.4845657146773!3d15.570393889190814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3169dce63bac4bef%3A0x32f57fbd646311e6!2zOTUgUGhhbiBDaMOidSBUcmluaCwgUGjGsOG7m2MgSMOyYSwgVHAuIFRhbSBL4buzLCBRdeG6o25nIE5hbSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2sin!4v1509351944162\" width=\"100%\" height=\"350\" frameborder=\"0\" style=\"border:0\" allowfullscreen=\"\"></iframe>'),
(3, 'bản đồ tiếng anh<br />', '<div class=\"product-other-li\"><font face=\"Arial\" size=\"3\"><b>Hướng dẫn mua h&agrave;ng</b></font></div>'),
(4, '<div style=\"text-align: left;\"><img width=\"180\" height=\"176\" align=\"left\" alt=\"\" src=\"/demo1/tinhchi/hinhanh_fckeditor/truonglong(2).png\" style=\"MARGIN-RIGHT: 10px\" /><span style=\"font-size: larger;\"><span lang=\"en\" id=\"result_box\"><span style=\"font-family: Times New Roman;\"><span title=\"Trước hết, C&ocirc;ng ty TNHH XLSX &amp; TMDV Trường Long xin gửi đến qu&yacute; kh&aacute;ch h&agrave;ng lời ch&agrave;o tr&acirc;n trọng.\">First of all, XLSX &amp; Co. Long TMDV School would like to send greetings customers.<br />\r\n<br />\r\n</span><span title=\"Được th&agrave;nh lập v&agrave;o năm 2004, C&ocirc;ng ty TNHH XLSX &amp; TMDV Trường Long tự h&agrave;o l&agrave; một trong những c&ocirc;ng ty ng&agrave;y c&agrave;ng lớn mạnh trong lĩnh vực thi c&ocirc;ng x&acirc;y dựng c&ocirc;ng tr&igrave;nh, kinh doanh vật tư, thiết bị ng&agrave;nh Viễn th&ocirc;ng\">Established  in 2004, Trading and Service Co., XLSX &amp; Long School boasts one of  the growing company in the field of building construction, business  supplies and equipment Telecommunications Sector<br />\r\n<br />\r\n</span><span title=\"Qua 6 năm hoạt động v&agrave; ph&aacute;t triển, c&ocirc;ng ty đ&atilde; đạt được những th&agrave;nh tựu đ&aacute;ng kh&iacute;ch lệ, tạo dựng mối quan hệ l&acirc;u d&agrave;i, bền vững v&agrave; uy t&iacute;n với kh&aacute;ch h&agrave;ng v&agrave; đối t&aacute;c.\">Over  6 years of operation and development, the company has made encouraging  achievements, building long-term relationships, sustainability and  credibility with customers and partners. </span><span title=\"Từ nhiều năm nay, C&ocirc;ng ty Trường Long đ&atilde; v&agrave; đang nỗ lực kh&ocirc;ng ngừng để cải thiện cơ sở vật chất, chất lượng sản phẩm do c&ocirc;ng ty gia c&ocirc;ng sản xuất, c&ocirc;ng tr&igrave;nh thi c&ocirc;ng v&agrave; c&aacute;c sản phẩm thương mại ng&agrave;nh viễn th&ocirc;ng nhằm\">For  years, Long Truong has been constant efforts to improve facilities,  product quality by outsourcing manufacturing companies, construction  projects and commercial products for the telecommunications industry </span><span title=\"đ&aacute;p ứng nhu cầu ng&agrave;y c&agrave;ng cao của kh&aacute;ch h&agrave;ng.\">meet the increasing demands of customers.<br />\r\n<br />\r\n</span><span title=\"C&ocirc;ng ty TNHH XLSX &amp; TMDV Trường Long với đội ngũ nh&acirc;n vi&ecirc;n gi&agrave;u kinh nghiệm, nhiệt t&igrave;nh v&agrave; chuy&ecirc;n nghiệp lu&ocirc;n đem đến cho kh&aacute;ch h&agrave;ng cảm gi&aacute;c h&agrave;i l&ograve;ng v&agrave; tin cậy khi thi c&ocirc;ng c&ocirc;ng tr&igrave;nh v&agrave; mua sản phẩm của ch&uacute;ng t&ocirc;i.\">XLSX  &amp; Trading and Service Co., Ltd. Long School with a staff of  experienced, enthusiastic and professional customer always brings  satisfaction and confidence when construction works and purchase of our  products. </span><span title=\"Lấy lợi &iacute;ch v&agrave; sự h&agrave;i l&ograve;ng của kh&aacute;ch h&agrave;ng l&agrave;m ti&ecirc;u ch&iacute; hoạt động.\">Get the benefits and satisfaction of customer performance criteria.<br />\r\n<br />\r\n</span><span title=\"Với định hướng v&agrave; chiến lược đ&uacute;ng đắn, C&ocirc;ng ty TNHH XLSX &amp; TMDV Trường Long đang dần khẳng định chỗ đứng của m&igrave;nh tr&ecirc;n lĩnh vực x&acirc;y dựng thi c&ocirc;ng c&ocirc;ng tr&igrave;nh, kinh doanh sắt th&eacute;p x&acirc;y dựng v&agrave; c&aacute;c sản phẩm ng&agrave;nh Viễn th&ocirc;ng.\">With  the right strategy and direction, XLSX &amp; Co. Long TMDV School has  gradually asserted its position in the field of building construction,  steel construction business and Telecommunication products.<br />\r\n</span></span><span title=\"Với định hướng v&agrave; chiến lược đ&uacute;ng đắn, C&ocirc;ng ty TNHH XLSX &amp; TMDV Trường Long đang dần khẳng định chỗ đứng của m&igrave;nh tr&ecirc;n lĩnh vực x&acirc;y dựng thi c&ocirc;ng c&ocirc;ng tr&igrave;nh, kinh doanh sắt th&eacute;p x&acirc;y dựng v&agrave; c&aacute;c sản phẩm ng&agrave;nh Viễn th&ocirc;ng.\"><br />\r\n</span></span></span></div>\r\n<div style=\"text-align: center;\"><span style=\"font-size: larger;\"><span lang=\"en\" id=\"result_box\"><span title=\"Với định hướng v&agrave; chiến lược đ&uacute;ng đắn, C&ocirc;ng ty TNHH XLSX &amp; TMDV Trường Long đang dần khẳng định chỗ đứng của m&igrave;nh tr&ecirc;n lĩnh vực x&acirc;y dựng thi c&ocirc;ng c&ocirc;ng tr&igrave;nh, kinh doanh sắt th&eacute;p x&acirc;y dựng v&agrave; c&aacute;c sản phẩm ng&agrave;nh Viễn th&ocirc;ng.\"><br />\r\n</span><span title=\"TỔNG SỐ LAO ĐỘNG HIỆN C&Oacute; : 115 người\">LABOR IS TOTAL: 115<br />\r\n</span><span title=\"- Nh&acirc;n sự khối quản l&yacute; : 20 người trong đ&oacute; :\">- Personnel management blocks: 20 people, including:<br />\r\n</span><span title=\"o Tr&igrave;nh độ đại học : 17 người\">o University degree: 17<br />\r\n</span><span title=\"o Tr&igrave;nh độ cao đẳng : 3 người\">o College Level: 3 people<br />\r\n</span><span title=\"- Nh&acirc;n sự khối sản xuất : 30 người trong đ&oacute; :\">- Personnel mass production: 30 people, including:<br />\r\n</span><span title=\"o Tr&igrave;nh độ đại học : 25 người\">o University degree: 25<br />\r\n</span><span title=\"o Tr&igrave;nh độ cao đẳng : 5 người\">o College Level: 5 people<br />\r\n</span><span title=\"- C&ocirc;ng nh&acirc;n l&agrave;nh nghề : 65 người\">- Skilled workers: 65</span></span></span></div>', '&nbsp;\r\n<div style=\"text-align: center;\"><img src=\"/demo1/tinhchi/hinhanh_fckeditor/Mitsubishi Mirage CVT.gif\" width=\"490\" height=\"257\" alt=\"\" /></div>\r\n<br />\r\n<br />\r\n<h3 class=\"price-title\" style=\"border: 0px; font-family: Montserrat, Helvetica, Arial; font-size: 20px; margin: 0px 0px 0.8em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(58, 57, 57); line-height: 1.8; transition: all 0.3s ease 0s; text-align: center;\"><span style=\"color: rgb(255, 0, 0);\">GI&Aacute; XE MIRAGE TẠI MITSUBISHI QUẢNG NAM</span></h3>\r\n<h3 style=\"border: 0px; font-family: Montserrat, Helvetica, Arial; font-size: 20px; margin: 0px 0px 0.8em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(58, 57, 57); line-height: 1.8; transition: all 0.3s ease 0s; text-align: center;\">CHI TIẾT SẢN PHẨM&nbsp;|&nbsp;Y&Ecirc;U CẦU B&Aacute;O GI&Aacute;&nbsp;|&nbsp;ĐĂNG K&Yacute; L&Aacute;I THỬ&nbsp;</h3>\r\n<br />\r\n<table width=\"90%\" border=\"1\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\">\r\n    <tbody>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><span style=\"color: rgb(0, 0, 0);\"><strong><span style=\"font-size: medium;\">&nbsp;Phi&ecirc;n bản</span></strong></span></td>\r\n            <td style=\"text-align: center;\">&nbsp;<br />\r\n            <strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">Gi&aacute; đặc biệt th&aacute;ng 12<br />\r\n            <br type=\"_moz\" />\r\n            </strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><br />\r\n            &nbsp;<b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">MT<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\">&nbsp;<b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">350.500.000</b></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><br />\r\n            &nbsp;<b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">CVT Eco<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\">&nbsp;<b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">395.500.000</b></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><br />\r\n            &nbsp;<b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">CVT<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\">&nbsp;<b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">450.500.000</b></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n<div style=\"text-align: center;\">&nbsp;</div>\r\n<div style=\"text-align: center;\"><span style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px;\">Đơn vị gi&aacute;: VNĐ</span>&nbsp;</div>\r\n&nbsp;\r\n<div style=\"text-align: center;\"><img src=\"/demo1/tinhchi/hinhanh_fckeditor/Attrage CVT.gif\" width=\"490\" height=\"257\" alt=\"\" /></div>\r\n<br />\r\n<br />\r\n<h3 class=\"price-title\" style=\"border: 0px; font-family: Montserrat, Helvetica, Arial; font-size: 20px; margin: 0px 0px 0.8em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(58, 57, 57); line-height: 1.8; transition: all 0.3s ease 0s; text-align: center;\"><span style=\"color: rgb(255, 0, 0);\">GI&Aacute; XE ATTRAGE TẠI MITSUBISHI QUẢNG NAM</span></h3>\r\n<h3 style=\"border: 0px; font-family: Montserrat, Helvetica, Arial; font-size: 20px; margin: 0px 0px 0.8em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(58, 57, 57); line-height: 1.8; transition: all 0.3s ease 0s; text-align: center;\">CHI TIẾT SẢN PHẨM&nbsp;|&nbsp;Y&Ecirc;U CẦU B&Aacute;O GI&Aacute;&nbsp;|&nbsp;ĐĂNG K&Yacute; L&Aacute;I THỬ&nbsp;</h3>\r\n<table width=\"90%\" border=\"1\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\">\r\n    <tbody>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\"><br />\r\n            Phi&ecirc;n bản<br />\r\n            <br type=\"_moz\" />\r\n            </strong></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">Gi&aacute; đặc biệt Th&aacute;ng 12</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            MT Eco<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">375<strong style=\"border: 0px; font-family: inherit; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">.500.000</strong></b></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            MT<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">405<strong style=\"border: 0px; font-family: inherit; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">.500.000</strong></b></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            CVT&nbsp;</b><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">Eco<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">425<strong style=\"border: 0px; font-family: inherit; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">.500.000</strong></b></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            CVT&nbsp;<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">475<b>.500.000</b></strong></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n<div style=\"text-align: center;\"><span style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px;\"><br />\r\nĐơn vị gi&aacute;: VNĐ</span>&nbsp;<br />\r\n<br />\r\n<br />\r\n<div><img src=\"/demo1/tinhchi/hinhanh_fckeditor/Outlander 2_4 CVT.gif\" width=\"490\" height=\"257\" alt=\"\" /></div>\r\n<br style=\"text-align: start;\" />\r\n<br style=\"text-align: start;\" />\r\n<h3 class=\"price-title\" style=\"border: 0px; font-family: Montserrat, Helvetica, Arial; font-size: 20px; margin: 0px 0px 0.8em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(58, 57, 57); line-height: 1.8; transition: all 0.3s ease 0s;\"><span style=\"color: rgb(255, 0, 0);\">GI&Aacute; XE OUTLANDER TẠI QUẢNG NAM</span></h3>\r\n<h3 style=\"border: 0px; font-family: Montserrat, Helvetica, Arial; font-size: 20px; margin: 0px 0px 0.8em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(58, 57, 57); line-height: 1.8; transition: all 0.3s ease 0s;\">CHI TIẾT SẢN PHẨM&nbsp;|&nbsp;Y&Ecirc;U CẦU B&Aacute;O GI&Aacute;&nbsp;|&nbsp;ĐĂNG K&Yacute; L&Aacute;I THỬ&nbsp;</h3>\r\n<table width=\"90%\" border=\"1\" cellpadding=\"0\" cellspacing=\"1\" align=\"center\">\r\n    <tbody>\r\n        <tr>\r\n            <td><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">\r\n            <div style=\"text-align: center;\"><br />\r\n            Phi&ecirc;n bản</div>\r\n            <br type=\"_moz\" />\r\n            </strong></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">Gi&aacute; c&ocirc;ng bố</strong></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">Gi&aacute; đặc biệt th&aacute;ng 12</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\"><br />\r\n            CVT 2.0<br />\r\n            <br type=\"_moz\" />\r\n            </strong></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">823.000.000</strong></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">807.500.000</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\"><br />\r\n            CVT 2.0 Premium<br />\r\n            <br type=\"_moz\" />\r\n            </strong></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">942.000.000</strong></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">908.500.000</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\"><br />\r\n            CVT 2.4 Premium<br />\r\n            <br type=\"_moz\" />\r\n            </strong></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">1.100.000.000</strong></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">1.048.500.000</strong></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div><span style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px;\">Đơn vị gi&aacute;: VNĐ</span>&nbsp;<br />\r\n<br />\r\n<div><img src=\"/demo1/tinhchi/hinhanh_fckeditor/Pajero Sport 2018.gif\" width=\"490\" height=\"257\" alt=\"\" /></div>\r\n<br style=\"text-align: start;\" />\r\n<br style=\"text-align: start;\" />\r\n<h3 class=\"price-title\" style=\"border: 0px; font-family: Montserrat, Helvetica, Arial; font-size: 20px; margin: 0px 0px 0.8em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(58, 57, 57); line-height: 1.8; transition: all 0.3s ease 0s;\"><span style=\"color: rgb(255, 0, 0);\">GI&Aacute; XE PAJERO SPORT TẠI MITSUBISHI QUẢNG NAM</span></h3>\r\n<h3 style=\"border: 0px; font-family: Montserrat, Helvetica, Arial; font-size: 20px; margin: 0px 0px 0.8em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(58, 57, 57); line-height: 1.8; transition: all 0.3s ease 0s;\">CHI TIẾT SẢN PHẨM&nbsp;|&nbsp;Y&Ecirc;U CẦU B&Aacute;O GI&Aacute;&nbsp;|&nbsp;ĐĂNG K&Yacute; L&Aacute;I THỬ&nbsp;</h3>\r\n</div>\r\n<table width=\"90%\" border=\"1\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\">\r\n    <tbody>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><span style=\"font-size: medium;\"><strong><br />\r\n            Phi&ecirc;n bản<br />\r\n            <br type=\"_moz\" />\r\n            </strong></span></td>\r\n            <td style=\"text-align: center;\"><span style=\"font-size: large;\">Gi&aacute; b&aacute;n lẻ th&aacute;ng 12</span></td>\r\n        </tr>\r\n        <tr>\r\n            <td>\r\n            <div style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            DIESEL 4&times;2 AT&nbsp;(mới)<br />\r\n            <br type=\"_moz\" />\r\n            </b></div>\r\n            </td>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">1.062.<strong style=\"border: 0px; font-family: inherit; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">000.000</strong></b></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\"><br />\r\n            GASOLINE 4&times;2 AT (mới)<br />\r\n            <br type=\"_moz\" />\r\n            </strong></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">1.092.000.000</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\"><br />\r\n            GASOLINE 4&times;4 AT<br />\r\n            <br type=\"_moz\" />\r\n            </strong></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">1.182.000.000</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            GASOLINE 4&times;2 AT PREMIUM<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">1.160<strong style=\"border: 0px; font-family: inherit; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">.000.000</strong></b></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            GASOLINE 4&times;4 AT&nbsp;PREMIUM<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">1.250<strong style=\"border: 0px; font-family: inherit; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">.000.000</strong></b></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n<div style=\"text-align: right;\"><span style=\"text-align: start;\">&nbsp;</span><br />\r\n<div style=\"text-align: center;\"><span style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px;\">Đơn vị gi&aacute;: VNĐ</span>&nbsp;</div>\r\n<span style=\"text-align: start;\">&nbsp;</span>\r\n<div style=\"text-align: center;\"><img src=\"/demo1/tinhchi/hinhanh_fckeditor/TRITON 4&times;2 AT.gif\" width=\"490\" height=\"257\" alt=\"\" /></div>\r\n<br style=\"text-align: start;\" />\r\n<br style=\"text-align: start;\" />\r\n<h3 class=\"price-title\" style=\"border: 0px; font-family: Montserrat, Helvetica, Arial; font-size: 20px; margin: 0px 0px 0.8em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(58, 57, 57); line-height: 1.8; transition: all 0.3s ease 0s; text-align: center;\"><span style=\"color: rgb(255, 0, 0);\">GI&Aacute; XE TRITON TẠI MITSUBISHI QUẢNG NAM</span></h3>\r\n<h3 style=\"border: 0px; font-family: Montserrat, Helvetica, Arial; font-size: 20px; margin: 0px 0px 0.8em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(58, 57, 57); line-height: 1.8; transition: all 0.3s ease 0s; text-align: center;\">CHI TIẾT SẢN PHẨM&nbsp;|&nbsp;Y&Ecirc;U CẦU B&Aacute;O GI&Aacute;&nbsp;|&nbsp;ĐĂNG K&Yacute; L&Aacute;I THỬ&nbsp;</h3>\r\n<div style=\"text-align: center;\">&nbsp;</div>\r\n<table width=\"90%\" border=\"1\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\">\r\n    <tbody>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><span style=\"font-size: larger;\"><strong><br />\r\n            Phi&ecirc;n bản<br />\r\n            <br type=\"_moz\" />\r\n            </strong></span></td>\r\n            <td style=\"text-align: center;\"><span style=\"font-size: medium;\"><strong>Gi&aacute; Đặc Biệt Th&aacute;ng 12</strong></span></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            4&times;4.AT MIVEC<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">&nbsp;770.500.000</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            4X2.AT ATHLETE<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">725.500.000</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            4&times;2.AT MIVEC<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">685.5</strong><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">0</strong><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">0.000</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            4&times;4.MT<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">646.500.000</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            4&times;2.AT<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">586.500.000</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            4&times;2.MT<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">555.500.000</strong></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n<div style=\"text-align: center;\"><br />\r\n<br />\r\n<div><span style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px;\">Đơn vị gi&aacute;: VNĐ</span>&nbsp;</div>\r\n<span style=\"text-align: start;\">&nbsp;</span>\r\n<div><img src=\"/demo1/tinhchi/hinhanh_fckeditor/Xpander AT.gif\" width=\"490\" height=\"257\" alt=\"\" /></div>\r\n<br style=\"text-align: start;\" />\r\n<br style=\"text-align: start;\" />\r\n<h3 class=\"price-title\" style=\"border: 0px; font-family: Montserrat, Helvetica, Arial; font-size: 20px; margin: 0px 0px 0.8em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(58, 57, 57); line-height: 1.8; transition: all 0.3s ease 0s;\"><span style=\"color: rgb(255, 0, 0);\">GI&Aacute; XE ALL NEW XPANDER TẠI MITSUBISHI QUẢNG NAM</span></h3>\r\n<h3 style=\"border: 0px; font-family: Montserrat, Helvetica, Arial; font-size: 20px; margin: 0px 0px 0.8em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(58, 57, 57); line-height: 1.8; transition: all 0.3s ease 0s;\">CHI TIẾT SẢN PHẨM&nbsp;|&nbsp;Y&Ecirc;U CẦU B&Aacute;O GI&Aacute;&nbsp;|&nbsp;ĐĂNG K&Yacute; L&Aacute;I THỬ&nbsp;</h3>\r\n<div>&nbsp;</div>\r\n<table width=\"90%\" border=\"1\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\">\r\n    <tbody>\r\n        <tr>\r\n            <td><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">\r\n            <div style=\"text-align: center;\"><br />\r\n            Phi&ecirc;n bản</div>\r\n            <br type=\"_moz\" />\r\n            </strong></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">Gi&aacute; b&aacute;n lẻ th&aacute;ng 12</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            Xpander MT<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">550.000.000</b></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            Xpander AT<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">620.000.000</b></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n<div><br />\r\n<span style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px;\">Đơn vị gi&aacute;: VNĐ</span>&nbsp;<br />\r\n<br />\r\n&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>'),
(8, 'nh&acirc;t an en<br />', '<font face=\"Arial\"><span style=\"line-height: 18px;\">hướng dẫn thanh to&aacute;n</span></font>'),
(5, '<input width=\"108\" type=\"image\" height=\"496\" src=\"http://localhost/hinhanh_fckeditor/image/lien8.gif\" />', '<iframe width=\"218\" height=\"218\" frameborder=\"0\" src=\"http://www.youtube.com/embed/EMrn_IcEYjo\" allowfullscreen=\"\"></iframe><br />\r\n<br />\r\n<iframe width=\"218\" height=\"218\" src=\"http://www.youtube.com/embed/YTS-0b0-sVw\" frameborder=\"0\" allowfullscreen></iframe>'),
(6, 'co lenen<br />\r\n<div id=\"eJOY__extension_root\" style=\"all: unset;\">&nbsp;</div>', '<iframe width=\"100%\" height=\"350\" src=\"https://www.youtube.com/embed/6s5L3nLs1VA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');
INSERT INTO `du_lieu_1_tin` (`id`, `noidung_en`, `noidung`) VALUES
(9, 'Hỗ trợ', '<h1 class=\"news-title\" style=\"margin: 0px 0px 10px; padding: 0px; outline: none medium; font-family: Tahoma; font-size: 28px; font-weight: normal; line-height: 1.3;\">\r\n<p style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><strong>GIAO NHẬN H&Agrave;NG</strong></span></span></p>\r\n</h1>\r\n<h4 style=\"font-weight: normal; color: rgb(17, 17, 17); font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">1. Khi n&agrave;o th&igrave; t&ocirc;i nhận được h&agrave;ng?</span></span></h4>\r\n<h1 class=\"news-title\" style=\"margin: 0px 0px 10px; padding: 0px; outline: none medium; font-family: Tahoma; font-size: 28px; font-weight: normal; line-height: 1.3;\">\r\n<p class=\"MsoNormal\" style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">Th&ocirc;ng thường&nbsp;</span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp;sẽ giao h&agrave;ng cho bạn trong khoảng từ 2 đến 6 ng&agrave;y l&agrave;m việc kể từ khi bạn đăng k&yacute; mua (địa chỉ giao h&agrave;ng tại c&aacute;c quận c&agrave;ng gần trung t&acirc;m th&igrave; thời gian giao <br />\r\n<br />\r\nh&agrave;ng sẽ c&agrave;ng ngắn). Tuy nhi&ecirc;n, cũng c&oacute; trường hợp việc giao h&agrave;ng k&eacute;o d&agrave;i hơn 6 ng&agrave;y l&agrave;m việc, <br />\r\n<br />\r\nnhưng chỉ xảy ra trong những t&igrave;nh huống bất khả kh&aacute;ng sau:</span></span></p>\r\n<ul type=\"disc\" style=\"list-style: none; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\">\r\n    <li class=\"MsoNormal\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">Nh&acirc;n vi&ecirc;n&nbsp;<a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a>&nbsp;li&ecirc;n lạc với bạn qua điện thoại kh&ocirc;ng được n&ecirc;n kh&ocirc;ng thể giao h&agrave;ng.</span></span></li>\r\n    <li class=\"MsoNormal\">&nbsp;</li>\r\n    <li class=\"MsoNormal\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">Địa chỉ giao h&agrave;ng bạn cung cấp kh&ocirc;ng ch&iacute;nh x&aacute;c hoặc kh&oacute; t&igrave;m.</span></span></li>\r\n    <li class=\"MsoNormal\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">Số lượng đơn h&agrave;ng của&nbsp;<a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a>&nbsp;tăng đột biến khiến đội giao nhận tăng theo chưa kịp.</span></span></li>\r\n    <li class=\"MsoNormal\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">Đối t&aacute;c cung cấp h&agrave;ng cho&nbsp;<font color=\"#ff0000\"><b><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-weight: normal; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a>&nbsp;</b></font>chậm hơn dự kiến khiến việc giao h&agrave;ng bị chậm lại.</span></span></li>\r\n</ul>\r\n</h1>\r\n<h4 style=\"font-weight: normal; color: rgb(17, 17, 17); font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">2. Ph&iacute; giao h&agrave;ng l&agrave; bao nhi&ecirc;u?</span></span></h4>\r\n<h1 class=\"news-title\" style=\"margin: 0px 0px 10px; padding: 0px; outline: none medium; font-family: Tahoma; font-size: 28px; font-weight: normal; line-height: 1.3;\"><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); text-align: justify; font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a>\r\n<p class=\"MsoNormal\" style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp;giao h&agrave;ng&nbsp;<span style=\"color: black;\">miễn ph&iacute;</span>&nbsp;hoặc c&oacute; ph&iacute; t&ugrave;y theo deal (</span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><font color=\"#ff0000\"><b>&nbsp;</b></font><i>sẽ c&oacute; th&ocirc;ng b&aacute;o cụ thể ở phần chi tiết trong mỗi deal</i>). Việc t&iacute;nh phụ ph&iacute; giao h&agrave;ng được hiểu để hỗ trợ t&agrave;i ch&iacute;nh cho nh&acirc;n vi&ecirc;n giao nhận. Phụ ph&iacute; giao h&agrave;ng sẽ được<font color=\"#ff0000\"><b>&nbsp;</b></font></span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp;t&iacute;nh to&aacute;n v&agrave; b&aacute;o cho bạn biết ngay thời điểm bạn đăng k&yacute; mua h&agrave;ng.</span></span></p>\r\n</h1>\r\n<h4 style=\"font-weight: normal; color: rgb(17, 17, 17); font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">3. L&agrave;m sao t&ocirc;i theo d&otilde;i đơn h&agrave;ng?</span></span></h4>\r\n<h1 class=\"news-title\" style=\"margin: 0px 0px 10px; padding: 0px; outline: none medium; font-family: Tahoma; font-size: 28px; font-weight: normal; line-height: 1.3;\">\r\n<p class=\"MsoNormal\" style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">Bạn c&oacute; thể v&agrave;o xem đơn h&agrave;ng đ&atilde; đăng k&yacute; tại&nbsp;</span></span><a href=\"http://hangquocte.com/\"><span style=\"font-size: medium;\">http://hangquocte.com</span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp;Tại đ&acirc;y, bạn sẽ biết được <br />\r\n<br />\r\ntrạng th&aacute;i đơn h&agrave;ng của m&igrave;nh.</span></span></p>\r\n</h1>\r\n<h4 style=\"font-weight: normal; color: rgb(17, 17, 17); font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">4. Tại sao trạng th&aacute;i giao h&agrave;ng l&agrave; &quot;Đ&atilde; giao&quot; m&agrave; t&ocirc;i vẫn chưa nhận được h&agrave;ng?</span></span></h4>\r\n<h1 class=\"news-title\" style=\"margin: 0px 0px 10px; padding: 0px; outline: none medium; font-family: Tahoma; font-size: 28px; line-height: 1.3;\">\r\n<p class=\"MsoNormal\" style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><span style=\"font-weight: normal;\">Bạn n&ecirc;n kiểm tra xem c&oacute; ai đ&oacute; đ&atilde; nhận h&agrave;ng gi&uacute;p bạn kh&ocirc;ng (đồng nghiệp, người nh&agrave;, bạn b&egrave;, <br />\r\n<br />\r\nh&agrave;ng x&oacute;m, v.v&hellip;). Nếu vẫn chưa t&igrave;m ra, bạn vui l&ograve;ng li&ecirc;n hệ số hotline: </span>0935.650057&nbsp;<span style=\"font-weight: normal;\">để th&ocirc;ng b&aacute;o cho&nbsp;</span></span></span><a href=\"http://hangquocte.com/\" style=\"font-weight: normal; margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-weight: normal; font-size: medium;\"><span style=\"font-family: Arial;\">.</span></span></p>\r\n</h1>\r\n<h4 style=\"font-weight: normal; color: rgb(17, 17, 17); font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">5. Tại sao trạng th&aacute;i đơn h&agrave;ng của t&ocirc;i l&agrave; &quot;Chưa giao được&quot; hoặc &quot;Kh&ocirc;ng giao được&quot;?</span></span></h4>\r\n<h1 class=\"news-title\" style=\"margin: 0px 0px 10px; padding: 0px; outline: none medium; font-family: Tahoma; font-size: 28px; font-weight: normal; line-height: 1.3;\">\r\n<p class=\"MsoNormal\" style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">Khi&nbsp;</span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp;giao h&agrave;ng cho bạn kh&ocirc;ng th&agrave;nh c&ocirc;ng, đơn h&agrave;ng của bạn sẽ được trả về v&agrave; ghi nhận l&agrave; &quot;Chưa giao được&quot;. L&yacute; do phổ biến nhất của việc n&agrave;y l&agrave; do nh&acirc;n vi&ecirc;n&nbsp;</span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp;kh&ocirc;ng thể li&ecirc;n lạc được với bạn qua điện thoại để hẹn thời gian giao h&agrave;ng.&nbsp;</span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp;sẽ tiến h&agrave;nh giao lại cho bạn th&ecirc;m 1 lần nữa. Nếu vẫn kh&ocirc;ng th&agrave;nh c&ocirc;ng, đơn h&agrave;ng sẽ được chuyển th&agrave;nh trạng th&aacute;i &quot;Kh&ocirc;ng giao được&quot;. Nếu bạn vẫn muốn nhận <br />\r\n<br />\r\nh&agrave;ng, bạn cần phải đăng k&yacute; mua lại.</span></span></p>\r\n</h1>\r\n<h4 style=\"font-weight: normal; color: rgb(17, 17, 17); font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">6. Trạng th&aacute;i đơn h&agrave;ng của t&ocirc;i l&agrave; &quot;Đang giao&quot;, khi n&agrave;o t&ocirc;i nhận được h&agrave;ng?</span></span></h4>\r\n<h1 class=\"news-title\" style=\"margin: 0px 0px 10px; padding: 0px; outline: none medium; font-family: Tahoma; font-size: 28px; font-weight: normal; line-height: 1.3;\">\r\n<p class=\"MsoNormal\" style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">Trạng th&aacute;i &quot;Đang giao&quot; c&oacute; nghĩa l&agrave; đơn h&agrave;ng đang được nh&acirc;n vi&ecirc;n&nbsp;</span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp;đi giao. Bạn sẽ nhận được h&agrave;ng trong v&ograve;ng 48 tiếng. (lưu &yacute;: đừng qu&ecirc;n mang theo điện thoại để nh&acirc;n vi&ecirc;n&nbsp;</span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp;c&oacute; thể li&ecirc;n hệ giao h&agrave;ng).</span></span></p>\r\n</h1>\r\n<h4 style=\"font-weight: normal; color: rgb(17, 17, 17); font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">7. T&ocirc;i c&oacute; đặt nhiều h&agrave;ng c&ugrave;ng thời điểm, tất cả c&oacute; được giao c&ugrave;ng l&uacute;c?</span></span></h4>\r\n<h1 class=\"news-title\" style=\"margin: 0px 0px 10px; padding: 0px; outline: none medium; font-family: Tahoma; font-size: 28px; font-weight: normal; line-height: 1.3;\"><span style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(0, 0, 255); text-align: justify; font-family: Arial; font-size: medium; line-height: 48px;\"><strong style=\"margin: 0px; padding: 0px;\"><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); text-align: justify; font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"color: rgb(0, 0, 255);\">hangquocte.com</span></a>&nbsp;</strong></span><span style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; text-align: justify; font-size: medium;\"><span style=\"font-family: Arial;\">sẽ cố gắng gom tất cả đơn h&agrave;ng của bạn để giao c&ugrave;ng l&uacute;c. Tuy nhi&ecirc;n nếu sản phẩm n&agrave;o chưa c&oacute; h&agrave;ng th&igrave;&nbsp;</span></span><a href=\"http://hangquocte.com/\" style=\"text-align: justify; margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; text-align: justify; font-size: medium;\"><span style=\"font-family: Arial;\"><font color=\"#ff0000\"><b>&nbsp;</b></font>sẽ t&aacute;ch ra để c&oacute; thể giao những sản phẩm c&ograve;n lại cho bạn c&agrave;ng sớm c&agrave;ng tốt.</span></span><strong style=\"color: rgb(0, 0, 255); font-family: Arial; font-size: medium; line-height: 48px; text-align: justify; margin: 0px; padding: 0px;\">&nbsp;<br />\r\n</strong><span style=\"font-family: Tahoma; font-size: medium;\"><span style=\"font-family: Arial;\">8. Phạm vi giao h&agrave;ng của&nbsp;</span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-family: Tahoma; font-size: medium;\"><span style=\"font-family: Arial;\"><strong>&nbsp;</strong>l&agrave; những địa b&agrave;n n&agrave;o?</span></span></h1>\r\n<h1 class=\"news-title\" style=\"margin: 0px 0px 10px; padding: 0px; outline: none medium; font-family: Tahoma; font-size: 28px; font-weight: normal; line-height: 1.3;\">\r\n<p class=\"MsoNormal\" style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">Hiện tại,&nbsp;</span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp;c&oacute; thể giao h&agrave;ng tại c&aacute;c địa b&agrave;n sau:</span></span></p>\r\n<ul type=\"disc\" style=\"list-style: none; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\">\r\n    <li class=\"MsoNormal\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><strong>HCM</strong>: Quận 1, 2, 3, 4, 5, 7, 8, 10, Quận T&acirc;n B&igrave;nh, Quận B&igrave;nh Thạnh, Quận Ph&uacute; Nhuận.</span></span></li>\r\n</ul>\r\n<p style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><br />\r\nC&aacute;c khu vực c&ograve;n lại như:</span></span></p>\r\n<p style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><span style=\"color: rgb(0, 0, 0);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />\r\n&nbsp; - Quận Thủ Đức: gồm c&aacute;c phường Linh Trung, Linh Chiểu, Linh Xu&acirc;n, B&igrave;nh Chiểu, Tam <br />\r\n<br />\r\nB&igrave;nh.</span></span></span></p>\r\n<p style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><span style=\"color: rgb(0, 0, 0);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />\r\n&nbsp; - Quận 2: phường C&aacute;t L&aacute;i</span></span></span></p>\r\n<p style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp; &nbsp; &nbsp; &nbsp; <br />\r\n&nbsp; - Quận 6: Đường Hậu Giang, Metro B&igrave;nh Ph&uacute;</span></span></p>\r\n<p style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><span style=\"color: rgb(0, 0, 0);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />\r\n&nbsp; - Quận 8: gồm phường 15 v&agrave; 16</span></span></span></p>\r\n<p style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><span style=\"color: rgb(0, 0, 0);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />\r\n&nbsp;&nbsp; - C&aacute;c Quận/ Huyện Củ Chi, H&oacute;c M&ocirc;n, B&igrave;nh Ch&aacute;nh, Quận 9, Nh&agrave; B&egrave;.<br />\r\n&nbsp; &nbsp; <br />\r\n&nbsp; &nbsp; &nbsp; - C&aacute;c tỉnh: B&igrave;nh Dương, Đồng Nai</span></span></span></p>\r\n<p style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><span style=\"color: rgb(0, 0, 0);\"><br />\r\nCh&uacute;ng t&ocirc;i sẽ giao h&agrave;ng đến tận tay qu&yacute; kh&aacute;ch v&agrave;o ng&agrave;y h&ocirc;m sau kể từ khi qu&yacute; kh&aacute;ch gửi đơn <br />\r\n<br />\r\nh&agrave;ng cho ch&uacute;ng t&ocirc;i v&igrave; l&yacute; do khoảng c&aacute;ch. Rất mong qu&yacute; kh&aacute;ch th&ocirc;ng cảm v&agrave; giữ li&ecirc;n lạc bằng điện <br />\r\n<br />\r\nthoại để nh&acirc;n vi&ecirc;n của ch&uacute;ng t&ocirc;i thuận lợi trong việc giao h&agrave;ng cho qu&yacute; khac&nbsp;<br />\r\n</span></span></span></p>\r\n</h1>\r\n<h4 style=\"font-weight: normal; color: rgb(17, 17, 17); font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">9. T&ocirc;i c&oacute; thể nhận h&agrave;ng tại Văn ph&ograve;ng&nbsp;</span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">?</span></span></h4>\r\n<h1 class=\"news-title\" style=\"margin: 0px 0px 10px; padding: 0px; outline: none medium; font-family: Tahoma; font-size: 28px; font-weight: normal; line-height: 1.3;\">\r\n<p class=\"MsoNormal\" style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">C&oacute; thể. Thời gian nhận h&agrave;ng trong giờ l&agrave;m việc, từ 8h30 &ndash; 12h00 v&agrave; từ 13h30 &ndash; 17h30.</span></span></p>\r\n</h1>\r\n<h4 style=\"font-weight: normal; color: rgb(17, 17, 17); font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">10. &nbsp;</span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><font color=\"#ff0000\">&nbsp;</font>c&oacute; giao h&agrave;ng ở những tỉnh th&agrave;nh kh&aacute;c.?</span></span></h4>\r\n<h4 style=\"font-weight: normal; color: rgb(17, 17, 17); text-align: justify;\"><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><font face=\"Arial\" size=\"3\">&nbsp;sẽ giao h&agrave;ng đến tận tay qu&yacute; kh&aacute;ch h&agrave;ng c&oacute; những đơn h&agrave;ng ở trung t&acirc;m những th&agrave;nh phố hoặc quận huyện m&agrave; đối t&aacute;c li&ecirc;n kết của ch&uacute;ng t&ocirc;i c&oacute; thể giao h&agrave;ng được, bằng <br />\r\n<br />\r\ndịch vụ li&ecirc;n kết của ch&uacute;ng t&ocirc;i. Ngay khi ch&uacute;ng t&ocirc;i nhận được th&ocirc;ng b&aacute;o về việc thanh to&aacute;n h&oacute;a <br />\r\n<br />\r\nđơn của qu&yacute; kh&aacute;ch đ&atilde; được thực hiện sẽ tiến h&agrave;nh gửi h&agrave;ng ngay cho qu&yacute; kh&aacute;ch.</font></h4>\r\n<h4 style=\"font-weight: normal; color: rgb(17, 17, 17); font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">11. T&ocirc;i muốn g&oacute;p &yacute; về c&ocirc;ng t&aacute;c giao nhận của<span style=\"color: rgb(0, 0, 0);\">&nbsp;</span></span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><span style=\"color: rgb(0, 0, 0);\">?</span></span></span></h4>\r\n<h1 class=\"news-title\" style=\"margin: 0px 0px 10px; padding: 0px; outline: none medium; font-family: Tahoma; font-size: 28px; font-weight: normal; line-height: 1.3;\"><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); text-align: justify; font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a>\r\n<p class=\"MsoNormal\" style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp;rất cảm ơn v&agrave; khuyến kh&iacute;ch bạn đ&oacute;ng g&oacute;p &yacute; kiến gi&uacute;p&nbsp;</span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp;ho&agrave;n thiện để phục vụ bạn tốt hơn. Bạn vui l&ograve;ng gửi c&aacute;c &yacute; kiến v&agrave;o địa chỉ<span style=\"color: rgb(255, 0, 0);\">&nbsp;</span></span></span><a href=\"http://hangquocte.com/\"><strong><span style=\"font-size: medium;\">http://hangquocte.com</span></strong></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><span style=\"color: rgb(255, 0, 0);\">&nbsp;&nbsp;</span>&nbsp;&nbsp;<br />\r\n&nbsp;<br />\r\n</span></span><span style=\"color: rgb(0, 0, 255);\"><span style=\"font-size: large;\"><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"color: rgb(0, 0, 255);\"><span style=\"margin: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></span></a><span style=\"font-family: Arial;\">&nbsp;rất h&acirc;n hạnh được phục vụ qu&yacute; kh&aacute;ch...!<br />\r\n<br />\r\n<img src=\"/demo1/tinhchi/hinhanh_fckeditor/panel ảnh b&igrave;a webside(4).jpg\" width=\"750\" height=\"350\" alt=\"\" /><br />\r\n<br />\r\n<br type=\"_moz\" />\r\n</span></span></span></p>\r\n<table width=\"100%\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\">\r\n    <tbody>\r\n        <tr>\r\n            <td><span style=\"color: rgb(192, 192, 192); font-family: Arial; font-size: medium; line-height: 24px;\">Hang quoc te|H&agrave;ng Quốc Tế| H&agrave;ng gi&aacute; rẻ| Hang gia re | thuc pham chuc nang | thực phẩm chức năng | glucosamine | dau ca| sữa ensure| fish oil| dầu c&aacute; fish oil| l&agrave;m trắng da| l&agrave;m đẹp da| lam trang da| lam dep da| giam can| giảm c&acirc;n| thuoc giam can| thuốc giảm c&acirc;n| colagen | collagen| nhau thai cuu| nhau thai cừu| omega 3| xương khớp| xuong khop | tảo nhật| tao nhat| sụn c&aacute; mập| xun ca map| xụn c&aacute; mập| sun ca map| beautiful slim| pure white| tảo lục| tao luc| tảo v&agrave;ng| tao vang| omega 369| omega 3 6 9 | omega369 | l&agrave;m đẹp da | đẹp da | chống n&aacute;m | chống n&aacute;m da | sản phẩm | san pham | sản phẩm l&agrave;m đẹp | san pham lam dep | thực phẩm bổ sung | thuc pham bo sung | collagen chống l&atilde;o h&oacute;a | collagen l&agrave;m đẹp da | thuốc giảm c&acirc;n beautyful slim | power slim | collagen slim | giảm c&acirc;n slim | giảm c&acirc;n hiệu quả | giảm c&acirc;n nhanh ch&oacute;ng | h&agrave;ng nhập khẩu | thực phẩm chức năng nhập khẩu | thực phẩm bổ sung dinh dưỡng | thuc pham bo sung dinh duong | bổ sung dưỡng chất cho cơ thể | bo sung duong chat cho co the | vitamin | bổ sung vi ta min | bổ sung vitamin a | bổ sung vitamin b | kho&aacute;ng chất | trẻ khỏe | l&agrave;m đẹp | tăng cường sinh lực | tang cuong sinh luc | hỗ trợ tr&iacute; nhớ | &nbsp;hỗ trợ xương khớp | giảm c&acirc;n an to&agrave;n | giam can an toan | hangquocte | hangquocte.com | bổ mắt | hỗ trợ thị lực | tin tức | bổ gan | bổ t&ugrave;y | bổ thận | ph&aacute;i đẹp | thon gọn | trở n&ecirc;n đẹp hơn | sức khỏ | gia đ&igrave;nh | sức khỏe cho mọi người | ti&ecirc;u d&ugrave;ng th&ocirc;ng minh | dưỡng chất cần thiết | tảo nhật bản | tảo xoắn | tảo | tảo mặt trời | collagen &uacute;c | collagen mỹ | sụn vi c&aacute; mập &uacute;c | sụn vi c&aacute; mập mỹ | glucosamine &uacute;c| glucosamine mỹ | collagen nhật | collagen nhập khẩu | sản phẩm tin d&ugrave;ng | sản phẩm hiệu quả | bổ sung canxi | bổ sung kẽm | cần thiết | th&ocirc;ng tin | mới | hot | vip | mua ở đ&acirc;u | ở đ&acirc;u | h&igrave;nh ảnh | li&ecirc;n hệ | v&igrave; sao | như thế n&agrave;o | gi&aacute; rẻ | rẻ nhất | gi&aacute; tốt nhất | giảm mỡ bụng | giảm mỡ đ&ugrave;i | tan mỡ bụng | tan mỡ đ&ugrave;i | ti&ecirc;u hao mỡ thừa | đốt ch&aacute;y mỡ thừa |</span></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n<table width=\"100%\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\">\r\n    <tbody>\r\n        <tr>\r\n            <td><span style=\"color: rgb(192, 192, 192); font-family: Arial; font-size: medium; line-height: 24px;\">Hang quoc te|H&agrave;ng Quốc Tế| H&agrave;ng gi&aacute; rẻ| Hang gia re | thuc pham chuc nang | thực phẩm chức năng | glucosamine | dau ca| sữa ensure| fish oil| dầu c&aacute; fish oil| l&agrave;m trắng da| l&agrave;m đẹp da| lam trang da| lam dep da| giam can| giảm c&acirc;n| thuoc giam can| thuốc giảm c&acirc;n| colagen | collagen| nhau thai cuu| nhau thai cừu| omega 3| xương khớp| xuong khop | tảo nhật| tao nhat| sụn c&aacute; mập| xun ca map| xụn c&aacute; mập| sun ca map| beautiful slim| pure white| tảo lục| tao luc| tảo v&agrave;ng| tao vang| omega 369| omega 3 6 9 | omega369 | l&agrave;m đẹp da | đẹp da | chống n&aacute;m | chống n&aacute;m da | sản phẩm | san pham | sản phẩm l&agrave;m đẹp | san pham lam dep | thực phẩm bổ sung | thuc pham bo sung | collagen chống l&atilde;o h&oacute;a | collagen l&agrave;m đẹp da | thuốc giảm c&acirc;n beautyful slim | power slim | collagen slim | giảm c&acirc;n slim | giảm c&acirc;n hiệu quả | giảm c&acirc;n nhanh ch&oacute;ng | h&agrave;ng nhập khẩu | thực phẩm chức năng nhập khẩu | thực phẩm bổ sung dinh dưỡng | thuc pham bo sung dinh duong | bổ sung dưỡng chất cho cơ thể | bo sung duong chat cho co the | vitamin | bổ sung vi ta min | bổ sung vitamin a | bổ sung vitamin b | kho&aacute;ng chất | trẻ khỏe | l&agrave;m đẹp | tăng cường sinh lực | tang cuong sinh luc | hỗ trợ tr&iacute; nhớ | &nbsp;hỗ trợ xương khớp | giảm c&acirc;n an to&agrave;n | giam can an toan | hangquocte | hangquocte.com | bổ mắt | hỗ trợ thị lực | tin tức | bổ gan | bổ t&ugrave;y | bổ thận | ph&aacute;i đẹp | thon gọn | trở n&ecirc;n đẹp hơn | sức khỏ | gia đ&igrave;nh | sức khỏe cho mọi người | ti&ecirc;u d&ugrave;ng th&ocirc;ng minh | dưỡng chất cần thiết | tảo nhật bản | tảo xoắn | tảo | tảo mặt trời | collagen &uacute;c | collagen mỹ | sụn vi c&aacute; mập &uacute;c | sụn vi c&aacute; mập mỹ | glucosamine &uacute;c| glucosamine mỹ | collagen nhật | collagen nhập khẩu | sản phẩm tin d&ugrave;ng | sản phẩm hiệu quả | bổ sung canxi | bổ sung kẽm | cần thiết | th&ocirc;ng tin | mới | hot | vip | mua ở đ&acirc;u | ở đ&acirc;u | h&igrave;nh ảnh | li&ecirc;n hệ | v&igrave; sao | như thế n&agrave;o | gi&aacute; rẻ | rẻ nhất | gi&aacute; tốt nhất | giảm mỡ bụng | giảm mỡ đ&ugrave;i | tan mỡ bụng | tan mỡ đ&ugrave;i | ti&ecirc;u hao mỡ thừa | đốt ch&aacute;y mỡ thừa |</span></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n<table width=\"100%\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\">\r\n    <tbody>\r\n        <tr>\r\n            <td><span style=\"color: rgb(192, 192, 192); font-family: Arial; font-size: medium; line-height: 24px;\">Hang quoc te|H&agrave;ng Quốc Tế| H&agrave;ng gi&aacute; rẻ| Hang gia re | thuc pham chuc nang | thực phẩm chức năng | glucosamine | dau ca| sữa ensure| fish oil| dầu c&aacute; fish oil| l&agrave;m trắng da| l&agrave;m đẹp da| lam trang da| lam dep da| giam can| giảm c&acirc;n| thuoc giam can| thuốc giảm c&acirc;n| colagen | collagen| nhau thai cuu| nhau thai cừu| omega 3| xương khớp| xuong khop | tảo nhật| tao nhat| sụn c&aacute; mập| xun ca map| xụn c&aacute; mập| sun ca map| beautiful slim| pure white| tảo lục| tao luc| tảo v&agrave;ng| tao vang| omega 369| omega 3 6 9 | omega369 | l&agrave;m đẹp da | đẹp da | chống n&aacute;m | chống n&aacute;m da | sản phẩm | san pham | sản phẩm l&agrave;m đẹp | san pham lam dep | thực phẩm bổ sung | thuc pham bo sung | collagen chống l&atilde;o h&oacute;a | collagen l&agrave;m đẹp da | thuốc giảm c&acirc;n beautyful slim | power slim | collagen slim | giảm c&acirc;n slim | giảm c&acirc;n hiệu quả | giảm c&acirc;n nhanh ch&oacute;ng | h&agrave;ng nhập khẩu | thực phẩm chức năng nhập khẩu | thực phẩm bổ sung dinh dưỡng | thuc pham bo sung dinh duong | bổ sung dưỡng chất cho cơ thể | bo sung duong chat cho co the | vitamin | bổ sung vi ta min | bổ sung vitamin a | bổ sung vitamin b | kho&aacute;ng chất | trẻ khỏe | l&agrave;m đẹp | tăng cường sinh lực | tang cuong sinh luc | hỗ trợ tr&iacute; nhớ | &nbsp;hỗ trợ xương khớp | giảm c&acirc;n an to&agrave;n | giam can an toan | hangquocte | hangquocte.com | bổ mắt | hỗ trợ thị lực | tin tức | bổ gan | bổ t&ugrave;y | bổ thận | ph&aacute;i đẹp | thon gọn | trở n&ecirc;n đẹp hơn | sức khỏ | gia đ&igrave;nh | sức khỏe cho mọi người | ti&ecirc;u d&ugrave;ng th&ocirc;ng minh | dưỡng chất cần thiết | tảo nhật bản | tảo xoắn | tảo | tảo mặt trời | collagen &uacute;c | collagen mỹ | sụn vi c&aacute; mập &uacute;c | sụn vi c&aacute; mập mỹ | glucosamine &uacute;c| glucosamine mỹ | collagen nhật | collagen nhập khẩu | sản phẩm tin d&ugrave;ng | sản phẩm hiệu quả | bổ sung canxi | bổ sung kẽm | cần thiết | th&ocirc;ng tin | mới | hot | vip | mua ở đ&acirc;u | ở đ&acirc;u | h&igrave;nh ảnh | li&ecirc;n hệ | v&igrave; sao | như thế n&agrave;o | gi&aacute; rẻ | rẻ nhất | gi&aacute; tốt nhất | giảm mỡ bụng | giảm mỡ đ&ugrave;i | tan mỡ bụng | tan mỡ đ&ugrave;i | ti&ecirc;u hao mỡ thừa | đốt ch&aacute;y mỡ thừa |</span></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n<table width=\"100%\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"font-family: Arial;\">\r\n    <tbody>\r\n        <tr>\r\n            <td><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><span style=\"line-height: 24px;\">&nbsp;</span><span style=\"color: rgb(192, 192, 192);\"><span style=\"line-height: 24px;\">Hang quoc te|H&agrave;ng Quốc Tế| H&agrave;ng gi&aacute; rẻ| Hang gia re | thuc pham chuc nang | thực phẩm chức năng | glucosamine | dau ca| sữa ensure| fish oil| dầu c&aacute; fish oil| l&agrave;m trắng da| l&agrave;m đẹp da| lam trang da| lam dep da| giam can| giảm c&acirc;n| thuoc giam can| thuốc giảm c&acirc;n| colagen | collagen| nhau thai cuu| nhau thai cừu| omega 3| xương khớp| xuong khop | tảo nhật| tao nhat| sụn c&aacute; mập| xun ca map| xụn c&aacute; mập| sun ca map| beautiful slim| pure white| tảo lục| tao luc| tảo v&agrave;ng| tao vang| omega 369| omega 3 6 9 | omega369 | l&agrave;m đẹp da | đẹp da | chống n&aacute;m | chống n&aacute;m da | sản phẩm | san pham | sản phẩm l&agrave;m đẹp | san pham lam dep | thực phẩm bổ sung | thuc pham bo sung | collagen chống l&atilde;o h&oacute;a | collagen l&agrave;m đẹp da | thuốc giảm c&acirc;n beautyful slim | power slim | collagen slim | giảm c&acirc;n slim | giảm c&acirc;n hiệu quả | giảm c&acirc;n nhanh ch&oacute;ng | h&agrave;ng nhập khẩu | thực phẩm chức năng nhập khẩu | thực phẩm bổ sung dinh dưỡng | thuc pham bo sung dinh duong | bổ sung dưỡng chất cho cơ thể | bo sung duong chat cho co the | vitamin | bổ sung vi ta min | bổ sung vitamin a | bổ sung vitamin b | kho&aacute;ng chất | trẻ khỏe | l&agrave;m đẹp | tăng cường sinh lực | tang cuong sinh luc | hỗ trợ tr&iacute; nhớ | &nbsp;hỗ trợ xương khớp | giảm c&acirc;n an to&agrave;n | giam can an toan | hangquocte | hangquocte.com | bổ mắt | hỗ trợ thị lực | tin tức | bổ gan | bổ t&ugrave;y | bổ thận | ph&aacute;i đẹp | thon gọn | trở n&ecirc;n đẹp hơn | sức khỏ | gia đ&igrave;nh | sức khỏe cho mọi người | ti&ecirc;u d&ugrave;ng th&ocirc;ng minh | dưỡng chất cần thiết | tảo nhật bản | tảo xoắn | tảo | tảo mặt trời | collagen &uacute;c | collagen mỹ | sụn vi c&aacute; mập &uacute;c | sụn vi c&aacute; mập mỹ | glucosamine &uacute;c| glucosamine mỹ | collagen nhật | collagen nhập khẩu | sản phẩm tin d&ugrave;ng | sản phẩm hiệu quả | bổ sung canxi | bổ sung kẽm | cần thiết | th&ocirc;ng tin | mới | hot | vip | mua ở đ&acirc;u | ở đ&acirc;u | h&igrave;nh ảnh | li&ecirc;n hệ | v&igrave; sao | như thế n&agrave;o | gi&aacute; rẻ | rẻ nhất | gi&aacute; tốt nhất | giảm mỡ bụng | giảm mỡ đ&ugrave;i | tan mỡ bụng | tan mỡ đ&ugrave;i | ti&ecirc;u hao mỡ thừa | đốt ch&aacute;y mỡ thừa |</span></span></span></span></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n</h1>\r\n<div class=\"news-content\" style=\"margin: 0px; padding: 0px; outline: none medium; font-size: 14px; line-height: 24px; font-family: Arial;\">\r\n<p style=\"margin: 6px 0px; padding: 0px; outline: none medium;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><br />\r\n&nbsp;</span></span></p>\r\n</div>'),
(10, 'Hoi dap', 'hoi dap'),
(11, 'Doi tra hang', '<h1 style=\"line-height: 3rem; margin-top: 0px; margin-right: 0px; margin-left: 0px; padding-bottom: 0px; margin-bottom: 10px !important;\">\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0px 0px 5px; color: rgb(34, 34, 34); font-weight: normal; line-height: normal; text-align: justify;\">&nbsp;đổi trả h&agrave;ng....</p>\r\n</h1>'),
(12, 'Hop tac', 'giới thiệu về ely'),
(13, 'huong dan xem hang', 'huong dan xem hang'),
(14, 'cau hoi thuong gap', '<div style=\"text-align: center;\"><font color=\"#ff0000\" size=\"6\"><b><br />\r\nBẢNG GI&Aacute; ĐANG CẬP NHẬT</b></font></div>'),
(15, 'giao hàng thu tiền', 'giao hàng thu tiền'),
(16, 'thanh toán trực tuyến', 'thanh toán trực tuyến'),
(17, 'h&igrave;nh thức thanh to&aacute;n', '<p class=\"MsoNormal\"><b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">Sơn Aqua Nano</span></b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">&nbsp;l&agrave; một sản phẩm chất lượng cao được ph&aacute;t triển bởi&nbsp;<b>Tập đo&agrave;n Green House</b>&nbsp;tại Việt Nam. Được thiết kế đặc biệt để mang lại bề mặt ho&agrave;n thiện tuyệt vời v&agrave; bảo vệ cho c&aacute;c bề mặt nội ngoại thất, Sơn Aqua Nano kh&ocirc;ng chỉ l&agrave; sự kết hợp ho&agrave;n hảo giữa c&ocirc;ng nghệ ti&ecirc;n tiến v&agrave; th&agrave;nh phần chất lượng, m&agrave; c&ograve;n l&agrave; lựa chọn h&agrave;ng đầu cho c&aacute;c dự &aacute;n x&acirc;y dựng v&agrave; trang tr&iacute;.<o:p></o:p></span></p>\r\n<p class=\"MsoNormal\"><b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif; color: red;\">Đặc Điểm Nổi Bật:</span></b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif; color: red;\"><o:p></o:p></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 0.5in; text-indent: -0.25in;\"><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">1.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;</span></span><b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif; color: rgb(33, 95, 154);\">C&ocirc;ng Nghệ Nano Hiện Đại:</span></b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif; color: rgb(33, 95, 154);\">&nbsp;</span><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">Sơn Aqua Nano sử dụng c&ocirc;ng nghệ nano ti&ecirc;n tiến, gi&uacute;p tạo ra một lớp phủ mỏng nhẹ đồng đều v&agrave; mịn m&agrave;ng, mang lại vẻ đẹp tinh tế v&agrave; bề mặt mượt m&agrave;.<o:p></o:p></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 0.5in; text-indent: -0.25in;\"><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">2.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;</span></span><b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif; color: rgb(33, 95, 154);\">Bảo Vệ Vượt Trội:</span></b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif; color: rgb(33, 95, 154);\">&nbsp;</span><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">Với khả năng chống thấm nước v&agrave; kh&aacute;ng khuẩn, Sơn Aqua Nano kh&ocirc;ng chỉ bảo vệ bề mặt khỏi ẩm ướt v&agrave; c&aacute;c t&aacute;c nh&acirc;n b&ecirc;n ngo&agrave;i, m&agrave; c&ograve;n gi&uacute;p ngăn chặn sự ph&aacute;t triển của vi khuẩn v&agrave; nấm mốc.<o:p></o:p></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 0.5in; text-indent: -0.25in;\"><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">3.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;</span></span><b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif; color: rgb(33, 95, 154);\">Bền M&agrave;u v&agrave; Bền Bề Mặt:</span></b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif; color: rgb(33, 95, 154);\">&nbsp;</span><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">Sơn Aqua Nano được chế tạo từ c&aacute;c th&agrave;nh phần chất lượng cao, đảm bảo độ bền m&agrave;u vượt trội v&agrave; khả năng chịu m&agrave;i m&ograve;n tốt, giữ cho bề mặt lu&ocirc;n mới mẻ v&agrave; bền đẹp theo thời gian.<o:p></o:p></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 0.5in; text-indent: -0.25in;\"><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">4.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;</span></span><b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif; color: rgb(33, 95, 154);\">An To&agrave;n Cho Sức Khỏe:</span></b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif; color: rgb(33, 95, 154);\">&nbsp;</span><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">Sản phẩm n&agrave;y tu&acirc;n thủ c&aacute;c ti&ecirc;u chuẩn an to&agrave;n cao nhất v&agrave; kh&ocirc;ng chứa c&aacute;c chất độc hại như ch&igrave;, thủy ng&acirc;n, hay VOC (Hợp chất hữu cơ bay hơi), đảm bảo an to&agrave;n cho sức khỏe của người sử dụng v&agrave; m&ocirc;i trường.<o:p></o:p></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 0.5in; text-indent: -0.25in;\"><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">5.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;</span></span><b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif; color: rgb(33, 95, 154);\">Ứng Dụng Đa Dạng:</span></b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif; color: rgb(33, 95, 154);\">&nbsp;</span><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">Sơn Aqua Nano ph&ugrave; hợp cho nhiều loại bề mặt nội ngoại thất, bao gồm tường, cửa, cửa sổ, tấm v&aacute;ch, v&agrave; nhiều hơn nữa. D&ugrave; l&agrave; cho c&ocirc;ng tr&igrave;nh x&acirc;y dựng mới hoặc l&agrave; qu&aacute; tr&igrave;nh trang tr&iacute; lại, Sơn Aqua Nano sẽ l&agrave; lựa chọn l&yacute; tưởng cho bất kỳ dự &aacute;n n&agrave;o.<o:p></o:p></span></p>\r\n<p><b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">Sơn Aqua Nano</span></b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">&nbsp;kh&ocirc;ng chỉ l&agrave; một lựa chọn chất lượng cho việc trang tr&iacute; v&agrave; bảo vệ bề mặt, m&agrave; c&ograve;n l&agrave; biểu tượng cho sự ti&ecirc;n tiến v&agrave; an to&agrave;n trong ng&agrave;nh c&ocirc;ng nghiệp sơn. Với khả năng bảo vệ, độ bền v&agrave; t&iacute;nh thẩm mỹ cao, sản phẩm n&agrave;y l&agrave; sự đầu tư th&ocirc;ng minh cho mọi dự &aacute;n x&acirc;y dựng v&agrave; trang tr&iacute;.<br />\r\n<br />\r\n</span><span style=\"color: rgb(0, 255, 0);\"><strong><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\"><span style=\"font-size: large;\"><span style=\"font-size: x-large;\">C&ocirc;ng Ty Cổ Phần Tập Đo&agrave;n GreenHouse</span></span><br />\r\n</span></strong></span></p>\r\n<p class=\"MsoNormal\"><span style=\"color: rgb(0, 255, 0);\"><strong><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\"><span style=\"color: rgb(0, 0, 0);\">Địa chỉ:</span></span></strong><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\"><span style=\"color: rgb(0, 0, 0);\"> 12 Ng&ocirc; Đức Kế, TP. Tam Kỳ, Quảng Nam<br />\r\n<strong>Hotline:</strong> 0943 1111 68</span></span><strong><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\"><br type=\"_moz\" />\r\n</span></strong></span></p>'),
(18, 'h&agrave;ng nhập khẩu', '<font size=\"3\">h&agrave;ng nhập khẩu</font>'),
(19, 'h&agrave;ng trong kho', '<iframe width=\"410\" height=\"300\" src=\"https://www.youtube.com/embed/TKutRsBM_1k\" frameborder=\"0\" allowfullscreen></iframe>'),
(20, 'th&ocirc;ng tin li&ecirc;n quan', ''),
(21, 'từ kh&oacute;a', '<a href=\"http://atvmedia.net\"><u><span style=\"font-size: x-large;\"><span style=\"color: rgb(255, 0, 0);\">từ kh&oacute;a&nbsp; </span></span></u></a><a href=\"http://hangquocte.com\"><u><span style=\"font-size: x-large;\"><span style=\"color: rgb(255, 0, 0);\">nh&acirc;t an htthth hksaj;lfj jf;lsdjf;lsd</span></span></u><strong><span style=\"font-size: medium;\"><span style=\"color: rgb(255, 0, 0);\"><br />\r\n</span></span></strong></a>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioi_thieu`
--

CREATE TABLE `gioi_thieu` (
  `id` int(11) NOT NULL,
  `hinhanh` text NOT NULL,
  `thuocloai` text NOT NULL,
  `noidung` text NOT NULL,
  `trangchu` text NOT NULL,
  `mota` text NOT NULL,
  `tieude` text NOT NULL,
  `description` text NOT NULL,
  `key` text NOT NULL,
  `title` text NOT NULL,
  `tieude_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `mota_en` text NOT NULL,
  `linkurl` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gioi_thieu`
--

INSERT INTO `gioi_thieu` (`id`, `hinhanh`, `thuocloai`, `noidung`, `trangchu`, `mota`, `tieude`, `description`, `key`, `title`, `tieude_en`, `noidung_en`, `mota_en`, `linkurl`) VALUES
(2, 'news-details1.jpg', '', '<p><strong>Ch&agrave;o mừng bạn đến với WorldDecorANL.com &ndash; website tuyệt vời cho việc Kh&aacute;m Ph&aacute; v&agrave; Thảo Luận về Trang Tr&iacute; Nội Thất!</strong></p>\r\n\r\n<p>Xin ch&agrave;o! T&ocirc;i l&agrave; Nguyễn Tiến Dũng, người s&aacute;ng lập v&agrave; điều h&agrave;nh của WorldDecorANL.com. Nếu bạn đam m&ecirc; việc trang tr&iacute; v&agrave; mong muốn kh&aacute;m ph&aacute; th&ecirc;m về vẻ đẹp của nội thất, th&igrave; đ&acirc;y ch&iacute;nh l&agrave; điểm đến l&yacute; tưởng d&agrave;nh cho bạn!</p>\r\n\r\n<p><strong>WorldDecorANL.com &ndash; Nền tảng trực tuyến về trang tr&iacute; v&agrave; nội thất:</strong></p>\r\n\r\n<p>WorldDecorANL.com được tạo ra với t&igrave;nh y&ecirc;u v&agrave; niềm đam m&ecirc; kh&ocirc;ng ngừng về trang tr&iacute; v&agrave; nội thất. website n&agrave;y kh&ocirc;ng chỉ l&agrave; nơi chia sẻ kiến thức v&agrave; kinh nghiệm c&aacute; nh&acirc;n của t&ocirc;i về trang tr&iacute;, m&agrave; c&ograve;n l&agrave; một cộng đồng mở v&agrave; s&aacute;ng tạo cho những người y&ecirc;u th&iacute;ch trang tr&iacute; từ khắp nơi tr&ecirc;n thế giới.</p>\r\n\r\n<p><strong>Những g&igrave; bạn c&oacute; thể mong đợi tại WorldDecorANL.com:</strong></p>\r\n\r\n<p><strong><em>1. B&agrave;i viết chuy&ecirc;n s&acirc;u:</em></strong> Ch&uacute;ng t&ocirc;i cung cấp những b&agrave;i viết chuy&ecirc;n s&acirc;u về trang tr&iacute; nội thất, từ những nguy&ecirc;n tắc cơ bản đến những xu hướng mới nhất trong ng&agrave;nh.</p>\r\n\r\n<p><strong><em>2. Hướng dẫn thực hiện:</em></strong> Tại đ&acirc;y, bạn sẽ t&igrave;m thấy c&aacute;c hướng dẫn chi tiết về c&aacute;ch trang tr&iacute; kh&ocirc;ng gian sống của bạn một c&aacute;ch độc đ&aacute;o v&agrave; s&aacute;ng tạo.</p>\r\n\r\n<p><strong><em>3. Cập nhật xu hướng:</em></strong> Với sự t&igrave;m kiếm kh&ocirc;ng ngừng, ch&uacute;ng t&ocirc;i li&ecirc;n tục cập nhật c&aacute;c xu hướng mới nhất trong lĩnh vực trang tr&iacute; v&agrave; nội thất, gi&uacute;p bạn lu&ocirc;n ti&ecirc;n phong trong việc l&agrave;m mới kh&ocirc;ng gian sống của m&igrave;nh.</p>\r\n\r\n<p><strong><em>4. Cộng đồng trang tr&iacute;:</em></strong> WorldDecorANL.com cũng l&agrave; nơi để gặp gỡ v&agrave; trao đổi với những người đồng l&ograve;ng về trang tr&iacute;. Ch&uacute;ng t&ocirc;i khuyến kh&iacute;ch mọi người chia sẻ &yacute; kiến, kinh nghiệm v&agrave; h&igrave;nh ảnh của m&igrave;nh để c&ugrave;ng nhau tạo ra một cộng đồng trang tr&iacute; s&ocirc;i động v&agrave; đa dạng.</p>\r\n\r\n<p><strong>Tham gia c&ugrave;ng ch&uacute;ng t&ocirc;i:</strong></p>\r\n\r\n<p>Nếu bạn đang t&igrave;m kiếm nguồn cảm hứng mới cho việc trang tr&iacute; nội thất, h&atilde;y đến với WorldDecorANL.com ngay h&ocirc;m nay! H&atilde;y đăng k&yacute; th&agrave;nh vi&ecirc;n để nhận c&aacute;c cập nhật v&agrave; tham gia cộng đồng trang tr&iacute; s&ocirc;i động của ch&uacute;ng t&ocirc;i.</p>\r\n\r\n<p>Cảm ơn bạn đ&atilde; d&agrave;nh thời gian để đọc v&agrave; ch&agrave;o mừng bạn đến với WorldDecorANL.com &ndash; nơi để kh&aacute;m ph&aacute;, tạo ra v&agrave; chia sẻ niềm đam m&ecirc; với trang tr&iacute; v&agrave; nội thất!</p>\r\n', '1', '', 'Giới Thiệu Về Massagge Ngọc Ánh', '', '', '', '', '&nbsp;', '', 'tong-quan-thong-tin-website'),
(6, '', '', '<p>&nbsp;Ch&iacute;nh s&aacute;ch bảo mật n&agrave;y m&ocirc; tả c&aacute;ch ch&uacute;ng t&ocirc;i thu thập, sử dụng v&agrave; bảo vệ th&ocirc;ng tin c&aacute; nh&acirc;n của bạn khi bạn truy cập v&agrave; sử dụng website WorldDecorANL.com:</p>\r\n\r\n<p><br />\r\n<em><strong>1. Thu Thập Th&ocirc;ng Tin:</strong></em>&nbsp;Khi bạn truy cập hoặc sử dụng website WorldDecorANL.com, ch&uacute;ng t&ocirc;i c&oacute; thể thu thập th&ocirc;ng tin c&aacute; nh&acirc;n của bạn như t&ecirc;n, địa chỉ email, số điện thoại v&agrave; địa chỉ vận chuyển. Ch&uacute;ng t&ocirc;i chỉ thu thập th&ocirc;ng tin c&aacute; nh&acirc;n m&agrave; bạn cung cấp tự nguyện v&agrave; chỉ khi cần thiết để cung cấp dịch vụ cho bạn.</p>\r\n\r\n<p><strong><em>2. Sử Dụng Th&ocirc;ng Tin:</em></strong>&nbsp;Ch&uacute;ng t&ocirc;i sử dụng th&ocirc;ng tin c&aacute; nh&acirc;n m&agrave; bạn cung cấp để cung cấp cho bạn c&aacute;c dịch vụ v&agrave; sản phẩm m&agrave; bạn y&ecirc;u cầu, để li&ecirc;n lạc với bạn v&agrave; để cung cấp th&ocirc;ng tin về c&aacute;c sản phẩm v&agrave; dịch vụ mới của ch&uacute;ng t&ocirc;i. Ch&uacute;ng t&ocirc;i cam kết kh&ocirc;ng b&aacute;n, cho thu&ecirc; hoặc chia sẻ th&ocirc;ng tin c&aacute; nh&acirc;n của bạn với bất kỳ b&ecirc;n thứ ba n&agrave;o ngo&agrave;i trừ trường hợp được quy định trong Ch&iacute;nh s&aacute;ch Bảo Mật n&agrave;y hoặc khi c&oacute; y&ecirc;u cầu ph&aacute;p l&yacute;.</p>\r\n\r\n<p><strong><em>3. Bảo Mật Th&ocirc;ng Tin:</em></strong>&nbsp;Ch&uacute;ng t&ocirc;i cam kết bảo vệ th&ocirc;ng tin c&aacute; nh&acirc;n của bạn v&agrave; thực hiện c&aacute;c biện ph&aacute;p bảo mật th&iacute;ch hợp để ngăn chặn việc truy cập tr&aacute;i ph&eacute;p, sử dụng, tiết lộ hoặc sửa đổi th&ocirc;ng tin c&aacute; nh&acirc;n của bạn. Mặc d&ugrave; ch&uacute;ng t&ocirc;i sẽ cố gắng hết sức để bảo vệ th&ocirc;ng tin c&aacute; nh&acirc;n của bạn, nhưng kh&ocirc;ng c&oacute; phương thức truyền th&ocirc;ng n&agrave;o tr&ecirc;n Internet l&agrave; ho&agrave;n to&agrave;n an to&agrave;n.</p>\r\n\r\n<p><strong><em>4. Quyền Truy Cập v&agrave; Sửa Đổi Th&ocirc;ng Tin:</em></strong><em>&nbsp;</em>Bạn c&oacute; quyền y&ecirc;u cầu truy cập, chỉnh sửa hoặc x&oacute;a th&ocirc;ng tin c&aacute; nh&acirc;n của m&igrave;nh bất kỳ l&uacute;c n&agrave;o bằng c&aacute;ch li&ecirc;n hệ với ch&uacute;ng t&ocirc;i qua email: adminWorldDecorANL@gmail.com. Ch&uacute;ng t&ocirc;i sẽ cố gắng hết sức để đ&aacute;p ứng y&ecirc;u cầu của bạn trong thời gian ngắn nhất c&oacute; thể.</p>\r\n\r\n<p><strong><em>5. Sự Đồng &Yacute;:</em></strong><em>&nbsp;</em>Bằng việc sử dụng website WorldDecorANL.com, bạn đồng &yacute; với việc thu thập v&agrave; sử dụng th&ocirc;ng tin c&aacute; nh&acirc;n của bạn theo Ch&iacute;nh s&aacute;ch Bảo Mật n&agrave;y.</p>\r\n\r\n<p>Ch&iacute;nh s&aacute;ch bảo mật n&agrave;y c&oacute; thể được cập nhật v&agrave; thay đổi theo thời gian m&agrave; kh&ocirc;ng cần th&ocirc;ng b&aacute;o trước. Việc tiếp tục sử dụng website sau khi c&aacute;c thay đổi n&agrave;y được c&ocirc;ng bố đồng nghĩa với việc bạn chấp nhận những thay đổi đ&oacute;.</p>\r\n\r\n<p>Nếu bạn c&oacute; bất kỳ c&acirc;u hỏi hoặc &yacute; kiến n&agrave;o về Ch&iacute;nh s&aacute;ch Bảo Mật n&agrave;y, vui l&ograve;ng li&ecirc;n hệ với ch&uacute;ng t&ocirc;i qua email: adminWorldDecorANL@gmail.com.</p>\r\n', '1', 'Mặc dù chúng tôi sẽ cố gắng hết sức để bảo vệ thông tin cá nhân của bạn, nhưng không có phương thức truyền thông nào trên Internet là hoàn toàn an toàn.', 'Chính sách bảo mật', '', '', '', 'Chính sách bảo mật google', '&nbsp;', 'Chính sách google', 'chinh-sach-bao-mat'),
(7, '', '', '&nbsp;<span style=\"font-family: Arial, sans-serif; font-size: 14pt;\">Ch&iacute;nh s&aacute;ch bảo mật n&agrave;y m&ocirc; tả c&aacute;ch ch&uacute;ng t&ocirc;i thu thập, sử dụng v&agrave; bảo vệ th&ocirc;ng tin c&aacute; nh&acirc;n của bạn khi bạn truy cập v&agrave; sử dụng website WorldDecorANL.com:</span>\r\n<p class=\"MsoNoSpacing\"><i><span style=\"line-height: 18px;\"><br />\r\n<span style=\"font-size: 14pt;\"><b>1. Thu Thập Th&ocirc;ng Tin:</b></span></span></i><span style=\"font-size: 14pt; line-height: 28px;\">&nbsp;Khi bạn truy cập hoặc sử dụng website WorldDecorANL.com, ch&uacute;ng t&ocirc;i c&oacute; thể thu thập th&ocirc;ng tin c&aacute; nh&acirc;n của bạn như t&ecirc;n, địa chỉ email, số điện thoại v&agrave; địa chỉ vận chuyển. Ch&uacute;ng t&ocirc;i chỉ thu thập th&ocirc;ng tin c&aacute; nh&acirc;n m&agrave; bạn cung cấp tự nguyện v&agrave; chỉ khi cần thiết để cung cấp dịch vụ cho bạn.<o:p></o:p></span></p>\r\n<p class=\"MsoNoSpacing\" style=\"line-height: 18px; text-align: justify;\"><b><i><span style=\"font-size: 14pt; line-height: 28px;\">2. Sử Dụng Th&ocirc;ng Tin:</span></i></b><span style=\"font-size: 14pt; line-height: 28px;\">&nbsp;Ch&uacute;ng t&ocirc;i sử dụng th&ocirc;ng tin c&aacute; nh&acirc;n m&agrave; bạn cung cấp để cung cấp cho bạn c&aacute;c dịch vụ v&agrave; sản phẩm m&agrave; bạn y&ecirc;u cầu, để li&ecirc;n lạc với bạn v&agrave; để cung cấp th&ocirc;ng tin về c&aacute;c sản phẩm v&agrave; dịch vụ mới của ch&uacute;ng t&ocirc;i. Ch&uacute;ng t&ocirc;i cam kết kh&ocirc;ng b&aacute;n, cho thu&ecirc; hoặc chia sẻ th&ocirc;ng tin c&aacute; nh&acirc;n của bạn với bất kỳ b&ecirc;n thứ ba n&agrave;o ngo&agrave;i trừ trường hợp được quy định trong Ch&iacute;nh s&aacute;ch Bảo Mật n&agrave;y hoặc khi c&oacute; y&ecirc;u cầu ph&aacute;p l&yacute;.<o:p></o:p></span></p>\r\n<p class=\"MsoNoSpacing\" style=\"line-height: 18px; text-align: justify;\"><b><i><span style=\"font-size: 14pt; line-height: 28px;\">3. Bảo Mật Th&ocirc;ng Tin:</span></i></b><span style=\"font-size: 14pt; line-height: 28px;\">&nbsp;Ch&uacute;ng t&ocirc;i cam kết bảo vệ th&ocirc;ng tin c&aacute; nh&acirc;n của bạn v&agrave; thực hiện c&aacute;c biện ph&aacute;p bảo mật th&iacute;ch hợp để ngăn chặn việc truy cập tr&aacute;i ph&eacute;p, sử dụng, tiết lộ hoặc sửa đổi th&ocirc;ng tin c&aacute; nh&acirc;n của bạn. Mặc d&ugrave; ch&uacute;ng t&ocirc;i sẽ cố gắng hết sức để bảo vệ th&ocirc;ng tin c&aacute; nh&acirc;n của bạn, nhưng kh&ocirc;ng c&oacute; phương thức truyền th&ocirc;ng n&agrave;o tr&ecirc;n Internet l&agrave; ho&agrave;n to&agrave;n an to&agrave;n.<o:p></o:p></span></p>\r\n<p class=\"MsoNoSpacing\" style=\"line-height: 18px; text-align: justify;\"><b><i><span style=\"font-size: 14pt; line-height: 28px;\">4. Quyền Truy Cập v&agrave; Sửa Đổi Th&ocirc;ng Tin:</span></i></b><i><span style=\"font-size: 14pt; line-height: 28px;\">&nbsp;</span></i><span style=\"font-size: 14pt; line-height: 28px;\">Bạn c&oacute; quyền y&ecirc;u cầu truy cập, chỉnh sửa hoặc x&oacute;a th&ocirc;ng tin c&aacute; nh&acirc;n của m&igrave;nh bất kỳ l&uacute;c n&agrave;o bằng c&aacute;ch li&ecirc;n hệ với ch&uacute;ng t&ocirc;i qua email: adminWorldDecorANL@gmail.com. Ch&uacute;ng t&ocirc;i sẽ cố gắng hết sức để đ&aacute;p ứng y&ecirc;u cầu của bạn trong thời gian ngắn nhất c&oacute; thể.<o:p></o:p></span></p>\r\n<p class=\"MsoNoSpacing\" style=\"line-height: 18px; text-align: justify;\"><b><i><span style=\"font-size: 14pt; line-height: 28px;\">5. Sự Đồng &Yacute;:</span></i></b><i><span style=\"font-size: 14pt; line-height: 28px;\">&nbsp;</span></i><span style=\"font-size: 14pt; line-height: 28px;\">Bằng việc sử dụng website WorldDecorANL.com, bạn đồng &yacute; với việc thu thập v&agrave; sử dụng th&ocirc;ng tin c&aacute; nh&acirc;n của bạn theo Ch&iacute;nh s&aacute;ch Bảo Mật n&agrave;y.<o:p></o:p></span></p>\r\n<p class=\"MsoNoSpacing\" style=\"line-height: 18px; text-align: justify;\"><span style=\"font-size: 14pt; line-height: 28px;\">Ch&iacute;nh s&aacute;ch bảo mật n&agrave;y c&oacute; thể được cập nhật v&agrave; thay đổi theo thời gian m&agrave; kh&ocirc;ng cần th&ocirc;ng b&aacute;o trước. Việc tiếp tục sử dụng website sau khi c&aacute;c thay đổi n&agrave;y được c&ocirc;ng bố đồng nghĩa với việc bạn chấp nhận những thay đổi đ&oacute;.<o:p></o:p></span></p>\r\n<p class=\"MsoNoSpacing\" style=\"line-height: 18px; text-align: justify;\"><span style=\"font-size: 14pt; line-height: 28px;\">Nếu bạn c&oacute; bất kỳ c&acirc;u hỏi hoặc &yacute; kiến n&agrave;o về Ch&iacute;nh s&aacute;ch Bảo Mật n&agrave;y, vui l&ograve;ng li&ecirc;n hệ với ch&uacute;ng t&ocirc;i qua email: adminWorldDecorANL@gmail.com.</span></p>', '1', 'Chúng tôi chỉ thu thập thông tin cá nhân mà bạn cung cấp tự nguyện và chỉ khi cần thiết để cung cấp dịch vụ cho bạn.', 'Điều kiện điều khoản', '', '', '', 'Điều kiện điều khoản google', '&nbsp;', 'điều khoản google', 'dieu-kien-dieu-khoan'),
(8, '', '', '&nbsp;<img src=\"/demo1/tinhchi/hinhanh_fckeditor/image/Nguyen%20Tien%20Dung.jpg\" width=\"800\" height=\"650\" alt=\"\" style=\"font-size: 14pt; text-align: center;\" />\r\n<p class=\"MsoNoSpacing\" style=\"text-align: justify; line-height: 18px;\"><span style=\"font-size: 14pt; line-height: 28px;\">Với t&igrave;nh y&ecirc;u s&acirc;u sắc d&agrave;nh cho vẻ đẹp v&agrave; sự s&aacute;ng tạo, t&ocirc;i đ&atilde; x&acirc;y dựng n&ecirc;n một kh&ocirc;ng gian trực tuyến tinh tế, nơi m&agrave; mọi người c&oacute; thể thảo luận, chia sẻ v&agrave; học hỏi về nghệ thuật trang tr&iacute; nội thất.<o:p></o:p></span></p>\r\n<p class=\"MsoNoSpacing\" style=\"text-align: justify; line-height: 18px;\"><span style=\"font-size: 14pt; line-height: 28px;\">T&ocirc;i kh&ocirc;ng chỉ l&agrave; một nh&agrave; thiết kế nội thất t&agrave;i năng với nhiều năm kinh nghiệm, m&agrave; c&ograve;n l&agrave; một người viết v&agrave; s&aacute;ng tạo nội dung nhiệt huyết. Tr&ecirc;n WorldDecorANL.com, t&ocirc;i chia sẻ những b&agrave;i viết ch&acirc;n th&agrave;nh v&agrave; s&acirc;u sắc, từ những mẹo nhỏ gi&uacute;p tối ưu kh&ocirc;ng gian sống cho c&aacute;c căn hộ nhỏ đến những &yacute; tưởng thiết kế độc đ&aacute;o cho c&aacute;c ng&ocirc;i nh&agrave; rộng lớn. Với sự kết hợp giữa g&oacute;c nh&igrave;n c&aacute; nh&acirc;n v&agrave; kiến thức chuy&ecirc;n m&ocirc;n, t&ocirc;i hy vọng gi&uacute;p mọi người biến mỗi kh&ocirc;ng gian sống th&agrave;nh một t&aacute;c phẩm nghệ thuật thật sự.<o:p></o:p></span></p>\r\n<p class=\"MsoNoSpacing\" style=\"text-align: justify; line-height: 18px;\"><span style=\"font-size: 14pt; line-height: 28px;\">Với mục ti&ecirc;u mang lại phong c&aacute;ch v&agrave; sự độc đ&aacute;o cho mọi người, t&ocirc;i kh&ocirc;ng ngừng nỗ lực để WorldDecorANL.com trở th&agrave;nh điểm đến h&agrave;ng đầu cho những người y&ecirc;u th&iacute;ch trang tr&iacute; v&agrave; kh&aacute;m ph&aacute; nội thất. Với phương ch&acirc;m &ldquo;Kh&aacute;m ph&aacute;, S&aacute;ng tạo v&agrave; Trang tr&iacute;&rdquo;, t&ocirc;i hy vọng rằng mỗi lần bạn truy cập v&agrave;o website sẽ l&agrave; một trải nghiệm bổ &iacute;ch v&agrave; đầy cảm hứng.<o:p></o:p></span></p>\r\n<p class=\"MsoNoSpacing\" style=\"text-align: justify; line-height: 18px;\"><b><span style=\"font-size: 14pt; line-height: 28px;\">Nguyễn Tiến Dũng - Người s&aacute;ng lập WorldDecorANL.com</span></b></p>', '1', 'Tôi không chỉ là một nhà thiết kế nội thất tài năng với nhiều năm kinh nghiệm, mà còn là một người viết và sáng tạo nội dung nhiệt huyết. Trên WorldDecorANL.com', 'Tác giả', '', '', '', 'Tác giả web', '&nbsp;', 'viết webiste', 'tac-gia'),
(9, 'huynhtandat.jpg', '', '', '1', 'Với tình yêu sâu sắc dành cho vẻ đẹp và sự sáng tạo, tôi đã xây dựng nên một không gian trực tuyến tinh tế, nơi mà mọi người có thể thảo luận, chia sẻ và học hỏi về nghệ thuật trang trí nội thất.', 'Nguyễn Tấn Dũng.', '', '', '', '', '', '', ''),
(10, '', '', '&nbsp;<b><span style=\"font-size:13.0pt;font-family:&quot;Arial&quot;,sans-serif\">8. T&iacute;ch Hợp C&aacute;c Phương Tiện Giao Th&ocirc;ng</span></b>\r\n<p class=\"MsoNoSpacing\"><span style=\"font-size:13.0pt;font-family:&quot;Arial&quot;,sans-serif\">Với cuộc sống hiện đại, việc t&iacute;ch hợp c&aacute;c phương tiện giao th&ocirc;ng trong kh&ocirc;ng gian sống trở n&ecirc;n ng&agrave;y c&agrave;ng phổ biến. Thiết kế kh&ocirc;ng gian sống sao cho ph&ugrave; hợp với việc lưu trữ v&agrave; sử dụng xe đạp, xe scooter điện hoặc xe m&aacute;y c&oacute; thể gi&uacute;p bạn tiết kiệm kh&ocirc;ng gian v&agrave; l&agrave;m cho cuộc sống h&agrave;ng ng&agrave;y của bạn trở n&ecirc;n thuận tiện hơn. H&atilde;y tạo ra một khu vực lưu trữ th&ocirc;ng minh v&agrave; thẩm mỹ cho c&aacute;c phương tiện giao th&ocirc;ng của bạn, gi&uacute;p ch&uacute;ng trở th&agrave;nh một phần kh&ocirc;ng thể thiếu của kh&ocirc;ng gian sống hiện đại của bạn.<u1:p></u1:p><o:p></o:p></span></p>\r\n<p class=\"MsoNoSpacing\"><b><span style=\"font-size:13.0pt;font-family:&quot;Arial&quot;,sans-serif\">9. Tạo Ra Khoảng Kh&ocirc;ng Gian Mở<u1:p></u1:p></span></b><span style=\"font-size:13.0pt;&#10;font-family:&quot;Arial&quot;,sans-serif\"><o:p></o:p></span></p>\r\n<p class=\"MsoNoSpacing\"><span style=\"font-size:13.0pt;font-family:&quot;Arial&quot;,sans-serif\">Trong thiết kế nội thất hiện đại, việc tạo ra c&aacute;c kh&ocirc;ng gian mở l&agrave; một xu hướng phổ biến. Loại bỏ c&aacute;c bức tường v&agrave; cửa che chắn c&oacute; thể tạo ra một kh&ocirc;ng gian sống mở v&agrave; kết nối, tạo cảm gi&aacute;c thoải m&aacute;i v&agrave; rộng r&atilde;i hơn. Sử dụng c&aacute;c kệ tường hoặc m&agrave;n chia kh&ocirc;ng gian thay thế c&oacute; thể gi&uacute;p bạn tạo ra c&aacute;c khu vực ri&ecirc;ng tư v&agrave; chức năng m&agrave; vẫn giữ được sự th&ocirc;ng tho&aacute;ng v&agrave; kết nối trong kh&ocirc;ng gian sống của bạn.<u1:p></u1:p><o:p></o:p></span></p>\r\n<p class=\"MsoNoSpacing\"><b><span style=\"font-size:13.0pt;font-family:&quot;Arial&quot;,sans-serif\">10. Tạo Kh&ocirc;ng Gian Sống Th&acirc;n Thiện Với M&ocirc;i Trường<u1:p></u1:p></span></b><span style=\"font-size:13.0pt;font-family:&quot;Arial&quot;,sans-serif\"><o:p></o:p></span></p>\r\n<span style=\"font-size:13.0pt;line-height:107%;font-family:&quot;Arial&quot;,sans-serif;&#10;mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:&#10;EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">Cuối c&ugrave;ng, khi thiết kế kh&ocirc;ng gian sống hiện đại, h&atilde;y lu&ocirc;n c&acirc;n nhắc về việc tạo ra một m&ocirc;i trường sống th&acirc;n thiện với m&ocirc;i trường. Sử dụng vật liệu t&aacute;i chế, hạn chế sử dụng c&aacute;c chất độc hại v&agrave; tối ưu h&oacute;a việc sử dụng năng lượng c&oacute; thể gi&uacute;p bạn giảm thiểu t&aacute;c động ti&ecirc;u cực đến m&ocirc;i trường. Đồng thời, việc trồng c&acirc;y xanh v&agrave; tạo ra c&aacute;c khu vườn nội thất cũng l&agrave; một c&aacute;ch tuyệt vời để tăng cường khả năng hấp thụ CO2 v&agrave; cải thiện chất lượng kh&ocirc;ng kh&iacute; b&ecirc;n trong nh&agrave;</span>', '1', '', 'Lời kết bài viết', '', '', '', '', '&nbsp;', '', ''),
(12, '', '', '<p><span style=\"font-family:wingdings; text-indent:-0.25in\">&uuml;<span style=\"font-family:times new roman; font-feature-settings:normal; font-kerning:auto; font-optical-sizing:auto; font-size-adjust:none; font-size:7pt; font-stretch:normal; font-variant-alternates:normal; font-variant-east-asian:normal; font-variant-numeric:normal; font-variant-position:normal; font-variation-settings:normal; line-height:normal\">&nbsp; </span></span><span style=\"text-indent:-0.25in\">Massage body&nbsp; &nbsp;</span><span style=\"font-family:wingdings; text-indent:-0.25in\">&uuml;<span style=\"font-family:times new roman; font-feature-settings:normal; font-kerning:auto; font-optical-sizing:auto; font-size-adjust:none; font-size:7pt; font-stretch:normal; font-variant-alternates:normal; font-variant-east-asian:normal; font-variant-numeric:normal; font-variant-position:normal; font-variation-settings:normal; line-height:normal\">&nbsp; </span></span><span style=\"text-indent:-0.25in\">Massage foot</span></p>\r\n\r\n<p><span style=\"font-family:wingdings; text-indent:-0.25in\">&uuml;<span style=\"font-family:times new roman; font-feature-settings:normal; font-kerning:auto; font-optical-sizing:auto; font-size-adjust:none; font-size:7pt; font-stretch:normal; font-variant-alternates:normal; font-variant-east-asian:normal; font-variant-numeric:normal; font-variant-position:normal; font-variation-settings:normal; line-height:normal\">&nbsp; </span></span><span style=\"text-indent:-0.25in\">Massage nam&nbsp; &nbsp;</span><span style=\"font-family:wingdings; text-indent:-0.25in\">&uuml;<span style=\"font-family:times new roman; font-feature-settings:normal; font-kerning:auto; font-optical-sizing:auto; font-size-adjust:none; font-size:7pt; font-stretch:normal; font-variant-alternates:normal; font-variant-east-asian:normal; font-variant-numeric:normal; font-variant-position:normal; font-variation-settings:normal; line-height:normal\">&nbsp; </span></span><span style=\"text-indent:-0.25in\">Massage nữ</span></p>\r\n\r\n<p class=\"MsoNoSpacing\" style=\"margin-left:.5in;text-indent:-.25in;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-family:wingdings; mso-bidi-font-family:Wingdings; mso-fareast-font-family:Wingdings\"><span style=\"mso-list:Ignore\">&uuml;<span style=\"font:7.0pt &quot;Times New Roman&quot;\">&nbsp; </span></span></span><!--[endif]-->Massage nam nữ</p>\r\n', '1', 'Massage Ngọc Ánh là một địa điểm uy tín tại Thành phố Hồ Chí Minh, chuyên cung cấp các dịch vụ massage chuyên nghiệp. Với đội ngũ kỹ thuật viên giàu kinh nghiệm và không gian thư giãn, Massage Ngọc Ánh mang đến cho khách hàng trải nghiệm tốt nhất.', 'Massage <br> Ngọc Ánh', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `he_thong`
--

CREATE TABLE `he_thong` (
  `id` int(11) NOT NULL,
  `tieude` text NOT NULL,
  `dis` text NOT NULL,
  `mota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `he_thong`
--

INSERT INTO `he_thong` (`id`, `tieude`, `dis`, `mota`) VALUES
(1, 'Hype Store', 'Shop Hype Store chuyên cung cấp giày chính hãng tại Đà Nẵng với các thương hiệu nổi tiếng như Air Force 1, Jordan, MLB, Converse, Nike và giày bóng rổ. Mua giày chất lượng với giá tốt nhất, liên hệ ngay 0399549903...', 'air force 1 đà nẵng, giày air force 1 chính hãng tại đà nẵng, mua air force 1 đà nẵng giá tốt, shop bán air force 1 ở đà nẵng, jordan đà nẵng, giày jordan chính hãng đà nẵng, mua giày jordan tại đà nẵng, cửa hàng bán giày jordan đà nẵng, mlb đà nẵng, giày mlb chính hãng tại đà nẵng, shop giày mlb đà nẵng, địa điểm bán giày mlb ở đà nẵng, converse đà nẵng, mua giày converse tại đà nẵng, shop bán giày converse chính hãng đà nẵng, giày converse giá rẻ đà nẵng, nike đà nẵng, giày nike chính hãng tại đà nẵng, mua nike đà nẵng giá tốt, shop giày nike ở đà nẵng, giày bóng rổ đà nẵng, giày bóng rổ chính hãng tại đà nẵng, mua giày bóng rổ đà nẵng, cửa hàng bán giày bóng rổ đà nẵng.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `hoten` text NOT NULL,
  `diachi` text NOT NULL,
  `dt` text NOT NULL,
  `email` text NOT NULL,
  `fax` text NOT NULL,
  `tieude` text NOT NULL,
  `noidung` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`id`, `hoten`, `diachi`, `dt`, `email`, `fax`, `tieude`, `noidung`) VALUES
(59, 'Df', 'Ndjxk', '0383949', 'Gnfod', '', '', 'Tl'),
(60, 'Minh', 'Đà Nẵng', '0914454348', 'kinhdoanhatv@gmail.com', '', '', 'Test website'),
(61, 'Cao Minh Khanh', '63 Trương Công Hy - Đà Nẵng', '0905231279', 'caominhkhanhgl@gmail.com', '', '', 'Báo giá kiểm định / hiệu chỉnh các sensor:\r\n- Digital Pyranometer SMP10\r\n- PV module Surface temperature sensor SA2F\r\n- Temperature and relative humidity sensor HC2A-S3'),
(62, 'BÙI VĂN TÙNG', '15/28-30 Đoàn Như Hài , F13 Q.4 TP.HCm', '0903705497', 'loghcm.manager@smelogistics.vn', '', '', 'Chúng tôi có khách hàng chuẩn bị xuất hàng tại Cảng Đà nẵng, do lô hàng này sử dụng container SOC ( Shipper Owner Container) do đó cần làm thủ tục giám định Container này trước khi đóng hàng. Vui lòng cho biết đơn vị mình có làm công tác này, nếu có vui lòng liên hệ để biết thêm chi tiết về yêu cầu.'),
(63, 'Nguyen Vuong My Ngan', 'Đà Nẵng', '0935916406', 'H8488-HR1@accor.com', '', '', 'Kính gởi anh chị\r\n\r\nMình quan tâm đến khóa học An toàn lao động (nhóm 1, 2, 3, 4). Nhờ anh chị tư vấn và báo giá giúp mình. Mình cám ơn ạ.\r\n'),
(64, 'Trần Đức', '168 Châu Thị VĨnh Tế, Đà nẵng', '0912020557', 'betania.danang@gmail.com', '', '', 'Xin vui lòng báo giá kiểm định thang máy 8 điểm dừng- 450 kg. Tháng máy được kiểm định lần đầu vào 04/2019.'),
(65, 'Nguyễn Văn Hiếu', 'An Sơn, Hòa Ninh, Hòa Vang', '0986849557', 'nguyenvanhieu287011@gmail.com', '', '', 'bên mình có mở lớp ATLĐ và PCCC tại Đà Nẵng không ạ'),
(66, 'Ng. Trí Trung', 'Yên Định Thanh Hóa', '0354886374', 'ng.tritrung', '', '', 'Chúng tôi có nhu cầu đăng kiểm và chạy thử nghiệm một lò sưởi 150KBtu dùng nhiên liệu hạt gỗ mà chúng tôi đã sáng chế xong và sẵn sàng đi vào sản xuất. Xin quý cty cho biết quy trình chúng tôi cần phải làm và cung cấp để sản phẩm của chúng tôi hội đủ điều kiện rao bán trên thi VN và EU và USA.\r\nCẳm ơn quý cty.'),
(67, 'Thái Đình Thủy', 'Thành phố Đà Nẵng', '0905.333.716', 'thaithuy0815@gmail.com', '', '', 'Mình là Người huấn luyện an toàn, vệ sinh lao động. Rất mong được hợp tác với Công ty về việc huấn luyện an toàn, vệ sinh lao động cho người lao động.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_ma_sanpham`
--

CREATE TABLE `loai_ma_sanpham` (
  `id` int(11) NOT NULL,
  `thuocloai` text NOT NULL,
  `thuocloai_en` text NOT NULL,
  `hinhanh` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `noidung` text NOT NULL,
  `noidung_en` text NOT NULL,
  `name_url` varchar(254) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_ma_sanpham`
--

INSERT INTO `loai_ma_sanpham` (`id`, `thuocloai`, `thuocloai_en`, `hinhanh`, `logo`, `noidung`, `noidung_en`, `name_url`) VALUES
(1, 'Air Force 1', '', '', '', '&nbsp;', '', 'Air-Force-1'),
(2, 'Jordan', '', '', '', '', '', 'Jordan'),
(3, 'MLB', '', '', '', '', '', 'MLB'),
(4, 'Converse', '', '', '', '', '', 'Converse'),
(5, 'Nike', '', '', '', '&nbsp;', '', 'Nike'),
(6, 'Giày Bóng Rỗ', '', '', '', '&nbsp;', '', 'Giay-Bong-Ro');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_tin_dichvu`
--

CREATE TABLE `loai_tin_dichvu` (
  `id` int(11) NOT NULL,
  `thuocloai` text NOT NULL,
  `thuocloai_en` text NOT NULL,
  `name_url` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hinhanh` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_tin_dichvu`
--

INSERT INTO `loai_tin_dichvu` (`id`, `thuocloai`, `thuocloai_en`, `name_url`, `hinhanh`) VALUES
(1, 'Đồ Đôi', '', 'Do-Doi', ''),
(2, 'Đồ Cho Gia Đình', '', 'Do-Cho-Gia-Dinh', ''),
(3, 'Áo Thun Form Rộng', '', 'Ao-Thun-Form-Rong', ''),
(4, 'Áo Thun Nữ', '', 'Ao-Thun-Nu', ''),
(5, 'Quần Ngắn', '', 'Quan-Ngan', ''),
(7, 'Quần Dài', '', 'Quan-Dai', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_tin_sanpham`
--

CREATE TABLE `loai_tin_sanpham` (
  `id` int(11) NOT NULL,
  `thuocloai` text NOT NULL,
  `thuocloai_en` text NOT NULL,
  `hinhanh` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_tin_sanpham`
--

INSERT INTO `loai_tin_sanpham` (`id`, `thuocloai`, `thuocloai_en`, `hinhanh`, `logo`) VALUES
(47, 'Bún bò huế', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_tin_thicong`
--

CREATE TABLE `loai_tin_thicong` (
  `id` int(11) NOT NULL,
  `thuocloai` text NOT NULL,
  `thuocloai_en` text NOT NULL,
  `hinhanh` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_tin_thicong`
--

INSERT INTO `loai_tin_thicong` (`id`, `thuocloai`, `thuocloai_en`, `hinhanh`, `logo`) VALUES
(1, 'Giới Thiệu', '', '', ''),
(2, 'Địa Chỉ', '', '', ''),
(3, 'Số Điện Thoại', '', '', ''),
(4, 'Email', '', '', ''),
(5, 'Liên Kết', '', '', ''),
(6, 'Chính Sách', '', '', ''),
(7, 'Copyright', '', '', ''),
(8, 'Từ Khoá Seo', '', '', ''),
(9, 'Domain', '', '', ''),
(10, 'Hình banner', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_tin_tintuc`
--

CREATE TABLE `loai_tin_tintuc` (
  `id` int(11) NOT NULL,
  `thuocloai` text NOT NULL,
  `thuocloai_en` text NOT NULL,
  `name_url` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_tin_tintuc`
--

INSERT INTO `loai_tin_tintuc` (`id`, `thuocloai`, `thuocloai_en`, `name_url`) VALUES
(5, 'phèng phèng', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_tin_title`
--

CREATE TABLE `loai_tin_title` (
  `id` int(11) NOT NULL,
  `thuocloai` text NOT NULL,
  `thuocloai_en` text NOT NULL,
  `hinhanh` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_tin_title`
--

INSERT INTO `loai_tin_title` (`id`, `thuocloai`, `thuocloai_en`, `hinhanh`, `logo`) VALUES
(1, 'About Us', '', '', ''),
(2, 'Links', '', '', ''),
(3, 'Home Page Title', '', '', ''),
(4, 'Menu Left', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ma_sanpham`
--

CREATE TABLE `ma_sanpham` (
  `id` int(11) NOT NULL,
  `hinhanh` text NOT NULL,
  `noidung` text NOT NULL,
  `trangchu` text NOT NULL,
  `mota` text NOT NULL,
  `tieude` text NOT NULL,
  `tieude_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `mota_en` text NOT NULL,
  `thuocloai` text NOT NULL,
  `danhmuc` int(11) NOT NULL,
  `ngay` text NOT NULL,
  `gia` float NOT NULL,
  `size` varchar(100) NOT NULL,
  `sale` int(5) NOT NULL,
  `masanpham` text NOT NULL,
  `trangthai` text NOT NULL,
  `trangthai_en` text NOT NULL,
  `khuyenmai` text NOT NULL,
  `noidung_china` text NOT NULL,
  `noidung_han` text NOT NULL,
  `noidung_nhat` text NOT NULL,
  `trangthai_china` text NOT NULL,
  `trangthai_han` text NOT NULL,
  `trangthai_nhat` text NOT NULL,
  `tieude_china` text NOT NULL,
  `tieude_han` int(4) NOT NULL,
  `tieude_nhat` text NOT NULL,
  `mota_china` text NOT NULL,
  `mota_han` text NOT NULL,
  `mota_nhat` text NOT NULL,
  `noidung_nga` text NOT NULL,
  `noidung_my` text NOT NULL,
  `noidung_anh` text NOT NULL,
  `noidung_phap` text NOT NULL,
  `sort` int(3) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `noibat` int(3) NOT NULL,
  `hinhab` varchar(200) NOT NULL,
  `hinhabc` varchar(200) NOT NULL,
  `hinhabcd` varchar(200) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `hinhqcab` varchar(200) NOT NULL,
  `hinhqcabc` varchar(200) NOT NULL,
  `hinhndab` varchar(200) NOT NULL,
  `hinhndabc` varchar(200) NOT NULL,
  `hinhndabcd` varchar(200) NOT NULL,
  `chuthich` int(11) NOT NULL,
  `chuthichab` int(11) NOT NULL,
  `chuthichabc` int(11) NOT NULL,
  `chuthichabcd` int(11) NOT NULL,
  `chuthichabcde` int(11) NOT NULL,
  `star` tinyint(3) NOT NULL,
  `hinhspab` varchar(200) NOT NULL,
  `hinhspabc` varchar(200) NOT NULL,
  `hinhspabcd` varchar(200) NOT NULL,
  `moi` int(3) NOT NULL,
  `chay` int(3) NOT NULL,
  `km` int(3) NOT NULL,
  `linkurl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ma_sanpham`
--

INSERT INTO `ma_sanpham` (`id`, `hinhanh`, `noidung`, `trangchu`, `mota`, `tieude`, `tieude_en`, `noidung_en`, `mota_en`, `thuocloai`, `danhmuc`, `ngay`, `gia`, `size`, `sale`, `masanpham`, `trangthai`, `trangthai_en`, `khuyenmai`, `noidung_china`, `noidung_han`, `noidung_nhat`, `trangthai_china`, `trangthai_han`, `trangthai_nhat`, `tieude_china`, `tieude_han`, `tieude_nhat`, `mota_china`, `mota_han`, `mota_nhat`, `noidung_nga`, `noidung_my`, `noidung_anh`, `noidung_phap`, `sort`, `logo`, `noibat`, `hinhab`, `hinhabc`, `hinhabcd`, `luotxem`, `hinhqcab`, `hinhqcabc`, `hinhndab`, `hinhndabc`, `hinhndabcd`, `chuthich`, `chuthichab`, `chuthichabc`, `chuthichabcd`, `chuthichabcde`, `star`, `hinhspab`, `hinhspabc`, `hinhspabcd`, `moi`, `chay`, `km`, `linkurl`) VALUES
(1, 'aodoishop.jpg', '<h3>Đặc Điểm:</h3>\r\n\r\n<ul>\r\n	<li><strong>Chất Liệu:</strong> Cotton 100%, mềm mại v&agrave; thấm h&uacute;t mồ h&ocirc;i tốt.</li>\r\n	<li><strong>Thiết Kế:</strong> Cổ tr&ograve;n đơn giản, tay ngắn thoải m&aacute;i. &Aacute;o c&oacute; thể c&oacute; kiểu d&aacute;ng basic hoặc cut-out tinh tế, ph&ugrave; hợp cho cả nam v&agrave; nữ.</li>\r\n	<li><strong>M&agrave;u Sắc:</strong> Đa dạng từ những t&ocirc;ng m&agrave;u trung t&iacute;nh như trắng, x&aacute;m, đen đến c&aacute;c m&agrave;u sắc tươi s&aacute;ng như xanh dương, hồng, v&agrave; xanh l&aacute; c&acirc;y.</li>\r\n	<li><strong>Họa Tiết:</strong> C&oacute; thể l&agrave; c&aacute;c họa tiết đơn giản như h&igrave;nh tr&aacute;i tim, chữ c&aacute;i, hoặc h&igrave;nh ảnh vui nhộn, ph&ugrave; hợp với sở th&iacute;ch của cặp đ&ocirc;i.</li>\r\n	<li><strong>K&iacute;ch Cỡ:</strong> C&oacute; sẵn nhiều k&iacute;ch cỡ để đảm bảo sự vừa vặn v&agrave; thoải m&aacute;i cho cả hai.</li>\r\n</ul>\r\n\r\n<p>&Aacute;o đ&ocirc;i m&ugrave;a h&egrave; kh&ocirc;ng chỉ l&agrave; trang phục để diện trong những chuyến du lịch hay buổi hẹn h&ograve;, m&agrave; c&ograve;n l&agrave; c&aacute;ch thể hiện t&igrave;nh cảm v&agrave; sự đồng điệu giữa hai người.</p>\r\n', '1', 'Áo đôi mùa hè là lựa chọn hoàn hảo cho các cặp đôi muốn thể hiện tình yêu và sự kết nối trong những ngày hè nắng ấm. Được thiết kế từ chất liệu vải cotton nhẹ nhàng và thoáng khí, áo đôi mùa hè giúp bạn luôn cảm thấy mát mẻ và dễ chịu, ngay cả khi thời tiết oi ả.', 'Áo đôi mùa hè', '', '', '', '1', 0, '', 240000, '', 0, '', '', '', '', '', '', '', 'áo đôi đà nẵng', '', 'áo đôi mùa hè', '', 0, '', '', '200000', '', '', '', '', '', 0, '', 0, '', '', '', 0, '', '', '', '', '', 0, 0, 0, 0, 0, 4, '', '', '', 0, 1, 1, 'ao-doi-mua-he'),
(2, 'lovestudio_dogiadinh_002.webp', '<ul>\r\n	<li><strong>Chất Liệu:</strong> Cotton 100%, mềm mại v&agrave; thấm h&uacute;t mồ h&ocirc;i tốt.</li>\r\n	<li><strong>Thiết Kế:</strong> Cổ tr&ograve;n đơn giản, tay ngắn thoải m&aacute;i. &Aacute;o c&oacute; thể c&oacute; kiểu d&aacute;ng basic hoặc cut-out tinh tế, ph&ugrave; hợp cho cả nam v&agrave; nữ.</li>\r\n	<li><strong>M&agrave;u Sắc:</strong> Đa dạng từ những t&ocirc;ng m&agrave;u trung t&iacute;nh như trắng, x&aacute;m, đen đến c&aacute;c m&agrave;u sắc tươi s&aacute;ng như xanh dương, hồng, v&agrave; xanh l&aacute; c&acirc;y.</li>\r\n	<li><strong>Họa Tiết:</strong> C&oacute; thể l&agrave; c&aacute;c họa tiết đơn giản như h&igrave;nh tr&aacute;i tim, chữ c&aacute;i, hoặc h&igrave;nh ảnh vui nhộn, ph&ugrave; hợp với sở th&iacute;ch của cặp đ&ocirc;i.</li>\r\n	<li><strong>K&iacute;ch Cỡ:</strong> C&oacute; sẵn nhiều k&iacute;ch cỡ để đảm bảo sự vừa vặn v&agrave; thoải m&aacute;i cho cả hai.</li>\r\n</ul>\r\n\r\n<p>&Aacute;o đ&ocirc;i m&ugrave;a h&egrave; kh&ocirc;ng chỉ l&agrave; trang phục để diện trong những chuyến du lịch hay buổi hẹn h&ograve;, m&agrave; c&ograve;n l&agrave; c&aacute;ch thể hiện t&igrave;nh cảm v&agrave; sự đồng điệu giữa hai người.</p>\r\n', '1', 'Áo đôi mùa hè là lựa chọn hoàn hảo cho các cặp đôi muốn thể hiện tình yêu và sự kết nối trong những ngày hè nắng ấm. Được thiết kế từ chất liệu vải cotton nhẹ nhàng và thoáng khí, áo đôi mùa hè giúp bạn luôn cảm thấy mát mẻ và dễ chịu, ngay cả khi thời tiết oi ả.', 'Đồ Cho Gia Đình', '', '', '', '2', 0, '', 240000, '', 0, '', '', '', '', '', '', '', 'áo đôi đà nẵng', '', 'áo đôi', '', 0, '', '', '120000', '', '', '', '', '', 0, '', 0, '', '', '', 0, '', '', '', '', '', 0, 0, 0, 0, 0, 4, '', '', '', 0, 0, 1, 'do-cho-gia-dinh'),
(3, '9414lovestudio_formrong_0017.webp', '<p>demo</p>\r\n', '1', 'mô tả', 'Áo Thun Form Rộng', '', '', '', '3', 0, '', 70000, '', 0, '', '', '', '', '', '', '', 'áo form rộng đà nẵng', '', 'áo form rộng', '', 0, '', '', '50000', '', '', '', '', '', 0, '', 1, '', '', '', 0, '', '', '', '', '', 0, 0, 0, 0, 0, 1, '', '', '', 0, 0, 0, 'ao-thun-form-rong'),
(6, '3894lovestudio_croptop_0032.webp', '<p>Được l&agrave;m từ chất liệu cotton cao cấp, &aacute;o thun n&agrave;y mang đến cảm gi&aacute;c mềm mại v&agrave; dễ chịu khi mặc cả ng&agrave;y d&agrave;i. Thiết kế cơ bản với cổ tr&ograve;n v&agrave; tay ngắn l&agrave; lựa chọn l&yacute; tưởng cho những ng&agrave;y thư gi&atilde;n hoặc khi bạn muốn tạo phong c&aacute;ch đơn giản nhưng nổi bật.</p>\r\n\r\n<p>&Aacute;o thun c&oacute; nhiều m&agrave;u sắc tươi s&aacute;ng v&agrave; kiểu d&aacute;ng đa dạng, từ c&aacute;c m&agrave;u pastel nhẹ nh&agrave;ng đến c&aacute;c t&ocirc;ng m&agrave;u đậm ấn tượng, gi&uacute;p bạn dễ d&agrave;ng phối hợp với c&aacute;c trang phục kh&aacute;c. Đường may tinh tế v&agrave; chất liệu bền bỉ gi&uacute;p &aacute;o thun giữ được h&igrave;nh d&aacute;ng v&agrave; m&agrave;u sắc l&acirc;u d&agrave;i sau nhiều lần giặt.</p>\r\n\r\n<p>Chọn &aacute;o thun nữ của ch&uacute;ng t&ocirc;i để th&ecirc;m phần tự tin v&agrave; c&aacute; t&iacute;nh cho mỗi ng&agrave;y của bạn!</p>\r\n', '1', 'Khám phá sự kết hợp hoàn hảo giữa sự thoải mái và phong cách với áo thun nữ của chúng tôi', 'Áo Thun Nữ Siêu Đẹp', '', '', '', '4', 0, '', 240000, '', 0, '', '', '', '', '', '', '', 'áo thun nữ đà nẵng', '', 'áo thun nữ', '', 0, '', '', '270000', '', '', '', '', '', 0, '', 1, '', '', '', 0, '', '', '', '', '', 0, 0, 0, 0, 0, 1, '', '', '', 0, 1, 1, 'ao-thun-nu-sieu-dep'),
(7, '7283lovestudio_quandai_003.webp', '<p>Với nhiều kiểu d&aacute;ng v&agrave; m&agrave;u sắc kh&aacute;c nhau, từ quần d&agrave;i cạp cao thời thượng đến c&aacute;c kiểu d&aacute;ng su&ocirc;ng hiện đại, bạn sẽ dễ d&agrave;ng t&igrave;m thấy sản phẩm ph&ugrave; hợp với phong c&aacute;ch c&aacute; nh&acirc;n của m&igrave;nh. Đặc biệt, c&aacute;c chi tiết may tỉ mỉ v&agrave; đường cắt sắc sảo gi&uacute;p tạo n&ecirc;n h&igrave;nh d&aacute;ng ho&agrave;n hảo, t&ocirc;n l&ecirc;n vẻ đẹp của bạn trong mọi ho&agrave;n cảnh.</p>\r\n\r\n<p>Chất liệu vải bền bỉ v&agrave; tho&aacute;ng kh&iacute; đảm bảo rằng quần d&agrave;i của bạn kh&ocirc;ng chỉ đẹp m&agrave; c&ograve;n giữ được sự thoải m&aacute;i suốt cả ng&agrave;y d&agrave;i. Phối hợp dễ d&agrave;ng với nhiều loại &aacute;o v&agrave; phụ kiện kh&aacute;c nhau, quần d&agrave;i của ch&uacute;ng t&ocirc;i l&agrave; sự lựa chọn l&yacute; tưởng cho cả những buổi gặp mặt trang trọng v&agrave; những ng&agrave;y thư gi&atilde;n.</p>\r\n\r\n<p>H&atilde;y đến [T&ecirc;n Shop] để t&igrave;m cho m&igrave;nh những chiếc quần d&agrave;i chất lượng nhất v&agrave; n&acirc;ng tầm phong c&aacute;ch của bạn ngay h&ocirc;m nay!</p>\r\n', '1', 'Những chiếc quần dài này được thiết kế tinh tế với chất liệu vải cao cấp', 'Quần Dài', '', '', '', '6', 0, '', 270000, '', 0, '', '', '', '', '', '', '', 'quần dài đà nẵng', '', 'quần dài ', '', 0, '', '', '200000', '', '', '', '', '', 0, '', 1, '', '', '', 0, '', '', '', '', '', 0, 0, 0, 0, 0, 4, '', '', '', 0, 0, 0, 'quan-dai'),
(5, '1940lovestudio_quanshort_0010.webp', '<p>demo</p>\r\n', '1', 'mô tả quần ngắn', 'Quần ngắn', '', '', '', '5', 0, '', 3400000, '', 0, '', '', '', '', '', '', '', 'quần ngắn đà nẵng', '', 'quần ngắn ', '', 0, '', '', '3300000', '', '', '', '', '', 0, '', 1, '', '', '', 0, '', '', '', '', '', 0, 0, 0, 0, 0, 1, '', '', '', 0, 0, 0, 'quan-ngan'),
(8, 'giaydemo1.jpg', '', '1', 'abc', 'Giày MLB', '', '', '', '3', 0, '', 7000000, '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '90000000', '', '', '', '', '', 0, '', 0, '', '', '', 0, '', '', '', '', '', 0, 0, 0, 0, 0, 4, '', '', '', 0, 0, 0, 'giay-mlb');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `stats`
--

CREATE TABLE `stats` (
  `id` int(11) UNSIGNED NOT NULL,
  `s_time` int(10) NOT NULL,
  `s_id` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `stats`
--

INSERT INTO `stats` (`id`, `s_time`, `s_id`) VALUES
(45477, 1723172196, '3qs3232ucpengdf8fiu9bmjou0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtin_quantri`
--

CREATE TABLE `thongtin_quantri` (
  `id` int(255) NOT NULL,
  `ky_danh` varchar(255) NOT NULL DEFAULT '',
  `mat_khau` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtin_quantri`
--

INSERT INTO `thongtin_quantri` (`id`, `ky_danh`, `mat_khau`) VALUES
(1, 'admin', 'c3284d0f94606de1fd2af172aba15bf3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_ke`
--

CREATE TABLE `thong_ke` (
  `id` int(255) NOT NULL,
  `mo_ta` varchar(255) NOT NULL,
  `so` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thong_ke`
--

INSERT INTO `thong_ke` (`id`, `mo_ta`, `so`) VALUES
(1, 'luot truy cap', 38680);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tin_lh`
--

CREATE TABLE `thong_tin_lh` (
  `id` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `phatsinh` text NOT NULL,
  `noidung_en` text NOT NULL,
  `email` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thong_tin_lh`
--

INSERT INTO `thong_tin_lh` (`id`, `noidung`, `phatsinh`, `noidung_en`, `email`) VALUES
(2, '<div class=\"contact-title\" style=\"text-align: justify;\">\r\n<div class=\"contact-title\" style=\"margin: 0px; padding: 0px; font-family: Arial, Tahoma, Geneva, sans-serif; background-color: rgb(249, 249, 249);\"><strong style=\"margin: 0px; padding: 0px;\"><font color=\"#ff0000\" face=\"Tahoma\" style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; font-size: larger;\">C</span><span style=\"margin: 0px; padding: 0px; font-size: 14px;\">&Ocirc;NG TY TNHH MTV THIẾT KẾ &nbsp;- TRUYỀN TH&Ocirc;NG&nbsp;</span></font></strong><font color=\"#ff0000\" face=\"Tahoma\" style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; font-size: 14px;\"><br style=\"margin: 0px; padding: 0px;\" />\r\n</span></font>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br style=\"margin: 0px; padding: 0px;\" />\r\n<span style=\"margin: 0px; padding: 0px; font-size: large;\"><strong style=\"margin: 0px; padding: 0px;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ATVMEDIA</strong></span><br style=\"margin: 0px; padding: 0px;\" />\r\n<br style=\"margin: 0px; padding: 0px;\" />\r\n<span style=\"margin: 0px; padding: 0px; font-family: Tahoma; font-size: larger;\">Địa chỉ: &nbsp;19 L&ecirc; Quang Sung - P.An Mỹ - TP. Tam Kỳ</span><br style=\"margin: 0px; padding: 0px;\" />\r\n<font face=\"Tahoma\" style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; font-size: larger;\">Email:</span></font><span style=\"margin: 0px; padding: 0px; font-family: Tahoma; font-size: larger; color: rgb(255, 0, 0);\">&nbsp; &nbsp; &nbsp;</span><span style=\"margin: 0px; padding: 0px; font-family: Tahoma; font-size: larger;\">hr@atvmedia.net</span><span style=\"margin: 0px; padding: 0px; color: rgb(255, 0, 0);\"><span style=\"margin: 0px; padding: 0px; font-size: larger;\"><span style=\"margin: 0px; padding: 0px; font-family: Tahoma;\"><br style=\"margin: 0px; padding: 0px;\" />\r\n</span></span></span></div>\r\n<div class=\"contact-content\" style=\"margin: 0px; padding: 0px; font-family: Arial, Tahoma, Geneva, sans-serif; text-align: start; background-color: rgb(249, 249, 249);\">\r\n<div class=\"row\" style=\"margin: 0px; padding: 0px;\">\r\n<div style=\"margin: 0px; padding: 0px; text-align: justify;\"><span style=\"margin: 0px; padding: 0px; font-size: larger;\"><span style=\"margin: 0px; padding: 0px; font-family: Tahoma;\">Điện thoại : 05103 888 379 - 0914 45 43 48 - 0905 45 43 48</span></span></div>\r\n</div>\r\n<div class=\"row\" style=\"margin: 0px; padding: 0px;\">\r\n<div style=\"margin: 0px; padding: 0px; text-align: justify;\"><span style=\"margin: 0px; padding: 0px; font-size: larger;\"><span style=\"margin: 0px; padding: 0px; font-family: Tahoma;\"><a href=\"http://atvmedia.net/\" style=\"margin: 0px; padding: 0px;\">www.</a>&nbsp;<a href=\"http://atvmedia.net/\" style=\"margin: 0px; padding: 0px;\">atvmedia.net</a></span></span><span style=\"margin: 0px; padding: 0px; font-family: Tahoma; font-size: 14px;\"><u style=\"margin: 0px; padding: 0px;\"><br style=\"margin: 0px; padding: 0px;\" />\r\n</u></span><a href=\"http://doanhnghiepquangnam.net/\" style=\"margin: 0px; padding: 0px; font-family: Tahoma; font-size: 14px;\">www.</a><span style=\"margin: 0px; padding: 0px; font-family: Tahoma; font-size: 14px;\"><a href=\"http://doanhnghiepquangnam.net/\" style=\"margin: 0px; padding: 0px;\">&nbsp;</a><u style=\"margin: 0px; padding: 0px;\"><a href=\"http://doanhnghiepquangnam.net/\" style=\"margin: 0px; padding: 0px;\">doanhnghiepquangnam.net</a>&nbsp;<br style=\"margin: 0px; padding: 0px;\" />\r\n</u></span><u style=\"margin: 0px; padding: 0px;\"><font face=\"Tahoma\" style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; font-size: 14px;\"><a href=\"http://92online.vn/\" style=\"margin: 0px; padding: 0px;\">www.92online.vn</a></span></font><br style=\"margin: 0px; padding: 0px;\" />\r\n</u><font color=\"#0000ee\" face=\"Tahoma\" style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; font-size: 14.4px;\"><u style=\"margin: 0px; padding: 0px;\"><a href=\"http://doanhnghiepquangnam.net/\" style=\"margin: 0px; padding: 0px;\">www.diemdenquangnam.com</a></u></span></font><a href=\"http://naima.vn/lien-he.html#\" style=\"margin: 0px; padding: 0px; font-family: Tahoma; font-size: larger;\"><br style=\"margin: 0px; padding: 0px;\" />\r\n<br style=\"margin: 0px; padding: 0px;\" />\r\n</a>\r\n<div class=\"contact-title\" style=\"margin: 0px; padding: 0px;\"><u style=\"margin: 0px; padding: 0px; font-family: Tahoma; font-size: larger;\"><span style=\"margin: 0px; padding: 0px; color: rgb(255, 0, 0);\">Văn ph&ograve;ng l</span></u><font color=\"#ff0000\" face=\"Tahoma\" style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; font-size: 14px;\"><u style=\"margin: 0px; padding: 0px;\">&agrave;m việc</u></span></font><br style=\"margin: 0px; padding: 0px;\" />\r\n<br style=\"margin: 0px; padding: 0px;\" />\r\n<span style=\"margin: 0px; padding: 0px; font-size: medium;\"><span style=\"margin: 0px; padding: 0px; font-family: Arial;\"><span style=\"margin: 0px; padding: 0px; color: rgb(255, 0, 0);\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Địa chỉ: &nbsp;</span><span style=\"margin: 0px; padding: 0px; font-size: small;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Điện Bi&ecirc;n Phủ - Phường An Mỹ - TP .Tam Kỳ</span></span></span></span></span><span style=\"margin: 0px; padding: 0px; font-size: larger;\"><span style=\"margin: 0px; padding: 0px; font-family: Tahoma;\"><span style=\"margin: 0px; padding: 0px; color: rgb(255, 0, 0);\"><br style=\"margin: 0px; padding: 0px;\" />\r\n</span></span></span>\r\n<div class=\"contact-title\" style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; font-size: larger;\"><span style=\"margin: 0px; padding: 0px; font-family: Tahoma;\">Email:<span style=\"margin: 0px; padding: 0px; color: rgb(255, 0, 0);\">&nbsp; &nbsp; &nbsp;</span>hr@atvmedia.net</span></span><span style=\"margin: 0px; padding: 0px; color: rgb(255, 0, 0);\"><span style=\"margin: 0px; padding: 0px; font-size: larger;\"><span style=\"margin: 0px; padding: 0px; font-family: Tahoma;\"><br style=\"margin: 0px; padding: 0px;\" />\r\n</span></span></span></div>\r\n<div class=\"contact-content\" style=\"margin: 0px; padding: 0px; text-align: start;\">\r\n<div class=\"row\" style=\"margin: 0px; padding: 0px;\">\r\n<div style=\"margin: 0px; padding: 0px; text-align: justify;\"><span style=\"margin: 0px; padding: 0px; font-size: larger;\"><span style=\"margin: 0px; padding: 0px; font-family: Tahoma;\">Điện thoại : &nbsp;0914 45 43 48 - 0905 45 43 48</span></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"contact-content\" style=\"margin: 0px; padding: 0px; font-family: Arial, Tahoma, Geneva, sans-serif; text-align: start; background-color: rgb(249, 249, 249);\">\r\n<div class=\"row\" style=\"margin: 0px; padding: 0px;\">\r\n<h5 style=\"margin: 0px; padding: 0px; text-align: justify;\"><span style=\"margin: 0px; padding: 0px; font-size: larger;\">Hỗ trợ thanh to&aacute;n qua :</span></h5>\r\n</div>\r\n<div class=\"row\" style=\"margin: 0px; padding: 0px;\">T&agrave;i Khoản C&ocirc;ng ty - Ng&acirc;n H&agrave;ng Vietcombank<br style=\"margin: 0px; padding: 0px;\" />\r\n<br style=\"margin: 0px; padding: 0px;\" />\r\nSố t&agrave;i khoản : 0651000782025<br style=\"margin: 0px; padding: 0px;\" />\r\n<br style=\"margin: 0px; padding: 0px;\" />\r\nChủ t&agrave;i khoản : C&ocirc;ng Ty TNHH MTV TK V&Agrave; TT ATVMEDIA<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n&nbsp;</div>\r\n</div>\r\n</div>', '', '<br />\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: larger;\">&nbsp;Vo Nguyen Giap</span><span style=\"font-size: larger;\">&nbsp;St, Cam Chau Ward,&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: larger;\">Hoi An City, Quang Nam Province</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: larger;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: larger;\">Tel &nbsp; &nbsp; &nbsp; &nbsp;: 0510.3963.555</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: larger;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: larger;\">Fax &nbsp; &nbsp; &nbsp; &nbsp;: 0510.3938.387</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: larger;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: larger;\">Hotline &nbsp;:&nbsp;</span><span style=\"font-size: 14.4px;\">0981 485 969</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: larger;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: larger;\">Email &nbsp; &nbsp; :&nbsp;</span><span style=\"font-size: 14.4px;\">seasnailhomestay</span><span style=\"font-size: larger;\">@gmail.com</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: larger;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: larger;\">Website :&nbsp;</span><span style=\"font-size: 14.4px;\">www.seasnailhomestay.com</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: 14.4px;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; www.s​easnailhomestayhoian.com</span><span style=\"font-size: larger;\">&nbsp;</span></p>', 'thiennhatminh@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuong_mai`
--

CREATE TABLE `thuong_mai` (
  `id` int(11) NOT NULL,
  `hinhanh` text NOT NULL,
  `noidung` text NOT NULL,
  `trangchu` text NOT NULL,
  `mota` text NOT NULL,
  `tieude` text NOT NULL,
  `tieude_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `mota_en` text NOT NULL,
  `ngay` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thuong_mai`
--

INSERT INTO `thuong_mai` (`id`, `hinhanh`, `noidung`, `trangchu`, `mota`, `tieude`, `tieude_en`, `noidung_en`, `mota_en`, `ngay`) VALUES
(9, 'slideshow-hype-001.webp', '', '', '', 'hype store 1', '', '', '', ''),
(10, 'slideshow-hype-002.webp', '', '', '', 'hype store 2', '', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_dichvu`
--

CREATE TABLE `tin_dichvu` (
  `id` int(11) NOT NULL,
  `hinhanh` text NOT NULL,
  `noidung` text NOT NULL,
  `trangchu` text NOT NULL,
  `mota` text NOT NULL,
  `tieude` text NOT NULL,
  `tieude_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `mota_en` text NOT NULL,
  `title` text NOT NULL,
  `tukhoa` text NOT NULL,
  `facebook` text NOT NULL,
  `linkurl` text NOT NULL,
  `ngay` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `xem` int(11) NOT NULL,
  `nguon` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hinhqcab` varchar(200) NOT NULL,
  `hinhqcabc` varchar(200) NOT NULL,
  `hinhndab` varchar(200) NOT NULL,
  `hinhndabc` varchar(200) NOT NULL,
  `hinhndabcd` varchar(200) NOT NULL,
  `thuocloai` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_sanpham`
--

CREATE TABLE `tin_sanpham` (
  `id` int(11) NOT NULL,
  `hinhanh` text NOT NULL,
  `noidung` text NOT NULL,
  `trangchu` text NOT NULL,
  `mota` text NOT NULL,
  `tieude` text NOT NULL,
  `tieude_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `mota_en` text NOT NULL,
  `title` text NOT NULL,
  `tukhoa` text NOT NULL,
  `facebook` text NOT NULL,
  `linkurl` text NOT NULL,
  `ngay` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `xem` int(11) NOT NULL,
  `nguon` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hinhqcab` varchar(200) NOT NULL,
  `hinhqcabc` varchar(200) NOT NULL,
  `hinhndab` varchar(200) NOT NULL,
  `hinhndabc` varchar(200) NOT NULL,
  `hinhndabcd` varchar(200) NOT NULL,
  `thuocloai` text NOT NULL,
  `noibat` int(3) NOT NULL,
  `star` tinyint(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tin_sanpham`
--

INSERT INTO `tin_sanpham` (`id`, `hinhanh`, `noidung`, `trangchu`, `mota`, `tieude`, `tieude_en`, `noidung_en`, `mota_en`, `title`, `tukhoa`, `facebook`, `linkurl`, `ngay`, `xem`, `nguon`, `hinhqcab`, `hinhqcabc`, `hinhndab`, `hinhndabc`, `hinhndabcd`, `thuocloai`, `noibat`, `star`) VALUES
(1, 'banner-aodoi-001_7_11zon.webp', '', '', '', '', 'shop love studio sale1', '', '', '', '', '', 'shop-love-studio-sale1', ' 19/08/2024 ', 0, '', '5689', '5689', '', '5689', '5689', '', 0, 0),
(2, 'banner-aodoi-002_8_11zon.webp', '', '', '', '', 'shop love studio sale2', '', '', '', '', '', 'shop-love-studio-sale2', ' 19/08/2024 ', 0, '', '6378', '6378', '', '6378', '6378', '', 0, 0),
(3, 'banner-dogiadinh-001_1_11zon.webp', '', '', '', '', 'shop love studio sale3', '', '', '', '', '', 'shop-love-studio-sale3', ' 19/08/2024 ', 0, '', '916', '916', '', '916', '916', '', 0, 0),
(4, 'banner-dogiadinh-002_2_11zon.webp', '', '', '', '', 'shop love studio sale4', '', '', '', '', '', 'shop-love-studio-sale4', ' 19/08/2024 ', 0, '', '5605', '5605', '', '5605', '5605', '', 0, 0),
(5, 'banner-aoformrong-001_9_11zon.webp', '', '', '', '', 'shop love studio sale5', '', '', '', '', '', 'shop-love-studio-sale5', ' 19/08/2024 ', 0, '', '2667', '2667', '', '2667', '2667', '', 0, 0),
(6, 'banner-aoformrong-002_10_11zon.webp', '', '', '', '', 'shop love studio sale6', '', '', '', '', '', 'shop-love-studio-sale6', ' 19/08/2024 ', 0, '', '4251', '4251', '', '4251', '4251', '', 0, 0),
(7, 'banner-aothunnu-001_11_11zon.webp', '', '', '', '', 'shop love studio sale7', '', '', '', '', '', 'shop-love-studio-sale7', ' 19/08/2024 ', 0, '', '5583', '5583', '', '5583', '5583', '', 0, 0),
(8, 'banner-aothunnu-002_12_11zon.webp', '', '', '', '', 'shop love studio sale8', '', '', '', '', '', 'shop-love-studio-sale8', ' 19/08/2024 ', 0, '', '2988', '2988', '', '2988', '2988', '', 0, 0),
(9, 'banner-quanshort-001_5_11zon.webp', '', '', '', '', 'shop love studio sale7', '', '', '', '', '', 'shop-love-studio-sale7', ' 19/08/2024 ', 0, '', '9860', '9860', '', '9860', '9860', '', 0, 0),
(10, 'banner-quanshort-002_6_11zon.webp', '', '', '', '', 'shop love studio sale8', '', '', '', '', '', 'shop-love-studio-sale8', ' 19/08/2024 ', 0, '', '2294', '2294', '', '2294', '2294', '', 0, 0),
(11, 'banner-quandai-001_3_11zon.webp', '', '', '', '', 'shop love studio sale9', '', '', '', '', '', 'shop-love-studio-sale9', ' 19/08/2024 ', 0, '', '2180', '2180', '', '2180', '2180', '', 0, 0),
(12, 'banner-quandai-002_4_11zon.webp', '', '', '', '', 'shop love studio sale10', '', '', '', '', '', 'shop-love-studio-sale10', ' 19/08/2024 ', 0, '', '1980', '1980', '', '1980', '1980', '', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_thicong`
--

CREATE TABLE `tin_thicong` (
  `id` int(11) NOT NULL,
  `hinhanh` text NOT NULL,
  `noidung` text NOT NULL,
  `trangchu` text NOT NULL,
  `mota` text NOT NULL,
  `tieude` text NOT NULL,
  `tieude_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `mota_en` text NOT NULL,
  `title` text NOT NULL,
  `tukhoa` text NOT NULL,
  `facebook` text NOT NULL,
  `linkurl` text NOT NULL,
  `ngay` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `xem` int(11) NOT NULL,
  `nguon` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hinhqcab` varchar(200) NOT NULL,
  `hinhqcabc` varchar(200) NOT NULL,
  `hinhndab` varchar(200) NOT NULL,
  `hinhndabc` varchar(200) NOT NULL,
  `hinhndabcd` varchar(200) NOT NULL,
  `thuocloai` text NOT NULL,
  `noibat` int(3) NOT NULL,
  `star` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tin_thicong`
--

INSERT INTO `tin_thicong` (`id`, `hinhanh`, `noidung`, `trangchu`, `mota`, `tieude`, `tieude_en`, `noidung_en`, `mota_en`, `title`, `tukhoa`, `facebook`, `linkurl`, `ngay`, `xem`, `nguon`, `hinhqcab`, `hinhqcabc`, `hinhndab`, `hinhndabc`, `hinhndabcd`, `thuocloai`, `noibat`, `star`) VALUES
(1, '7938', '', '', 'Massage Foot Ngọc Ánh tại Thành phố Hồ Chí Minh là liệu pháp thư giãn hiệu quả, giúp giảm mệt mỏi, cải thiện tuần hoàn và mang lại cảm giác thoải mái cho đôi chân sau những ngày dài làm việc.', 'Giới Thiệu', '', '', '', '', '', '', '', ' 30/05/2024 ', 0, '', '', '', '', '', '', '1', 0, 0),
(2, '8312', '', '', '33G Tân Hoà Đông, Phường 13, Q.6, TP.HCM', 'Địa chỉ', '', '', '', '', '', '', '', ' 30/05/2024 ', 0, '', '', '', '', '', '', '2', 0, 0),
(3, '3633', '', '', '0919003498', 'Số Điện Thoại', '', '', '', '', '', '', '', ' 30/05/2024 ', 0, '', '', '', '', '', '', '3', 0, 0),
(4, '5786', '', '', 'hongthuyphan1980@gmail.com', 'email', '', '', '', '', '', '', '', ' 30/05/2024 ', 0, '', '', '', '', '', '', '4', 0, 0),
(5, '4209', '', '', '      ', 'Chi nhánh tại thành phố Đà Nẵng', 'trang-chu', '', '', '', '', '', '', ' 30/05/2024 ', 0, '', '', '', '', '', '', '8', 0, 0),
(6, '5870', '', '', '    ', 'Chi nhánh tại thành phố Huế', 'gioi-thieu', '', '', '', '', '', '', ' 30/05/2024 ', 0, '', '', '', '', '', '', '8', 0, 0),
(7, '5927', '', '', '    ', 'Chi nhánh tại tỉnh Quảng Nam', 'noi-that-xu-huong-1', '', '', '', '', '', '', ' 30/05/2024 ', 0, '', '', '', '', '', '', '8', 0, 0),
(8, '4890', '', '', '   ', 'Chi nhánh tại tỉnh Quảng Ngãi', 'noi-that-phong-thuy-2', '', '', '', '', '', '', ' 30/05/2024 ', 0, '', '', '', '', '', '', '8', 0, 0),
(9, '5265', '', '', '  ', 'Chi nhánh tại Hà Nội', 'noi-that-hien-dai-3', '', '', '', '', '', '', ' 30/05/2024 ', 0, '', '', '', '', '', '', '8', 0, 0),
(10, '5396', '', '', '  ', 'Chi nhánh tại Đà Lạt', 'kien-thuc', '', '', '', '', '', '', ' 30/05/2024 ', 0, '', '', '', '', '', '', '8', 0, 0),
(11, '9169', '', '', ' ', 'Tin Tức', 'tin-tuc', '', '', '', '', '', '', ' 30/05/2024 ', 0, '', '', '', '', '', '', '5', 0, 0),
(12, '6034', '', '', '  ', 'GIỚI THIỆU', 'gioi-thieu', '', '', '', '', '', '', ' 30/05/2024 ', 0, '', '', '', '', '', '', '6', 0, 0),
(13, '3885', '', '', ' ', 'CHÍNH SÁCH BẢO MẬT THÔNG TIN', 'tieu-chuan-Chinh-Sach-Bao-Mat-Thong-Tin-1', '', '', '', '', '', '', ' 30/05/2024 ', 0, '', '', '', '', '', '', '6', 0, 0),
(14, '2510', '', '', ' ', 'ĐIỀU KIỆN ĐIỀU KHOẢN', 'tieu-chuan-Dieu-Kien-Dieu-Khoan-2', '', '', '', '', '', '', ' 30/05/2024 ', 0, '', '', '', '', '', '', '6', 0, 0),
(15, '6839', '', '', ' ', 'LIÊN HỆ', 'lien-he', '', '', '', '', '', '', ' 30/05/2024 ', 0, '', '', '', '', '', '', '6', 0, 0),
(16, '9038', '', '', '  ', 'TÁC GIẢ', 'tieu-chuan-Tac-Gia-3', '', '', '', '', '', '', ' 30/05/2024 ', 0, '', '', '', '', '', '', '6', 0, 0),
(17, '5472', '', '', '  ', 'Copyright 2024 © worlddecoranl.com', '', '', '', '', '', '', '', ' 30/05/2024 ', 0, '', '', '', '', '', '', '7', 0, 0),
(23, '9702', '', '', ' ', 'worlddecoranl.com', '', '', '', '', '', '', '', ' 31/05/2024 ', 0, '', '', '', '', '', '', '9', 0, 0),
(25, 'hinha-ads-1.gif', '', '', '   ', 'ads bottom', '', '', '', '', '', '', '', ' 05/07/2024 ', 0, '', '', '', '', '', '', '10', 0, 0),
(26, '1895hinhads-2.gif', '', '', '  ', 'ads content', '', '', '', '', '', '', '', ' 05/07/2024 ', 0, '', '', '', '', '', '', '10', 0, 0),
(27, '9874ads-phai.png', '', '', '  ', 'ads menuleft', '', '', '', '', '', '', '', ' 05/07/2024 ', 0, '', '', '', '', '', '', '10', 0, 0),
(28, '9437ads-phai778.png', '', '', '', 'hình sp 2', '', '', '', '', '', '', '', ' 05/07/2024 ', 0, '', '9437', '9437', '9437', '9437', '9437', '10', 0, 0),
(29, '1.png', '', '', '  ', 'Hình logo', '', '', '', '', '', '', '', ' 05/07/2024 ', 0, '', '', '', '', '', '', '10', 0, 0),
(30, 'ads-top.jpg', '', '', '    ', 'ads top', '', '', '', '', '', '', '', ' 05/07/2024 ', 0, '', '', '', '', '', '', '10', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_tintuc`
--

CREATE TABLE `tin_tintuc` (
  `id` int(11) NOT NULL,
  `hinhanh` text NOT NULL,
  `noidung` longtext NOT NULL,
  `trangchu` text NOT NULL,
  `mota` text NOT NULL,
  `tieude` text NOT NULL,
  `tieude_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `mota_en` text NOT NULL,
  `title` text NOT NULL,
  `tukhoa` text NOT NULL,
  `facebook` text NOT NULL,
  `linkurl` text NOT NULL,
  `ngay` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `xem` int(11) NOT NULL,
  `nguon` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hinhqcab` varchar(200) NOT NULL,
  `hinhqcabc` varchar(200) NOT NULL,
  `hinhndab` varchar(200) NOT NULL,
  `hinhndabc` varchar(200) NOT NULL,
  `hinhndabcd` varchar(200) NOT NULL,
  `thuocloai` int(11) NOT NULL,
  `noibat` int(3) NOT NULL,
  `moi` int(11) NOT NULL,
  `km` int(11) NOT NULL,
  `chay` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tin_tintuc`
--

INSERT INTO `tin_tintuc` (`id`, `hinhanh`, `noidung`, `trangchu`, `mota`, `tieude`, `tieude_en`, `noidung_en`, `mota_en`, `title`, `tukhoa`, `facebook`, `linkurl`, `ngay`, `xem`, `nguon`, `hinhqcab`, `hinhqcabc`, `hinhndab`, `hinhndabc`, `hinhndabcd`, `thuocloai`, `noibat`, `moi`, `km`, `chay`) VALUES
(99, 'lovestudio_dogiadinh_0010.webp', '<p><strong>Phần 1: Giới Thiệu</strong></p>\r\n\r\n<p>Trong những năm gần đ&acirc;y, xu hướng thiết kế nội thất xanh đ&atilde; trở n&ecirc;n phổ biến, khi con người ng&agrave;y c&agrave;ng nhận thức r&otilde; hơn về tầm quan trọng của m&ocirc;i trường sống v&agrave; sức khỏe. Thiết kế nội thất xanh kh&ocirc;ng chỉ dừng lại ở việc sử dụng c&aacute;c vật liệu th&acirc;n thiện với m&ocirc;i trường m&agrave; c&ograve;n bao gồm việc đưa c&aacute;c yếu tố thi&ecirc;n nhi&ecirc;n v&agrave;o trong kh&ocirc;ng gian sống. Điều n&agrave;y gi&uacute;p tạo ra một m&ocirc;i trường sống l&agrave;nh mạnh, cải thiện chất lượng kh&ocirc;ng kh&iacute; v&agrave; mang lại cảm gi&aacute;c thư th&aacute;i, y&ecirc;n b&igrave;nh cho ng&ocirc;i nh&agrave;. B&agrave;i viết n&agrave;y sẽ kh&aacute;m ph&aacute; chi tiết về xu hướng thiết kế nội thất xanh v&agrave; c&aacute;ch đưa thi&ecirc;n nhi&ecirc;n v&agrave;o nh&agrave; qua c&aacute;c &yacute; tưởng s&aacute;ng tạo v&agrave; thiết thực.</p>\r\n\r\n<p><strong>Phần 2: Lợi &Iacute;ch Của Thiết Kế Nội Thất Xanh</strong></p>\r\n\r\n<p><strong>2.1. Cải Thiện Chất Lượng Kh&ocirc;ng Kh&iacute;</strong></p>\r\n\r\n<p>C&acirc;y xanh kh&ocirc;ng chỉ l&agrave;m đẹp kh&ocirc;ng gian m&agrave; c&ograve;n gi&uacute;p lọc kh&ocirc;ng kh&iacute;, giảm thiểu c&aacute;c chất &ocirc; nhiễm v&agrave; cung cấp oxy tươi mới cho m&ocirc;i trường sống. C&aacute;c loại c&acirc;y như lưỡi hổ, c&acirc;y kim tiền, v&agrave; c&acirc;y d&acirc;y nhện c&oacute; khả năng hấp thụ c&aacute;c chất độc hại từ kh&ocirc;ng kh&iacute;, gi&uacute;p cải thiện sức khỏe h&ocirc; hấp v&agrave; mang lại kh&ocirc;ng kh&iacute; trong l&agrave;nh hơn cho ng&ocirc;i nh&agrave; của bạn.</p>\r\n\r\n<p><strong>2.2. Tạo Cảm Gi&aacute;c Thư Th&aacute;i v&agrave; Giảm Căng Thẳng</strong></p>\r\n\r\n<p>Thi&ecirc;n nhi&ecirc;n c&oacute; t&aacute;c dụng rất lớn trong việc giảm căng thẳng v&agrave; cải thiện t&acirc;m trạng. M&agrave;u xanh của c&acirc;y cối v&agrave; sự sống động của c&aacute;c loại c&acirc;y trong nh&agrave; c&oacute; thể tạo ra một kh&ocirc;ng gian y&ecirc;n b&igrave;nh, gi&uacute;p giảm lo &acirc;u v&agrave; mang lại cảm gi&aacute;c thư th&aacute;i. Sự hiện diện của c&acirc;y xanh cũng c&oacute; thể cải thiện sự tập trung v&agrave; tăng năng suất l&agrave;m việc.</p>\r\n\r\n<p><strong>2.3. Tăng Cường Sự S&aacute;ng Tạo v&agrave; Cảm Hứng</strong></p>\r\n\r\n<p>Một kh&ocirc;ng gian sống c&oacute; yếu tố thi&ecirc;n nhi&ecirc;n sẽ k&iacute;ch th&iacute;ch sự s&aacute;ng tạo v&agrave; mang lại cảm hứng mới mẻ. C&aacute;c nghi&ecirc;n cứu đ&atilde; chỉ ra rằng, sự hiện diện của c&acirc;y xanh trong kh&ocirc;ng gian l&agrave;m việc c&oacute; thể tăng cường khả năng tư duy s&aacute;ng tạo v&agrave; gi&uacute;p con người cảm thấy hứng khởi hơn.</p>\r\n\r\n<p><strong>2.4. Giảm Tiếng Ồn</strong></p>\r\n\r\n<p>C&acirc;y xanh c&oacute; khả năng hấp thụ &acirc;m thanh, gi&uacute;p giảm tiếng ồn từ b&ecirc;n ngo&agrave;i v&agrave; tạo ra một kh&ocirc;ng gian y&ecirc;n tĩnh hơn. Điều n&agrave;y đặc biệt hữu &iacute;ch cho những ng&ocirc;i nh&agrave; nằm trong khu vực đ&ocirc; thị ồn &agrave;o hoặc gần c&aacute;c tuyến đường giao th&ocirc;ng ch&iacute;nh.</p>\r\n\r\n<p><strong>Phần 3: C&aacute;c Yếu Tố Cơ Bản Trong Thiết Kế Nội Thất Xanh</strong></p>\r\n\r\n<p><strong>3.1. Sử Dụng Vật Liệu Tự Nhi&ecirc;n</strong></p>\r\n\r\n<p>Vật liệu tự nhi&ecirc;n như gỗ, tre, đ&aacute; v&agrave; sợi tự nhi&ecirc;n kh&ocirc;ng chỉ th&acirc;n thiện với m&ocirc;i trường m&agrave; c&ograve;n mang lại vẻ đẹp tự nhi&ecirc;n v&agrave; ấm c&uacute;ng cho kh&ocirc;ng gian nội thất. Gỗ t&aacute;i chế, tre, nứa v&agrave; c&aacute;c loại vật liệu sinh học kh&aacute;c đều l&agrave; những lựa chọn tuyệt vời cho thiết kế nội thất xanh.</p>\r\n\r\n<p><strong>3.2. Tận Dụng &Aacute;nh S&aacute;ng Tự Nhi&ecirc;n</strong></p>\r\n\r\n<p>&Aacute;nh s&aacute;ng tự nhi&ecirc;n l&agrave; yếu tố quan trọng trong thiết kế nội thất xanh. H&atilde;y thiết kế c&aacute;c cửa sổ lớn, cửa k&iacute;nh, v&agrave; giếng trời để tối ưu h&oacute;a &aacute;nh s&aacute;ng tự nhi&ecirc;n v&agrave;o nh&agrave;. Điều n&agrave;y kh&ocirc;ng chỉ gi&uacute;p tiết kiệm năng lượng m&agrave; c&ograve;n mang lại kh&ocirc;ng gian sống tươi s&aacute;ng v&agrave; tho&aacute;ng đ&atilde;ng.</p>\r\n\r\n<p><strong>3.3. Sử Dụng C&acirc;y Xanh Trong Nh&agrave;</strong></p>\r\n\r\n<p>C&acirc;y xanh kh&ocirc;ng chỉ l&agrave;m đẹp kh&ocirc;ng gian m&agrave; c&ograve;n c&oacute; t&aacute;c dụng thanh lọc kh&ocirc;ng kh&iacute; v&agrave; tạo ra một m&ocirc;i trường sống l&agrave;nh mạnh. Bạn c&oacute; thể sử dụng c&aacute;c loại c&acirc;y cảnh nhỏ cho b&agrave;n l&agrave;m việc, c&acirc;y lớn cho g&oacute;c ph&ograve;ng, hoặc thậm ch&iacute; l&agrave; c&aacute;c vườn thẳng đứng (vertical gardens) để tận dụng kh&ocirc;ng gian chiều cao của ng&ocirc;i nh&agrave;.</p>\r\n\r\n<p><strong>3.4. Hệ Thống Nước T&aacute;i Chế</strong></p>\r\n\r\n<p>Thiết kế hệ thống nước t&aacute;i chế gi&uacute;p tiết kiệm nước v&agrave; bảo vệ m&ocirc;i trường. Bạn c&oacute; thể sử dụng nước mưa để tưới c&acirc;y hoặc lắp đặt c&aacute;c hệ thống lọc nước tại nh&agrave; để giảm thiểu việc sử dụng nước sạch từ nguồn.</p>\r\n\r\n<p><strong>3.5. Sử Dụng Đồ Nội Thất Th&acirc;n Thiện Với M&ocirc;i Trường</strong></p>\r\n\r\n<p>Chọn đồ nội thất l&agrave;m từ c&aacute;c vật liệu t&aacute;i chế hoặc c&oacute; chứng nhận th&acirc;n thiện với m&ocirc;i trường. C&aacute;c sản phẩm nội thất được sản xuất từ gỗ t&aacute;i chế, tre, hoặc c&aacute;c vật liệu sinh học đều l&agrave; những lựa chọn tuyệt vời cho thiết kế nội thất xanh.</p>\r\n\r\n<p><strong>Phần 4: C&aacute;c &Yacute; Tưởng Thiết Kế Nội Thất Xanh</strong></p>\r\n\r\n<p><strong>4.1. Vườn Treo (Hanging Gardens)</strong></p>\r\n\r\n<p>Vườn treo l&agrave; một giải ph&aacute;p tuyệt vời để đưa thi&ecirc;n nhi&ecirc;n v&agrave;o kh&ocirc;ng gian sống m&agrave; kh&ocirc;ng chiếm qu&aacute; nhiều diện t&iacute;ch. Bạn c&oacute; thể treo c&aacute;c chậu c&acirc;y nhỏ l&ecirc;n trần nh&agrave; hoặc tr&ecirc;n tường để tạo ra một kh&ocirc;ng gian xanh m&aacute;t v&agrave; sống động.</p>\r\n\r\n<p><strong>4.2. Tường Xanh (Green Walls)</strong></p>\r\n\r\n<p>Tường xanh, hay c&ograve;n gọi l&agrave; vườn thẳng đứng, l&agrave; một c&aacute;ch s&aacute;ng tạo để tận dụng kh&ocirc;ng gian tường v&agrave; đưa thi&ecirc;n nhi&ecirc;n v&agrave;o nh&agrave;. C&aacute;c tường xanh kh&ocirc;ng chỉ đẹp mắt m&agrave; c&ograve;n gi&uacute;p cải thiện chất lượng kh&ocirc;ng kh&iacute; v&agrave; tạo ra một kh&ocirc;ng gian sống m&aacute;t mẻ hơn.</p>\r\n\r\n<p><strong>4.3. Vườn Trong Nh&agrave; (Indoor Gardens)</strong></p>\r\n\r\n<p>Tạo ra một khu vườn nhỏ trong nh&agrave; l&agrave; c&aacute;ch tuyệt vời để mang thi&ecirc;n nhi&ecirc;n v&agrave;o kh&ocirc;ng gian sống. Bạn c&oacute; thể sử dụng c&aacute;c chậu c&acirc;y lớn hoặc c&aacute;c kệ để trồng c&acirc;y trong ph&ograve;ng kh&aacute;ch, ph&ograve;ng bếp hoặc ph&ograve;ng ngủ.</p>\r\n\r\n<p><strong>4.4. Khu Vườn Thảo Mộc (Herb Gardens)</strong></p>\r\n\r\n<p>Một khu vườn thảo mộc nhỏ trong nh&agrave; bếp kh&ocirc;ng chỉ mang lại vẻ đẹp tự nhi&ecirc;n m&agrave; c&ograve;n cung cấp c&aacute;c loại thảo mộc tươi ngon cho bữa ăn h&agrave;ng ng&agrave;y. Bạn c&oacute; thể trồng c&aacute;c loại c&acirc;y như h&uacute;ng quế, ng&ograve; r&iacute;, hương thảo, v&agrave; bạc h&agrave; trong c&aacute;c chậu nhỏ tr&ecirc;n kệ bếp hoặc tr&ecirc;n cửa sổ.</p>\r\n\r\n<p><strong>4.5. Sử Dụng Đ&egrave;n LED Th&acirc;n Thiện Với M&ocirc;i Trường</strong></p>\r\n\r\n<p>Đ&egrave;n LED kh&ocirc;ng chỉ tiết kiệm năng lượng m&agrave; c&ograve;n th&acirc;n thiện với m&ocirc;i trường. H&atilde;y sử dụng c&aacute;c loại đ&egrave;n LED c&oacute; thiết kế đẹp mắt v&agrave; &aacute;nh s&aacute;ng ấm &aacute;p để tạo ra một kh&ocirc;ng gian sống ấm c&uacute;ng v&agrave; tiết kiệm điện năng.</p>\r\n\r\n<p><strong>Phần 5: Thiết Kế Nội Thất Xanh Cho C&aacute;c Ph&ograve;ng Cụ Thể</strong></p>\r\n\r\n<p><strong>5.1. Ph&ograve;ng Kh&aacute;ch</strong></p>\r\n\r\n<p>Ph&ograve;ng kh&aacute;ch l&agrave; trung t&acirc;m của ng&ocirc;i nh&agrave;, nơi mọi người tụ họp v&agrave; thư gi&atilde;n. Để thiết kế ph&ograve;ng kh&aacute;ch xanh, bạn c&oacute; thể sử dụng c&aacute;c c&acirc;y cảnh lớn như c&acirc;y lưỡi hổ, c&acirc;y kim tiền, hoặc c&acirc;y phất dụ. C&aacute;c loại c&acirc;y n&agrave;y kh&ocirc;ng chỉ l&agrave;m đẹp kh&ocirc;ng gian m&agrave; c&ograve;n gi&uacute;p thanh lọc kh&ocirc;ng kh&iacute;.</p>\r\n\r\n<p>H&atilde;y sử dụng c&aacute;c vật liệu tự nhi&ecirc;n như gỗ, tre, hoặc sợi tự nhi&ecirc;n cho đồ nội thất v&agrave; trang tr&iacute;. C&aacute;c thảm trải s&agrave;n từ sợi tự nhi&ecirc;n, gối nệm từ b&ocirc;ng hữu cơ, v&agrave; r&egrave;m cửa từ vải lanh đều l&agrave; những lựa chọn tuyệt vời.</p>\r\n\r\n<p><strong>5.2. Ph&ograve;ng Bếp</strong></p>\r\n\r\n<p>Ph&ograve;ng bếp l&agrave; nơi nấu nướng v&agrave; chuẩn bị bữa ăn, do đ&oacute; cần thiết kế sao cho tiện nghi v&agrave; sạch sẽ. H&atilde;y tận dụng &aacute;nh s&aacute;ng tự nhi&ecirc;n bằng c&aacute;ch lắp đặt c&aacute;c cửa sổ lớn hoặc giếng trời. Bạn cũng c&oacute; thể tạo ra một khu vườn thảo mộc nhỏ tr&ecirc;n kệ bếp hoặc cửa sổ để c&oacute; thể sử dụng c&aacute;c loại thảo mộc tươi ngon mỗi ng&agrave;y.</p>\r\n\r\n<p>Sử dụng c&aacute;c vật liệu tự nhi&ecirc;n cho tủ bếp, b&agrave;n ăn, v&agrave; ghế ngồi. Gỗ t&aacute;i chế, đ&aacute; granite, v&agrave; sợi tự nhi&ecirc;n đều l&agrave; những lựa chọn tuyệt vời.</p>\r\n\r\n<p><strong>5.3. Ph&ograve;ng Ngủ</strong></p>\r\n\r\n<p>Ph&ograve;ng ngủ l&agrave; nơi nghỉ ngơi v&agrave; thư gi&atilde;n, do đ&oacute; cần tạo ra một kh&ocirc;ng gian y&ecirc;n b&igrave;nh v&agrave; thoải m&aacute;i. Sử dụng c&aacute;c c&acirc;y cảnh nhỏ như c&acirc;y lưỡi hổ, c&acirc;y lan &yacute;, hoặc c&acirc;y nhện để cải thiện chất lượng kh&ocirc;ng kh&iacute; v&agrave; tạo ra một kh&ocirc;ng gian xanh m&aacute;t.</p>\r\n\r\n<p>H&atilde;y chọn c&aacute;c vật liệu tự nhi&ecirc;n v&agrave; th&acirc;n thiện với m&ocirc;i trường cho giường ngủ, tủ quần &aacute;o, v&agrave; c&aacute;c vật dụng trang tr&iacute;. Vải lanh, b&ocirc;ng hữu cơ, v&agrave; gỗ t&aacute;i chế đều l&agrave; những lựa chọn tốt.</p>\r\n\r\n<p><strong>5.4. Ph&ograve;ng Tắm</strong></p>\r\n\r\n<p>Ph&ograve;ng tắm cũng c&oacute; thể trở th&agrave;nh một kh&ocirc;ng gian xanh nếu bạn biết c&aacute;ch thiết kế. Sử dụng c&aacute;c c&acirc;y cảnh nhỏ chịu ẩm như c&acirc;y dương xỉ, c&acirc;y thường xu&acirc;n, hoặc c&acirc;y lưỡi hổ để trang tr&iacute; ph&ograve;ng tắm. C&aacute;c loại c&acirc;y n&agrave;y kh&ocirc;ng chỉ đẹp mắt m&agrave; c&ograve;n gi&uacute;p lọc kh&ocirc;ng kh&iacute; v&agrave; giảm độ ẩm.</p>\r\n\r\n<p>Chọn c&aacute;c vật liệu tự nhi&ecirc;n như đ&aacute;, gỗ, v&agrave; sợi tự nhi&ecirc;n cho c&aacute;c vật dụng trong ph&ograve;ng tắm. Bạn cũng c&oacute; thể sử dụng c&aacute;c sản phẩm chăm s&oacute;c c&aacute; nh&acirc;n từ nguy&ecirc;n liệu tự nhi&ecirc;n v&agrave; kh&ocirc;ng chứa h&oacute;a chất độc hại.</p>\r\n\r\n<p><strong>5.5. Kh&ocirc;ng Gian L&agrave;m Việc Tại Nh&agrave;</strong></p>\r\n\r\n<p>Với xu hướng l&agrave;m việc từ xa ng&agrave;y c&agrave;ng phổ biến, việc thiết kế kh&ocirc;ng gian l&agrave;m việc tại nh&agrave; xanh l&agrave; rất quan trọng. Sử dụng c&aacute;c c&acirc;y cảnh nhỏ như c&acirc;y kim tiền, c&acirc;y lan &yacute;, hoặc c&acirc;y nhện để tạo ra một kh&ocirc;ng gian l&agrave;m việc tươi m&aacute;t v&agrave; cải thiện sự tập trung.</p>\r\n\r\n<p>H&atilde;y chọn c&aacute;c b&agrave;n l&agrave;m việc v&agrave; ghế từ vật liệu tự nhi&ecirc;n v&agrave; th&acirc;n thiện với m&ocirc;i trường. &Aacute;nh s&aacute;ng tự nhi&ecirc;n cũng rất quan trọng, do đ&oacute; h&atilde;y bố tr&iacute; b&agrave;n l&agrave;m việc gần cửa sổ để tận dụng tối đa &aacute;nh s&aacute;ng tự nhi&ecirc;n.</p>\r\n\r\n<p><strong>Phần 6: C&aacute;c Dự &Aacute;n Thiết Kế Nội Thất Xanh Th&agrave;nh C&ocirc;ng</strong></p>\r\n\r\n<p><strong>6.1. Ng&ocirc;i Nh&agrave; C&acirc;y Xanh ở Singapore</strong></p>\r\n\r\n<p>Ng&ocirc;i nh&agrave; c&acirc;y xanh ở Singapore l&agrave; một v&iacute; dụ điển h&igrave;nh của thiết kế nội thất xanh. Ng&ocirc;i nh&agrave; được bao quanh bởi c&aacute;c c&acirc;y xanh lớn v&agrave; c&aacute;c khu vườn nhỏ, tạo ra một kh&ocirc;ng gian sống xanh m&aacute;t v&agrave; th&acirc;n thiện với m&ocirc;i trường. C&aacute;c cửa sổ lớn v&agrave; giếng trời được thiết kế để tận dụng tối đa &aacute;nh s&aacute;ng tự nhi&ecirc;n v&agrave; th&ocirc;ng gi&oacute; tự nhi&ecirc;n.</p>\r\n\r\n<p><strong>6.2. Văn Ph&ograve;ng Xanh của Google ở California</strong></p>\r\n\r\n<p>Văn ph&ograve;ng của Google ở California l&agrave; một trong những văn ph&ograve;ng xanh nổi tiếng nhất thế giới. Văn ph&ograve;ng được thiết kế với c&aacute;c khu vườn trong nh&agrave;, c&aacute;c c&acirc;y cảnh lớn, v&agrave; hệ thống th&ocirc;ng gi&oacute; tự nhi&ecirc;n. C&aacute;c vật liệu t&aacute;i chế v&agrave; th&acirc;n thiện với m&ocirc;i trường được sử dụng rộng r&atilde;i trong nội thất của văn ph&ograve;ng.</p>\r\n\r\n<p><strong>6.3. Kh&aacute;ch Sạn Treehotel ở Thụy Điển</strong></p>\r\n\r\n<p>Kh&aacute;ch sạn Treehotel ở Thụy Điển l&agrave; một v&iacute; dụ tuyệt vời của kiến tr&uacute;c xanh v&agrave; thiết kế nội thất xanh. C&aacute;c ph&ograve;ng kh&aacute;ch sạn được thiết kế như c&aacute;c ng&ocirc;i nh&agrave; tr&ecirc;n c&acirc;y, h&ograve;a quyện với thi&ecirc;n nhi&ecirc;n xung quanh. C&aacute;c vật liệu tự nhi&ecirc;n như gỗ, đ&aacute;, v&agrave; sợi tự nhi&ecirc;n được sử dụng rộng r&atilde;i trong thiết kế nội thất của kh&aacute;ch sạn.</p>\r\n\r\n<p><strong>Phần 7: Kết Luận</strong></p>\r\n\r\n<p>Thiết kế nội thất xanh kh&ocirc;ng chỉ l&agrave; một xu hướng m&agrave; c&ograve;n l&agrave; một lối sống gi&uacute;p bảo vệ m&ocirc;i trường v&agrave; cải thiện chất lượng cuộc sống. Việc đưa thi&ecirc;n nhi&ecirc;n v&agrave;o kh&ocirc;ng gian sống kh&ocirc;ng chỉ tạo ra một m&ocirc;i trường sống l&agrave;nh mạnh m&agrave; c&ograve;n mang lại cảm gi&aacute;c thư th&aacute;i v&agrave; hạnh ph&uacute;c.</p>\r\n\r\n<p>Bằng c&aacute;ch sử dụng c&aacute;c vật liệu tự nhi&ecirc;n, tận dụng &aacute;nh s&aacute;ng tự nhi&ecirc;n, v&agrave; đưa c&acirc;y xanh v&agrave;o nh&agrave;, bạn c&oacute; thể tạo ra một ng&ocirc;i nh&agrave; xanh m&aacute;t v&agrave; th&acirc;n thiện với m&ocirc;i trường. H&atilde;y bắt đầu từ những thay đổi nhỏ v&agrave; dần dần biến ng&ocirc;i nh&agrave; của bạn th&agrave;nh một kh&ocirc;ng gian sống xanh v&agrave; bền vững.</p>\r\n', '', 'Bài viết này sẽ khám phá chi tiết về xu hướng thiết kế nội thất xanh và cách đưa thiên nhiên vào nhà qua các ý tưởng sáng tạo và thiết thực.  ', 'Xu Hướng Thiết Kế Nội Thất ', 'Xu Hướng Thiết Kế Nội Thất Xanh - Đưa Thiên Nhiên Vào Nhà', '', '', '', 'Xu Hướng Thiết Kế Nội Thất ', '', 'xu-huong-thiet-ke-noi-that-xanh---dua-thien-nhien-vao-nha', ' 05/06/2024 ', 0, '', '6590', '', '6590', '', '', 5, 0, 0, 1, 0),
(101, 'lovestudio_dogiadinh_0011.webp', '<p><strong>Phần 1: Giới Thiệu</strong></p>\r\n\r\n<p>Việc trang tr&iacute; ph&ograve;ng trẻ em kh&ocirc;ng chỉ l&agrave; việc tạo ra một kh&ocirc;ng gian để ngủ v&agrave; chơi, m&agrave; c&ograve;n l&agrave; c&aacute;ch thể hiện sự y&ecirc;u thương v&agrave; quan t&acirc;m đến sở th&iacute;ch v&agrave; t&iacute;nh c&aacute;ch của trẻ. Ph&ograve;ng trẻ em cần phải l&agrave; một nơi an to&agrave;n, thoải m&aacute;i v&agrave; đầy s&aacute;ng tạo, nơi ch&uacute;ng c&oacute; thể ph&aacute;t triển v&agrave; kh&aacute;m ph&aacute; thế giới xung quanh một c&aacute;ch tự nhi&ecirc;n. Trong b&agrave;i viết n&agrave;y, ch&uacute;ng ta sẽ kh&aacute;m ph&aacute; c&aacute;c &yacute; tưởng trang tr&iacute; ph&ograve;ng trẻ em s&aacute;ng tạo v&agrave; th&uacute; vị để tạo ra một m&ocirc;i trường sống tốt cho c&aacute;c b&eacute;.</p>\r\n\r\n<p><strong>Phần 2: M&agrave;u Sắc Tươi S&aacute;ng v&agrave; Lạ Mắt</strong></p>\r\n\r\n<p>M&agrave;u sắc chơi vai tr&ograve; rất quan trọng trong việc tạo ra một kh&ocirc;ng gian ph&ograve;ng trẻ em s&aacute;ng tạo v&agrave; th&uacute; vị. Sử dụng c&aacute;c gam m&agrave;u tươi s&aacute;ng như m&agrave;u xanh dương, hồng nhạt, v&agrave;ng chanh, hoặc m&agrave;u cam c&oacute; thể k&iacute;ch th&iacute;ch sự t&ograve; m&ograve; v&agrave; sự s&aacute;ng tạo của trẻ.</p>\r\n\r\n<p><strong>Phần 3: Trang Tr&iacute; Tường Độc Đ&aacute;o</strong></p>\r\n\r\n<p>Trang tr&iacute; tường l&agrave; một c&aacute;ch tuyệt vời để thể hiện sự s&aacute;ng tạo v&agrave; c&aacute; nh&acirc;n h&oacute;a kh&ocirc;ng gian ph&ograve;ng trẻ em. Bạn c&oacute; thể sử dụng decal tường, h&igrave;nh vẽ tường hoặc tranh vẽ tay để tạo ra c&aacute;c bức tranh độc đ&aacute;o v&agrave; phong ph&uacute;.</p>\r\n\r\n<p><strong>Phần 4: Sử Dụng Đ&egrave;n Trang Tr&iacute;</strong></p>\r\n\r\n<p>Đ&egrave;n trang tr&iacute; kh&ocirc;ng chỉ l&agrave; nguồn &aacute;nh s&aacute;ng m&agrave; c&ograve;n l&agrave; điểm nhấn th&uacute; vị trong kh&ocirc;ng gian ph&ograve;ng trẻ em. H&atilde;y chọn c&aacute;c đ&egrave;n c&oacute; h&igrave;nh d&aacute;ng độc đ&aacute;o như đ&egrave;n led c&oacute; h&igrave;nh ng&ocirc;i sao, đ&egrave;n treo lủng lẳng hoặc đ&egrave;n b&agrave;n c&oacute; h&igrave;nh c&aacute;c nh&acirc;n vật hoạt h&igrave;nh y&ecirc;u th&iacute;ch của trẻ.</p>\r\n\r\n<p><strong>Phần 5: Tận Dụng Kh&ocirc;ng Gian Dưới Giường</strong></p>\r\n\r\n<p>Kh&ocirc;ng gian dưới giường thường bị bỏ ph&iacute; trong c&aacute;c ph&ograve;ng trẻ em. Tận dụng kh&ocirc;ng gian n&agrave;y bằng c&aacute;ch sử dụng hộp đựng hoặc ngăn k&eacute;o để lưu trữ đồ chơi hoặc quần &aacute;o dự ph&ograve;ng cho trẻ.</p>\r\n\r\n<p><strong>Phần 6: Kệ S&aacute;ch v&agrave; G&oacute;c Đọc S&aacute;ch</strong></p>\r\n\r\n<p>Khuyến kh&iacute;ch sở th&iacute;ch đọc s&aacute;ch cho trẻ bằng c&aacute;ch tạo ra một g&oacute;c đọc s&aacute;ch thoải m&aacute;i v&agrave; thuận tiện trong ph&ograve;ng. Sử dụng kệ s&aacute;ch hoặc hệ thống lưu trữ s&aacute;ch để tạo ra một kh&ocirc;ng gian gọn g&agrave;ng v&agrave; ngăn nắp cho c&aacute;c cuốn s&aacute;ch.</p>\r\n\r\n<p><strong>Phần 7: Thảm Trải S&agrave;n Mềm Mại</strong></p>\r\n\r\n<p>Thảm trải s&agrave;n kh&ocirc;ng chỉ l&agrave; một đồ trang tr&iacute; m&agrave; c&ograve;n l&agrave; nơi cho trẻ em vui chơi v&agrave; nghỉ ngơi một c&aacute;ch thoải m&aacute;i. Chọn c&aacute;c thảm mềm mại v&agrave; c&oacute; m&agrave;u sắc bắt mắt để tạo ra một kh&ocirc;ng gian trẻ thơ v&agrave; vui vẻ.</p>\r\n\r\n<p><strong>Phần 8: G&oacute;c Chơi S&aacute;ng Tạo</strong></p>\r\n\r\n<p>Tạo ra một g&oacute;c chơi s&aacute;ng tạo l&agrave; một c&aacute;ch tuyệt vời để khuyến kh&iacute;ch sự s&aacute;ng tạo v&agrave; sự ph&aacute;t triển của trẻ. Sử dụng bảng đồ chơi, đồ chơi x&acirc;y dựng hoặc đồ chơi s&aacute;ng tạo để gi&uacute;p trẻ ph&aacute;t triển tư duy logic v&agrave; khả năng s&aacute;ng tạo.</p>\r\n\r\n<p><strong>Phần 9: Ph&ograve;ng Ngủ T&iacute;ch Hợp</strong></p>\r\n\r\n<p>Nếu kh&ocirc;ng gian cho ph&ograve;ng trẻ em hạn chế, bạn c&oacute; thể t&iacute;ch hợp ph&ograve;ng ngủ v&agrave; khu vực chơi v&agrave;o c&ugrave;ng một kh&ocirc;ng gian. Sử dụng giường tầng, giường sofa hoặc giường đ&ocirc;i c&oacute; thể gấp lại để tạo ra kh&ocirc;ng gian đa năng v&agrave; tiết kiệm kh&ocirc;ng gian.</p>\r\n\r\n<p><strong>Phần 10: Trang Tr&iacute; theo Chủ Đề</strong></p>\r\n\r\n<p>Trang tr&iacute; ph&ograve;ng trẻ em theo chủ đề l&agrave; một c&aacute;ch th&uacute; vị để tạo ra một kh&ocirc;ng gian độc đ&aacute;o v&agrave; gần gũi với trẻ. Bạn c&oacute; thể chọn c&aacute;c chủ đề như si&ecirc;u anh h&ugrave;ng, c&ocirc;ng ch&uacute;a, vũ trụ, hoặc c&aacute;c nh&acirc;n vật hoạt h&igrave;nh y&ecirc;u th&iacute;ch của trẻ để tạo ra một kh&ocirc;ng gian trẻ thơ v&agrave; s&aacute;ng tạo.</p>\r\n\r\n<p><strong>Phần 11: Lợi &Iacute;ch của Việc Trang Tr&iacute; Ph&ograve;ng Trẻ Em S&aacute;ng Tạo v&agrave; Th&uacute; Vị</strong></p>\r\n\r\n<p>Việc trang tr&iacute; ph&ograve;ng trẻ em s&aacute;ng tạo v&agrave; th&uacute; vị kh&ocirc;ng chỉ mang lại sự hứng th&uacute; v&agrave; niềm vui cho trẻ m&agrave; c&ograve;n c&oacute; nhiều lợi &iacute;ch kh&aacute;c.</p>\r\n\r\n<p><strong>1. Khuyến Kh&iacute;ch Sự S&aacute;ng Tạo v&agrave; Ph&aacute;t Triển</strong></p>\r\n\r\n<p>Một kh&ocirc;ng gian ph&ograve;ng trẻ em s&aacute;ng tạo v&agrave; th&uacute; vị sẽ khuyến kh&iacute;ch sự s&aacute;ng tạo v&agrave; ph&aacute;t triển của trẻ. C&aacute;c &yacute; tưởng trang tr&iacute; ph&ograve;ng gi&uacute;p k&iacute;ch th&iacute;ch tr&iacute; tưởng tượng của trẻ, khuyến kh&iacute;ch họ kh&aacute;m ph&aacute; v&agrave; ph&aacute;t triển kỹ năng x&atilde; hội th&ocirc;ng qua tr&ograve; chơi v&agrave; hoạt động trong kh&ocirc;ng gian ph&ograve;ng.</p>\r\n\r\n<p><strong>2. Tạo Kh&ocirc;ng Gian Học Tập v&agrave; Tr&iacute; Tuệ</strong></p>\r\n\r\n<p>Một ph&ograve;ng trẻ em được trang tr&iacute; s&aacute;ng tạo cũng c&oacute; thể l&agrave; một nơi l&yacute; tưởng để khuyến kh&iacute;ch việc học hỏi v&agrave; ph&aacute;t triển tr&iacute; tuệ của trẻ. C&aacute;c g&oacute;c học tập, bảng đồ chơi gi&aacute;o dục v&agrave; s&aacute;ch truyện đa dạng c&oacute; thể tạo ra một m&ocirc;i trường học tập t&iacute;ch cực cho trẻ.</p>\r\n\r\n<p><strong>3. Tăng Cường T&iacute;nh Tự Tin v&agrave; Tự Lập</strong></p>\r\n\r\n<p>Một kh&ocirc;ng gian ph&ograve;ng trẻ em được trang tr&iacute; th&uacute; vị v&agrave; s&aacute;ng tạo cũng c&oacute; thể gi&uacute;p tăng cường t&iacute;nh tự tin v&agrave; sự độc lập của trẻ. Trẻ em c&oacute; thể tự do kh&aacute;m ph&aacute; v&agrave; tự quyết định về việc chơi v&agrave; học, từ đ&oacute; ph&aacute;t triển kỹ năng quản l&yacute; thời gian v&agrave; tự chủ.</p>\r\n\r\n<p><strong>4. Tạo M&ocirc;i Trường An To&agrave;n v&agrave; Th&acirc;n Thiện</strong></p>\r\n\r\n<p>Việc trang tr&iacute; ph&ograve;ng trẻ em s&aacute;ng tạo cũng l&agrave; c&aacute;ch tạo ra một m&ocirc;i trường an to&agrave;n v&agrave; th&acirc;n thiện cho trẻ. Bằng c&aacute;ch chọn lựa c&aacute;c vật dụng v&agrave; đồ đạc ph&ugrave; hợp với độ tuổi v&agrave; nhu cầu của trẻ, bạn c&oacute; thể tạo ra một kh&ocirc;ng gian an to&agrave;n v&agrave; đ&aacute;ng y&ecirc;u cho trẻ em ph&aacute;t triển.</p>\r\n\r\n<p><strong>5. Khơi Gợi Niềm Đam M&ecirc; v&agrave; Sở Th&iacute;ch</strong></p>\r\n\r\n<p>Việc trang tr&iacute; ph&ograve;ng trẻ em theo c&aacute;c chủ đề v&agrave; &yacute; tưởng s&aacute;ng tạo cũng c&oacute; thể khơi gợi niềm đam m&ecirc; v&agrave; sở th&iacute;ch của trẻ. Bằng c&aacute;ch tạo ra một kh&ocirc;ng gian ph&ugrave; hợp với sở th&iacute;ch c&aacute; nh&acirc;n của trẻ, bạn c&oacute; thể khuyến kh&iacute;ch họ ph&aacute;t triển v&agrave; theo đuổi niềm đam m&ecirc; của m&igrave;nh từ khi c&ograve;n nhỏ.</p>\r\n\r\n<p><strong>6. Gia Tăng Sự Kết Nối Gia Đ&igrave;nh</strong></p>\r\n\r\n<p>Một ph&ograve;ng trẻ em được trang tr&iacute; s&aacute;ng tạo cũng c&oacute; thể l&agrave; nơi kết nối v&agrave; gắn kết gia đ&igrave;nh. Việc tham gia v&agrave;o qu&aacute; tr&igrave;nh trang tr&iacute; ph&ograve;ng cũng như tham gia v&agrave;o c&aacute;c hoạt động chơi v&agrave; học c&ugrave;ng trẻ sẽ tạo ra những kỷ niệm đ&aacute;ng nhớ v&agrave; tăng cường mối quan hệ gia đ&igrave;nh.</p>\r\n\r\n<p><strong>Phần 12: C&aacute;ch Bắt Đầu Trang Tr&iacute; Ph&ograve;ng Trẻ Em</strong></p>\r\n\r\n<p>Nếu bạn định trang tr&iacute; ph&ograve;ng trẻ em theo c&aacute;c &yacute; tưởng s&aacute;ng tạo v&agrave; th&uacute; vị, dưới đ&acirc;y l&agrave; một số bước bạn c&oacute; thể tham khảo để bắt đầu.</p>\r\n\r\n<p><strong>1. T&igrave;m Hiểu Sở Th&iacute;ch v&agrave; Đam M&ecirc; của Trẻ</strong></p>\r\n\r\n<p>Trước ti&ecirc;n, h&atilde;y t&igrave;m hiểu về sở th&iacute;ch, đam m&ecirc; v&agrave; t&iacute;nh c&aacute;ch của trẻ để c&oacute; thể tạo ra một kh&ocirc;ng gian ph&ugrave; hợp v&agrave; th&uacute; vị cho họ. Hỏi &yacute; kiến của trẻ v&agrave; tham gia c&ugrave;ng họ trong qu&aacute; tr&igrave;nh trang tr&iacute; ph&ograve;ng.</p>\r\n\r\n<p><strong>2. X&aacute;c Định Chủ Đề v&agrave; M&agrave;u Sắc</strong></p>\r\n\r\n<p>Dựa tr&ecirc;n sở th&iacute;ch của trẻ, x&aacute;c định một chủ đề v&agrave; c&aacute;c gam m&agrave;u ph&ugrave; hợp cho kh&ocirc;ng gian ph&ograve;ng. C&oacute; thể l&agrave; một chủ đề hoạt h&igrave;nh y&ecirc;u th&iacute;ch, một chủ đề về thi&ecirc;n nhi&ecirc;n, hoặc một chủ đề về vũ trụ, tuỳ thuộc v&agrave;o sở th&iacute;ch c&aacute; nh&acirc;n của trẻ.</p>\r\n\r\n<p><strong>3. Chọn Đồ Đạc v&agrave; Trang Tr&iacute; Ph&ugrave; Hợp</strong></p>\r\n\r\n<p>Chọn lựa c&aacute;c đồ đạc v&agrave; trang tr&iacute; ph&ugrave; hợp với chủ đề v&agrave; m&agrave;u sắc đ&atilde; chọn. H&atilde;y tận dụng c&aacute;c phụ kiện trang tr&iacute; như đồ chơi, tranh vẽ, v&agrave; đ&egrave;n trang tr&iacute; để tạo ra một kh&ocirc;ng gian sống độc đ&aacute;o v&agrave; th&uacute; vị.</p>\r\n\r\n<p><strong>4. Tối Ưu H&oacute;a Kh&ocirc;ng Gian</strong></p>\r\n\r\n<p>H&atilde;y tận dụng kh&ocirc;ng gian ph&ograve;ng một c&aacute;ch th&ocirc;ng minh bằng c&aacute;ch sử dụng c&aacute;c giải ph&aacute;p lưu trữ v&agrave; đồ đạc đa năng. Điều n&agrave;y gi&uacute;p tiết kiệm kh&ocirc;ng gian v&agrave; tạo ra một kh&ocirc;ng gian ph&ograve;ng trẻ em sạch sẽ v&agrave; gọn g&agrave;ng.</p>\r\n\r\n<p><strong>5. Tạo Một G&oacute;c Chơi S&aacute;ng Tạo</strong></p>\r\n\r\n<p>Cuối c&ugrave;ng, h&atilde;y tạo ra một g&oacute;c chơi s&aacute;ng tạo v&agrave; thu h&uacute;t để khuyến kh&iacute;ch sự s&aacute;ng tạo v&agrave; ph&aacute;t triển của trẻ. Sử dụng c&aacute;c đồ chơi, s&aacute;ch truyện v&agrave; vật dụng gi&aacute;o dục để tạo ra một kh&ocirc;ng gian ph&aacute;t triển to&agrave;n diện cho trẻ.</p>\r\n\r\n<p><strong>Phần 13: C&aacute;c &Yacute; Tưởng Trang Tr&iacute; Ph&ograve;ng Trẻ Em</strong></p>\r\n\r\n<p>Dưới đ&acirc;y l&agrave; một số &yacute; tưởng trang tr&iacute; ph&ograve;ng trẻ em s&aacute;ng tạo v&agrave; th&uacute; vị m&agrave; bạn c&oacute; thể tham khảo:</p>\r\n\r\n<p><strong>1. Chủ Đề Về Thi&ecirc;n Nhi&ecirc;n</strong></p>\r\n\r\n<p>Trang tr&iacute; ph&ograve;ng trẻ em với chủ đề về thi&ecirc;n nhi&ecirc;n sẽ mang lại cảm gi&aacute;c gần gũi v&agrave; th&acirc;n thiện với m&ocirc;i trường tự nhi&ecirc;n. Sử dụng c&aacute;c h&igrave;nh ảnh về c&acirc;y cỏ, hoa l&aacute;, động vật v&agrave; cảnh quan tự nhi&ecirc;n để tạo ra một kh&ocirc;ng gian sống xanh m&aacute;t v&agrave; tươi mới.</p>\r\n\r\n<p><strong>2. Chủ Đề Về Hoạt H&igrave;nh</strong></p>\r\n\r\n<p>Nếu trẻ em y&ecirc;u th&iacute;ch c&aacute;c nh&acirc;n vật hoạt h&igrave;nh, bạn c&oacute; thể trang tr&iacute; ph&ograve;ng với chủ đề về hoạt h&igrave;nh y&ecirc;u th&iacute;ch của họ. Sử dụng tranh vẽ, decal tường v&agrave; đồ chơi mang h&igrave;nh ảnh của c&aacute;c nh&acirc;n vật hoạt h&igrave;nh để tạo ra một kh&ocirc;ng gian sống vui nhộn v&agrave; th&uacute; vị.</p>\r\n\r\n<p><strong>3. Ph&ograve;ng Ngủ T&iacute;ch Hợp</strong></p>\r\n\r\n<p>Nếu kh&ocirc;ng gian ph&ograve;ng hạn chế, bạn c&oacute; thể t&iacute;ch hợp ph&ograve;ng ngủ v&agrave; khu vực chơi v&agrave;o c&ugrave;ng một kh&ocirc;ng gian. Sử dụng giường tầng, giường sofa hoặc giường đ&ocirc;i c&oacute; thể gấp lại để tạo ra kh&ocirc;ng gian đa năng v&agrave; tiết kiệm kh&ocirc;ng gian.</p>\r\n\r\n<p><strong>4. G&oacute;c Đọc S&aacute;ch</strong></p>\r\n\r\n<p>Tạo ra một g&oacute;c đọc s&aacute;ch thoải m&aacute;i v&agrave; thuận tiện trong ph&ograve;ng để khuyến kh&iacute;ch việc đọc s&aacute;ch cho trẻ. Sử dụng kệ s&aacute;ch, ghế đọc s&aacute;ch v&agrave; đ&egrave;n đọc s&aacute;ch để tạo ra một kh&ocirc;ng gian đọc s&aacute;ch y&ecirc;n b&igrave;nh v&agrave; th&uacute; vị.</p>\r\n\r\n<p><strong>5. G&oacute;c Chơi S&aacute;ng Tạo</strong></p>\r\n\r\n<p>Tạo ra một g&oacute;c chơi s&aacute;ng tạo với c&aacute;c đồ chơi x&acirc;y dựng, đồ chơi s&aacute;ng tạo v&agrave; bảng vẽ để khuyến kh&iacute;ch sự s&aacute;ng tạo v&agrave; ph&aacute;t triển tư duy logic của trẻ.</p>\r\n\r\n<p><strong>6. Đ&egrave;n Trang Tr&iacute;</strong></p>\r\n\r\n<p>Sử dụng đ&egrave;n trang tr&iacute; với c&aacute;c h&igrave;nh dạng v&agrave; m&agrave;u sắc độc đ&aacute;o để tạo điểm nhấn th&uacute; vị trong kh&ocirc;ng gian ph&ograve;ng trẻ em.</p>\r\n\r\n<p><strong>7. Trang Tr&iacute; Tường Độc Đ&aacute;o</strong></p>\r\n\r\n<p>Trang tr&iacute; tường bằng tranh vẽ tay, decal tường hoặc h&igrave;nh ảnh độc đ&aacute;o để tạo ra một kh&ocirc;ng gian sống c&aacute; nh&acirc;n v&agrave; độc đ&aacute;o cho trẻ.</p>\r\n\r\n<p><strong>8. Thảm Trải S&agrave;n Mềm Mại</strong></p>\r\n\r\n<p>Sử dụng thảm trải s&agrave;n mềm mại với c&aacute;c h&igrave;nh ảnh v&agrave; m&agrave;u sắc sinh động để tạo ra một kh&ocirc;ng gian chơi an to&agrave;n v&agrave; thoải m&aacute;i cho trẻ.</p>\r\n\r\n<p><strong>9. Kệ S&aacute;ch v&agrave; Bảng Đồ Chơi</strong></p>\r\n\r\n<p>Tạo ra một kh&ocirc;ng gian lưu trữ s&aacute;ch v&agrave; đồ chơi th&ocirc;ng minh v&agrave; tiện &iacute;ch để gi&uacute;p trẻ dễ d&agrave;ng tiếp cận v&agrave; sử dụng đồ chơi v&agrave; s&aacute;ch của m&igrave;nh.</p>\r\n\r\n<p><strong>10. G&oacute;c Học Tập</strong></p>\r\n\r\n<p>Tạo ra một g&oacute;c học tập với b&agrave;n học v&agrave; ghế ngồi thoải m&aacute;i để khuyến kh&iacute;ch việc học tập v&agrave; ph&aacute;t triển tr&iacute; tuệ của trẻ.</p>\r\n\r\n<p><strong>Phần 14: Kết Luận</strong></p>\r\n\r\n<p>Trang tr&iacute; ph&ograve;ng trẻ em l&agrave; một qu&aacute; tr&igrave;nh s&aacute;ng tạo v&agrave; th&uacute; vị, mang lại kh&ocirc;ng chỉ một kh&ocirc;ng gian sống đẹp mắt m&agrave; c&ograve;n l&agrave; một m&ocirc;i trường ph&aacute;t triển to&agrave;n diện cho trẻ. Bằng c&aacute;ch kết hợp sự s&aacute;ng tạo, sở th&iacute;ch v&agrave; nhu cầu của trẻ, bạn c&oacute; thể tạo ra một kh&ocirc;ng gian ph&ograve;ng trẻ em độc đ&aacute;o v&agrave; th&uacute; vị, nơi m&agrave; trẻ c&oacute; thể kh&aacute;m ph&aacute; v&agrave; ph&aacute;t triển một c&aacute;ch tự nhi&ecirc;n v&agrave; t&iacute;ch cực. Ch&uacute;ng ta hy vọng rằng c&aacute;c &yacute; tưởng v&agrave; gợi &yacute; trong b&agrave;i viết n&agrave;y sẽ gi&uacute;p bạn trang tr&iacute; ph&ograve;ng trẻ em của m&igrave;nh một c&aacute;ch s&aacute;ng tạo v&agrave; đầy &yacute; nghĩa.</p>\r\n', '', 'Trong bài viết này, chúng ta sẽ khám phá các ý tưởng trang trí phòng trẻ em sáng tạo và thú vị để tạo ra một môi trường sống tốt cho các bé.  ', 'Trang Trí Phòng Trẻ Em', 'Ý Tưởng Trang Trí Phòng Trẻ Em Sáng Tạo và Thú Vị', '', '', '', 'Trang Trí Phòng Trẻ Em', '', 'y-tuong-trang-tri-phong-tre-em-sang-tao-va-thu-vi', ' 05/06/2024 ', 0, '', '1407', '', '1407', '', '', 5, 0, 0, 0, 0),
(102, 'lovestudio_dogiadinh_0012.webp', '<p><strong>Phần 1: Giới Thiệu</strong></p>\r\n\r\n<p>Trong thế giới đầy cạnh tranh v&agrave; c&ocirc;ng nghiệp h&oacute;a ng&agrave;y nay, phong c&aacute;ch thiết kế nội thất c&ocirc;ng nghiệp đang trở th&agrave;nh một xu hướng phổ biến v&agrave; được ưa chuộng. Với sự kết hợp giữa sự đơn giản, chức năng v&agrave; c&aacute;i mới mẻ, thiết kế nội thất theo phong c&aacute;ch c&ocirc;ng nghiệp kh&ocirc;ng chỉ mang lại sự hiện đại m&agrave; c&ograve;n tạo n&ecirc;n một cảm gi&aacute;c mạnh mẽ v&agrave; c&aacute; nh&acirc;n cho kh&ocirc;ng gian sống. Tr&ecirc;n hết, n&oacute; thể hiện sự h&ograve;a quện giữa sự sản xuất c&ocirc;ng nghiệp v&agrave; nghệ thuật, tạo ra những thiết kế độc đ&aacute;o v&agrave; đầy ấn tượng.</p>\r\n\r\n<p><strong>Phần 2: Lịch Sử H&igrave;nh Th&agrave;nh v&agrave; Ph&aacute;t Triển</strong></p>\r\n\r\n<p>Phong c&aacute;ch thiết kế nội thất c&ocirc;ng nghiệp xuất ph&aacute;t từ cuộc C&aacute;ch Mạng C&ocirc;ng Nghiệp v&agrave;o cuối thế kỷ 18 v&agrave; đầu thế kỷ 19. Khi đ&oacute;, việc &aacute;p dụng c&aacute;c phương ph&aacute;p sản xuất c&ocirc;ng nghiệp v&agrave;o việc sản xuất đồ nội thất đ&atilde; tạo ra sự thay đổi lớn trong ng&agrave;nh c&ocirc;ng nghiệp n&agrave;y. C&aacute;c nh&agrave; thiết kế v&agrave; nh&agrave; sản xuất đ&atilde; bắt đầu thực hiện c&aacute;c thiết kế đơn giản, chức năng v&agrave; tiện &iacute;ch, hướng đến việc tối ưu h&oacute;a qu&aacute; tr&igrave;nh sản xuất v&agrave; tạo ra những sản phẩm với số lượng lớn.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, kh&ocirc;ng chỉ l&agrave; việc tối ưu h&oacute;a qu&aacute; tr&igrave;nh sản xuất, phong c&aacute;ch thiết kế nội thất c&ocirc;ng nghiệp c&ograve;n phản &aacute;nh một triết l&yacute; sống mới mẻ v&agrave; hiện đại. N&oacute; tạo ra một c&aacute;ch nh&igrave;n mới về kh&ocirc;ng gian sống, với sự ưu ti&ecirc;n cho sự đơn giản, chức năng v&agrave; tiện &iacute;ch.</p>\r\n\r\n<p><strong>Phần 3: Đặc Điểm v&agrave; Nguy&ecirc;n Tắc Của Thiết Kế Nội Thất Theo Phong C&aacute;ch C&ocirc;ng Nghiệp</strong></p>\r\n\r\n<p><strong>1. Sử Dụng Vật Liệu C&ocirc;ng Nghiệp</strong></p>\r\n\r\n<p>Một trong những đặc điểm nổi bật của thiết kế nội thất c&ocirc;ng nghiệp l&agrave; việc sử dụng c&aacute;c vật liệu c&ocirc;ng nghiệp như th&eacute;p, nh&ocirc;m, v&agrave; gỗ c&ocirc;ng nghiệp. Những vật liệu n&agrave;y kh&ocirc;ng chỉ gi&uacute;p tạo ra c&aacute;c sản phẩm c&oacute; độ bền cao m&agrave; c&ograve;n tạo n&ecirc;n vẻ đẹp mạnh mẽ v&agrave; hiện đại cho kh&ocirc;ng gian.</p>\r\n\r\n<p><strong>2. Thiết Kế Đơn Giản v&agrave; Chức Năng</strong></p>\r\n\r\n<p>Thiết kế nội thất c&ocirc;ng nghiệp thường mang đến sự đơn giản v&agrave; chức năng. C&aacute;c sản phẩm được thiết kế với những đường n&eacute;t sắc sảo v&agrave; chắc chắn, đồng thời tối ưu h&oacute;a chức năng sử dụng. Mục ti&ecirc;u l&agrave; tạo ra những sản phẩm c&oacute; thể sử dụng được v&agrave; dễ d&agrave;ng sản xuất h&agrave;ng loạt.</p>\r\n\r\n<p><strong>3. Sự Kết Hợp Giữa Sắc Độc v&agrave; C&ocirc;ng Nghiệp</strong></p>\r\n\r\n<p>Phong c&aacute;ch thiết kế nội thất c&ocirc;ng nghiệp thường kết hợp giữa sắc độc v&agrave; c&ocirc;ng nghiệp, tạo ra những sản phẩm độc đ&aacute;o v&agrave; c&aacute; nh&acirc;n. Một chiếc b&agrave;n ăn bằng gỗ v&agrave; th&eacute;p, hoặc một chiếc ghế sofa với khung kim loại l&agrave; những v&iacute; dụ điển h&igrave;nh cho sự kết hợp n&agrave;y.</p>\r\n\r\n<p><strong>4. Sự Thực Tế v&agrave; Hiện Đại</strong></p>\r\n\r\n<p>Thiết kế nội thất c&ocirc;ng nghiệp thường mang lại sự thực tế v&agrave; hiện đại. C&aacute;c sản phẩm được thiết kế để đ&aacute;p ứng nhu cầu sử dụng h&agrave;ng ng&agrave;y một c&aacute;ch hiệu quả v&agrave; tiện lợi, đồng thời tạo ra một kh&ocirc;ng gian sống hiện đại v&agrave; tương t&aacute;c.</p>\r\n\r\n<p><strong>Phần 4: &Yacute; Tưởng v&agrave; Thực Hiện Thiết Kế Nội Thất Theo Phong C&aacute;ch C&ocirc;ng Nghiệp</strong></p>\r\n\r\n<p><strong>1. Ph&ograve;ng Kh&aacute;ch</strong></p>\r\n\r\n<p>Trong ph&ograve;ng kh&aacute;ch, bạn c&oacute; thể sử dụng c&aacute;c bộ sofa bằng vải c&ocirc;ng nghiệp hoặc da nh&acirc;n tạo kết hợp với b&agrave;n tr&agrave; v&agrave; kệ TV bằng gỗ hoặc th&eacute;p. C&aacute;c đ&egrave;n trang tr&iacute; v&agrave; c&aacute;c bức tranh trừu tượng c&oacute; thể được sử dụng để tạo điểm nhấn cho kh&ocirc;ng gian.</p>\r\n\r\n<p><strong>2. Ph&ograve;ng Bếp v&agrave; Ph&ograve;ng Ăn</strong></p>\r\n\r\n<p>Trong ph&ograve;ng bếp v&agrave; ph&ograve;ng ăn, bạn c&oacute; thể sử dụng c&aacute;c bộ b&agrave;n ăn v&agrave; ghế bằng gỗ hoặc kim loại, kết hợp với c&aacute;c tủ bếp v&agrave; quầy bar bằng th&eacute;p kh&ocirc;ng gỉ. C&aacute;c đ&egrave;n trần đơn giản v&agrave; c&aacute;c phụ kiện như c&aacute;c gi&aacute; đỡ đồ d&ugrave;ng nh&agrave; bếp c&oacute; thể được sử dụng để tạo ra một kh&ocirc;ng gian ấn tượng v&agrave; tiện nghi.</p>\r\n\r\n<p><strong>3. Ph&ograve;ng Ngủ</strong></p>\r\n\r\n<p>Trong ph&ograve;ng ngủ, thiết kế nội thất c&ocirc;ng nghiệp thường tập trung v&agrave;o sự tiện &iacute;ch v&agrave; thoải m&aacute;i. Bạn c&oacute; thể sử dụng giường ngủ với khung kim loại v&agrave; đầu giường bằng gỗ để tạo ra một vẻ đẹp hiện đại v&agrave; mạnh mẽ. C&aacute;c tủ quần &aacute;o v&agrave; kệ s&aacute;ch c&oacute; thiết kế đơn giản nhưng chứa đựng được nhiều vật dụng, gi&uacute;p tối ưu h&oacute;a kh&ocirc;ng gian lưu trữ.</p>\r\n\r\n<p><strong>4. Ph&ograve;ng Tắm</strong></p>\r\n\r\n<p>Trong ph&ograve;ng tắm, bạn c&oacute; thể sử dụng c&aacute;c vật liệu c&ocirc;ng nghiệp như gạch l&aacute;t v&agrave; th&eacute;p kh&ocirc;ng gỉ để tạo ra một kh&ocirc;ng gian sạch sẽ v&agrave; hiện đại. C&aacute;c thiết bị vệ sinh c&oacute; thiết kế đơn giản v&agrave; chắc chắn, c&ugrave;ng với c&aacute;c vật liệu trang tr&iacute; như gương v&agrave; kệ để tạo điểm nhấn cho kh&ocirc;ng gian.</p>\r\n\r\n<p><strong>Phần 5: Lợi &Iacute;ch của Thiết Kế Nội Thất Theo Phong C&aacute;ch C&ocirc;ng Nghiệp</strong></p>\r\n\r\n<p><strong>1. T&iacute;nh Tiện &Iacute;ch v&agrave; Chức Năng</strong></p>\r\n\r\n<p>Một trong những lợi &iacute;ch r&otilde; rệt của thiết kế nội thất c&ocirc;ng nghiệp l&agrave; t&iacute;nh tiện &iacute;ch v&agrave; chức năng. C&aacute;c sản phẩm được thiết kế để đ&aacute;p ứng nhu cầu sử dụng h&agrave;ng ng&agrave;y một c&aacute;ch hiệu quả v&agrave; tiện lợi, gi&uacute;p tối ưu h&oacute;a kh&ocirc;ng gian sống v&agrave; l&agrave;m việc.</p>\r\n\r\n<p><strong>2. Sự Bền Bỉ v&agrave; Đ&aacute;ng Tin Cậy</strong></p>\r\n\r\n<p>Nhờ sử dụng c&aacute;c vật liệu c&ocirc;ng nghiệp chất lượng cao, thiết kế nội thất theo phong c&aacute;ch c&ocirc;ng nghiệp thường mang lại sự bền bỉ v&agrave; đ&aacute;ng tin cậy. C&aacute;c sản phẩm c&oacute; thể chịu được sự m&agrave;i m&ograve;n v&agrave; sử dụng l&acirc;u d&agrave;i m&agrave; kh&ocirc;ng mất đi vẻ đẹp v&agrave; t&iacute;nh chất chức năng.</p>\r\n\r\n<p><strong>3. Sự Hiện Đại v&agrave; Thời Trang</strong></p>\r\n\r\n<p>Thiết kế nội thất c&ocirc;ng nghiệp thường mang lại sự hiện đại v&agrave; thời trang cho kh&ocirc;ng gian sống. Với những đường n&eacute;t sắc sảo v&agrave; chất liệu c&ocirc;ng nghiệp mạnh mẽ, kh&ocirc;ng gian được tạo ra sẽ trở n&ecirc;n ấn tượng v&agrave; đầy c&aacute; nh&acirc;n.</p>\r\n\r\n<p><strong>4. Dễ D&agrave;ng Bảo Tr&igrave; v&agrave; Vệ Sinh</strong></p>\r\n\r\n<p>C&aacute;c sản phẩm thiết kế nội thất c&ocirc;ng nghiệp thường dễ d&agrave;ng bảo tr&igrave; v&agrave; vệ sinh. Với c&aacute;c vật liệu kh&ocirc;ng dễ b&aacute;m bẩn v&agrave; c&aacute;c bề mặt trơn tru, việc l&agrave;m sạch v&agrave; bảo dưỡng trở n&ecirc;n đơn giản v&agrave; tiết kiệm thời gian.</p>\r\n\r\n<p><strong>Phần 6: C&aacute;ch Bắt Đầu với Thiết Kế Nội Thất Theo Phong C&aacute;ch C&ocirc;ng Nghiệp</strong></p>\r\n\r\n<p>Nếu bạn muốn bắt đầu với thiết kế nội thất theo phong c&aacute;ch c&ocirc;ng nghiệp, dưới đ&acirc;y l&agrave; một số bước cơ bản để bạn c&oacute; thể thực hiện:</p>\r\n\r\n<p><strong>1. Nghi&ecirc;n Cứu v&agrave; L&ecirc;n &Yacute; Tưởng</strong></p>\r\n\r\n<p>Bắt đầu bằng việc nghi&ecirc;n cứu v&agrave; thu thập c&aacute;c &yacute; tưởng cho kh&ocirc;ng gian của bạn. T&igrave;m hiểu về c&aacute;c phong c&aacute;ch v&agrave; vật liệu ph&ugrave; hợp với phong c&aacute;ch thiết kế nội thất c&ocirc;ng nghiệp v&agrave; chọn lựa những &yacute; tưởng ph&ugrave; hợp với sở th&iacute;ch v&agrave; nhu cầu của bạn.</p>\r\n\r\n<p><strong>2. Lập Kế Hoạch v&agrave; Thiết Kế</strong></p>\r\n\r\n<p>Sau khi đ&atilde; c&oacute; &yacute; tưởng, h&atilde;y lập kế hoạch v&agrave; thiết kế chi tiết cho kh&ocirc;ng gian của bạn. X&aacute;c định c&aacute;c sản phẩm cần thiết v&agrave; tạo ra một bản vẽ hoặc m&ocirc; h&igrave;nh 3D để minh họa &yacute; tưởng của bạn.</p>\r\n\r\n<p><strong>3. Chọn Lựa Vật Liệu v&agrave; Sản Phẩm</strong></p>\r\n\r\n<p>Chọn lựa c&aacute;c vật liệu v&agrave; sản phẩm ph&ugrave; hợp với thiết kế của bạn. H&atilde;y chọn c&aacute;c vật liệu c&ocirc;ng nghiệp chất lượng cao v&agrave; c&aacute;c sản phẩm c&oacute; thiết kế đơn giản v&agrave; chức năng để tạo ra một kh&ocirc;ng gian sống v&agrave; l&agrave;m việc hiện đại v&agrave; tiện nghi.</p>\r\n\r\n<p><strong>4. Thực Hiện v&agrave; Bảo Dưỡng</strong></p>\r\n\r\n<p>Sau khi đ&atilde; ho&agrave;n thiện thiết kế, h&atilde;y thực hiện v&agrave; lắp đặt c&aacute;c sản phẩm theo kế hoạch đ&atilde; lập. Đảm bảo tu&acirc;n thủ c&aacute;c quy tr&igrave;nh v&agrave; quy định cần thiết v&agrave; thực hiện bảo dưỡng định kỳ để bảo quản v&agrave; bảo vệ c&aacute;c sản phẩm trong thời gian d&agrave;i.</p>\r\n\r\n<p><strong>Phần 7: Kết Luận</strong></p>\r\n\r\n<p>Trong thế giới ng&agrave;y nay, thiết kế nội thất theo phong c&aacute;ch c&ocirc;ng nghiệp kh&ocirc;ng chỉ l&agrave; một xu hướng m&agrave; c&ograve;n l&agrave; một triết l&yacute; sống. Với sự kết hợp giữa sự đơn giản, chức năng v&agrave; hiện đại, phong c&aacute;ch thiết kế n&agrave;y đ&atilde; mang lại những kh&ocirc;ng gian sống v&agrave; l&agrave;m việc hiện đại, tiện nghi v&agrave; đầy ấn tượng.&nbsp;</p>\r\n', '', 'Thiết kế nội thất theo phong cách công nghiệp không chỉ mang lại sự hiện đại mà còn tạo nên một cảm giác mạnh mẽ và cá nhân cho không gian sống.   ', 'Thiết Kế Nội Thất Theo Phong Cách Công Nghiệp', 'Thiết Kế Nội Thất Theo Phong Cách Công Nghiệp: Sự Hòa Quyện Giữa Sản Xuất và Nghệ Thuật', '', '', '', 'Thiết Kế Nội Thất Theo Phong Cách Công Nghiệp', '', 'thiet-ke-noi-that-theo-phong-cach-cong-nghiep:-su-hoa-quyen-giua-san-xuat-va-nghe-thuat', ' 05/06/2024 ', 0, '', '3329', '', '3329', '', '', 5, 0, 0, 0, 0);
INSERT INTO `tin_tintuc` (`id`, `hinhanh`, `noidung`, `trangchu`, `mota`, `tieude`, `tieude_en`, `noidung_en`, `mota_en`, `title`, `tukhoa`, `facebook`, `linkurl`, `ngay`, `xem`, `nguon`, `hinhqcab`, `hinhqcabc`, `hinhndab`, `hinhndabc`, `hinhndabcd`, `thuocloai`, `noibat`, `moi`, `km`, `chay`) VALUES
(103, 'lovestudio_dogiadinh_0013.webp', '<p><strong>Phần 1: Giới Thiệu</strong></p>\r\n\r\n<p>Trong thời đại ng&agrave;y nay, khi diện t&iacute;ch căn hộ v&agrave; nh&agrave; ở trở n&ecirc;n ng&agrave;y c&agrave;ng hạn chế, việc tối ưu h&oacute;a kh&ocirc;ng gian trở th&agrave;nh một ưu ti&ecirc;n quan trọng. May mắn thay, c&ocirc;ng nghệ v&agrave; sự s&aacute;ng tạo đ&atilde; tạo ra những vật dụng nội thất th&ocirc;ng minh gi&uacute;p tận dụng mọi centimet vu&ocirc;ng của kh&ocirc;ng gian sống. Từ giường c&oacute; thể gấp gọn đến b&agrave;n ăn c&oacute; thể mở rộng linh hoạt, những vật dụng n&agrave;y kh&ocirc;ng chỉ tiết kiệm diện t&iacute;ch m&agrave; c&ograve;n mang lại sự tiện &iacute;ch v&agrave; thoải m&aacute;i cho người sử dụng. B&agrave;i viết n&agrave;y sẽ giới thiệu v&agrave; ph&acirc;n t&iacute;ch c&aacute;c vật dụng nội thất th&ocirc;ng minh nhất hiện nay, từ ph&ograve;ng ngủ đến ph&ograve;ng kh&aacute;ch v&agrave; bếp.</p>\r\n\r\n<p><strong>Phần 2: Giường Gấp Gọn</strong></p>\r\n\r\n<p><strong>1. Giường Sofa</strong></p>\r\n\r\n<p>Giường sofa l&agrave; một trong những vật dụng nội thất th&ocirc;ng minh phổ biến nhất cho c&aacute;c căn hộ nhỏ. Ban ng&agrave;y, n&oacute; l&agrave; một chiếc sofa thoải m&aacute;i để ngồi v&agrave; tiếp kh&aacute;ch. Ban đ&ecirc;m, bạn c&oacute; thể biến n&oacute; th&agrave;nh một chiếc giường &ecirc;m &aacute;i để nghỉ ngơi. Một số mẫu giường sofa c&ograve;n được trang bị ngăn k&eacute;o để lưu trữ chăn ga hoặc gối đệm, gi&uacute;p tiết kiệm th&ecirc;m kh&ocirc;ng gian lưu trữ.</p>\r\n\r\n<p><strong>2. Giường Tầng Gấp Gọn</strong></p>\r\n\r\n<p>Giường tầng gấp gọn l&agrave; lựa chọn th&ocirc;ng minh cho c&aacute;c căn hộ c&oacute; nhiều người ở hoặc c&oacute; diện t&iacute;ch hạn chế. Khi kh&ocirc;ng sử dụng, bạn c&oacute; thể gấp giường l&ecirc;n để tạo ra một kh&ocirc;ng gian mở rộng. Khi cần sử dụng, bạn chỉ cần k&eacute;o ra v&agrave; sắp xếp ga trải giường để c&oacute; th&ecirc;m nơi ngủ. Một số mẫu giường tầng c&ograve;n được trang bị ngăn k&eacute;o hoặc kệ để lưu trữ đồ đạc.</p>\r\n\r\n<p><strong>3. Giường Tủ</strong></p>\r\n\r\n<p>Giường tủ l&agrave; một giải ph&aacute;p th&ocirc;ng minh cho c&aacute;c căn ph&ograve;ng nhỏ kh&ocirc;ng c&oacute; đủ kh&ocirc;ng gian cho một chiếc giường lớn. Khi kh&ocirc;ng sử dụng, giường c&oacute; thể được gấp l&ecirc;n v&agrave; chứa b&ecirc;n trong tủ, gi&uacute;p tiết kiệm kh&ocirc;ng gian v&agrave; tạo ra một kh&ocirc;ng gian sống linh hoạt. Một số mẫu giường tủ c&ograve;n được trang bị b&aacute;nh xe gi&uacute;p dễ d&agrave;ng di chuyển v&agrave; sắp xếp.</p>\r\n\r\n<p><strong>Phần 3: B&agrave;n Ăn v&agrave; Ghế</strong></p>\r\n\r\n<p><strong>1. B&agrave;n Ăn Gấp Gọn</strong></p>\r\n\r\n<p>B&agrave;n ăn gấp gọn l&agrave; một lựa chọn ho&agrave;n hảo cho c&aacute;c căn bếp nhỏ. Khi kh&ocirc;ng sử dụng, bạn c&oacute; thể gấp b&agrave;n lại để tiết kiệm kh&ocirc;ng gian. Khi cần sử dụng, bạn chỉ cần mở rộng b&agrave;n ra để c&oacute; th&ecirc;m chỗ ngồi. Một số mẫu b&agrave;n ăn gấp gọn c&ograve;n được trang bị kệ để lưu trữ b&aacute;t đĩa hoặc đồ uống.</p>\r\n\r\n<p><strong>2. Ghế Gấp Gọn</strong></p>\r\n\r\n<p>Ghế gấp gọn l&agrave; một vật dụng kh&ocirc;ng thể thiếu trong c&aacute;c căn hộ nhỏ. Khi kh&ocirc;ng sử dụng, bạn c&oacute; thể gấp ghế lại để tiết kiệm kh&ocirc;ng gian. Khi cần sử dụng, bạn chỉ cần mở ghế ra để c&oacute; th&ecirc;m chỗ ngồi. Một số mẫu ghế gấp gọn c&ograve;n được trang bị tay cầm v&agrave; b&aacute;nh xe để dễ d&agrave;ng di chuyển.</p>\r\n\r\n<p><strong>Phần 4: B&agrave;n L&agrave;m Việc</strong></p>\r\n\r\n<p><strong>1. B&agrave;n L&agrave;m Việc Gấp Gọn</strong></p>\r\n\r\n<p>B&agrave;n l&agrave;m việc gấp gọn l&agrave; một lựa chọn th&ocirc;ng minh cho c&aacute;c kh&ocirc;ng gian l&agrave;m việc nhỏ. Khi kh&ocirc;ng sử dụng, bạn c&oacute; thể gấp b&agrave;n lại để tiết kiệm kh&ocirc;ng gian. Khi cần sử dụng, bạn chỉ cần mở b&agrave;n ra để c&oacute; th&ecirc;m kh&ocirc;ng gian l&agrave;m việc. Một số mẫu b&agrave;n l&agrave;m việc gấp gọn c&ograve;n được trang bị kệ để lưu trữ s&aacute;ch vở hoặc t&agrave;i liệu.</p>\r\n\r\n<p><strong>2. B&agrave;n L&agrave;m Việc Đa Năng</strong></p>\r\n\r\n<p>B&agrave;n l&agrave;m việc đa năng l&agrave; một lựa chọn linh hoạt cho c&aacute;c kh&ocirc;ng gian l&agrave;m việc đa năng. Một số mẫu b&agrave;n l&agrave;m việc đa năng c&oacute; thể điều chỉnh chiều cao để ph&ugrave; hợp với nhu cầu sử dụng. Ngo&agrave;i ra, một số mẫu b&agrave;n l&agrave;m việc đa năng c&ograve;n được trang bị kệ để lưu trữ m&aacute;y t&iacute;nh hoặc c&aacute;c đồ d&ugrave;ng văn ph&ograve;ng kh&aacute;c.</p>\r\n\r\n<p><strong>Phần 5: Tủ Kệ v&agrave; Kệ Đựng</strong></p>\r\n\r\n<p><strong>1. Tủ Kệ Gắn Tường</strong></p>\r\n\r\n<p>Tủ kệ gắn tường l&agrave; một giải ph&aacute;p tốt để tận dụng kh&ocirc;ng gian trống tr&ecirc;n tường v&agrave; tối ưu h&oacute;a kh&ocirc;ng gian lưu trữ trong c&aacute;c căn nh&agrave; nhỏ. Ch&uacute;ng c&oacute; thể được sử dụng để trưng b&agrave;y s&aacute;ch, đồ trang tr&iacute;, hoặc đồ d&ugrave;ng h&agrave;ng ng&agrave;y m&agrave; kh&ocirc;ng chiếm nhiều diện t&iacute;ch s&agrave;n. Một số mẫu tủ kệ gắn tường c&ograve;n được thiết kế linh hoạt để c&oacute; thể điều chỉnh độ cao hoặc dễ d&agrave;ng gấp gọn khi cần thiết.</p>\r\n\r\n<p><strong>2. Kệ Đựng Gắn Tường</strong></p>\r\n\r\n<p>Kệ đựng gắn tường l&agrave; một phương tiện hiệu quả để tận dụng kh&ocirc;ng gian trống tr&ecirc;n tường v&agrave; tổ chức c&aacute;c vật dụng một c&aacute;ch gọn g&agrave;ng. Ch&uacute;ng c&oacute; thể được sử dụng để lưu trữ s&aacute;ch, đồ trang tr&iacute;, hoặc c&aacute;c đồ d&ugrave;ng nh&agrave; bếp. Một số mẫu kệ đựng gắn tường c&ograve;n được trang bị hệ thống treo m&oacute;c để treo c&aacute;c vật dụng như ch&igrave;a kh&oacute;a, khăn tắm, hoặc dụng cụ nấu ăn.</p>\r\n\r\n<p><strong>Phần 6: Tủ v&agrave; Kệ Lưu Trữ</strong></p>\r\n\r\n<p><strong>1. Tủ Lưu Trữ Đa Năng</strong></p>\r\n\r\n<p>Tủ lưu trữ đa năng l&agrave; một phần kh&ocirc;ng thể thiếu trong c&aacute;c căn hộ nhỏ. Ch&uacute;ng c&oacute; thể được sử dụng để lưu trữ đồ quần &aacute;o, đồ d&ugrave;ng nh&agrave; bếp, hoặc đồ đạc c&aacute; nh&acirc;n một c&aacute;ch gọn g&agrave;ng v&agrave; tiện lợi. Một số mẫu tủ lưu trữ đa năng c&ograve;n được thiết kế để c&oacute; thể gấp gọn hoặc điều chỉnh độ cao để ph&ugrave; hợp với nhu cầu sử dụng.</p>\r\n\r\n<p><strong>2. Kệ Lưu Trữ Đa Năng</strong></p>\r\n\r\n<p>Kệ lưu trữ đa năng l&agrave; một giải ph&aacute;p th&ocirc;ng minh để tận dụng kh&ocirc;ng gian trống trong c&aacute;c căn nh&agrave; nhỏ. Ch&uacute;ng c&oacute; thể được sử dụng để lưu trữ đồ s&aacute;ch, đồ trang tr&iacute;, hoặc c&aacute;c đồ d&ugrave;ng h&agrave;ng ng&agrave;y một c&aacute;ch tiện lợi. Một số mẫu kệ lưu trữ đa năng c&oacute; thể điều chỉnh độ cao hoặc gấp gọn để ph&ugrave; hợp với kh&ocirc;ng gian sử dụng.</p>\r\n\r\n<p><strong>Phần 7: Đ&egrave;n Chiếu S&aacute;ng v&agrave; Đ&egrave;n Trang Tr&iacute;</strong></p>\r\n\r\n<p><strong>1. Đ&egrave;n Chiếu S&aacute;ng Gắn Tường</strong></p>\r\n\r\n<p>Đ&egrave;n chiếu s&aacute;ng gắn tường l&agrave; một giải ph&aacute;p tiết kiệm kh&ocirc;ng gian v&agrave; tạo điểm nhấn cho kh&ocirc;ng gian sống. Ch&uacute;ng c&oacute; thể được sử dụng để chiếu s&aacute;ng kh&ocirc;ng gian ph&ograve;ng kh&aacute;ch, ph&ograve;ng ngủ, hoặc ph&ograve;ng l&agrave;m việc một c&aacute;ch hiệu quả m&agrave; kh&ocirc;ng chiếm nhiều diện t&iacute;ch s&agrave;n. Một số mẫu đ&egrave;n chiếu s&aacute;ng gắn tường c&ograve;n được thiết kế để c&oacute; thể điều chỉnh hướng chiếu s&aacute;ng hoặc độ s&aacute;ng theo nhu cầu sử dụng.</p>\r\n\r\n<p><strong>2. Đ&egrave;n Trang Tr&iacute; Gắn Tường</strong></p>\r\n\r\n<p>Đ&egrave;n trang tr&iacute; gắn tường l&agrave; một phụ kiện kh&ocirc;ng thể thiếu trong việc trang tr&iacute; kh&ocirc;ng gian sống. Ch&uacute;ng c&oacute; thể được sử dụng để tạo điểm nhấn cho kh&ocirc;ng gian ph&ograve;ng kh&aacute;ch, ph&ograve;ng ngủ, hoặc ph&ograve;ng l&agrave;m việc một c&aacute;ch tinh tế v&agrave; sang trọng. Một số mẫu đ&egrave;n trang tr&iacute; gắn tường c&ograve;n được thiết kế để c&oacute; thể điều chỉnh hướng chiếu s&aacute;ng hoặc độ s&aacute;ng để tạo ra kh&ocirc;ng gian sống linh hoạt v&agrave; thoải m&aacute;i.</p>\r\n\r\n<p><strong>Phần 8: Tận Dụng Kh&ocirc;ng Gian Dưới S&agrave;n</strong></p>\r\n\r\n<p><strong>1. Hệ Thống Lưu Trữ Dưới S&agrave;n</strong></p>\r\n\r\n<p>Hệ thống lưu trữ dưới s&agrave;n l&agrave; một c&aacute;ch th&ocirc;ng minh để tận dụng kh&ocirc;ng gian trống dưới s&agrave;n nh&agrave;. Ch&uacute;ng c&oacute; thể được sử dụng để lưu trữ c&aacute;c đồ d&ugrave;ng như hộp đựng, th&ugrave;ng lạnh, hoặc đồ chơi một c&aacute;ch tiện lợi v&agrave; gọn g&agrave;ng. Một số mẫu hệ thống lưu trữ dưới s&agrave;n c&ograve;n được thiết kế để c&oacute; thể k&eacute;o ra hoặc gấp gọn để dễ d&agrave;ng truy cập v&agrave; sắp xếp đồ d&ugrave;ng.</p>\r\n\r\n<p><strong>2. S&agrave;n K&iacute;nh Trượt</strong></p>\r\n\r\n<p><span style=\"font-family:arial,sans-serif\">S&agrave;n k&iacute;nh trượt l&agrave; một phương tiện hiệu quả để tận dụng kh&ocirc;ng gian dưới s&agrave;n v&agrave; tạo ra một kh&ocirc;ng gian sống linh hoạt v&agrave; tiện nghi. Ch&uacute;ng c&oacute; thể được sử dụng để lưu trữ c&aacute;c đồ d&ugrave;ng như vali, vali k&eacute;o, hoặc gi&agrave;y d&eacute;p một c&aacute;ch gọn g&agrave;ng v&agrave; tiện lợi. Một số mẫu s&agrave;n k&iacute;nh trượt c&ograve;n được thiết kế để c&oacute; thể điều chỉnh độ cao hoặc gấp gọn để ph&ugrave; hợp với nhu cầu sử dụng.</span></p>\r\n', '', 'Bài viết này sẽ giới thiệu và phân tích các vật dụng nội thất thông minh nhất hiện nay, từ phòng ngủ đến phòng khách và bếp.  ', 'Nội Thất Thông Minh', 'Những Vật Dụng Nội Thất Thông Minh Giúp Tối Ưu Hóa Không Gian', '', '', '', 'Nội Thất Thông Minh', '', 'nhung-vat-dung-noi-that-thong-minh-giup-toi-uu-hoa-khong-gian', ' 05/06/2024 ', 0, '', '6560', '', '6560', '', '', 5, 0, 0, 0, 0),
(104, 'lovestudio_dogiadinh_0014.webp', '<p><strong>10 Phong C&aacute;ch Nội Thất Hiện Đại Đang Được Ưa Chuộng</strong></p>\r\n\r\n<p>Nội thất hiện đại ng&agrave;y nay kh&ocirc;ng chỉ mang lại sự tiện nghi m&agrave; c&ograve;n thể hiện gu thẩm mỹ v&agrave; phong c&aacute;ch sống của gia chủ. Dưới đ&acirc;y l&agrave; 10 phong c&aacute;ch nội thất hiện đại đang được ưa chuộng nhất hiện nay:</p>\r\n\r\n<h3 style=\"text-align: justify;\">1. Phong C&aacute;ch Tối Giản (Minimalism)</h3>\r\n\r\n<p>Phong c&aacute;ch tối giản tập trung v&agrave;o sự đơn giản v&agrave; tinh tế. Với &iacute;t đồ đạc, kh&ocirc;ng gian trở n&ecirc;n rộng r&atilde;i v&agrave; tho&aacute;ng đ&atilde;ng hơn. M&agrave;u sắc chủ đạo thường l&agrave; trắng, đen, v&agrave; x&aacute;m, kết hợp với c&aacute;c điểm nhấn m&agrave;u sắc tươi s&aacute;ng.</p>\r\n\r\n<h3>2. Phong C&aacute;ch Bắc &Acirc;u (Scandinavian)</h3>\r\n\r\n<p>Phong c&aacute;ch Bắc &Acirc;u ch&uacute; trọng đến sự ấm &aacute;p v&agrave; gần gũi. Sử dụng nhiều gỗ tự nhi&ecirc;n, vải len, l&ocirc;ng th&uacute; v&agrave; c&aacute;c t&ocirc;ng m&agrave;u trung t&iacute;nh, kh&ocirc;ng gian trở n&ecirc;n h&agrave;i h&ograve;a v&agrave; thư gi&atilde;n.</p>\r\n\r\n<h3>3. Phong C&aacute;ch C&ocirc;ng Nghiệp (Industrial)</h3>\r\n\r\n<p>Phong c&aacute;ch c&ocirc;ng nghiệp mang đến cảm gi&aacute;c th&ocirc; mộc v&agrave; mạnh mẽ với sự kết hợp của kim loại, gỗ v&agrave; b&ecirc; t&ocirc;ng. Đ&egrave;n treo d&acirc;y, ống nước lộ thi&ecirc;n v&agrave; c&aacute;c bề mặt th&ocirc; r&aacute;p l&agrave; những yếu tố đặc trưng.</p>\r\n\r\n<h3>4. Phong C&aacute;ch Bohemian</h3>\r\n\r\n<p>Phong c&aacute;ch Bohemian nổi bật với sự pha trộn của m&agrave;u sắc, họa tiết v&agrave; chất liệu. Kh&ocirc;ng gian tr&agrave;n đầy năng lượng v&agrave; s&aacute;ng tạo với c&aacute;c vật dụng trang tr&iacute; đa dạng, từ đồ thủ c&ocirc;ng đến những chiếc thảm dệt độc đ&aacute;o.</p>\r\n\r\n<h3>5. Phong C&aacute;ch Hiện Đại (Modern)</h3>\r\n\r\n<p>Phong c&aacute;ch hiện đại tập trung v&agrave;o đường n&eacute;t sắc sảo v&agrave; sự tối ưu h&oacute;a kh&ocirc;ng gian. Sử dụng nhiều k&iacute;nh, kim loại v&agrave; c&aacute;c vật liệu c&ocirc;ng nghệ cao, phong c&aacute;ch n&agrave;y mang lại vẻ đẹp tối giản nhưng đầy tinh tế.</p>\r\n\r\n<h3>6. Phong C&aacute;ch T&acirc;n Cổ Điển (Neo-Classical)</h3>\r\n\r\n<p>Phong c&aacute;ch t&acirc;n cổ điển kết hợp giữa cổ điển v&agrave; hiện đại, mang đến vẻ đẹp sang trọng v&agrave; qu&yacute; ph&aacute;i. Sử dụng nhiều chi tiết trang tr&iacute; tinh xảo, chất liệu cao cấp v&agrave; t&ocirc;ng m&agrave;u trắng, v&agrave;ng, đen l&agrave; điểm nhấn.</p>\r\n\r\n<h3>7. Phong C&aacute;ch Địa Trung Hải (Mediterranean)</h3>\r\n\r\n<p>Phong c&aacute;ch Địa Trung Hải mang đến cảm gi&aacute;c ấm &aacute;p v&agrave; thư gi&atilde;n với những gam m&agrave;u xanh biển, trắng v&agrave; đất nung. Sử dụng nhiều gạch mosaic, gỗ th&ocirc; v&agrave; c&acirc;y xanh, kh&ocirc;ng gian trở n&ecirc;n tươi mới v&agrave; gần gũi với thi&ecirc;n nhi&ecirc;n.</p>\r\n\r\n<h3>8. Phong C&aacute;ch Nhật Bản (Japandi)</h3>\r\n\r\n<p>Phong c&aacute;ch Nhật Bản kết hợp giữa sự đơn giản của phong c&aacute;ch Nhật Bản v&agrave; sự ấm &aacute;p của phong c&aacute;ch Bắc &Acirc;u. Kh&ocirc;ng gian được bố tr&iacute; gọn g&agrave;ng, sử dụng c&aacute;c vật liệu tự nhi&ecirc;n v&agrave; t&ocirc;ng m&agrave;u nhẹ nh&agrave;ng.</p>\r\n\r\n<h3>9. Phong C&aacute;ch H&agrave;n Quốc (K-Style)</h3>\r\n\r\n<p>Phong c&aacute;ch H&agrave;n Quốc nổi bật với sự tinh tế v&agrave; tối giản. Sử dụng nhiều gỗ nhẹ, t&ocirc;ng m&agrave;u trung t&iacute;nh v&agrave; &aacute;nh s&aacute;ng tự nhi&ecirc;n, kh&ocirc;ng gian trở n&ecirc;n dễ chịu v&agrave; ấm c&uacute;ng.</p>\r\n\r\n<h3>10. Phong C&aacute;ch Trung Hoa Hiện Đại</h3>\r\n\r\n<p>Phong c&aacute;ch Trung Hoa hiện đại kết hợp giữa truyền thống v&agrave; hiện đại. Sử dụng nhiều gỗ, tre, c&aacute;c họa tiết truyền thống v&agrave; t&ocirc;ng m&agrave;u đỏ, đen, kh&ocirc;ng gian mang đến cảm gi&aacute;c sang trọng v&agrave; ấm c&uacute;ng.</p>\r\n\r\n<p>Mỗi phong c&aacute;ch nội thất đều mang đến một vẻ đẹp v&agrave; cảm nhận ri&ecirc;ng, ph&ugrave; hợp với sở th&iacute;ch v&agrave; nhu cầu của từng gia đ&igrave;nh. H&atilde;y lựa chọn phong c&aacute;ch ph&ugrave; hợp để biến ng&ocirc;i nh&agrave; của bạn trở n&ecirc;n ấm c&uacute;ng v&agrave; độc đ&aacute;o hơn.</p>\r\n', '', 'Trên cơ sở này, bài viết này sẽ đề cập đến xu hướng nội thất màu pastel, từ nguồn gốc, đặc tính đến các ý tưởng và lợi ích của việc sử dụng màu sắc này trong trang trí nội thất.    ', 'Xu Hướng Nội Thất', 'Xu Hướng Nội Thất Màu Pastel - Tạo Nên Sự Thanh Lịch', '', '', '', 'Xu Hướng Nội Thất', '', 'xu-huong-noi-that-mau-pastel---tao-nen-su-thanh-lich', ' 05/06/2024 ', 0, '', '3393', '', '3393', '', '', 5, 0, 0, 0, 0),
(105, 'lovestudio_dogiadinh_0016.webp', '<p><img alt=\"\" src=\"/ckfinder/userfiles/files/lovestudio.jpg\" style=\"width: 1600px; height: 817px;\" /></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>10 Phong C&aacute;ch Nội Thất Hiện Đại Đang Được Ưa Chuộng</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Nội thất hiện đại ng&agrave;y nay kh&ocirc;ng chỉ mang lại sự tiện nghi m&agrave; c&ograve;n thể hiện gu thẩm mỹ v&agrave; phong c&aacute;ch sống của gia chủ. Dưới đ&acirc;y l&agrave; 10 phong c&aacute;ch nội thất hiện đại đang được ưa chuộng nhất hiện nay:</span></span></p>\r\n\r\n<h3><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">1. Phong C&aacute;ch Tối Giản (Minimalism)</span></span></h3>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Phong c&aacute;ch tối giản tập trung v&agrave;o sự đơn giản v&agrave; tinh tế. Với &iacute;t đồ đạc, kh&ocirc;ng gian trở n&ecirc;n rộng r&atilde;i v&agrave; tho&aacute;ng đ&atilde;ng hơn. M&agrave;u sắc chủ đạo thường l&agrave; trắng, đen, v&agrave; x&aacute;m, kết hợp với c&aacute;c điểm nhấn m&agrave;u sắc tươi s&aacute;ng.</span></span></p>\r\n\r\n<h3><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">2. Phong C&aacute;ch Bắc &Acirc;u (Scandinavian)</span></span></h3>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Phong c&aacute;ch Bắc &Acirc;u ch&uacute; trọng đến sự ấm &aacute;p v&agrave; gần gũi. Sử dụng nhiều gỗ tự nhi&ecirc;n, vải len, l&ocirc;ng th&uacute; v&agrave; c&aacute;c t&ocirc;ng m&agrave;u trung t&iacute;nh, kh&ocirc;ng gian trở n&ecirc;n h&agrave;i h&ograve;a v&agrave; thư gi&atilde;n.</span></span></p>\r\n\r\n<h3><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">3. Phong C&aacute;ch C&ocirc;ng Nghiệp (Industrial)</span></span></h3>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Phong c&aacute;ch c&ocirc;ng nghiệp mang đến cảm gi&aacute;c th&ocirc; mộc v&agrave; mạnh mẽ với sự kết hợp của kim loại, gỗ v&agrave; b&ecirc; t&ocirc;ng. Đ&egrave;n treo d&acirc;y, ống nước lộ thi&ecirc;n v&agrave; c&aacute;c bề mặt th&ocirc; r&aacute;p l&agrave; những yếu tố đặc trưng.</span></span></p>\r\n\r\n<h3><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">4. Phong C&aacute;ch Bohemian</span></span></h3>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Phong c&aacute;ch Bohemian nổi bật với sự pha trộn của m&agrave;u sắc, họa tiết v&agrave; chất liệu. Kh&ocirc;ng gian tr&agrave;n đầy năng lượng v&agrave; s&aacute;ng tạo với c&aacute;c vật dụng trang tr&iacute; đa dạng, từ đồ thủ c&ocirc;ng đến những chiếc thảm dệt độc đ&aacute;o.</span></span></p>\r\n\r\n<h3><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">5. Phong C&aacute;ch Hiện Đại (Modern)</span></span></h3>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Phong c&aacute;ch hiện đại tập trung v&agrave;o đường n&eacute;t sắc sảo v&agrave; sự tối ưu h&oacute;a kh&ocirc;ng gian. Sử dụng nhiều k&iacute;nh, kim loại v&agrave; c&aacute;c vật liệu c&ocirc;ng nghệ cao, phong c&aacute;ch n&agrave;y mang lại vẻ đẹp tối giản nhưng đầy tinh tế.</span></span></p>\r\n\r\n<h3><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">6. Phong C&aacute;ch T&acirc;n Cổ Điển (Neo-Classical)</span></span></h3>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Phong c&aacute;ch t&acirc;n cổ điển kết hợp giữa cổ điển v&agrave; hiện đại, mang đến vẻ đẹp sang trọng v&agrave; qu&yacute; ph&aacute;i. Sử dụng nhiều chi tiết trang tr&iacute; tinh xảo, chất liệu cao cấp v&agrave; t&ocirc;ng m&agrave;u trắng, v&agrave;ng, đen l&agrave; điểm nhấn.</span></span></p>\r\n\r\n<h3><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">7. Phong C&aacute;ch Địa Trung Hải (Mediterranean)</span></span></h3>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Phong c&aacute;ch Địa Trung Hải mang đến cảm gi&aacute;c ấm &aacute;p v&agrave; thư gi&atilde;n với những gam m&agrave;u xanh biển, trắng v&agrave; đất nung. Sử dụng nhiều gạch mosaic, gỗ th&ocirc; v&agrave; c&acirc;y xanh, kh&ocirc;ng gian trở n&ecirc;n tươi mới v&agrave; gần gũi với thi&ecirc;n nhi&ecirc;n.</span></span></p>\r\n\r\n<h3><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">8. Phong C&aacute;ch Nhật Bản (Japandi)</span></span></h3>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Phong c&aacute;ch Nhật Bản kết hợp giữa sự đơn giản của phong c&aacute;ch Nhật Bản v&agrave; sự ấm &aacute;p của phong c&aacute;ch Bắc &Acirc;u. Kh&ocirc;ng gian được bố tr&iacute; gọn g&agrave;ng, sử dụng c&aacute;c vật liệu tự nhi&ecirc;n v&agrave; t&ocirc;ng m&agrave;u nhẹ nh&agrave;ng.</span></span></p>\r\n\r\n<h3><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">9. Phong C&aacute;ch H&agrave;n Quốc (K-Style)</span></span></h3>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Phong c&aacute;ch H&agrave;n Quốc nổi bật với sự tinh tế v&agrave; tối giản. Sử dụng nhiều gỗ nhẹ, t&ocirc;ng m&agrave;u trung t&iacute;nh v&agrave; &aacute;nh s&aacute;ng tự nhi&ecirc;n, kh&ocirc;ng gian trở n&ecirc;n dễ chịu v&agrave; ấm c&uacute;ng.</span></span></p>\r\n\r\n<h3><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">10. Phong C&aacute;ch Trung Hoa Hiện Đại</span></span></h3>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Phong c&aacute;ch Trung Hoa hiện đại kết hợp giữa truyền thống v&agrave; hiện đại. Sử dụng nhiều gỗ, tre, c&aacute;c họa tiết truyền thống v&agrave; t&ocirc;ng m&agrave;u đỏ, đen, kh&ocirc;ng gian mang đến cảm gi&aacute;c sang trọng v&agrave; ấm c&uacute;ng.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Mỗi phong c&aacute;ch nội thất đều mang đến một vẻ đẹp v&agrave; cảm nhận ri&ecirc;ng, ph&ugrave; hợp với sở th&iacute;ch v&agrave; nhu cầu của từng gia đ&igrave;nh. H&atilde;y lựa chọn phong c&aacute;ch ph&ugrave; hợp để biến ng&ocirc;i nh&agrave; của bạn trở n&ecirc;n ấm c&uacute;ng v&agrave; độc đ&aacute;o hơn.</span></span></p>\r\n', '', 'Trong bài viết này, chúng ta sẽ tìm hiểu về 10 phong cách nội thất hiện đại đang được ưa chuộng, từ cách trang trí cổ điển đến những phong cách sáng tạo và hiện đại nhất của ngày nay.            ', 'Phong Cách Nội Thất Hiện Đại', '10 Phong Cách Nội Thất Hiện Đại Đang Được Ưa Chuộng', '', '', '', 'Phong Cách Nội Thất Hiện Đại', '', '10-phong-cach-noi-that-hien-dai-dang-duoc-ua-chuong', ' 05/06/2024 ', 0, '', '', '', '6121', '', '', 5, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_title`
--

CREATE TABLE `tin_title` (
  `id` int(11) NOT NULL,
  `hinhanh` text NOT NULL,
  `noidung` text NOT NULL,
  `trangchu` text NOT NULL,
  `mota` text NOT NULL,
  `tieude` text NOT NULL,
  `tieude_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `mota_en` text NOT NULL,
  `title` text NOT NULL,
  `tukhoa` text NOT NULL,
  `facebook` text NOT NULL,
  `linkurl` text NOT NULL,
  `ngay` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `xem` int(11) NOT NULL,
  `nguon` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hinhqcab` varchar(200) NOT NULL,
  `hinhqcabc` varchar(200) NOT NULL,
  `hinhndab` varchar(200) NOT NULL,
  `hinhndabc` varchar(200) NOT NULL,
  `hinhndabcd` varchar(200) NOT NULL,
  `thuocloai` text NOT NULL,
  `noibat` int(3) NOT NULL,
  `star` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tin_title`
--

INSERT INTO `tin_title` (`id`, `hinhanh`, `noidung`, `trangchu`, `mota`, `tieude`, `tieude_en`, `noidung_en`, `mota_en`, `title`, `tukhoa`, `facebook`, `linkurl`, `ngay`, `xem`, `nguon`, `hinhqcab`, `hinhqcabc`, `hinhndab`, `hinhndabc`, `hinhndabcd`, `thuocloai`, `noibat`, `star`) VALUES
(1, '283', '', '', 'TopService is a leading online platform, providing diverse professional services to meet customer needs in many different fields.', 'Giới Thiệu', '', '', '', '', '', '', '', ' 04/07/2024 ', 0, '', '', '', '', '', '', '1', 0, 0),
(2, '9636', '', '', '26 Nguyen Duy, Cam Le, Da Nang', 'Địa Chỉ', '', '', '', '', '', '', '', ' 04/07/2024 ', 0, '', '', '', '', '', '', '1', 0, 0),
(3, '300', '', '', '0379097853', 'Số Điện Thoại', '', '', '', '', '', '', '', ' 04/07/2024 ', 0, '', '300', '300', '300', '300', '300', '1', 0, 0),
(4, '2189', '', '', 'kinhdoanhatv@gmail.com\r\n', 'Email', '', '', '', '', '', '', '', ' 04/07/2024 ', 0, '', '', '', '', '', '', '1', 0, 0),
(5, '5003', '', '', 'INSURANCE  ', 'FOOTER 1', 'category-insurance-1', '', '', '', '', '', '', ' 04/07/2024 ', 0, '', '', '', '', '', '', '2', 0, 0),
(6, '2682', '', '', 'LAW   ', 'FOOTER 2', 'category-law-2', '', '', '', '', '', '', ' 04/07/2024 ', 0, '', '', '', '', '', '', '2', 0, 0),
(7, '8966', '', '', 'EDUCATION  ', 'FOOTER 3', 'category-education-3', '', '', '', '', '', '', ' 04/07/2024 ', 0, '', '', '', '', '', '', '2', 0, 0),
(8, '3824', '', '', 'FINANCE  ', 'FOOTER 4', 'category-finance-4', '', '', '', '', '', '', ' 04/07/2024 ', 0, '', '', '', '', '', '', '2', 0, 0),
(9, '1219', '', '', 'BUSINESS ', 'FOOTER 5', 'category-business-5', '', '', '', '', '', '', ' 04/07/2024 ', 0, '', '', '', '', '', '', '2', 0, 0),
(10, '7508', '', '', 'NEWS ', 'FOOTER 6', 'news', '', '', '', '', '', '', ' 04/07/2024 ', 0, '', '', '', '', '', '', '2', 0, 0),
(11, '1188', '', '', 'MASSAGE NAM', 'TÊN TIÊU ĐỀ 1', '', '', '', '', '', '', '', ' 04/07/2024 ', 0, '', '', '', '', '', '', '3', 0, 0),
(12, '4304', '', '', 'MASSAGE NỮ', 'TÊN TIÊU ĐỀ 2', '', '', '', '', '', '', '', ' 04/07/2024 ', 0, '', '', '', '', '', '', '3', 0, 0),
(13, '4614', '', '', 'MASSAGE NAM NỮ', 'TÊN TIÊU ĐỀ 3', '', '', '', '', '', '', '', ' 04/07/2024 ', 0, '', '', '', '', '', '', '3', 0, 0),
(14, '348', '', '', 'MASSAGE BODY', 'TÊN TIÊU ĐỀ 4', '', '', '', '', '', '', '', ' 04/07/2024 ', 0, '', '', '', '', '', '', '3', 0, 0),
(15, '8950', '', '', 'MASSAGE FOOT', 'TÊN TIÊU ĐỀ 5', '', '', '', '', '', '', '', ' 04/07/2024 ', 0, '', '', '', '', '', '', '3', 0, 0),
(16, '6493', '', '', 'TIN TỨC NỔI BẬT', 'TÊN TIÊU ĐỀ 6', '', '', '', '', '', '', '', ' 04/07/2024 ', 0, '', '', '', '', '', '', '3', 0, 0),
(17, '4374', '', '', 'TOPSERVICE ', 'NAME LOGO', 'https://chukysoatv.com.vn/home', '', '', '', '', '', '', ' 04/07/2024 ', 0, '', '', '', '', '', '', '3', 0, 0),
(18, '9453', '', '', 'FEATURED NEWS  ', 'MENU LEFT 1', '', '', '', '', '', '', '', ' 05/07/2024 ', 0, '', '', '', '', '', '', '4', 0, 0),
(19, '1771', '', '', 'CATEGORY ', 'MENU LEFT 2', '', '', '', '', '', '', '', ' 06/07/2024 ', 0, '', '', '', '', '', '', '4', 0, 0),
(20, '1203', '', '', '', 'Https://www.thongtinwwebsite.com', '', '', '', '', '', '', '', ' 09/07/2024 ', 0, '', '1203', '1203', '1203', '1203', '1203', '', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users_online`
--

CREATE TABLE `users_online` (
  `visitor` varchar(15) NOT NULL,
  `lastvisit` int(14) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users_online`
--

INSERT INTO `users_online` (`visitor`, `lastvisit`, `username`) VALUES
('127.0.0.1', 1308542022, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `doi_tac`
--
ALTER TABLE `doi_tac`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `du_an`
--
ALTER TABLE `du_an`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `du_lieu_1_tin`
--
ALTER TABLE `du_lieu_1_tin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gioi_thieu`
--
ALTER TABLE `gioi_thieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `he_thong`
--
ALTER TABLE `he_thong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_ma_sanpham`
--
ALTER TABLE `loai_ma_sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_tin_dichvu`
--
ALTER TABLE `loai_tin_dichvu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_tin_sanpham`
--
ALTER TABLE `loai_tin_sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_tin_thicong`
--
ALTER TABLE `loai_tin_thicong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_tin_tintuc`
--
ALTER TABLE `loai_tin_tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_tin_title`
--
ALTER TABLE `loai_tin_title`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ma_sanpham`
--
ALTER TABLE `ma_sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thongtin_quantri`
--
ALTER TABLE `thongtin_quantri`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thong_ke`
--
ALTER TABLE `thong_ke`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thong_tin_lh`
--
ALTER TABLE `thong_tin_lh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thuong_mai`
--
ALTER TABLE `thuong_mai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tin_dichvu`
--
ALTER TABLE `tin_dichvu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tin_sanpham`
--
ALTER TABLE `tin_sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tin_thicong`
--
ALTER TABLE `tin_thicong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tin_tintuc`
--
ALTER TABLE `tin_tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tin_title`
--
ALTER TABLE `tin_title`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT cho bảng `doi_tac`
--
ALTER TABLE `doi_tac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `du_an`
--
ALTER TABLE `du_an`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `du_lieu_1_tin`
--
ALTER TABLE `du_lieu_1_tin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `gioi_thieu`
--
ALTER TABLE `gioi_thieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `he_thong`
--
ALTER TABLE `he_thong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `loai_ma_sanpham`
--
ALTER TABLE `loai_ma_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `loai_tin_dichvu`
--
ALTER TABLE `loai_tin_dichvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `loai_tin_sanpham`
--
ALTER TABLE `loai_tin_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `loai_tin_thicong`
--
ALTER TABLE `loai_tin_thicong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `loai_tin_tintuc`
--
ALTER TABLE `loai_tin_tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `loai_tin_title`
--
ALTER TABLE `loai_tin_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `ma_sanpham`
--
ALTER TABLE `ma_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45478;

--
-- AUTO_INCREMENT cho bảng `thongtin_quantri`
--
ALTER TABLE `thongtin_quantri`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `thong_ke`
--
ALTER TABLE `thong_ke`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `thong_tin_lh`
--
ALTER TABLE `thong_tin_lh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `thuong_mai`
--
ALTER TABLE `thuong_mai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tin_dichvu`
--
ALTER TABLE `tin_dichvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `tin_sanpham`
--
ALTER TABLE `tin_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tin_thicong`
--
ALTER TABLE `tin_thicong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `tin_tintuc`
--
ALTER TABLE `tin_tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT cho bảng `tin_title`
--
ALTER TABLE `tin_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
