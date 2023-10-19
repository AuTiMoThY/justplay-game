<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <?php include 'include/head-meta.php'; ?>
    <title>忘記密碼 | 就是要玩</title>

    <meta property="og:title" content="就是要玩" />
    <meta property="og:url" content="" />
    <meta property="og:description" name="description" content="">
    <meta property="og:image" content="assets/image/logo.webp" />

    <link rel="stylesheet" href="assets/css/formtable.css">
</head>

<body>
    <?php include "include/nav.php"; ?>

    <div id="Wapper">
        <div class="page-title text-center">
            <h1 class="mtitle">FORGOT PASSWORD</h1>
            <span>忘記密碼</span>
        </div>
        <div class="row">
            <form class="formtable" autocomplete="off" id="forget" action="" method="post">
                <div class="form-group" id="account_form">
                    <label>EMAIL(帳號)<i>*</i></label>
                    <div>
                        <input type="text" name="account" required="required" placeholder="請輸入帳號">
                        <div class="help-block" id="account_span"></div>
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
                    <a href="javascript:send();" class="btn yel"><span>送出</span></a>
                    <div class="mt40">
                        <a href="account_login.php">取消修改</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php include "include/footer.php"; ?>
    <?php include 'include/jsfoot.php'; ?>
    <script type="text/javascript">
        function send() {
            id_name = "";
            var mail_error = "請輸入正確格式 EMAIL";
            var error_class = "with-errors";
            $(".form-group").removeClass(error_class);
            check("account", 2, mail_error, error_class);
            if (id_name == "") {
                $("#forget").submit();
            } else $('html, body').animate({
                scrollTop: $("#" + id_name + "_span").offset().top - 250
            }, 1000);
        }

        function onSubmit(token) {
            $("#forget").submit();
        }
    </script>
</body>

</html>