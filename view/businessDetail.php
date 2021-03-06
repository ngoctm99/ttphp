<?php
require_once("../include/sql.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/businessDetail.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="../js/index.js"></script>
    <title>Doanh Nghiệp - Bài viết ...</title>
</head>

<body>
    <!-- header -->
    <div class="header">
        <div class="header__top">
            <div class="container">
                <div class="header__top-flex d-flex justify-content-between">
                    <h1 class="header__logo">
                        <a href="index.html"><i class="sprite sprite-header_logo"></i></a>
                    </h1>
                    <ul class="header__tags d-flex align-item-center">
                        <li><i class="sprite sprite-vector vertical-align-middle"></i></li>
                        <li><a href="#" title="# Biểu tình lan ra ở Mỹ"># Biểu tình lan ra ở Mỹ</a></li>
                        <li><a href="#" title="# Nhân sự, Đại hội Đảng các cấp"># Nhân sự, Đại hội Đảng các cấp</a></li>
                        <li><a href="#" title="# Dịch Covid19"># Dịch Covid19</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header__navbar">
            <div class="container">
                <!-- before -->
                <div class="header__navbar-flex d-flex justify-content-between align-item-center">
                    <div class="main__navbar-menu d-flex text-uppercase">
                        <ul class="header__navbar-ul d-flex">
                            <li>
                                <a href="index.html" title="Trang chủ">
                                    <i class="sprite sprite-home vertical-align-top m-right-home"></i>
                                    Trang chủ
                                </a>
                            </li>
                            <li><a href="#" title="Sự kiện">Sự kiện</a></li>
                            <li><a href="business.html" class="main__navlink--active" title="Doanh nghiệp">Doanh
                                    nghiệp</a></li>
                            <li><a href="#" title="Tiếp thị">Tiếp thị</a></li>
                            <li><a href="#" title="Kinh tế">Kinh tế</a></li>
                            <li><a href="#" title="Xã hội">Xã hội</a></li>
                            <li><a href="#" title="Pháp luật">Pháp luật</a></li>
                            <li><a href="#" title="Quốc tế">Quốc tế</a></li>
                            <li><a href="#" title="Video">Video</a></li>
                        </ul>
                        <div class="header__navbar-search">
                            <a href="#"><i class="sprite sprite-search vertical-align-middle"></i></a>
                        </div>
                    </div>
                    <div class="header__navbar-toggler">
                        <a href="#" title="Danh mục">
                            <i class="menu-toggler sprite sprite-toggler vertical-align-middle"></i>
                            <i class="menu-close sprite sprite-x vertical-align-middle"></i>
                        </a>
                    </div>
                </div>
                <!-- after -->
                <div id="menu__dropdown">
                    <div class="header__menu-dropdown">
                        <ul class="header__menu-category d-flex justify-content-between">
                            <li class="header__menu-list">
                                <a href="#" class="text-uppercase dropdown-category" title="Sự kiện">Sự kiện</a>
                                <ul class="header__menu-list-title">
                                    <li><a href="#" title="Chính trị - Xã hội">Chính trị - Xã hội</a></li>
                                    <li><a href="#" title="Cải cách hành chính">Cải cách hành chính</a></li>
                                    <li><a href="#" title="Tiêu điểm">Tiêu điểm</a></li>
                                    <li><a href="#" title="Tin địa phương">Tin địa phương</a></li>
                                    <li><a href="#" title="Hoạt động xã hội">Hoạt động xã hội</a></li>
                                </ul>
                            </li>
                            <li class="header__menu-list">
                                <a href="#" class="text-uppercase dropdown-category" title="Doanh nghiệp">Doanh
                                    nghiệp</a>
                                <ul class="header__menu-list-title">
                                    <li><a href="#" title="Diễn đàn">Diễn đàn</a></li>
                                    <li><a href="#" title="Thương hiệu">Thương hiệu</a></li>
                                    <li><a href="#" title="Trách nhiệm xã hội">Trách nhiệm xã hội</a></li>
                                    <li><a href="#" title="Thông tin thương hiệu">Thông tin thương hiệu</a></li>
                                    <li><a href="#" title="Khởi nghiệp">Khởi nghiệp</a></li>
                                </ul>
                            </li>
                            <li class="header__menu-list">
                                <a href="#" class="text-uppercase dropdown-category" title="Tiếp thị">Tiếp thị</a>
                                <ul class="header__menu-list-title">
                                    <li><a href="#" title="Nhịp đập thị trường">Nhịp đập thị trường</a></li>
                                    <li><a href="#" title="Tiếp thị số">Tiếp thị số</a></li>
                                    <li><a href="#" title="Dịch vụ">Dịch vụ</a></li>
                                    <li><a href="#" title="Bảo vệ người tiêu dùng">Bảo vệ ngườI tiêu dùng</a></li>
                                </ul>
                            </li>
                            <li class="header__menu-list">
                                <a href="#" class="text-uppercase dropdown-category" title="Kinh tế">Kinh tế</a>
                                <ul class="header__menu-list-title">
                                    <li><a href="#" title="Kinh doanh">Kinh doanh</a></li>
                                    <li><a href="#" title="Tài chính - Đầu tư">Tài chính - Đầu tư</a></li>
                                    <li><a href="#" title="Ngân hàng">Ngân hàng</a></li>
                                    <li><a href="#" title="Bất động sản">Bất động sản</a></li>
                                    <li><a href="#" title="Chứng khoán">Chứng khoán</a></li>
                                </ul>
                            </li>
                            <li class="header__menu-list">
                                <a href="#" class="text-uppercase dropdown-category" title="Xã hội">Xã hội</a>
                                <ul class="header__menu-list-title">
                                    <li><a href="#" title="Văn hoá">Văn hoá</a></li>
                                    <li><a href="#" title="Giáo dục">Giáo dục</a></li>
                                    <li><a href="#" title="Sức khoẻ">Sức khoẻ</a></li>
                                    <li><a href="#" title="Du lịch">Du lịch</a></li>
                                    <li><a href="#" title="Ẩm thực">Ẩm thực</a></li>
                                </ul>
                            </li>
                            <li class="header__menu-list">
                                <a href="#" class="text-uppercase dropdown-category" title="Pháp luật">Pháp luật</a>
                                <ul class="header__menu-list-title">
                                    <li><a href="#" title="Chính sách mới">Chính sách mới</a></li>
                                    <li><a href="#" title="Tiếp thị & Pháp luật">Tiếp thị & Pháp luật</a></li>
                                    <li><a href="#" title="Tư vấn">Tư vấn</a></li>
                                    <li><a href="#" title="Luật sư của bạn">Luật sư của bạn</a></li>
                                    <li><a href="#" title="Đơn thư bạn đọc">Đơn thư bạn đọc</a></li>
                                </ul>
                            </li>
                            <li class="header__menu-list">
                                <a href="#" class="text-uppercase dropdown-category" title="Quốc tế">Quốc tế</a>
                                <ul class="header__menu-list-title">
                                    <li><a href="#" title="Thế giới 24h">Thế giới 24h</a></li>
                                    <li><a href="#" title="Tư liệu">Tư liệu</a></li>
                                    <li><a href="#" title="Phân tích - Bình luận">Phân tích - Bình luận</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="header__option d-flex">
                            <li><a href="#" class="header__option-a d-flex align-item-center text-uppercase" title="Video">
                                    <i class="sprite sprite-videoRed header__option-img vertical-align-top"></i>
                                    <span>Video</span>
                                </a></li>
                            <li><a href="#" class="header__option-a d-flex align-item-center text-uppercase" title="Ảnh">
                                    <i class="sprite sprite-imageRed header__option-img vertical-align-top"></i>
                                    <span>Ảnh</span>
                                </a></li>
                            <li><a href="#" class="header__option-a d-flex align-item-center text-uppercase" title="Infographic">
                                    <i class="sprite sprite-bsnRed header__option-img vertical-align-top"></i>
                                    <span>Infographic</span>
                                </a></li>
                            <li><a href="#" class="header__option-a d-flex align-item-center text-uppercase" title="Emagazine">
                                    <i class="sprite sprite-newsRed header__option-img vertical-align-top"></i>
                                    <span>Emagazine</span>
                                </a></li>
                            <li><a href="#" class="header__option-a d-flex align-item-center text-uppercase" title="Tạp chí in">
                                    <i class="sprite sprite-newsppRed header__option-img vertical-align-top"></i>
                                    <span>Tạp chí in</span>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- main -->
    <div class="main">
        <div class="container">
            <div class="main__marketing-news">
                <div class="main__aside-layout d-flex">
                    <div class="main__aside-layout-left">
                        <?php
                        $ind = 53;
                        $post = get_post($ind);
                        $img = get_img_by_postid($ind);
                        $cate = get_category_by_postid($ind);
                        $suggests = get_suggest_by_postid($ind);

                        ?>
                        <div class="main__news-main-title">
                            <h2 class="main__nm-h2">
                                <span class="main__highlight-news-title">
                                    <?php echo $post[0]['title']; ?>
                                </span>
                            </h2>
                        </div>
                        <div class="main__news-info d-flex">
                            <a href="#" class="main__news-category-title text-uppercase" title="Doanh nghiệp">
                                <?php echo $cate[0]['title']; ?>
                            </a>
                            <span class="main__clock">
                                <i class="sprite sprite-clockcircle img-clock-1"></i>
                                <i class="sprite sprite-clockwise img-clock-2"></i>
                            </span>
                            <div class="main__time">
                                <span>
                                    <?php
                                        $date = date_create($post[0]['date']);
                                        echo date_format($date, "H:i A d/m/Y"); 
                                        ?>
                                </span>
                            </div>
                        </div>
                        <div class="main__news-brief"><?php echo $post[0]['brief']; ?>
                        </div>
                        <div class="main__news-social d-flex">
                            <div class="main__news-social-button btn-like">
                                <a href="#" title="Thích">
                                    <span class="button-title">
                                        <span class="m-right">
                                            <i class="sprite sprite-like"></i>
                                        </span>
                                        Thích
                                    </span>
                                </a>
                            </div>
                            <div class="main__news-social-button btn-share">
                                <a href="#" title="Chia sẻ">
                                    <span class="button-title">
                                        <span class="m-right">
                                            <i class="sprite sprite-Ellipse5 img-circle"></i>
                                            <i class="sprite sprite-facebook img-facebook"></i>
                                        </span>
                                        Chia sẻ
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="main__news-suggest">
                            <ul class="main__news-suggest-ul">
                                <?php
                                foreach ($suggests as $suggest):
                                ?>
                                    <li><a href="#" title="Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện">
                                        <?php echo $suggest[0]; ?>
                                    </a></li>
                                <?php
                                endforeach;
                                ?>
                            </ul>
                        </div>
                        <div class="main__news-detail">
                            <p class="main__news-detail-content">Hội nghị đã tập trung đánh giá những kết quả tích cực,
                                những tồn tại của
                                công tác quản
                                lý nhà nước trong tháng 9/2018, đồng thời đề ra các giải pháp, mục tiêu cần thực
                                hiện
                                trong tháng 10/2018; chú trọng thúc đẩy phát triển các lĩnh vực trong ngành, gồm 6
                                lĩnh
                                vực: Bưu chính, Viễn thông, CNTT, An toàn thông tin, Công nghiệp ICT, Báo chí
                                PTTH-Xuất
                                bản.
                            </p>
                            <p class="main__news-detail-content">
                                Tại Hội nghị, Quyền Bộ trưởng đã phân tích: Bộ phải xây dựng khung pháp lý cho từng
                                lĩnh vực do Chính phủ giao hoặc nằm trong kế hoạch của Bộ. Các cơ quan, đơn vị của
                                Bộ cần thường xuyên nắm bắt xem các đối tượng quản lý và người dân gặp khó khăn gì
                                và phải giải quyết những khó khăn, vướng mắc này ra sao.
                                <br>
                                Các văn bản pháp luật chính là công cụ để thúc đẩy các lĩnh vực quản lý nhà nước của
                                Bộ phát triển lành mạnh, Quyền Bộ trưởng nhấn mạnh.
                            </p>
                            <div class="main__news-detail-img">
                                <img src="<?php echo $img[0]['imgurl']; ?>" alt="Ảnh minh hoạ">
                                <span class="img-caption justify-content-between">Ảnh minh họa. (Nguồn ĐSVN)</span>
                            </div>
                            <p class="main__news-detail-content">
                                Về mảng KHCN, tiêu chuẩn, công nghiệp CNTT, hiện Bộ Kế hoạch Đầu tư được Chính phủ
                                giao xây dựng Chiến lược quốc gia 4.0. Quyền Bộ trưởng giao Vụ KHCN là đầu mối về
                                4.0
                                và khẳng định Bộ TT&TT cần xây dựng phiên bản riêng về chiến lược 4.0 cho đất nước.
                                Vụ KHCN cần tham khảo kinh nghiệm quốc tế về 4.0 và tham khảo ý kiến của các Sở
                                TT&TT.
                            </p>
                            <p class="main__news-author"><?php echo $post[0]['author']; ?></p>
                            <br>
                        </div>
                        <div class="main__news-social social-bottom d-flex align-item-center">
                            <div class="main__news-social-button2 btn-like">
                                <a href="#" title="Thích">
                                    <span class="button-title">
                                        <span class="m-right">
                                            <i class="sprite sprite-like"></i>
                                        </span>
                                        Thích
                                    </span>
                                </a>
                            </div>
                            <div class="main__news-social-button2 btn-share">
                                <a href="#" title="Chia sẻ">
                                    <span class="button-title">
                                        <span class="m-right">
                                            <i class="sprite sprite-Ellipse5 img-circle"></i>
                                            <i class="sprite sprite-facebook img-facebook"></i>
                                        </span>
                                        Chia sẻ
                                    </span>
                                </a>
                            </div>
                            <div class="social-icon">
                                <div class="social-img d-flex">
                                    <a href="#" title="Twitter" class="social-icon-img">
                                        <i class="sprite sprite-ellipse ellipse"></i>
                                        <i class="sprite sprite-twitter ellipse-twitter"></i>
                                    </a>
                                    <a href="#" title="Zingme" class="social-icon-img">
                                        <i class="sprite sprite-ellipse ellipse"></i>
                                        <i class="sprite sprite-zingme ellipse-zingme"></i>
                                    </a>
                                    <a href="#" title="Gmail" class="social-icon-img">
                                        <i class="sprite sprite-ellipse ellipse"></i>
                                        <i class="sprite sprite-gmail ellipse-gmail"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="main__keyword">
                            <div class="d-flex main__keyword-list">
                                <strong>Từ khoá:</strong>
                                <a href="#" title="gây tiếng ồn vượt ngưỡng">&nbsp;gây tiếng ồn vượt ngưỡng, &nbsp;</a>
                                <a href="#" title="xả khói đen">xả khói đen, &nbsp;</a>
                                <a href="#" title="di dời khỏi nội đô">di rời khỏi nội đô, &nbsp;</a>
                                <a href="#" title="mùi hoá chất phân tán">mùi hoá chất phân tán</a>
                            </div>
                        </div>
                        <ul class="main__dots-list">
                            <li class="main__dots-list-item"></li>
                            <li class="main__dots-list-item"></li>
                            <li class="main__dots-list-item"></li>
                            <li class="main__dots-list-item"></li>
                            <li class="main__dots-list-item"></li>
                        </ul>
                        <div class="main__category-title-wrap d-flex">
                            <h3>
                                <span class="main__category-title-name text-uppercase"">Tin cùng chuyên mục</span>
                            </h3>
                        </div>
                        <!-- Marketing News -->
                        <div class=" main__col-3 d-flex justify-content-between flex-wrap">
                                    <?php
                                    for ($i = 0; $i <= 5; $i++) {
                                        $posts = find_post_by_category('tiepthi');
                                        $img = get_img_by_postid($posts[$i]['id']);
                                    ?>
                                        <div class="main__col-item">
                                            <a href="#" class="main__col-item-img" title="Quy hoạch băng tần cho hệ thống IMT... chưa phù hợp">
                                                <img src="<?php echo  $img[0]['imgurl']; ?>" alt="Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp">
                                            </a>
                                            <h3>
                                                <a href="#" class="main__col-item-title" title="Quy hoạch băng tần cho hệ thống IMT... chưa phù hợp">
                                                    <i class="<?php if ($img[0]['imgsprites'] != '') echo $img[0]['imgsprites'] . ' ' . 'm-right'; ?>"></i>
                                                    <?php echo $posts[$i]['title']; ?>
                                                </a>
                                            </h3>
                                        </div>
                                    <?php } ?>
                        </div>
                        <div class="main__category-title-wrap d-flex">
                            <h3>
                                <span class="main__category-title-name text-uppercase"">Tin nổi bật</span>
                            </h3>
                        </div>
                        <div class=" main__aside-leftcorner d-flex">
                                    <?php
                                    $i = 1;
                                    $post = get_post_by_div('highlight', $i);
                                    $img = get_img_by_postid($post[0]['id']);
                                    ?>
                                    <div class="main__highlight-news">
                                        <a href="#" class="main__hl-news-img">
                                            <img src="<?php echo $img[0]['imgurl']; ?>" alt='<?php echo $post[0]['title']; ?>'>
                                        </a>
                                        <h2 class="main__hl-h2"><a href="#" class="main__highlight-news-title" title='<?php echo $post[0]['title']; ?>'>
                                                <?php echo $post[0]['title']; ?>
                                            </a></h2>
                                        <a href="#" class="main__news-content-des" title='<?php echo $post[0]['brief']; ?>'><?php echo $post[0]['brief']; ?></a>
                                    </div>
                                    <div class="main__news-left-rightcorner">
                                        <?php
                                        $j = 52;
                                        $postm = get_post($j);
                                        $imgm = get_img_by_postid($postm[0]['id']);
                                        ?>
                                        <div class="main__news-rightcorner">
                                            <a href="#" class="main__news-rightcorner-1" title='<?php echo $postm[0]['title']; ?>'>
                                                <img src="<?php echo $imgm[0]['imgurl']; ?>" alt='<?php echo $postm[0]['title']; ?>'>
                                                <?php echo $postm[0]['title']; ?>
                                            </a>
                                        </div>
                                        <div class="main__news-rightcorner">
                                            <a href="#" class="main__news-rightcorner-2" title='<?php echo $postm[0]['title']; ?>'>
                                                <?php echo $postm[0]['title']; ?>
                                            </a>
                                        </div>
                                        <div class="main__news-rightcorner">
                                            <a href="#" class="main__news-rightcorner-2" title='<?php echo $postm[0]['title']; ?>'>
                                                <?php echo $postm[0]['title']; ?>
                                            </a>
                                        </div>
                                    </div>
                        </div>
                        <div class="main__category-title-wrap border-top d-flex">
                            <h3>
                                <span class="main__category-title-name text-uppercase"">Đọc thêm</span>
                            </h3>
                        </div>
                        <!-- Main News 1 -->
                        <div class=" main__news-listing">
                                    <?php
                                    $index2 = get_postid_from_div('mainnews1');
                                    for ($i = 0; $i <= 3; $i++) {
                                        $post = get_post($index2[$i]['id']);
                                        $cate = get_category_by_postid($index2[$i]['id']);
                                        $img = get_img_by_postid($index2[$i]['id']);
                                    ?>
                                        <div class="main__news-listing-item d-flex">
                                            <div class="main__news-item-img">
                                                <a href="#" title='<?php echo $post[0]['title']; ?>'>
                                                    <img src="<?php echo $img[0]['imgurl']; ?>" alt='<?php echo $post[0]['title']; ?>'>
                                                </a>
                                            </div>
                                            <div class="main__news-item-content">
                                                <h3>
                                                    <a href="#" class="main__news-item-title" title='<?php echo $post[0]['title']; ?>'>
                                                        <i class="<?php if ($img[0]['imgsprites'] != '') echo $img[0]['imgsprites'] . ' ' . 'm-right'; ?>"></i>
                                                        <?php echo $post[0]['title']; ?>
                                                    </a>
                                                </h3>
                                                <a href="#" class="main__news-category-list" title="<?php echo $cate[0]['title']; ?>">
                                                    <?php echo $cate[0]['title']; ?>
                                                </a>
                                                <p class="main__news-item-detail"><?php echo $post[0]['brief']; ?></p>
                                            </div>
                                        </div>
                                    <?php } ?>
                        </div>
                        <!-- Main News 2 -->
                        <div class="main__news-listing">
                            <?php
                            $index2 = get_postid_from_div('mainnews2');
                            for ($i = 0; $i <= 3; $i++) {
                                $post = get_post($index2[$i]['id']);
                                $cate = get_category_by_postid($index2[$i]['id']);
                                $img = get_img_by_postid($index2[$i]['id']);
                            ?>
                                <div class="main__news-listing-item d-flex">
                                    <div class="main__news-item-img">
                                        <a href="#" title='<?php echo $post[0]['title']; ?>'>
                                            <img src="<?php echo $img[0]['imgurl']; ?>" alt='<?php echo $post[0]['title']; ?>'>
                                        </a>
                                    </div>
                                    <div class="main__news-item-content">
                                        <h3>
                                            <a href="#" class="main__news-item-title" title='<?php echo $post[0]['title']; ?>'>
                                                <i class="<?php if ($img[0]['imgsprites'] != '') echo $img[0]['imgsprites'] . ' ' . 'm-right'; ?>"></i>
                                                <?php echo $post[0]['title']; ?>
                                            </a>
                                        </h3>
                                        <a href="#" class="main__news-category-list" title="<?php echo $cate[0]['title']; ?>">
                                            <?php echo $cate[0]['title']; ?>
                                        </a>
                                        <p class="main__news-item-detail"><?php echo $post[0]['brief']; ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="main__aside-layout-right">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="main__navbar-menu d-flex text-uppercase">
                <ul class="header__navbar-ul d-flex">
                    <li>
                        <a href="index.html" class="main__navlink--active" title="Trang chủ">
                            <i class="sprite sprite-home vertical-align-top m-right"></i>
                            Trang chủ
                        </a>
                    </li>
                    <li><a href="#" title="Sự kiện">Sự kiện</a></li>
                    <li><a href="business.html" title="Doanh nghiệp">Doanh nghiệp</a></li>
                    <li><a href="#" title="Tiếp thị">Tiếp thị</a></li>
                    <li><a href="#" title="Kinh tế">Kinh tế</a></li>
                    <li><a href="#" title="Xã hội">Xã hội</a></li>
                    <li><a href="#" title="Pháp luật">Pháp luật</a></li>
                    <li><a href="#" title="Quốc tế">Quốc tế</a></li>
                    <li><a href="#" title="Video">Video</a></li>
                </ul>
                <div class="header__navbar-search">
                    <a href="#" title="Search"><i class="sprite sprite-search vertical-align-middle"></i></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="footer__page"></div>
        <div class="footer__main-flex">
            <div class="container d-flex">
                <div class="footer__logo footer__col-content">
                    <a href="../view/businessDetail.html" title="LOGO HERE">
                        <i class="sprite sprite-footer_logo"></i>
                    </a>
                </div>
                <div class="footer__col-content">
                    <h3 class="footer__contact">
                        Logo Here Newspaper
                    </h3>
                    <p class="footer__contact-info">
                        <b>Địa chỉ: </b>85 Vũ Trọng Phụng, Thanh Xuân, Hà Nội
                    </p>
                    <p class="footer__contact-info">
                        <b>Hotline: </b>0912 345 678
                    </p>
                    <p class="footer__contact-info">
                        <b>Email: </b>abc@gmail.com
                    </p>
                </div>
                <div class="footer__col-content">
                    <p class="footer__contact-info">
                        <b>Tổng biên tập: </b>Nguyễn Văn A
                    </p>
                    <p class="footer__contact-info">
                        <b>Phó Tổng biên tập: </b>Trần Thị B
                    </p>
                    <p class="footer__contact-info">
                        Chỉ được phát hành lại thông tin từ website này khi có sự đồng ý bằng văn bản của cơ quan
                        chủ
                        quản.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>