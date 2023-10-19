<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <?php include 'include/head-meta.php'; ?>
    <title>紙片馬力歐 | 就是要玩</title>

    <meta property="og:title" content="就是要玩" />
    <meta property="og:url" content="" />
    <meta property="og:description" name="description" content="">
    <meta property="og:image" content="assets/image/logo.webp" />

    <link rel="stylesheet" href="assets/css/product.css">
</head>

<body>
    <?php include "include/nav.php"; ?>

    <div id="Wapper">
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
                            <a href="product_list.php?id=18" class="">測試123456789000000000000</a>
                        </div>
                    </li>
                    <li>
                        <span class="active">電玩遊戲相關<i></i></span>
                        <div class="second-menu" style="display:block;">
                            <a href="product_list.php?id=17" class="active">NS4</a>
                            <a href="product_list.php?id=16" class="">NS3</a>
                            <a href="product_list.php?id=15" class="">NS2</a>
                            <a href="product_list.php?id=14" class="">NS1</a>
                            <a href="product_list.php?id=7" class="">Switch遊戲</a>
                            <a href="product_list.php?id=8" class="">PS系列遊戲</a>
                            <a href="product_list.php?id=9" class="">XBOX系列遊戲</a>
                            <a href="product_list.php?id=10" class="">PC遊戲</a>
                        </div>
                    </li>
                    <li>
                        <span class="">電玩主機/周邊<i></i></span>
                        <div class="second-menu" style="">
                            <a href="product_list.php?id=13" class="">電玩主機周邊</a>
                            <a href="product_list.php?id=12" class="">XBOX系列主機</a>
                            <a href="product_list.php?id=5" class="">Switch系列主機</a>
                            <a href="product_list.php?id=6" class="">PS系列主機</a>
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
                            <a href="product_list.php?id=19" class=""></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="content">
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
                <select class="select-tag2" id="sc" onchange="location.href = 'product_list.php?id=' + $(this).val();">
                    <option value="17" selected="">NS4</option>
                    <option value="16">NS3</option>
                    <option value="15">NS2</option>
                    <option value="14">NS1</option>
                    <option value="7">Switch遊戲</option>
                    <option value="8">PS系列遊戲</option>
                    <option value="9">XBOX系列遊戲</option>
                    <option value="10">PC遊戲</option>
                </select>
                <section class="p1-detail">
                    <div class="imgbx">
                        <div class="swiper product-slider">
                            <div class="swiper-wrapper">
                                <?php
                                $i_data_demo = array(
                                    array( 'src' => "upload/2023_09_14_1529331.webp", 'title' => '紙片馬力歐1' ),
                                    array( 'src' => "upload/2023_09_14_1529211.webp", 'title' => '紙片馬力歐2' ),
                                );
                                $i = 0;
                                foreach ($i_data_demo as $k => $v) {
                                    $i++;
                                ?>
                                    <div class="swiper-slide">
                                        <img src="<?= $v["src"]; ?>" title="<?= $v["title"]; ?>" alt="<?= $v["title"]; ?>" class="<?= $i > 1 ? "img-fluid" : ""; ?>">
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="thumbs-wrap mpsrel">
                            <div class="swiper product-thumbs">
                                <div class="swiper-wrapper">
                                    <?php
                                    $i = 0;
                                    foreach ($i_data_demo as $k => $v) {
                                        $i++;
                                    ?>
                                        <div class="swiper-slide">
                                            <img src="<?= $v["src"]; ?>" title="<?= $v["title"]; ?>" alt="<?= $v["title"]; ?>" class="<?= $i > 1 ? "img-fluid" : ""; ?>">
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="swiper-prev"><img src="assets/image/svg/arrow-left.svg" class="svg"></div>
                            <div class="swiper-next"><img src="assets/image/svg/arrow-right.svg" class="svg"></div>
                        </div>
                    </div>


                    <div class="infobx">
                        <div class="align-top">
                            <div class="classfiy">NS4</div>
                            <h1>紙片馬力歐</h1>
                            <div class="price">$ 99,999</div>
                        </div>
                        <div class="align-btm">
                            <div class="tag">
                                <div class="check_radi">
                                    <input type="radio" name="pid" value="24" disabled="" onchange="item_change();">
                                    <div class="boxmark">洋樓3</div>
                                </div>
                                <div class="check_radi">
                                    <input type="radio" name="pid" value="23" checked="" onchange="item_change();">
                                    <div class="boxmark">紙片馬力歐</div>
                                </div>
                            </div>
                            <label>數量</label>
                            <span class="ammount mpsrel">
                                <a class="minus" href="javascript:minus();"><svg xmlns="http://www.w3.org/2000/svg" id="icon_subtract" width="20" height="20" viewBox="0 0 20 20" class="svg replaced-svg">
                                        <path id="Path_33" data-name="Path 33" d="M0,0H20V20H0Z" fill="none"></path>
                                        <path id="Path_34" data-name="Path 34" d="M5,11H16.667v1.667H5Z" transform="translate(-0.833 -1.833)" fill="#959595"></path>
                                    </svg></a>
                                <input id="buyCount" type="number" size="1" value="1" onchange="check_count();">
                                <a class="plus" href="javascript:plus();"><svg xmlns="http://www.w3.org/2000/svg" id="icon_add" width="20" height="20" viewBox="0 0 20 20" class="svg replaced-svg">
                                        <path id="Path_31" data-name="Path 31" d="M0,0H20V20H0Z" fill="none"></path>
                                        <path id="Path_32" data-name="Path 32" d="M10,10V5h1.667v5h5v1.667h-5v5H10v-5H5V10Z" transform="translate(-0.833 -0.833)" fill="#959595"></path>
                                    </svg></a>
                            </span>
                            <div class="btn-group">
                                <a href="javascript:buy();" class="addcart"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="svg replaced-svg">
                                        <g id="icon_cart" transform="translate(19970 21871)">
                                            <circle id="Ellipse_34" data-name="Ellipse 34" cx="20" cy="20" r="20" transform="translate(-19970 -21871)" fill="none"></circle>
                                            <g id="shopping-cart" transform="translate(-19960 -21861.178)">
                                                <g id="Group_539" data-name="Group 539" transform="translate(0 0.178)">
                                                    <path id="Path_395" data-name="Path 395" d="M16.37,13.258a3.575,3.575,0,0,0,1.274-1.807l2.369-7.015H4.782L4.614,2.572A2.625,2.625,0,0,0,2,.178H0V1.74H2a1.057,1.057,0,0,1,1.059.971L4.28,16.269v.007A2.615,2.615,0,0,0,6.447,18.6a2.3,2.3,0,0,0,4.354.051h1.836a2.3,2.3,0,1,0,0-1.562H10.8A2.3,2.3,0,0,0,6.5,17a1.059,1.059,0,0,1-.663-.879l-.195-2.158h8.616A3.493,3.493,0,0,0,16.37,13.258ZM14.8,17.131a.742.742,0,1,1-.742.742A.743.743,0,0,1,14.8,17.131Zm-6.172,0a.742.742,0,1,1-.742.742A.743.743,0,0,1,8.633,17.131ZM5.5,12.4h0L4.923,6H17.837L16.161,10.96l-.007.02a2.012,2.012,0,0,1-1.9,1.424Z" transform="translate(0 -0.178)" fill="#1a1a1a"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>加入購物車</a>
                                <a href="javascript:buy();location.href='quote/delay.php';" class="buynow"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="svg replaced-svg">
                                        <g id="Group_514" data-name="Group 514" transform="translate(-1593 -816)">
                                            <g id="Ellipse_14" data-name="Ellipse 14" transform="translate(1593 816)" fill="#fff" stroke="#707070" stroke-width="1" opacity="0">
                                                <circle cx="20" cy="20" r="20" stroke="none"></circle>
                                                <circle cx="20" cy="20" r="19.5" fill="none"></circle>
                                            </g>
                                            <g id="dollar-sign" transform="translate(1600 823)">
                                                <line id="Line_97" data-name="Line 97" y2="24" transform="translate(12.545 1)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                                <path id="Path_388" data-name="Path 388" d="M18,5H9.818a3.818,3.818,0,0,0,0,7.636h5.455a3.818,3.818,0,1,1,0,7.636H6" transform="translate(0 0.364)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                            </g>
                                        </g>
                                    </svg>直接購買</a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="p2-editor">
                    <h5>商品詳情</h5>
                    <div class="editor_content">
                        <div class="editor_box"></div>
                    </div>
                    <div class="text-center">
                        <a href="javascript:history.back();" class="btn yel"><span>返回列表</span></a>
                    </div>
                </section>
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
        var p_data = {
            "24": {
                "p_id": "24",
                "p_title": "洋樓3",
                "p_price": "5555",
                "p_count": "0",
                "p_type": "1"
            },
            "23": {
                "p_id": "23",
                "p_title": "紙片馬力歐",
                "p_price": "99999",
                "p_count": "10",
                "p_type": "1"
            }
        };
        $(function() {
            $(".price").html("$ " + parseInt(p_data[23]["p_price"]).toLocaleString());
        })

        function mc_change() {
            var mid = $("#mc").val();
            $("#sc").html("<option>請選擇</option>");
            for (var i in sc_data[mid]) {
                $("#sc").html($("#sc").html() + "<option value='" + i + "'>" + sc_data[mid][i]["sc_title"] + "</option>");
            }
        }

        function item_change() {
            $(".price").html("$ " + parseInt(p_data[$("input[name='pid']:checked").val()]["p_price"]).toLocaleString());
            check_count();
        }

        function check_count() {
            p_count = p_data[$("input[name='pid']:checked").val()]["p_count"];
            if (parseInt($("#buyCount").val()) > p_count) $("#buyCount").val(p_count);
        }

        function buy() {
            cart($("input[name='pid']:checked").val(), 1, $("#buyCount").val());
        }

        function plus() {
            p_count = p_data[$("input[name='pid']:checked").val()]["p_count"];
            $("#buyCount").val(parseInt($("#buyCount").val()) + 1);
            if (parseInt($("#buyCount").val()) > p_count) $("#buyCount").val(p_count);
        }

        function minus() {
            if ($("#buyCount").val() > 1) $("#buyCount").val(parseInt($("#buyCount").val()) - 1);
        }
    </script>
</body>

</html>