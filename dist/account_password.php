<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <?php include 'include/head-meta.php'; ?>
    <title>會員密碼修改 | 就是要玩</title>

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
            <a href="account_memberinfo.php" class="btn bk"><span>會員資料修改</span></a>
            <a href="account_password.php" class="btn bk active"><span>會員密碼修改</span></a>
            <a href="account_shoppinghistory_list.php" class="btn bk"><span>購物紀錄</span></a>
        </div>
        <div class="row">
            <form class="formtable" autocomplete="off" action="" method="post" id="updata">
                <div class="form-group" id="oldpw_form">
                    <label>原密碼</label>
                    <div>
                        <input type="password" name="oldpw" required="required" placeholder="請輸入原密碼">
                        <div class="help-block" id="oldpw_span"></div>
                    </div>
                </div>
                <div class="form-group" id="newpw_form">
                    <label>新密碼</label>
                    <div>
                        <input type="password" name="newpw" required="required" placeholder="請輸入新密碼">
                        <div class="help-block" id="newpw_span"></div>
                    </div>
                </div>
                <div class="form-group" id="checkpw_form">
                    <label>確認密碼</label>
                    <div>
                        <input type="password" name="checkpw" required="required" placeholder="請輸入確認密碼">
                        <div class="help-block" id="checkpw_span"></div>
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
            var check_error = "請確認是否與新密碼相同";
            var error_class = "with-errors";
            $(".form-group").removeClass(error_class);
            check("checkpw", 7, check_error, error_class);
            check("newpw", 1, input_error, error_class);
            check("oldpw", 1, input_error, error_class);
            if (id_name == "") {
                $("#updata").submit();
            } else $('html, body').animate({
                scrollTop: $("#" + id_name + "_span").offset().top - 250
            }, 1000);
        }
    </script>
</body>

</html>