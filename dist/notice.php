<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <?php include 'include/head-meta.php'; ?>
    <title>購買須知 | 就是要玩</title>

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
                <h1 class="mtitle">NOTICE</h1>
                <span>購物須知</span>
            </div>
            <div class="sidebar">
                <div class="pc_use">
                    <a href="?id=1" class="active">購買須知</a>
                </div>
                <div class="mo_use">
                    <select onchange="location.href='?id='+$(this).val()">
                        <option value="1" selected="">購買須知</option>
                    </select>
                </div>
            </div>
            <div class="editor_content mpsrel">
                <div class="dres-title"><img src="assets/image/webp/04_notice/img_deco_notice.webp"></div>
                <div class="dres-welcome"><img src="assets/image/webp/04_notice/img_deco_welcome.webp"></div>
                <div class="editor_box">
                    <p>購買須知</p>
                </div>
            </div>
        </div>
    </div>

    <?php include "include/footer.php"; ?>
    <?php include 'include/jsfoot.php'; ?>
</body>

</html>