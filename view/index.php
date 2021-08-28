<?php
    require_once("../include/sql.php");
    // $event = find_post_by_category('sukien');
    // $bsn = find_post_by_category('doanhnghiep');
    // $mkt = find_post_by_category('tiepthi');
    // $eco = find_post_by_category('kinhte');
    // $social = find_post_by_category('xahoi');
    // $law = find_post_by_category('phapluat');
    // $global = find_post_by_category('quocte');
    // $category = get_category_by_postid();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="báo điện tử, tin tức, luật pháp,">
    <meta name="description" content="">
    <link rel="stylesheet" href="../css/index.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="../js/index.js"></script>
    <title>Trang Chủ</title>
</head>

<body>
    <!-- header -->
    <div class="header">
        <div class="header__top">
            <div class="container">
                <div class="header__top-flex d-flex justify-content-between">
                    <h1 class="header__logo">
                        <a href="index.html" title="LOGO HERE"><i class="sprite sprite-header_logo"></i></a>
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
                                <a href="index.html" class="main__navlink--active" title="Trang chủ">
                                    <i class="sprite sprite-home vertical-align-top m-right-home"></i>
                                    Trang chủ
                                </a>
                            </li>
                            <li><a href="#" title="Sự kiện">Sự kiện</a></li>
                            <li><a href="business.php" title="Doanh nghiệp">Doanh nghiệp</a></li>
                            <li><a href="#" title="Tiếp thị">Tiếp thị</a></li>
                            <li><a href="#" title="Kinh tế">Kinh tế</a></li>
                            <li><a href="#" title="Xã hội">Xã hội</a></li>
                            <li><a href="#" title="Pháp luật">Pháp luật</a></li>
                            <li><a href="#" title="Quốc tế">Quốc tế</a></li>
                            <li><a href="#" title="Video">Video</a></li>
                        </ul>
                        <div class="header__navbar-search">
                            <a href="#" title="Tìm kiếm"><i class="sprite sprite-search vertical-align-middle"></i></a>
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
                            <li><a href="#" class="header__option-a d-flex align-item-center text-uppercase"
                                    title="Video">
                                    <i class="sprite sprite-videoRed header__option-img vertical-align-top"></i>
                                    <span>Video</span>
                                </a></li>
                            <li><a href="#" class="header__option-a d-flex align-item-center text-uppercase"
                                    title="Ảnh">
                                    <i class="sprite sprite-imageRed header__option-img vertical-align-top"></i>
                                    <span>Ảnh</span>
                                </a></li>
                            <li><a href="#" class="header__option-a d-flex align-item-center text-uppercase"
                                    title="Infographic">
                                    <i class="sprite sprite-bsnRed header__option-img vertical-align-top"></i>
                                    <span>Infographic</span>
                                </a></li>
                            <li><a href="#" class="header__option-a d-flex align-item-center text-uppercase"
                                    title="Emagazine">
                                    <i class="sprite sprite-newsRed header__option-img vertical-align-top"></i>
                                    <span>Emagazine</span>
                                </a></li>
                            <li><a href="#" class="header__option-a d-flex align-item-center text-uppercase"
                                    title="Tạp chí in">
                                    <i class="sprite sprite-newsppRed header__option-img vertical-align-top"></i>
                                    <span>Tạp chí in</span>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- main -->
    <div class="main">
        <div class="container">
            <div class="main__top-news d-flex">

                <!-- Highlight Left -->
                <div class="main__hot-category-news">
                    <?php 
                        for($i = 1; $i <=4; $i++){ 
                            $category = get_category_by_postid($i);
                            $post = get_post_by_div('highlightleft', $i);
                        ?>
                    <div class="main__hc-news-item">
                        <a href="business.html" class="main__hc-news-category main__news-category text-uppercase"
                            title="<?php echo $category[0]['title']; ?>">
                            <?php echo $category[0]['title']; ?>
                        </a>
                        <h3><a href="#" class="main__hc-news-title"
                                title='<?php echo $post[0]['title']; ?>'>
                                <?php echo $post[0]['title']; ?>
                            </a></h3>
                    </div>
                    <?php } ?>
                </div>

                <!-- Highlight Main -->
                <div class="main__highlight-news main__highlight-news-pcenter">
                    <?php 
                        $i = 1;
                        $post = get_post_by_div('highlight', $i);
                        $cate = get_category_by_postid($post[0]['id']);
                        $img = get_img_by_postid($post[0]['id']);
                    ?>
                    <a href="#" class="main__hl-news-img" title='<?php echo $post['title'] ?>'>
                        <img src="<?php echo $img[0]['imgurl']; ?>"
                            alt='<?php echo $post[0]['title']; ?>'>
                    </a>
                    <a href="#" class="main__news-category" title="<?php echo $cate[0]['title']; ?>">
                        <?php echo $cate[0]['title']; ?>
                    </a>
                    <h2 class="main__hl-h2"><a href="#" class="main__highlight-news-title"
                            title='<?php echo $post[0]['title']; ?>'>
                            <?php echo $post[0]['title']; ?>
                        </a></h2>
                    <p class="main__news-content-des"><?php echo $post[0]['brief']; ?></p>
                </div>

                <!-- Highlight Right -->
                <div class="main__hot-news main__hot-news-aside">
                    <?php 
                        $index1 = get_postid_from_div('highlightright');
                        for ($i=0; $i <= 1; $i++) {                             
                            $post = get_post($index1[$i]['id']);
                            $cate = get_category_by_postid($index1[$i]['id']);
                            $img = get_img_by_postid($index1[$i]['id']);
                    ?>
                    <div class="main__hot-news-item">
                        <div class="main__hna-title-div">
                            <a href="#" class="main__hna-title"
                                title='<?php echo $post[0]['title']; ?>'>
                                <?php echo $post[0]['title']; ?>
                            </a>
                        </div>
                        <a href="#"
                            title="Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện &quot;bình thường mới&quot;">
                            <div class="main__news-flex d-flex align-item-center">
                                <img src="<?php echo $img[0]['imgurl']; ?>" class="d-block" alt='<?php echo $post[0]['title']; ?>'>
                                <div class="main__hna-content">
                                    <a href="#" class="main__news-category" title="<?php echo $cate[0]['title']; ?>">
                                        <?php echo $cate[0]['title']; ?>
                                    </a>
                                    <p class="main__news-content-des">
                                        <?php echo $post[0]['brief']; ?>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <ul class="main__dots-list">
                <li class="main__dots-list-item"></li>
                <li class="main__dots-list-item"></li>
                <li class="main__dots-list-item"></li>
                <li class="main__dots-list-item"></li>
                <li class="main__dots-list-item"></li>
            </ul>
            <div class="main__marketing-news">
                <div class="main__aside-layout d-flex">
                    <div class="main__aside-layout-left">
                        <div class="main__category-title-wrap d-flex">
                            <h3>
                                <a href="#" class="main__category-title-name text-uppercase" title="Tiếp thị">
                                    Tiếp thị
                                </a>
                            </h3>
                            <ul
                                class="main__category-title-marketing d-flex justify-content-between align-item-center text-uppercase">
                                <li><a href="#" title="Thương mại">Thương mại</a></li>
                                <li><a href="#" title="Văn hoá">Văn hoá tiếp thị</a></li>
                                <li><a href="#" title="Hội nhập">Hội nhập</a></li>
                                <li><a href="#" title="Marketing 4.0">Marketing 4.0</a></li>
                            </ul>
                        </div>

                        <!-- Marketing News -->
                        <div class="main__col-3 d-flex justify-content-between flex-wrap">
                            <?php 
                                for ($i = 0; $i <= 5 ; $i++) { 
                                    $posts = find_post_by_category('tiepthi');
                                    $img = get_img_by_postid($posts[$i]['id']);
                            ?>
                            <div class="main__col-item">
                                <a href="#" class="main__col-item-img"
                                    title="Quy hoạch băng tần cho hệ thống IMT... chưa phù hợp">
                                    <img src="<?php echo  $img[0]['imgurl']; ?>"
                                        alt="Quy hoạch băng tần cho hệ thống di động IMT… chưa phù hợp">
                                </a>
                                <h3>
                                    <a href="#" class="main__col-item-title"
                                        title="Quy hoạch băng tần cho hệ thống IMT... chưa phù hợp">
                                        <i class="<?php if($img[0]['imgsprites']!='') echo $img[0]['imgsprites'].' '.'m-right';?>"></i>
                                        <?php echo $posts[$i]['title']; ?>
                                    </a>
                                </h3>
                            </div>
                            <?php } ?>
                        </div>
                        <!-- Main News 1 -->
                        <div class="main__news-listing">
                            <?php
                                $index2 = get_postid_from_div('mainnews1');
                                for ($i=0; $i <=3 ; $i++) {                             
                                    $post = get_post($index2[$i]['id']);
                                    $cate = get_category_by_postid($index2[$i]['id']);
                                    $img = get_img_by_postid($index2[$i]['id']);
                            ?>
                            <div class="main__news-listing-item d-flex">
                                <div class="main__news-item-img">
                                    <a href="#"
                                        title='<?php echo $post[0]['title']; ?>'>
                                        <img src="<?php echo $img[0]['imgurl']; ?>" alt='<?php echo $post[0]['title']; ?>'>
                                    </a>
                                </div>
                                <div class="main__news-item-content">
                                    <h3>
                                        <a href="#" class="main__news-item-title"
                                            title='<?php echo $post[0]['title']; ?>'>
                                            <i class="<?php if($img[0]['imgsprites']!='') echo $img[0]['imgsprites'].' '.'m-right'; ?>"></i>
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
                        <div class="main__emagazine d-flex">
                            <!-- Emagazine Left -->
                            <div class="main__emagazine-left">
                                <h3>
                                    <a href="#" class="main__category-title-name text-uppercase" title="Emagazine">Emagazine</a>
                                </h3>
                                <div class="main__emagazine-listing d-flex justify-content-between flex-wrap">
                                    <?php 
                                        $index3 = get_postid_from_div('emagazine');
                                        for ($i=0; $i <=3 ; $i++) {                             
                                            $post = get_post($index3[$i]['id']);                                
                                            $cate = get_category_by_postid($index3[$i]['id']);
                                            $img = get_img_by_postid($index3[$i]['id']);
                                    
                                    ?>
                                    <div class="main__emagazine-listing-item">
                                        <a href="#" class="main__el-item-img"
                                            title='<?php echo $post[0]['title'];?>'>
                                            <img src="<?php echo $img[0]['imgurl'];?>" alt='<?php echo $post[0]['title'];?>'>
                                            <span class="main__el-img-emagazine">
                                                <i class="sprite sprite-eMagazine"></i>
                                            </span>
                                        </a>
                                        <h4>
                                            <a href="#" class="main__el-item-title"
                                                title='<?php echo $post[0]['title'];?>'>
                                                <?php echo $post[0]['title'];?>
                                            </a>
                                        </h4>
                                    </div>                                    
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- Most Reading -->
                            <div class="main__emagazine-right">
                                <h3>
                                    <a href="#" class="main__category-title-name text-uppercase" title="Tin đọc nhiều">Tin đọc nhiều</a>
                                </h3>
                                <div class="main__most-reading-list">
                                    <?php 
                                        $index4 = get_postid_from_div('mostreading');
                                        for ($i=0; $i <=4 ; $i++) {                             
                                            $post = get_post($index4[$i]['id']);                                
                                            $cate = get_category_by_postid($index4[$i]['id']);
                                            $img = get_img_by_postid($index4[$i]['id']);
                                    
                                    ?>
                                    <div class="main__mr-news-item d-flex">
                                        <span class="main__mr-item-no"><?php echo $i+1;?>.</span>
                                        <a href="#" class="main__mr-item-title"
                                            title='<?php echo $post[0]['title']; ?>'>
                                            <?php echo $post[0]['title']; ?>
                                        </a>
                                        <a href="#" class="main__mr-item-img"
                                            title="Quy hoạch băng tần cho hệ thống IMT... chưa phù hợp">
                                            <img src="<?php echo $img[0]['imgurl']; ?>" alt='<?php echo $post[0]['title']; ?>'>
                                        </a>
                                    </div>    
                                    <?php } ?>                                
                                </div>
                            </div>
                        </div>
                        <!-- Main News 2 -->
                        <div class="main__news-listing">
                            <?php
                                $index5 = get_postid_from_div('mainnews2');
                                for ($i=0; $i <=3 ; $i++) {                             
                                    $post = get_post($index5[$i]['id']);
                                    $cate = get_category_by_postid($index5[$i]['id']);
                                    $img = get_img_by_postid($index5[$i]['id']);
                            ?>
                            <div class="main__news-listing-item d-flex">
                                <div class="main__news-item-img">
                                    <a href="#"
                                        title='<?php echo $post[0]['title']; ?>'>
                                        <img src="<?php echo $img[0]['imgurl']; ?>" alt='<?php echo $post[0]['title']; ?>'>
                                    </a>
                                </div>
                                <div class="main__news-item-content">
                                    <h3>
                                        <a href="#" class="main__news-item-title"
                                            title='<?php echo $post[0]['title']; ?>'>
                                            <i class="<?php if($img[0]['imgsprites']!='') echo $img[0]['imgsprites'].' '.'m-right'; ?>"></i>
                                            <?php echo $post[0]['title']; ?>
                                        </a>
                                    </h3>
                                    <a href="#" class="main__news-category-list" title='<?php echo $cate[0]['title']; ?>'>
                                        <?php echo $cate[0]['title']; ?>
                                    </a>
                                    <p class="main__news-item-detail"><?php echo $post[0]['brief']; ?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="main__viewmore-wrap">
                            <a href="#" class="main__viewmore-btn d-flex align-item-center" title="Xem thêm">Xem thêm
                                &nbsp; <i class="sprite sprite-arrow_down"></i></a>
                        </div>
                    </div>
                    <div class="main__aside-layout-right">
                        <div class="main__aside-stonks">
                            <div class="main__stonks d-flex justify-content-between">
                                <a href="#" title="Ngoại hối" class="stonks__col color-darkgrey active">Ngoại hối</a>
                                <a href="#" title="Trái phiếu" class="stonks__col color-darkgrey">Trái phiếu</a>
                                <a href="#" title="Các chỉ số" class="stonks__col color-darkgrey">Các chỉ số</a>
                            </div>
                            <ul class="main__stonks-ul justify-content-between">
                                <li class="main__stonks-li d-flex justify-content-between">
                                    <div class="stonks__col-1">
                                        <a href="#" class="main__col1-title" title="EURU...">EURU...</a>
                                        <span class="main__col1-currency">Euro / Đô ...</span>
                                    </div>
                                    <div class="stonks__col-2">
                                        <span>1.12633</span>
                                    </div>
                                    <div class="stonks__col-3">
                                        <span class="color-red">-0.27%</span>
                                        <span class="color-red">-0.00306</span>
                                    </div>
                                </li>
                                <li class="main__stonks-li d-flex justify-content-between">
                                    <div class="stonks__col-1">
                                        <a href="#" class="main__col1-title" title="EURU...">GBPU...</a>
                                        <span class="main__col1-currency">Bảng Anh ...</span>
                                    </div>
                                    <div class="stonks__col-2">
                                        <span>1.26722</span>
                                    </div>
                                    <div class="stonks__col-3">
                                        <span class="color-red">-0.39%</span>
                                        <span class="color-red">-0.00500</span>
                                    </div>
                                </li>
                                <li class="main__stonks-li d-flex justify-content-between">
                                    <div class="stonks__col-1">
                                        <a href="#" class="main__col1-title" title="EURU...">USDJPY...</a>
                                        <span class="main__col1-currency">Đô La Mỹ ...</span>
                                    </div>
                                    <div class="stonks__col-2">
                                        <span>107.843</span>
                                    </div>
                                    <div class="stonks__col-3">
                                        <span class="color-red">-0.54%</span>
                                        <span class="color-red">-0.583</span>
                                    </div>
                                </li>
                                <li class="main__stonks-li d-flex justify-content-between">
                                    <div class="stonks__col-1">
                                        <a href="#" class="main__col1-title" title="EURU...">USDCHF...</a>
                                        <span class="main__col1-currency">Đô La Mỹ ...</span>
                                    </div>
                                    <div class="stonks__col-2">
                                        <span class="color-red">0.95537</span>
                                    </div>
                                    <div class="stonks__col-3">
                                        <span class="color-red">-0.23%</span>
                                        <span class="color-red">-0.00220</span>
                                    </div>
                                </li>
                                <li class="main__stonks-li d-flex justify-content-between">
                                    <div class="stonks__col-1">
                                        <a href="#" class="main__col1-title" title="EURU...">AUDU...</a>
                                        <span class="main__col1-currency">Đô La Úc/...</span>
                                    </div>
                                    <div class="stonks__col-2">
                                        <span>0.629235</span>
                                    </div>
                                    <div class="stonks__col-3">
                                        <span class="color-red">-1.38%</span>
                                        <span class="color-red">-0.0097</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="main__aside-right-empty">
                        </div>
                    </div>
                </div>
            </div>
            <div class="main__video">
                <div class="container">
                    <div class="main__video-title d-flex align-item-center">
                        <a href="#" title="Video">
                            <i class="sprite sprite-video vertical-align-bottom"></i>
                            <span class="main__video-title-icon">Video</span>
                        </a>
                    </div>
                    <div class="main__video-flex d-flex">
                        <?php
                                $index6 = get_postid_from_div('video');
                                $i = 0;
                                $post = get_post($index6[$i]['id']);
                                $img = get_imgvideo_by_postid($index6[$i]['id']);
                            ?>
                        <div class="main__highlight-video">
                            <a href="#" title='<?php echo $post[0]['title'];?>'>
                                <img src="<?php echo $img[0]['videourl'];?>" class="main__video-img"
                                    alt='<?php echo $post[0]['title'];?>'>
                                <span class="main__video-btn"><i class="sprite sprite-playBig"></i></span>
                                <span class="main__video-time">03:20</span>
                            </a>
                            <a href="#" class="main__video-title"
                                title='<?php echo $post[0]['title'];?>'>
                                <?php echo $post[0]['title'];?></a>
                        </div>
                        <div class="main__video-grid d-flex justify-content-between flex-wrap">
                            <?php 
                                for ($i=1; $i <=4 ; $i++) { 
                                    $posts = get_post($index6[$i]['id']);
                                    $imgs = get_imgvideo_by_postid($index6[$i]['id']);                            
                            ?>        
                            <div class="main__video-item">
                                <a href="#" title='<?php echo $posts[0]['title'];?>'>
                                    <img src="<?php echo $imgs[0]['videourl'];?>" class="main__video-img"
                                        alt='<?php echo $posts[0]['title'];?>'>
                                    <span class="main__video-btn"><i class="sprite sprite-playSmall"></i></span>
                                    <span class="main__video-time">03:20</span>
                                </a>
                                <a href="#" class="main__video-title"
                                    title='<?php echo $posts[0]['title'];?>'>
                                    <?php echo $posts[0]['title'];?></a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main__category-list-news">
                <div class="main__aside-layout d-flex">
                    <div class="main__aside-layout-left">
                        <?php
                            for ($i=0; $i < 7; $i++) { 
                                if($i===2)
                                    $i++;
                                $cate = find_by_id('category', $i+1);    
                        ?>
                        <div class="main__category-list-news-item">                            
                            <div class="main__category-title-wrap d-flex">
                                <a href="#" class="main__category-title-name text-uppercase align-item-center d-flex"
                                    title='<?php echo $cate['title'];?>'>
                                    <span class="main__title-icon"><i class="sprite sprite-checklist"></i></span>
                                    <?php echo $cate['title']; ?>
                                </a>
                                <ul
                                    class="main__category-title-nav d-flex justify-content-between align-item-center text-uppercase">
                                    <li><a href="#" title="Chính trị - Xã hội">Chính trị - xã hội</a></li>
                                    <li><a href="#" title="Cải cách hành chính">Cải cách hành chính</a></li>
                                    <li><a href="#" title="Tiêu điểm">Tiêu điểm</a></li>
                                    <li><a href="#" title="Xem thêm"><i class="sprite sprite-3dots"></i></a></li>
                                </ul>
                            </div>
                            <div class="main__cl-news-flex d-flex">
                                <div class="main__col-2 d-flex justify-content-between flex-wrap">
                                    <?php 
                                        $cateId = $cate['id'];
                                        for ($j= 0; $j < 2; $j++){ 
                                            $postleftId = get_postid_from_catenewsid($cateId);
                                            // var_dump($postleftId);
                                            $postleft = get_post($postleftId[$j]['FK_post']);
                                            $img = get_img_by_postid($postleftId[$j]['FK_post']);
                                    ?>
                                    <div class="main__col-item">
                                        <div class="main__col-img-div">
                                            <a href="#" class="main__col-item-img"
                                                title="Quy hoạch băng tần cho hệ thống IMT... chưa phù hợp">
                                                <img src="<?php echo $img[0]['imgurl'];?>" alt='<?php echo $postleft[0]['title'];?>'>
                                            </a>
                                        </div>
                                        <div class="main__col-title-div">
                                            <a href="#" class="main__col-title"
                                                title='<?php echo $postleft[0]['title'];?>'>
                                                <?php echo $postleft[0]['title'];?>
                                            </a>
                                        </div>
                                        <p class="main__col-content">
                                            <?php echo $postleft[0]['brief']?>
                                        </p>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="main__most-reading-listing">
                                    <?php
                                        for ($x = 0; $x < 4; $x++) { 
                                            $postNr = get_post($x+38);
                                    ?>
                                    <div class="main__mr-news-item d-flex">
                                        <a href="#" class="main__mr-news-item-title"
                                            title='<?php echo $postNr[0]['title']; ?>'>
                                            <?php echo $postNr[0]['title']; ?>    
                                        </a>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        </div>
                    <div class="main__al-right-bottom">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="footer">
        <div class="header__navbar">
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
                        <a href="../view/index.html" title="LOGO HERE">
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
    </div>
</body>

</html>