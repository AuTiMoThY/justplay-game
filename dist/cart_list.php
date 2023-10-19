<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <?php include 'include/head-meta.php'; ?>
    <title>購物車 | 就是要玩</title>

    <meta property="og:title" content="就是要玩" />
    <meta property="og:url" content="" />
    <meta property="og:description" name="description" content="">
    <meta property="og:image" content="assets/image/logo.webp" />

    <link rel="stylesheet" href="assets/css/cart.css">
</head>

<body>
    <?php include "include/nav.php"; ?>

    <div id="Wapper" class="">
        <div class="page-title text-center">
            <h1 class="mtitle">SHOPPING CART</h1>
            <span>購物車</span>
        </div>
        <div class="top-menu">
            <a href="cart_list.php" class="btn bk active"><span>一般購物車(1)</span></a>
            <a href="cart_list.php" class="btn bk"><span>預購購物車(1)</span></a>
        </div>

        <div class="row w90 bdradius">
            <div class="wrap cartlist">
                <h3 class="title-yel">訂購商品列表</h3>
                <ul class="thead">
                    <li>品名</li>
                    <li>品名</li>
                    <li>單價</li>
                    <li>數量</li>
                    <li>小計</li>
                </ul>

                <ul>
                    <li>
                        <img src="upload/2023_09_14_1528181.webp">
                    </li>
                    <li>
                        <div>
                            <span>紙片馬力歐</span>
                            <i class="tag"> 紙片馬力歐</i>
                        </div>
                    </li>
                    <li>$99,999</li>
                    <li>
                        <span class="ammount mpsrel">
                            <a class="minus" href="javascript:reduce_count(23);"><svg xmlns="http://www.w3.org/2000/svg" id="icon_subtract" width="20" height="20" viewBox="0 0 20 20" class="svg replaced-svg">
                                    <path id="Path_33" data-name="Path 33" d="M0,0H20V20H0Z" fill="none"></path>
                                    <path id="Path_34" data-name="Path 34" d="M5,11H16.667v1.667H5Z" transform="translate(-0.833 -1.833)" fill="#959595"></path>
                                </svg></a>
                            <input type="number" size="1" value="1" id="count_23" onkeyup="value=value.replace(/[^0-9]/g,'');" onchange="change_count(23);">
                            <a class="plus" href="javascript:add_count(23);"><svg xmlns="http://www.w3.org/2000/svg" id="icon_add" width="20" height="20" viewBox="0 0 20 20" class="svg replaced-svg">
                                    <path id="Path_31" data-name="Path 31" d="M0,0H20V20H0Z" fill="none"></path>
                                    <path id="Path_32" data-name="Path 32" d="M10,10V5h1.667v5h5v1.667h-5v5H10v-5H5V10Z" transform="translate(-0.833 -0.833)" fill="#959595"></path>
                                </svg></a>
                        </span>
                    </li>
                    <li>$<i id="money_23">99,999</i></li>
                    <li>
                        <a href="quote/cookie.php?mode=2&amp;id=23" class="delbtn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" class="svg replaced-svg">
                                <g id="icon_delete" transform="translate(-17398 12885)">
                                    <g id="garbage" transform="translate(17405 -12879)">
                                        <g id="Group_1168" data-name="Group 1168">
                                            <g id="Group_1167" data-name="Group 1167">
                                                <path id="Path_507" data-name="Path 507" d="M46.82,2.344H43.3V1.758A1.76,1.76,0,0,0,41.547,0H38.031a1.76,1.76,0,0,0-1.758,1.758v.586H32.758A1.76,1.76,0,0,0,31,4.1V5.273a.586.586,0,0,0,.586.586h.632L33.249,18.4V18.4A1.749,1.749,0,0,0,35,20h9.578a1.749,1.749,0,0,0,1.751-1.6V18.4L47.36,5.859h.632a.586.586,0,0,0,.586-.586V4.1A1.76,1.76,0,0,0,46.82,2.344Zm-9.375-.586a.587.587,0,0,1,.586-.586h3.516a.587.587,0,0,1,.586.586v.586H37.445ZM45.162,18.3a.583.583,0,0,1-.583.531H35a.583.583,0,0,1-.583-.531L33.394,5.859h12.79Zm2.245-13.61H32.172V4.1a.587.587,0,0,1,.586-.586H46.82a.587.587,0,0,1,.586.586Z" transform="translate(-31)" fill="#959595"></path>
                                            </g>
                                        </g>
                                        <g id="Group_1170" data-name="Group 1170" transform="translate(8.203 7.031)">
                                            <g id="Group_1169" data-name="Group 1169">
                                                <path id="Path_508" data-name="Path 508" d="M241.586,180a.586.586,0,0,0-.586.586v8.281a.586.586,0,0,0,1.172,0v-8.281A.586.586,0,0,0,241.586,180Z" transform="translate(-241 -180)" fill="#959595"></path>
                                            </g>
                                        </g>
                                        <g id="Group_1172" data-name="Group 1172" transform="translate(11.719 7.031)">
                                            <g id="Group_1171" data-name="Group 1171">
                                                <path id="Path_509" data-name="Path 509" d="M331.586,180a.586.586,0,0,0-.586.586v8.281a.586.586,0,0,0,1.172,0v-8.281A.586.586,0,0,0,331.586,180Z" transform="translate(-331 -180)" fill="#959595"></path>
                                            </g>
                                        </g>
                                        <g id="Group_1174" data-name="Group 1174" transform="translate(4.688 7.031)">
                                            <g id="Group_1173" data-name="Group 1173">
                                                <path id="Path_510" data-name="Path 510" d="M151.586,180a.586.586,0,0,0-.586.586v8.281a.586.586,0,0,0,1.172,0v-8.281A.586.586,0,0,0,151.586,180Z" transform="translate(-151 -180)" fill="#959595"></path>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="Rectangle_13" data-name="Rectangle 13" transform="translate(17398 -12885)" fill="none" stroke="#959595" stroke-width="1" opacity="0">
                                        <rect width="32" height="32" stroke="none"></rect>
                                        <rect x="0.5" y="0.5" width="31" height="31" fill="none"></rect>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="wrap total-wrap">
                <ul>
                    <li><i>合計</i><span>NT$ <span id="total">99,999</span></span></li>
                    <li><i>本月首購折價金</i><span>- NT$ <span>100</span></span></li>
                    <li><i>運費</i><span>NT$ <span id="fare">0</span></span></li>
                    <li><i>總金額</i><span>NT$ <span id="sum">99,899</span></span></li>
                </ul>
            </div>
        </div>
        <div class="row w90 bdradius">
            <form class="wrap formtable" autocomplete="off" action="" method="post" id="order_from">
                <div class="form-group">
                    <h3 class="title-yel">訂單資訊</h3>
                </div>
                <div class="form-group w50" id="name_form">
                    <label>收件人<i>*</i></label>
                    <div>
                        <input type="text" name="name" required="required" value="測試員">
                        <div class="help-block" id="name_span"></div>
                    </div>
                </div>
                <div class="form-group w50" id="tel_form">
                    <label>收件人電話<i>*</i></label>
                    <div>
                        <input type="tel" name="tel" required="required" value="0912345678">
                        <div class="help-block" id="tel_span"></div>
                    </div>
                </div>
                <div class="form-group" id="addr_form">
                    <label>收件人地址<i>*</i></label>
                    <div>
                        <input type="text" name="addr" required="required" value="測試市">
                        <div class="help-block" id="addr_span"></div>
                    </div>
                </div>
                <div class="form-group" id="invo_form">
                    <label>發票類型<i>*</i></label>
                    <div class="check_radi">二聯式發票
                        <input type="radio" name="invo" value="2" onclick="invo_change(2)" checked="">
                        <span class="boxmark"></span>
                    </div>
                    <div class="check_radi">三聯式發票
                        <input type="radio" name="invo" value="3" onclick="invo_change(3)">
                        <span class="boxmark"></span>
                    </div>
                    <div class="mark" id="invo_span"></div>
                </div>
                <div class="form-group w50 invo_3" id="com_form" style="display: none;">
                    <label>發票抬頭<i>*</i></label>
                    <div>
                        <input type="text" name="com" required="required" value="">
                        <div class="help-block" id="com_span"></div>
                    </div>
                </div>
                <div class="form-group w50 invo_3" id="comid_form" style="display: none;">
                    <label>發票統編<i>*</i></label>
                    <div>
                        <input type="text" name="comid" required="required" value="">
                        <div class="help-block" id="comid_span"></div>
                    </div>
                </div>
                <div class="form-group invo_3" id="comaddr_form" style="display: none;">
                    <label>發票寄送地址<i>*</i></label>
                    <div>
                        <input type="text" name="comaddr" required="required" value="">
                        <div class="help-block" id="comaddr_span"></div>
                    </div>
                </div>
            </form>
        </div>
        <div class="text-center">
            <a href="javascript:send();" class="btn yel"><span>前往結帳</span></a>
        </div>

        <!-- ================ 無商品時顯示 START ================ -->
        <!-- <div class="row w90 bdradius">
            <div class="wrap cartlist">
                <h3 class="title-yel"><?php echo $type == 1 ? "一般" : "預購"; ?>購物車內無商品</h3>
            </div>
        </div> -->
        <!-- ================ 無商品時顯示 END ================ -->
    </div>
    <?php include "include/footer.php"; ?>
    <?php include 'include/jsfoot.php'; ?>
    <script>
        $('.header_box .h-cartbx').addClass('active');
        var p_data = {
            "23": {
                "p_id": "23",
                "p_title": "紙片馬力歐",
                "p_price": "99999",
                "p_type": "1",
                "pc_title": "紙片馬力歐",
                "pc_img": "2023_09_14_1528181.webp",
                "p_count": "10"
            }
        };
        $(function() {
            $(".invo_3").css("display", "none");
            $(".shop").css("display", "none");
        });

        function add_count(id) {
            var nowCount = parseInt($('#count_' + id).val()) + 1;
            if (nowCount <= p_data[id]["p_count"]) $('#count_' + id).val(nowCount);
            else $('#count_' + id).val(p_data[id]["p_count"]);
            change_count(id);
        }

        function reduce_count(id) {
            if ($('#count_' + id).val() > 1) $('#count_' + id).val(parseInt($('#count_' + id).val()) - 1);
            else $('#count_' + id).val(1);
            change_count(id);
        }

        function change_count(id) {
            if (parseInt($('#count_' + id).val()) > p_data[id]["p_count"]) $('#count_' + id).val(p_data[id]["p_count"]);
            if (parseInt($('#count_' + id).val()) < 1) $('#count_' + id).val(1);
            cart(id, 2, $('#count_' + id).val());
            $("#money_" + id).html(($('#count_' + id).val() * p_data[id]["p_price"]).toLocaleString());
            compute();
        }

        function compute() {
            var total = 0;
            var sum = 0;
            var fare = 0;
            var discount = 0;
            for (var i in p_data)
                if (p_data[i] != "") total += parseInt($("#count_" + i).val()) * parseInt(p_data[i]["p_price"]);

            if (parseInt(total) < 5000) fare = 100;
            discount = 100;
            sum = parseInt(total) + parseInt(fare) - parseInt(discount);
            $("#total").html(total.toLocaleString());
            $("#fare").html(fare.toLocaleString());
            $("#sum").html(sum.toLocaleString());
        };

        function invo_change(id) {
            $(".invo_data").attr("readonly", true).val("");
            $(".invo_3").css("display", "none");
            if (id == 3) {
                $(".invo_data").removeAttr("readonly");
                $(".invo_3").css("display", "");
            }
        }

        function send() {
            id_name = "";
            var input_error = "輸入錯誤";
            var mail_error = "請輸入正確格式 EMAIL";
            var error_class = "with-errors";
            $(".form-group").removeClass(error_class);
            if ($("input[name='invo']:checked").val() == 3) {
                check("comaddr", 1, input_error, error_class);
                check("comid", 1, input_error, error_class);
                check("com", 1, input_error, error_class);
            }
            check("addr", 1, input_error, error_class);
            check("tel", 1, input_error, error_class);
            check("name", 1, input_error, error_class);
            if (id_name == "") $("#order_from").submit();
            else $('html, body').animate({
                scrollTop: $("#" + id_name + "_span").offset().top - 350
            }, 1000)
        };
    </script>
</body>

</html>