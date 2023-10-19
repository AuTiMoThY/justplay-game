<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <?php include 'include/head-meta.php'; ?>
    <title>關於我們 | 就是要玩</title>

    <meta property="og:title" content="就是要玩" />
    <meta property="og:url" content="" />
    <meta property="og:description" name="description" content="">
    <meta property="og:image" content="assets/image/logo.webp" />

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php include "include/nav.php"; ?>

    <div id="Wapper">
        <div class="row col-lg pdr">
            <div class="page-title">
                <h1 class="mtitle">ABOUT</h1>
                <span>關於我們</span>
            </div>
            <div class="sidebar">
                <div class="pc_use">
                    <!-- 當前頁面: 加上class: active -->
                    <a href="?id=1" class="active">商店介紹</a>
                    <a href="?id=3" class="">門市資訊</a>
                    <a href="?id=4" class="">經營理念</a>
                    <a href="?id=5" class="">隱私權條款</a>
                    <a href="?id=6" class="">會員條款</a>
                </div>
                <div class="mo_use">
                    <select onchange="location.href='?id='+$(this).val()">
                        <!-- 當前頁面: 加上selected -->
                        <option value="1" selected="">商店介紹</option>
                        <option value="3">門市資訊</option>
                        <option value="4">經營理念</option>
                        <option value="5">隱私權條款</option>
                        <option value="6">會員條款</option>
                    </select>
                </div>
            </div>
            <div class="editor_content mpsrel">
                <div class="dres-title"><img src="assets/image/webp/03_about/img_deco_about.webp"></div>
                <div class="dres-welcome"><img src="assets/image/webp/03_about/img_deco_welcome.webp"></div>
                <div class="editor_box">
                    <p>【就是要玩】電玩精品、好物專賣店</p>

                    <p>★實體門市地址在板橋區新府路66號2樓“F1大樓”<br>
                        (板橋火車站及捷運站西側13號出口；板橋小遠百側門對面)。<br>
                        門市電話02-29677461。<br>
                        ★門市營業時間為週一至週五上午11:00至晚上21:00、週六日即國定假日下午13:00至晚上21:00★</p>

                    <p>★如大檔活動訂單量大出貨可能稍有延遲，我們會盡力出貨，請各位見諒。</p>

                    <p>★客服與聊聊時間:週一~週五早上10:00~21:00，週六週日下午13:00~21:00，國定假日及特殊節日等非營業時間如回覆時間較長請見諒，自取請不需要下標，避免重複寄出。</p>

                    <p>★ 本賣場所有銷售皆開立發票，買的安心玩得開心，欲開統編，請下單時請直接在下標系統填寫好，聊聊給統編恕無法受理。</p>

                    <p>★光碟軟體屬智慧財產權之商品，產品經拆封後視同購買，恕無法接受退貨</p>

                    <p>★為保障彼此之權益，下標前請詳閱賣場說明，下標即視為同意賣場所有規範，另賣家保有決定是否接受訂單及出貨與否之權利</p>

                    <p>&nbsp;</p>

                    <p><img alt="" src="/upload/images/2023_06_26_114130.jpg" style="height:576px; width:1024px"></p>
                </div>
            </div>
        </div>
    </div>

    <?php include "include/footer.php"; ?>
    <?php include 'include/jsfoot.php'; ?>
</body>

</html>