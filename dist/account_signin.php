<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <?php include 'include/head-meta.php'; ?>
    <title>註冊會員 | 就是要玩</title>

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
            <h1 class="mtitle">SIGN IN</h1>
            <span>註冊會員</span>
        </div>
        <div class="row">
            <form class="formtable" autocomplete="off" id="join" action="" method="post">
                <div class="form-group" id="account_form">
                    <label>EMAIL(帳號)<i>*</i></label>
                    <div>
                        <input type="text" name="account" required="required" placeholder="請輸入帳號">
                        <div class="help-block" id="account_span"></div>
                    </div>
                </div>
                <div class="form-group" id="newpw_form">
                    <label>密碼<i>*</i></label>
                    <div>
                        <input type="password" name="newpw" required="required" placeholder="請輸入密碼">
                        <div class="help-block" id="newpw_span"></div>
                    </div>
                </div>
                <div class="form-group" id="checkpw_form">
                    <label>確認密碼<i>*</i></label>
                    <div>
                        <input type="password" name="checkpw" required="required" placeholder="請輸入密碼">
                        <div class="help-block" id="checkpw_span"></div>
                    </div>
                </div>
                <div class="form-group" id="name_form">
                    <label>姓名<i>*</i></label>
                    <div>
                        <input type="text" name="name" required="required" placeholder="請輸入姓名">
                        <div class="help-block" id="name_span"></div>
                    </div>
                </div>
                <div class="form-group" id="tel_form">
                    <label>電話<i>*</i></label>
                    <div>
                        <input type="tel" name="tel" required="required" placeholder="請填寫電話號碼">
                        <div class="help-block" id="tel_span"></div>
                    </div>
                </div>
                <div class="form-group" id="birth_form">
                    <label>生日<i>*</i></label>
                    <div>
                        <input type="date" name="birth" required="required" placeholder="02-2967-7461">
                        <div class="help-block" id="birth_span"></div>
                    </div>
                </div>
                <div class="form-group" id="addr_form">
                    <label>地址<i>*</i></label>
                    <div>
                        <input type="text" name="addr" required="required" placeholder="請輸入地址">
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
                    <a href="javascript:send();" class="btn yel"><span>立即註冊</span></a>
                    <div class="mt40">
                        已經有帳號了? <a href="account_login.php" class="color1">立即登入</a>
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
            var input_error = "必填欄位";
            var mail_error = "請確認EMAIL格式";
            var check_error = "請確認是否與新密碼相同";
            var error_class = "with-errors";
            $(".form-group").removeClass(error_class);
            check("addr", 1, input_error, error_class);
            check("birth", 1, input_error, error_class);
            check("tel", 1, input_error, error_class);
            check("name", 1, input_error, error_class);
            check("checkpw", 7, check_error, error_class);
            check("newpw", 1, input_error, error_class);
            check("account", 2, mail_error, error_class);
            if (id_name == "") {
                $("#join").submit();
            } else $('html, body').animate({
                scrollTop: $("#" + id_name + "_span").offset().top - 200
            }, 1000)
        }

    </script>
</body>

</html>