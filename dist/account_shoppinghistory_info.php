<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <?php include 'include/head-meta.php'; ?>
    <title>購物紀錄-明細 | 就是要玩</title>

    <meta property="og:title" content="就是要玩" />
    <meta property="og:url" content="" />
    <meta property="og:description" name="description" content="">
    <meta property="og:image" content="assets/image/logo.webp" />

    <link rel="stylesheet" href="assets/css/orderlist.css">
</head>

<body>
    <?php include "include/nav.php"; ?>

    <div id="Wapper" class="">
        <div class="page-title text-center">
            <h1 class="mtitle">ACCOUNT</h1>
            <span>會員專區</span>
        </div>
        <div class="top-menu">
            <a href="account_memberinfo.php" class="btn bk"><span>會員資料修改</span></a>
            <a href="account_password.php" class="btn bk"><span>會員密碼修改</span></a>
            <a href="account_shoppinghistory_list.php" class="btn bk active"><span>購物紀錄</span></a>
        </div>
        <div class="row w80 odetail bdradius">
            <div class="wrap">
                <h3 class="title-yel">訂購資訊</h3>
                <ul>
                    <li><i>訂購資訊</i><span>230806210026</span><a href="account_return.php?id=26" class="apply">退貨申請</a></li>
                    <li><i>訂購日期</i><span>2023-08-06 21:43:04</span></li>
                    <li><i>總金額</i><span>$10,080</span></li>
                    <li><i>收件人</i><span>測試員</span></li>
                    <li><i>收件人電話</i><span>0912345678</span></li>
                    <li><i>收件人地址</i><span>測試市</span></li>
                    <li><i>發票類型</i><span>二聯式發票</span></li>
                </ul>
            </div>
        </div>
        <div class="row w80 oproduct bdradius">
            <div class="wrap">
                <h3 class="title-yel">訂購商品列表</h3>
                <ul>
                    <li>品名</li>
                    <li>單價</li>
                    <li>數量</li>
                    <li>小計</li>
                </ul>
                <ul>
                    <li>
                        <div>
                            <span>NS Switch 主機 台灣公司貨 電量加強版 紅藍 灰黑 動物森友會 OLED 白色 紅藍 主機 現貨</span>
                            <i class="tag">OLED 白色主機</i>
                        </div>
                    </li>
                    <li>$10,080</li>
                    <li>1</li>
                    <li>$10,080</li>
                </ul>
            </div>
        </div>
        <div class="text-center">
            <a href="javascript:history.back();" class="btn yel"><span>返回列表</span></a>
        </div>
    </div>
    <?php include "include/footer.php"; ?>
    <?php include 'include/jsfoot.php'; ?>

</body>

</html>