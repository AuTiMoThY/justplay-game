<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <?php include 'include/head-meta.php'; ?>
    <title>搜尋結果 | 就是要玩</title>

    <meta property="og:title" content="就是要玩" />
    <meta property="og:url" content="" />
    <meta property="og:description" name="description" content="">
    <meta property="og:image" content="assets/image/logo.webp" />

    <link rel="stylesheet" href="assets/css/product.css">
</head>

<body>
    <?php include "include/nav.php"; ?>

    <div id="Wapper">
        <div class="row">
            <div class="page-title">
                <h1 class="mtitle">SEARCH RESULTS</h1>
                <span>搜尋結果</span>
            </div>
        </div>
        <div class="row col-lg">
            <div class="sidebar">

                <ul class="ul-items">
                    <li>
                        <span>熱門商品<i></i></span>
                        <div class="second-menu">
                            <a href="product_list.php">測試123456789000000000000</a>
                        </div>
                    </li>
                    <li>
                        <span>電玩遊戲相關<i></i></span>
                        <div class="second-menu">
                            <a href="product_list.php">NS4</a>
                            <a href="product_list.php">NS3</a>
                            <a href="product_list.php">NS2</a>
                            <a href="product_list.php">NS1</a>
                            <a href="product_list.php">Switch遊戲</a>
                            <a href="product_list.php">PS系列遊戲</a>
                            <a href="product_list.php">XBOX系列遊戲</a>
                            <a href="product_list.php">PC遊戲</a>
                        </div>
                    </li>
                    <li>
                        <span>電玩主機/周邊<i></i></span>
                        <div class="second-menu">
                            <a href="product_list.php">電玩主機周邊</a>
                            <a href="product_list.php">XBOX系列主機</a>
                            <a href="product_list.php">Switch系列主機</a>
                            <a href="product_list.php">PS系列主機</a>
                        </div>
                    </li>
                    <li>
                        <span>電玩遊戲片<i></i></span>
                        <div class="second-menu">
                        </div>
                    </li>
                    <li>
                        <span>卡牌 / amiibo公仔<i></i></span>
                        <div class="second-menu">
                            <a href="product_list.php"></a>
                        </div>
                    </li>
                </ul>

            </div>
            <div class="content productlist">
                <select class="select-tag1" id="mc" onchange="mc_change()">
                    <option>請選擇</option>
                    <option value="10">熱門商品</option>
                    <option value="7">電玩遊戲相關</option>
                    <option value="3">電玩主機/周邊</option>
                    <option value="6">電玩遊戲片</option>
                    <option value="8">卡牌 / amiibo公仔</option>
                </select>
                <select class="select-tag2" id="sc" onchange="location.href = 'product_list.php + $(this).val();">
                    <option>請先選擇主分類</option>
                </select>
                <div class="result-bx">
                    <div class="txt">
                        [ 星之卡比 ] 搜尋結果： </div>
                    <div class="btn-wrap">
                        <div class="btn-sort">
                            <a href="?keyword=星之卡比&amp;orderFor=1" class="active">價格低到高</a>
                            <a href="?keyword=星之卡比&amp;orderFor=2" class="">價格高到低</a>
                            <a href="?keyword=星之卡比&amp;orderFor=3" class="">最新上架</a>
                            <a href="?keyword=星之卡比&amp;orderFor=4" class="">熱銷排名</a>
                        </div>
                    </div>
                </div>
                <div class="list">
                    <a href="product_info.php">
                        <div class="bgimg">
                            <img src="upload/2023_09_14_1530341.webp" title="" alt="">
                            <div class="more">MORE DETAIL</div>
                        </div>
                        <h4>星之卡比</h4>
                        <div class="price">$99,999 - $99,999</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php include "include/footer.php"; ?>
    <?php include 'include/jsfoot.php'; ?>
    <script src="assets/js/product.js"></script>
    <script type="text/javascript">
        var sc_data = {
            "8": {
                "19": {
                    "sc_id": "19",
                    "sc_title": "",
                    "sc_meta_tl": "",
                    "sc_meta_kw": "",
                    "sc_meta_de": "",
                    "sc_img": "2023_08_10_1527191.webp",
                    "sc_ititle": "",
                    "mc_id": "8"
                }
            },
            "10": {
                "18": {
                    "sc_id": "18",
                    "sc_title": "測試123456789000000000000",
                    "sc_meta_tl": "",
                    "sc_meta_kw": "",
                    "sc_meta_de": "",
                    "sc_img": "2023_08_07_1651131.webp",
                    "sc_ititle": "",
                    "mc_id": "10"
                }
            },
            "7": {
                "17": {
                    "sc_id": "17",
                    "sc_title": "NS4",
                    "sc_meta_tl": "",
                    "sc_meta_kw": "",
                    "sc_meta_de": "",
                    "sc_img": "",
                    "sc_ititle": "",
                    "mc_id": "7"
                },
                "16": {
                    "sc_id": "16",
                    "sc_title": "NS3",
                    "sc_meta_tl": "",
                    "sc_meta_kw": "",
                    "sc_meta_de": "",
                    "sc_img": "",
                    "sc_ititle": "",
                    "mc_id": "7"
                },
                "15": {
                    "sc_id": "15",
                    "sc_title": "NS2",
                    "sc_meta_tl": "",
                    "sc_meta_kw": "",
                    "sc_meta_de": "",
                    "sc_img": "",
                    "sc_ititle": "",
                    "mc_id": "7"
                },
                "14": {
                    "sc_id": "14",
                    "sc_title": "NS1",
                    "sc_meta_tl": "",
                    "sc_meta_kw": "",
                    "sc_meta_de": "",
                    "sc_img": "",
                    "sc_ititle": "",
                    "mc_id": "7"
                },
                "7": {
                    "sc_id": "7",
                    "sc_title": "Switch遊戲",
                    "sc_meta_tl": "",
                    "sc_meta_kw": "",
                    "sc_meta_de": "",
                    "sc_img": "",
                    "sc_ititle": "",
                    "mc_id": "7"
                },
                "8": {
                    "sc_id": "8",
                    "sc_title": "PS系列遊戲",
                    "sc_meta_tl": "",
                    "sc_meta_kw": "",
                    "sc_meta_de": "",
                    "sc_img": "",
                    "sc_ititle": "",
                    "mc_id": "7"
                },
                "9": {
                    "sc_id": "9",
                    "sc_title": "XBOX系列遊戲",
                    "sc_meta_tl": "",
                    "sc_meta_kw": "",
                    "sc_meta_de": "",
                    "sc_img": "",
                    "sc_ititle": "",
                    "mc_id": "7"
                },
                "10": {
                    "sc_id": "10",
                    "sc_title": "PC遊戲",
                    "sc_meta_tl": "",
                    "sc_meta_kw": "",
                    "sc_meta_de": "",
                    "sc_img": "",
                    "sc_ititle": "",
                    "mc_id": "7"
                }
            },
            "3": {
                "13": {
                    "sc_id": "13",
                    "sc_title": "電玩主機周邊",
                    "sc_meta_tl": "",
                    "sc_meta_kw": "",
                    "sc_meta_de": "",
                    "sc_img": "",
                    "sc_ititle": "",
                    "mc_id": "3"
                },
                "12": {
                    "sc_id": "12",
                    "sc_title": "XBOX系列主機",
                    "sc_meta_tl": "",
                    "sc_meta_kw": "",
                    "sc_meta_de": "",
                    "sc_img": "",
                    "sc_ititle": "",
                    "mc_id": "3"
                },
                "5": {
                    "sc_id": "5",
                    "sc_title": "Switch系列主機",
                    "sc_meta_tl": "Switch系列主機",
                    "sc_meta_kw": "Switch系列主機",
                    "sc_meta_de": "Switch系列主機",
                    "sc_img": "2023_06_26_1107031.webp",
                    "sc_ititle": "",
                    "mc_id": "3"
                },
                "6": {
                    "sc_id": "6",
                    "sc_title": "PS系列主機",
                    "sc_meta_tl": "PS系列主機",
                    "sc_meta_kw": "PS系列主機",
                    "sc_meta_de": "PS系列主機",
                    "sc_img": "",
                    "sc_ititle": "",
                    "mc_id": "3"
                }
            }
        };

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