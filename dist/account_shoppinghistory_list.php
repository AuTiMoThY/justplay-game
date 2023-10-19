<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <?php include 'include/head-meta.php'; ?>
    <title>購物紀錄 | 就是要玩</title>

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
        <div class="row w80 olist bdradius">
            <div class="wrap">
                <ul>
                    <li>訂購單號</li>
                    <li>訂購日期</li>
                    <li>總金額</li>
                    <li></li>
                </ul>
                <ul>
                    <li>230806210026</li>
                    <li>2023-08-06 21:43:04</li>
                    <li>$10,080</li>
                    <li><a href="account_shoppinghistory_info.php">訂單明細</a></li>
                </ul>
            </div>
        </div>
        <dl class="page asj fade" data-delay="300">
            <!-- 若沒有上一則或下一則請使用 nopage -->
            <dt class="ltbn"><a href=""><img src="assets/image/svg/arrow-left.svg" class="svg"></a></dt>

            <dd class="active"><a href="">1</a></dd>
            <dd class=""><a href="">2</a></dd>
            <dd class=""><a href="">3</a></dd>
            <dd class=""><a href="">4</a></dd>
            <dd class=""><a href="">5</a></dd>

            <dt class="rtbn"><a href=""><img src="assets/image/svg/arrow-right.svg" class="svg"></a></dt>
        </dl>
    </div>
    <?php include "include/footer.php"; ?>
    <?php include 'include/jsfoot.php'; ?>

</body>

</html>