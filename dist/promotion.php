<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <?php include 'include/head-meta.php'; ?>
    <title>官網禮遇 | 就是要玩</title>

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
                <h1 class="mtitle">PROMOTION</h1>
                <span>官網禮遇</span>
            </div>
            <div class="sidebar">
                <div class="pc_use">
                    <a href="?id=2" class="active">生日小禮</a>
                    <a href="?id=1" class="">官網禮遇</a>
                </div>
                <div class="mo_use">
                    <select onchange="location.href='?id='+$(this).val()">
                        <option value="2" selected="">生日小禮</option>
                        <option value="1">官網禮遇</option>
                    </select>
                </div>
            </div>
            <div class="editor_content mpsrel">
                <div class="dres-title"><img src="assets/image/webp/05_promotion/img_deco_promotion.webp"></div>
                <div class="dres-welcome"><img src="assets/image/webp/05_promotion/img_deco_welcome.webp"></div>
                <div class="editor_box">
                    <p>生日小禮</p>
                </div>
            </div>
        </div>
    </div>

    <?php include "include/footer.php"; ?>
    <?php include 'include/jsfoot.php'; ?>
</body>

</html>