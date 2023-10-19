<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <?php include 'include/head-meta.php'; ?>
    <title>會員資料修改 | 就是要玩</title>

    <meta property="og:title" content="就是要玩" />
    <meta property="og:url" content="" />
    <meta property="og:description" name="description" content="">
    <meta property="og:image" content="assets/image/logo.webp" />

    <link rel="stylesheet" href="assets/css/formtable.css">
</head>

<body>
    <?php include "include/nav.php"; ?>

    <div id="Wapper" class="">
        <div class="page-title text-center">
            <h1 class="mtitle">ACCOUNT</h1>
            <span>會員專區</span>
        </div>
        <div class="top-menu">
            <a href="account_memberinfo.php" class="btn bk active"><span>會員資料修改</span></a>
            <a href="account_password.php" class="btn bk"><span>會員密碼修改</span></a>
            <a href="account_shoppinghistory_list.php" class="btn bk"><span>購物紀錄</span></a>
        </div>
        <div class="row">
            <form class="formtable" autocomplete="off" action="" method="post" id="updata">
                <div class="form-group">
                    <label>EMAIL(帳號)</label>
                    <div>
                        <input type="text" required="required" value="auozzy@gmail.com" disabled="">
                    </div>
                </div>
                <div class="form-group" id="name_form">
                    <label>姓名</label>
                    <div>
                        <input type="text" name="name" required="required" placeholder="請輸入姓名" value="測試員">
                        <div class="help-block" id="name_span"></div>
                    </div>
                </div>
                <div class="form-group" id="tel_form">
                    <label>電話</label>
                    <div>
                        <input type="tel" name="tel" required="required" placeholder="請填寫電話號碼" value="0912345678">
                        <div class="help-block" id="tel_span"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label>生日</label>
                    <div>
                        <input type="date" required="required" value="1900-06-26" disabled="">
                    </div>
                </div>
                <div class="form-group" id="addr_form">
                    <label>地址</label>
                    <div>
                        <input type="text" name="addr" required="required" placeholder="請輸入地址" value="測試市">
                        <div class="help-block" id="addr_span"></div>
                    </div>
                </div>
                <div class="form-group">
                    <module-field id="" class="recaptcha_field required">
                        <label for="recaptcha" class="">驗證碼</label>
                        <div class="justplayGame_field-ctrler">
                            <input type="text" id="recaptcha" name="recaptcha" required="required" class="form-control" placeholder="請輸入驗證碼" value="">
                            <img src="" alt="">
                        </div>
                    </module-field>
                </div>
                <div class="form-group btn-group">
                    <a href="javascript:send();" class="btn yel"><span>確認修改</span></a>
                </div>
            </form>
        </div>
    </div>

    <?php include "include/footer.php"; ?>
    <?php include 'include/jsfoot.php'; ?>
    <script type="text/javascript">
        function send() {
            id_name = "";
            var input_error = "必填欄位";
            var error_class = "with-errors";
            $(".form-group").removeClass(error_class);
            check("addr", 1, input_error, error_class);
            check("birth", 1, input_error, error_class);
            check("tel", 1, input_error, error_class);
            check("name", 1, input_error, error_class);
            if (id_name == "") {
                $("#updata").submit();
            } else $('html, body').animate({
                scrollTop: $("#" + id_name + "_span").offset().top - 250
            }, 1000);
        }
    </script>
</body>

</html>