<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <?php include 'include/head-meta.php'; ?>
    <title>就是要玩</title>

    <meta property="og:title" content="就是要玩" />
    <meta property="og:url" content="" />
    <meta property="og:description" name="description" content="">
    <meta property="og:image" content="assets/image/logo.webp" />

    <link rel="stylesheet" href="assets/css/index.css?v=20231025.1">
</head>

<body>
    <?php include "include/nav.php"; ?>
    <div id="Wapper">
        <section class="p1 mpsrel">
            <div class="swiper banner">
                <div class="swiper-wrapper">
                    <?php
                    $banner_demo = array(
                        array('src' => 'upload/2023_08_24_1608301.webp', 'title' => '分享同樂'),
                        array('src' => 'upload/2023_08_24_1607031.webp', 'title' => 'OLED主機'),
                        array('src' => 'upload/2023_03_31_1113041.webp', 'title' => ''),
                        array('src' => 'upload/2023_08_24_1608301.webp', 'title' => '分享同樂'),
                        array('src' => 'upload/2023_08_24_1607031.webp', 'title' => 'OLED主機'),
                        array('src' => 'upload/2023_03_31_1113041.webp', 'title' => ''),
                        array('src' => 'upload/2023_08_24_1608301.webp', 'title' => '分享同樂'),
                        array('src' => 'upload/2023_08_24_1607031.webp', 'title' => 'OLED主機'),
                        array('src' => 'upload/2023_03_31_1113041.webp', 'title' => '')
                    );
                    foreach ($banner_demo as $k => $v) {
                    ?>
                        <div class="swiper-slide">
                            <a href=""><img src="<?= $v['src'] ?>" title="<?= $v['title'] ?>"></a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="arrow-left w80-yel"><a href="javascript:;"><img src="assets/image/svg/arrow-left.svg" class="svg"></a></div>
            <div class="arrow-right w80-yel"><a href="javascript:;"><img src="assets/image/svg/arrow-right.svg" class="svg"></a></div>
            <div class="swiper-pagination"></div>
            <div class="scrdown">
                <div>SCROLL</div> <img src="assets/image/svg/scrdown.svg">
            </div>
            <a href="https://www.facebook.com/gamemaster99999" class="fb-btn btn"><span><img src="assets/image/svg/facebook.svg"></span></a>
        </section>
        <!-- 廣告banner START -->
        <section class="p2">
            <div class="row mpsrel">
                <div class="swiper hot">
                    <div class="swiper-wrapper">
                        <?php
                        $ad1_data_demo = array(
                            array('url' => '', 'src' => 'upload/2023_08_09_1341101.webp', 'title' => ''),
                            array('url' => '', 'src' => 'upload/2023_08_09_1337291.webp', 'title' => ''),
                            array('url' => '', 'src' => 'upload/2023_08_09_1341101.webp', 'title' => ''),
                            array('url' => '', 'src' => 'upload/2023_08_09_1337291.webp', 'title' => ''),
                        );
                        foreach ($ad1_data_demo as $k => $v) {
                        ?>
                            <div class="swiper-slide">
                                <a href="<?= $v["url"]; ?>"><img src="<?= $v["src"]; ?>" title="<?= $v["title"]; ?>" alt="<?= $v["title"]; ?>"></a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="arrow-left w80-yel"><a href="javascript:;"><img src="assets/image/svg/arrow-left.svg" class="svg"></a></div>
                <div class="arrow-right w80-yel"><a href="javascript:;"><img src="assets/image/svg/arrow-right.svg" class="svg"></a></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!-- 廣告banner END -->
        <!-- 熱銷商品 START -->
        <section class="p3 mpsrel">
            <div class="page-title text-center">
                <div class="mtitle">HOT</div>
                <span>熱銷商品</span>
            </div>
            <div class="row list">
                <?php
                $hot_data_demo = array(
                    array(
                        'src' => 'upload/2023_06_26_1109481.webp',
                        'title' => 'NS Switch 主機 台灣公司貨 電量加強版 紅藍 灰黑 動物森友會 OLED 白色 紅藍 主機 現貨',
                        'price' => '$10,080 - $10,080'
                    ),
                    array(
                        'src' => 'upload/2023_06_26_1213421.webp',
                        'title' => '現貨 SONY PS5 主機 光碟版/數位版 台灣公司貨 Playstation 5 主機 P5主機 PS5',
                        'price' => '$17,180 - $17,980'
                    ),
                    array(
                        'src' => 'upload/2023_06_26_1243321.webp',
                        'title' => '現貨 NS Switch 薩爾達傳說 王國之淚 中文版 薩爾達2 續篇 曠野之息2',
                        'price' => '$3,380 - $3,380'
                    ),
                    array(
                        'src' => 'upload/2023_06_26_1250081.webp',
                        'title' => '薩爾達傳說 地獄之音[測試商品]',
                        'price' => '$0 - $8,590'
                    ),
                    array(
                        'src' => 'upload/2023_09_14_1528181.webp',
                        'title' => '紙片馬力歐',
                        'price' => '$5,555 - $99,999'
                    ),
                    array(
                        'src' => 'upload/2023_06_26_1109481.webp',
                        'title' => 'NS Switch 主機 台灣公司貨 電量加強版 紅藍 灰黑 動物森友會 OLED 白色 紅藍 主機 現貨',
                        'price' => '$10,080 - $10,080'
                    ),
                    array(
                        'src' => 'upload/2023_06_26_1213421.webp',
                        'title' => '現貨 SONY PS5 主機 光碟版/數位版 台灣公司貨 Playstation 5 主機 P5主機 PS5',
                        'price' => '$17,180 - $17,980'
                    ),
                    array(
                        'src' => 'upload/2023_06_26_1243321.webp',
                        'title' => '現貨 NS Switch 薩爾達傳說 王國之淚 中文版 薩爾達2 續篇 曠野之息2',
                        'price' => '$3,380 - $3,380'
                    ),
                    array(
                        'src' => 'upload/2023_06_26_1250081.webp',
                        'title' => '薩爾達傳說 地獄之音[測試商品]',
                        'price' => '$0 - $8,590'
                    ),
                    array(
                        'src' => 'upload/2023_09_14_1528181.webp',
                        'title' => '紙片馬力歐',
                        'price' => '$5,555 - $99,999'
                    ),
                );
                foreach ($hot_data_demo as $k => $v) {
                ?>
                    <a href="product_info.php">
                        <div class="bgimg">
                            <img src="<?= $v["src"]; ?>" title="<?= $v["title"]; ?>" alt="<?= $v["title"]; ?>">
                            <div class="more">MORE DETAIL</div>
                        </div>
                        <h4><?= $v["title"]; ?></h4>
                        <div class="price"><?= $v['price'] ?></div>
                    </a>
                <?php
                }
                ?>
            </div>
            <div class="text-center">
                <a href="product_list.php" class="btn more">
                    <span>MORE <svg xmlns="http://www.w3.org/2000/svg" width="8" height="16" viewBox="0 0 8 16" class="svg replaced-svg">
                            <path id="path22267" d="M-166.158,119.276v16h1.334v-1.455h1.333v-1.455h1.334v-1.454h1.333v-1.452h1.334V128h1.331v-1.455h-1.331v-1.455h-1.334v-1.455h-1.333v-1.455h-1.334v-1.455h-1.333v-1.453Z" transform="translate(166.158 -119.276)"></path>
                        </svg></span>
                </a>
            </div>
        </section>
        <!-- 熱銷商品 END -->
        <!-- 廣告區2 START -->
        <div class="p4">
            <div class="row">
                <a href="https://justplay.gaze.tw/product_list.php?id=18"><img src="upload/2023_08_09_1337041.webp" title="" alt=""></a>
                <a href=""><img src="upload/2023_08_10_1535041.webp" title="" alt=""></a>
            </div>
        </div>
        <!-- 廣告區2 END -->
        <!-- 推薦商品 START -->
        <div class="p5 mpsrel">
            <div class="row col">
                <div class="page-title">
                    <div class="mtitle">RECOMMEND</div>
                    <span>推薦商品</span>
                </div>
            </div>

            <div class="swiper recommend">
                <div class="swiper-wrapper">
                	<?php 
                    $ip_data_demo = array(
                        array(
                            'src' => 'upload/2023_06_26_1109481.webp',
                            'title' => 'NS Switch 主機 台灣公司貨 電量加強版 紅藍 灰黑 動物森友會 OLED 白色 紅藍 主機 現貨',
                            'price' => '$10,080 - $10,080'
                        ),
                        array(
                            'src' => 'upload/2023_06_26_1213421.webp',
                            'title' => '現貨 SONY PS5 主機 光碟版/數位版 台灣公司貨 Playstation 5 主機 P5主機 PS5',
                            'price' => '$17,180 - $17,980'
                        ),
                        array(
                            'src' => 'upload/2023_06_26_1243321.webp',
                            'title' => '現貨 NS Switch 薩爾達傳說 王國之淚 中文版 薩爾達2 續篇 曠野之息2',
                            'price' => '$3,380 - $3,380'
                        ),
                        array(
                            'src' => 'upload/2023_06_26_1250081.webp',
                            'title' => '薩爾達傳說 地獄之音[測試商品]',
                            'price' => '$0 - $8,590'
                        ),
                        array(
                            'src' => 'upload/2023_09_14_1528181.webp',
                            'title' => '紙片馬力歐',
                            'price' => '$5,555 - $99,999'
                        ),
                        array(
                            'src' => 'upload/2023_06_26_1109481.webp',
                            'title' => 'NS Switch 主機 台灣公司貨 電量加強版 紅藍 灰黑 動物森友會 OLED 白色 紅藍 主機 現貨',
                            'price' => '$10,080 - $10,080'
                        ),
                        array(
                            'src' => 'upload/2023_06_26_1213421.webp',
                            'title' => '現貨 SONY PS5 主機 光碟版/數位版 台灣公司貨 Playstation 5 主機 P5主機 PS5',
                            'price' => '$17,180 - $17,980'
                        ),
                        array(
                            'src' => 'upload/2023_06_26_1243321.webp',
                            'title' => '現貨 NS Switch 薩爾達傳說 王國之淚 中文版 薩爾達2 續篇 曠野之息2',
                            'price' => '$3,380 - $3,380'
                        ),
                        array(
                            'src' => 'upload/2023_06_26_1250081.webp',
                            'title' => '薩爾達傳說 地獄之音[測試商品]',
                            'price' => '$0 - $8,590'
                        ),
                        array(
                            'src' => 'upload/2023_09_14_1528181.webp',
                            'title' => '紙片馬力歐',
                            'price' => '$5,555 - $99,999'
                        ), 
                    );
                	foreach ($ip_data_demo as $k => $v){
                	?>
                    <div class="swiper-slide list">                              
                        <a href="product_info.php" class="pdt-card">
                            <div class="bgimg">
                                <img src="<?= $v["src"];?>" title="<?= $v["title"];?>" alt="<?= $v["title"];?>">
                                <div class="more">MORE DETAIL</div>
                            </div>
                            <h4><?= $v["title"];?></h4>
                            <div class="price"><?= $v['price'] ?></div>
                        </a>
                    </div>  
                    <?php 
                	}
                    ?>
                </div>
            </div>
            <div class="arrow-left w56-wh"><a href="javascript:;"><img src="assets/image/svg/arrow-left.svg" class="svg"></a></div>
            <div class="arrow-right w56-wh"><a href="javascript:;"><img src="assets/image/svg/arrow-right.svg" class="svg"></a></div>
            <a href="product_list.php" class="btn more"><span>MORE <img src="assets/image/svg/arrow-right.svg" class="svg"></span></a>
        </div>
        <!-- 推薦商品 END -->
    </div>
    <?php include "include/footer.php"; ?>
    <?php include 'include/jsfoot.php'; ?>
    <script src="assets/js/index.js"></script>
</body>

</html>