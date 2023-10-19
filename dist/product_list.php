<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <?php include 'include/head-meta.php'; ?>
    <title>要玩商品 | 就是要玩</title>

    <meta property="og:title" content="就是要玩" />
    <meta property="og:url" content="" />
    <meta property="og:description" name="description" content="">
    <meta property="og:image" content="assets/image/logo.webp" />

    <link rel="stylesheet" href="assets/css/product.css">
</head>

<body>
    <?php include "include/nav.php"; ?>

    <div id="Wapper" class="pd0">
        <div class="row col-lg">
            <div class="sidebar">
                <div class="page-title">
                    <h1 class="mtitle">PRODUCT</h1>
                    <span>要玩商品</span>
                </div>

                <ul class="ul-items">
                    <li>
                        <span class="">熱門商品<i></i></span>
                        <div class="second-menu" style="">
                            <a href="product_list.php" class="">測試123456789000000000000</a>
                        </div>
                    </li>
                    <li>
                        <span class="active">電玩遊戲相關<i></i></span>
                        <div class="second-menu" style="display:block;">
                            <a href="product_list.php" class="active">NS4</a>
                            <a href="product_list.php" class="">NS3</a>
                            <a href="product_list.php" class="">NS2</a>
                            <a href="product_list.php" class="">NS1</a>
                            <a href="product_list.php" class="">Switch遊戲</a>
                            <a href="product_list.php" class="">PS系列遊戲</a>
                            <a href="product_list.php" class="">XBOX系列遊戲</a>
                            <a href="product_list.php" class="">PC遊戲</a>
                        </div>
                    </li>
                    <li>
                        <span class="">電玩主機/周邊<i></i></span>
                        <div class="second-menu" style="">
                            <a href="product_list.php" class="">電玩主機周邊</a>
                            <a href="product_list.php" class="">XBOX系列主機</a>
                            <a href="product_list.php" class="">Switch系列主機</a>
                            <a href="product_list.php" class="">PS系列主機</a>
                        </div>
                    </li>
                    <li>
                        <span class="">電玩遊戲片<i></i></span>
                        <div class="second-menu" style="">
                        </div>
                    </li>
                    <li>
                        <span class="">卡牌 / amiibo公仔<i></i></span>
                        <div class="second-menu" style="">
                            <a href="product_list.php" class=""></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="content productlist">
                <!-- 圖片尺寸1248*280 -->
                <div class="banner">
                    <img src="upload/" title="" alt="">
                </div>
                <select class="select-tag1" id="mc" onchange="mc_change()">
                    <option value="10">熱門商品</option>
                    <option value="7" selected="">電玩遊戲相關</option>
                    <option value="3">電玩主機/周邊</option>
                    <option value="6">電玩遊戲片</option>
                    <option value="8">卡牌 / amiibo公仔</option>
                </select>
                <select class="select-tag2" id="sc" onchange="location.href = 'product_list.php + $(this).val();">
                    <option value="17" selected="">NS4</option>
                    <option value="16">NS3</option>
                    <option value="15">NS2</option>
                    <option value="14">NS1</option>
                    <option value="7">Switch遊戲</option>
                    <option value="8">PS系列遊戲</option>
                    <option value="9">XBOX系列遊戲</option>
                    <option value="10">PC遊戲</option>
                </select>
                <div class="btn-wrap">
                    <div class="btn-sort">
                        <a href="=17&amp;orderFor=1" class="active">價格低到高</a>
                        <a href="=17&amp;orderFor=2" class="">價格高到低</a>
                        <a href="=17&amp;orderFor=3" class="">最新上架</a>
                        <a href="=17&amp;orderFor=4" class="">熱銷排名</a>
                    </div>
                </div>
                <div class="list">
                    <a href="product_info.php">
                        <div class="bgimg">
                            <img src="upload/2023_09_14_1528181.webp" title="紙片馬力歐" alt="紙片馬力歐">
                            <div class="more">MORE DETAIL</div>
                        </div>
                        <h4>紙片馬力歐</h4>
                        <div class="price">$5,555 - $99,999</div>
                    </a>
                    <a href="product_info.php">
                        <div class="bgimg">
                            <img src="upload/2023_09_14_1530341.webp" title="" alt="">
                            <div class="more">MORE DETAIL</div>
                        </div>
                        <h4>星之卡比</h4>
                        <div class="price">$99,999 - $99,999</div>
                    </a>
                    <a href="product_info.php">
                        <div class="bgimg">
                            <img src="upload/2023_09_14_1531521.webp" title="" alt="">
                            <div class="more">MORE DETAIL</div>
                        </div>
                        <h4>皮克敏</h4>
                        <div class="price">$99,999 - $99,999</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="producthot">
            <div class="page-title text-center">
                <h4 class="mtitle">HOT</h4>
                <span>熱銷商品</span>
            </div>
            <div class="row mpsrel">
                <div class="swiper recommend">
                    <div class="swiper-wrapper">
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
                            <div class="swiper-slide list">
                                <a href="product_info.php">
                                    <div class="bgimg">
                                        <img src="<?= $v["src"]; ?>" title="<?= $v["title"]; ?>" alt="<?= $v["title"]; ?>">
                                        <div class="more">MORE DETAIL</div>
                                    </div>
                                    <h4><?= $v["title"]; ?></h4>
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
            </div>
        </div>
    </div>

    <?php include "include/footer.php"; ?>
    <?php include 'include/jsfoot.php'; ?>
    <script src="assets/js/product.js"></script>
    <script type="text/javascript">
        var sc_data = <?php echo $sc_json; ?>;

        function mc_change() {
            var mid = $("#mc").val();
            $("#sc").html("<option>請選擇</option>");
            for (var i in sc_data[mid]) {
                $("#sc").html($("#sc").html() + "<option value='" + i + "'>" + sc_data[mid][i]["sc_title"] + "</option>");
            }
        }
    </script>
</body>

</html>