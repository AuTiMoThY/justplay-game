<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <?php include 'include/head-meta.php'; ?>
    <title>退貨申請 | 就是要玩</title>

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
            <h1 class="mtitle">RETURN</h1>
            <span>退貨申請</span>
        </div>
        <div class="row w80 bdradius">
            <form class="formtable wrap" autocomplete="off" id="return" action="" method="post">
                <div class="form-group ">
                    <label>退貨原因<i>*</i></label>
                    <div>
                        <input type="hidden" name="oid" value="26">
                        <textarea name="text" id="" cols="30" rows="12" placeholder="請輸入內容"></textarea>
                        <div class="help-block" id="text_span"></div>
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
                <div class="form-group btn-group" style="display: table; width: auto; margin: auto;">
                    <a href="javascript:send();" class="btn yel"><span>申請退貨</span></a>
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
            check("text", 5, input_error);
            if (id_name == "") {
                $("#return").submit();
            } else $('html, body').animate({
                scrollTop: $("#" + id_name + "_span").offset().top - 600
            }, 1000);
        }
    </script>

</body>

</html>