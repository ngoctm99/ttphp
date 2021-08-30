-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th8 30, 2021 lúc 09:08 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `article`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ads`
--

CREATE TABLE `ads` (
  `id` int(10) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `FK_image` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cateCode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `title`, `cateCode`) VALUES
(1, 'Sự kiện', 'sukien'),
(2, 'Doanh nghiệp', 'doanhnghiep'),
(3, 'Tiếp thị', 'tiepthi'),
(4, 'Kinh tế', 'kinhte'),
(5, 'Xã hội', 'xahoi'),
(6, 'Pháp luật', 'phapluat'),
(7, 'Quốc tế', 'quocte');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categorynews`
--

CREATE TABLE `categorynews` (
  `id` int(10) NOT NULL,
  `FK_post` int(10) NOT NULL,
  `FK_category` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categorynews`
--

INSERT INTO `categorynews` (`id`, `FK_post`, `FK_category`) VALUES
(1, 36, 1),
(2, 37, 1),
(3, 42, 2),
(4, 43, 2),
(5, 44, 4),
(6, 45, 4),
(7, 46, 5),
(8, 47, 5),
(9, 48, 6),
(10, 49, 6),
(11, 50, 7),
(12, 51, 7),
(15, 38, 1),
(16, 39, 1),
(17, 40, 1),
(18, 41, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `emagazine`
--

CREATE TABLE `emagazine` (
  `id` int(10) NOT NULL,
  `FK_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `emagazine`
--

INSERT INTO `emagazine` (`id`, `FK_post`) VALUES
(1, 22),
(2, 23),
(3, 24),
(4, 25);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `highlight`
--

CREATE TABLE `highlight` (
  `id` int(10) NOT NULL,
  `FK_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `highlight`
--

INSERT INTO `highlight` (`id`, `FK_post`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `highlightleft`
--

CREATE TABLE `highlightleft` (
  `id` int(10) NOT NULL,
  `FK_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `highlightleft`
--

INSERT INTO `highlightleft` (`id`, `FK_post`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `highlightright`
--

CREATE TABLE `highlightright` (
  `id` int(10) NOT NULL,
  `FK_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `highlightright`
--

INSERT INTO `highlightright` (`id`, `FK_post`) VALUES
(1, 6),
(2, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `id` int(10) NOT NULL,
  `imgurl` varchar(255) NOT NULL,
  `imgsprites` varchar(255) NOT NULL,
  `FK_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`id`, `imgurl`, `imgsprites`, `FK_post`) VALUES
(1, '../image/hightlight-news.jpg', '', 5),
(2, '../image/hotnews-1.jpg', '', 6),
(3, '../image/hotnews-2.jpg', '', 7),
(4, '../image/col1-item1.jpg', '', 8),
(5, '../image/col2-item1.jpg', 'sprite sprite-bsnBlack', 9),
(6, '../image/col3-item1.jpg', '', 10),
(7, '../image/col1-item2.jpg', '', 11),
(8, '../image/col2-item2.jpg', '', 12),
(9, '../image/col3-item2.jpg', '', 13),
(10, '../image/list1.jpg', '', 14),
(11, '../image/list2.jpg', 'sprite sprite-infographic1', 15),
(12, '../image/list3.jpg', '', 16),
(13, '../image/list4.jpg', 'sprite sprite-infographic2', 17),
(14, '../image/list1.jpg', '', 18),
(15, '../image/list2.jpg', '', 19),
(16, '../image/list1.jpg', '', 20),
(17, '../image/list4.jpg', '', 21),
(18, '../image/e1.jpg', '', 22),
(19, '../image/e2.jpg', '', 23),
(20, '../image/e3.jpg', '', 24),
(21, '../image/e4.jpg', '', 25),
(22, '../image/most1.jpg', '', 26),
(23, '../image/most2.jpg', '', 27),
(24, '../image/most3.jpg', '', 28),
(25, '../image/most4.jpg', '', 29),
(26, '../image/most5.jpg', '', 30),
(27, '../image/event1.png', '', 36),
(28, '../image/event2.png', '', 37),
(29, '../image/bsn1.png', '', 42),
(30, '../image/bsn2.png', '', 43),
(31, '../image/kte1.png', '', 44),
(32, '../image/kte2.png', '', 45),
(33, '../image/xh1.png', '', 46),
(34, '../image/xh2.png', '', 47),
(35, '../image/pl1.png', '', 48),
(36, '../image/pl2.png', '', 49),
(37, '../image/qt1.png', '', 50),
(38, '../image/qt2.png', '', 51),
(39, '../image/rightcorner.png', '', 52),
(40, '../image/gold.png', '', 53);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mainnews1`
--

CREATE TABLE `mainnews1` (
  `id` int(10) NOT NULL,
  `FK_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `mainnews1`
--

INSERT INTO `mainnews1` (`id`, `FK_post`) VALUES
(1, 14),
(2, 15),
(3, 16),
(4, 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mainnews2`
--

CREATE TABLE `mainnews2` (
  `id` int(10) NOT NULL,
  `FK_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `mainnews2`
--

INSERT INTO `mainnews2` (`id`, `FK_post`) VALUES
(1, 18),
(2, 19),
(3, 20),
(4, 21);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `marketingnews`
--

CREATE TABLE `marketingnews` (
  `id` int(10) NOT NULL,
  `FK_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mostreading`
--

CREATE TABLE `mostreading` (
  `id` int(10) NOT NULL,
  `FK_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `mostreading`
--

INSERT INTO `mostreading` (`id`, `FK_post`) VALUES
(1, 26),
(2, 27),
(3, 28),
(4, 29),
(5, 30);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(10) NOT NULL,
  `title` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `brief` text NOT NULL,
  `keyword` text NOT NULL,
  `FK_category` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `title`, `author`, `content`, `date`, `brief`, `keyword`, `FK_category`) VALUES
(1, 'T&T Group và Hành trình yêu thương: Khi niềm tin được sẻ chia thì hạnh phúc được nhân lên', '', '', '2021-08-01', '', '', 2),
(2, 'Hdbank tham gia Tradeassets nhằm số hóa hoạt động tài trợ thương mại', '', '', '2021-08-02', '', '', 4),
(3, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện', '', '', '2021-08-03', '', '', 5),
(4, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện \"bình thường mới\"', '', '', '2021-08-10', '', '', 6),
(5, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện \"bình thường mới\"\r\n', '', '', '2021-08-09', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp trong đêm để thông tin về sự việc liên quan đến dịch Covid-19. Cuộc họp đã công bố xác nhận thêm', '', 5),
(6, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện \"bình thường mới\"', '', '', '2021-08-11', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp trong đêm để...', '', 4),
(7, 'Hà Nội triển khai một số nhiệm vụ tài chính - ngân sách trong điều kiện ảnh hưởng của dịch bệnh Covid-19', '', '', '2021-08-10', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp trong đêm để...', '', 6),
(8, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-28', '', '', 3),
(9, 'Gam hồng thương mại điện tử trong dịch Covid-19', '', '', '2021-08-28', '', '', 3),
(10, '10 cách giúp doanh nghiệp làm việc hiệu quả trong “Trạng thái bình thường mới”', '', '', '2021-08-28', '', '', 3),
(11, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-28', '', '', 3),
(12, 'Gam hồng thương mại điện tử trong dịch Covid-19', '', '', '2021-08-28', '', '', 3),
(13, '10 cách giúp doanh nghiệp làm việc hiệu quả trong “Trạng thái bình thường mới”', '', '', '2021-08-28', '', '', 3),
(14, 'Có 1 tỷ đồng nên đầu tư vào phân khúc BĐS nào để sinh lời nhanh chóng?', '', '', '2021-08-28', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp trong đêm để thông tin về sự việc liên quan đến dịch Covid-19. Cuộc họp đã công bố xác nhận thêm', '', 4),
(15, 'Giảm 50% phí trước bạ ô tô: Xe sang có giá lăn bánh giảm \"khủng\"', '', '', '2021-08-28', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp trong đêm để thông tin về sự việc liên quan đến dịch Covid-19. Cuộc họp đã công bố xác nhận thêm', '', 5),
(16, 'Có 1 tỷ đồng nên đầu tư vào phân khúc BĐS nào để sinh lời nhanh chóng?', '', '', '2021-08-28', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp trong đêm để thông tin về sự việc liên quan đến dịch Covid-19. Cuộc họp đã công bố xác nhận thêm', '', 4),
(17, 'Doanh nghiệp bất động sản ảnh hưởng ra sao bởi dịch Covid 19?', '', '', '2021-08-28', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp trong đêm để thông tin về sự việc liên quan đến dịch Covid-19. Cuộc họp đã công bố xác nhận thêm', '', 2),
(18, 'Bắc Kạn: Doanh nghiệp đề xuất nhiều giải pháp vượt khó hậu COVID-19', '', '', '2021-08-28', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp trong đêm để thông tin về sự việc liên quan đến dịch Covid-19. Cuộc họp đã công bố xác nhận thêm', '', 3),
(19, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-28', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp trong đêm để thông tin về sự việc liên quan đến dịch Covid-19. Cuộc họp đã công bố xác nhận thêm', '', 4),
(20, 'Quảng Nam xây dựng chiến lược phát triển cho cây sâm Ngọc Linh và các dược liệu', '', '', '2021-08-28', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp trong đêm để thông tin về sự việc liên quan đến dịch Covid-19. Cuộc họp đã công bố xác nhận thêm', '', 7),
(21, '“Lấy cung làm chủ đạo và đẩy mạnh cầu của nền kinh tế”: Hiểu sao cho đúng?', '', '', '2021-08-28', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp trong đêm để thông tin về sự việc liên quan đến dịch Covid-19. Cuộc họp đã công bố xác nhận thêm', '', 5),
(22, 'Có 1 tỷ đồng nên đầu tư vào phân khúc BĐS nào để sinh lời nhanh chóng?', '', '', '2021-08-28', '', '', 4),
(23, 'Có 1 tỷ đồng nên đầu tư vào phân khúc BĐS nào để sinh lời nhanh chóng?', '', '', '2021-08-28', '', '', 4),
(24, 'Có 1 tỷ đồng nên đầu tư vào phân khúc BĐS nào để sinh lời nhanh chóng?', '', '', '2021-08-28', '', '', 4),
(25, 'Có 1 tỷ đồng nên đầu tư vào phân khúc BĐS nào để sinh lời nhanh chóng?', '', '', '2021-08-28', '', '', 4),
(26, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-28', '', '', 5),
(27, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-28', '', '', 5),
(28, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-28', '', '', 5),
(29, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-28', '', '', 5),
(30, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-28', '', '', 5),
(31, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện \"bình thường mới\"', '', '', '2021-08-28', '', '', 5),
(32, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù', '', '', '2021-08-28', '', '', 5),
(33, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù', '', '', '2021-08-28', '', '', 5),
(34, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù', '', '', '2021-08-28', '', '', 5),
(35, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù', '', '', '2021-08-28', '', '', 5),
(36, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-28', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp...', '', 1),
(37, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện', '', '', '2021-08-28', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp...', '', 1),
(38, 'T&T Group và Hành trình yêu thương: Khi niềm tin được sẻ chia thì hạnh phúc được nhân lên', '', '', '2021-08-28', '', '', 1),
(39, 'Hà Nội: Vận động cán bộ, công chức, người lao động ủng hộ một ngày lương cho phòng Covid-19', '', '', '2021-08-28', '', '', 1),
(40, 'Bộ Xây dựng đề nghị nới việc phân lô bán nền', '', '', '2021-08-28', '', '', 1),
(41, 'Thêm một biểu tượng hấp dẫn của Thủ đô', '', '', '2021-08-28', '', '', 1),
(42, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-28', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp...', '', 2),
(43, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện', '', '', '2021-08-28', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp...', '', 2),
(44, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-28', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp...', '', 4),
(45, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện', '', '', '2021-08-28', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp...', '', 4),
(46, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-28', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp...', '', 5),
(47, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện', '', '', '2021-08-28', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp...', '', 5),
(48, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-28', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp...', '', 6),
(49, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện', '', '', '2021-08-28', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp...', '', 6),
(50, 'Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp', '', '', '2021-08-28', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp...', '', 7),
(51, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện', '', '', '2021-08-28', 'Đêm ngày 6/3, Ban chỉ đạo phòng chống dịch Covid-19 Hà Nội triệu tập cuộc họp khẩn cấp...', '', 7),
(52, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện \"bình thường mới\"', '', '', '2021-08-28', '', '', 7),
(53, 'Hội nghị tập huấn trực tuyến phòng, chống dịch COVID-19 tại các cơ sở khám chữa bệnh', 'Hoàng Anh', 'Hội nghị đã tập trung đánh giá những kết quả tích cực, những tồn tại của công tác quản lý nhà nước trong tháng 9/2018, đồng thời đề ra các giải pháp, mục tiêu cần thực hiện trong tháng 10/2018; chú trọng thúc đẩy phát triển các lĩnh vực trong ngành, gồm 6 lĩnh vực: Bưu chính, Viễn thông, CNTT, An toàn thông tin, Công nghiệp ICT, Báo chí PTTH-Xuất bản.\r\n\r\nTại Hội nghị, Quyền Bộ trưởng đã phân tích: Bộ phải xây dựng khung pháp lý cho từng lĩnh vực do Chính phủ giao hoặc nằm trong kế hoạch của Bộ. Các cơ quan, đơn vị của Bộ cần thường xuyên nắm bắt xem các đối tượng quản lý và người dân gặp khó khăn gì và phải giải quyết những khó khăn, vướng mắc này ra sao.\r\nCác văn bản pháp luật chính là công cụ để thúc đẩy các lĩnh vực quản lý nhà nước của Bộ phát triển lành mạnh, Quyền Bộ trưởng nhấn mạnh.\r\n\r\nVề mảng KHCN, tiêu chuẩn, công nghiệp CNTT, hiện Bộ Kế hoạch Đầu tư được Chính phủ giao xây dựng Chiến lược quốc gia 4.0. Quyền Bộ trưởng giao Vụ KHCN là đầu mối về 4.0 và khẳng định Bộ TT&TT cần xây dựng phiên bản riêng về chiến lược 4.0 cho đất nước. Vụ KHCN cần tham khảo kinh nghiệm quốc tế về 4.0 và tham khảo ý kiến của các Sở TT&TT.', '2021-02-21', 'Tại Hà Nội, Bộ TT&TT đã tổ chức Hội nghị giao ban quản lý nhà nước tháng 9 năm 2018. Ủy viên Trung ương Đảng, Bí thư Ban Cán sự Đảng, Quyền Bộ trưởng Bộ TT&TT Nguyễn Mạnh Hùng đã chủ trì Hội nghị.', 'gây tiếng ồn vượt ngưỡng,  \r\nxả khói đen,  \r\ndi rời khỏi nội đô,  \r\nmùi hoá chất phân tán', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `FK_category` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `subcategory`
--

INSERT INTO `subcategory` (`id`, `title`, `FK_category`) VALUES
(1, 'Chính trị - Xã hội', 1),
(2, 'Cải cách hành chính', 1),
(3, 'Tiêu điểm', 1),
(4, 'Tin địa phương', 1),
(5, 'Hoạt động của Hội', 1),
(6, 'Diễn đàn', 2),
(7, 'Thương hiệu', 2),
(8, 'Thông tin thương hiệu', 2),
(9, 'Trách nhiệm xã hội', 2),
(10, 'Khởi nghiệp', 2),
(11, 'Nhịp đập thị trường', 3),
(12, 'Tiếp thị số', 3),
(13, 'Dịch vụ', 3),
(14, 'Bảo vệ người tiêu dùng', 3),
(15, 'Kinh doanh', 4),
(16, 'Tài chính - Đầu tư', 4),
(17, 'Ngân hàng', 4),
(18, 'Bất động sản', 4),
(19, 'Chứng khoán', 4),
(20, 'Văn hóa', 5),
(21, 'Giáo dục', 5),
(22, 'Sức khỏe', 5),
(23, 'Du lịch', 5),
(24, 'Ẩm thực', 5),
(25, 'Chính sách mới', 6),
(26, 'Tiếp thị và Pháp luật', 6),
(27, 'Tư vấn', 6),
(28, 'Luật sư của bạn', 6),
(29, 'Đơn thư bạn đọc', 6),
(30, 'Thế giới 24H', 7),
(31, 'Tư liệu', 7),
(32, 'Phân tích - Bình luận', 7),
(33, 'Tiếp thị & Pháp luật', 6),
(34, 'Tư vấn', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suggest`
--

CREATE TABLE `suggest` (
  `id` int(10) NOT NULL,
  `title` text NOT NULL,
  `FK_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `suggest`
--

INSERT INTO `suggest` (`id`, `title`, `FK_post`) VALUES
(1, 'Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện', 53),
(2, 'Nhiều khả năng Triệu Quân Sự đã trốn thoát khỏi đèo Hải Vân', 53),
(3, 'Quảng Nam xây dựng chiến lược phát triển cho cây sâm Ngọc Linh', 53);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `video`
--

CREATE TABLE `video` (
  `id` int(10) NOT NULL,
  `videourl` varchar(255) NOT NULL,
  `FK_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `video`
--

INSERT INTO `video` (`id`, `videourl`, `FK_post`) VALUES
(1, '../image/video1.png', 31),
(2, '../image/video2.png', 32),
(3, '../image/video3.png', 33),
(4, '../image/video4.png', 34),
(5, '../image/video5.png', 35);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_image` (`FK_image`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categorynews`
--
ALTER TABLE `categorynews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post` (`FK_post`),
  ADD KEY `FK_category` (`FK_category`);

--
-- Chỉ mục cho bảng `emagazine`
--
ALTER TABLE `emagazine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post` (`FK_post`);

--
-- Chỉ mục cho bảng `highlight`
--
ALTER TABLE `highlight`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post` (`FK_post`);

--
-- Chỉ mục cho bảng `highlightleft`
--
ALTER TABLE `highlightleft`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post` (`FK_post`);

--
-- Chỉ mục cho bảng `highlightright`
--
ALTER TABLE `highlightright`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post` (`FK_post`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post` (`FK_post`);

--
-- Chỉ mục cho bảng `mainnews1`
--
ALTER TABLE `mainnews1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post` (`FK_post`);

--
-- Chỉ mục cho bảng `mainnews2`
--
ALTER TABLE `mainnews2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post` (`FK_post`);

--
-- Chỉ mục cho bảng `marketingnews`
--
ALTER TABLE `marketingnews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post` (`FK_post`);

--
-- Chỉ mục cho bảng `mostreading`
--
ALTER TABLE `mostreading`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post` (`FK_post`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_category` (`FK_category`);

--
-- Chỉ mục cho bảng `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_category` (`FK_category`);

--
-- Chỉ mục cho bảng `suggest`
--
ALTER TABLE `suggest`
  ADD KEY `FK_post` (`FK_post`);

--
-- Chỉ mục cho bảng `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_post` (`FK_post`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `categorynews`
--
ALTER TABLE `categorynews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `emagazine`
--
ALTER TABLE `emagazine`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `highlight`
--
ALTER TABLE `highlight`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `highlightleft`
--
ALTER TABLE `highlightleft`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `highlightright`
--
ALTER TABLE `highlightright`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `mainnews1`
--
ALTER TABLE `mainnews1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `mainnews2`
--
ALTER TABLE `mainnews2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `marketingnews`
--
ALTER TABLE `marketingnews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `mostreading`
--
ALTER TABLE `mostreading`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `video`
--
ALTER TABLE `video`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ads`
--
ALTER TABLE `ads`
  ADD CONSTRAINT `ads_ibfk_1` FOREIGN KEY (`FK_image`) REFERENCES `image` (`id`);

--
-- Các ràng buộc cho bảng `categorynews`
--
ALTER TABLE `categorynews`
  ADD CONSTRAINT `categorynews_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `categorynews_ibfk_2` FOREIGN KEY (`FK_category`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `emagazine`
--
ALTER TABLE `emagazine`
  ADD CONSTRAINT `emagazine_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`);

--
-- Các ràng buộc cho bảng `highlight`
--
ALTER TABLE `highlight`
  ADD CONSTRAINT `highlight_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`);

--
-- Các ràng buộc cho bảng `highlightleft`
--
ALTER TABLE `highlightleft`
  ADD CONSTRAINT `highlightleft_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`);

--
-- Các ràng buộc cho bảng `highlightright`
--
ALTER TABLE `highlightright`
  ADD CONSTRAINT `highlightright_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`);

--
-- Các ràng buộc cho bảng `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`);

--
-- Các ràng buộc cho bảng `mainnews1`
--
ALTER TABLE `mainnews1`
  ADD CONSTRAINT `mainnews1_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`);

--
-- Các ràng buộc cho bảng `mainnews2`
--
ALTER TABLE `mainnews2`
  ADD CONSTRAINT `mainnews2_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`);

--
-- Các ràng buộc cho bảng `marketingnews`
--
ALTER TABLE `marketingnews`
  ADD CONSTRAINT `marketingnews_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`);

--
-- Các ràng buộc cho bảng `mostreading`
--
ALTER TABLE `mostreading`
  ADD CONSTRAINT `mostreading_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`);

--
-- Các ràng buộc cho bảng `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`FK_category`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`FK_category`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `suggest`
--
ALTER TABLE `suggest`
  ADD CONSTRAINT `suggest_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`);

--
-- Các ràng buộc cho bảng `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`FK_post`) REFERENCES `post` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
