<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <?php include 'include/head-meta.php'; ?>
    <title>聯絡我們 | 就是要玩</title>

    <meta property="og:title" content="就是要玩" />
    <meta property="og:url" content="" />
    <meta property="og:description" name="description" content="">
    <meta property="og:image" content="assets/image/logo.webp" />

    <link rel="stylesheet" href="assets/css/contact.css">
</head>

<body>
    <?php include "include/nav.php"; ?>

    <div id="Wapper">
        <div class="row">
            <div class="page-title">
                <h1 class="mtitle">CONTACT</h1>
                <span>聯絡我們</span>
            </div>
        </div>
        <div class="row w80">
            <div class="formtable info">
                <div class="form-group">
                    <div class="dres-title"><img src="assets/image/webp/06_contact/img_deco_contact.webp"></div>
                    <h5>就是要玩 電玩精品、好物專賣店</h5>
                    <ul>
                        <li>
                            <span>營業時間</span>
                            <div>週一至週五 11:00~21:00 | 週六至週日 13:30~21:00</div>
                        </li>
                        <li>
                            <span>客服專線</span>
                            <a href="tel: 02-2967-7461"> 02-2967-7461</a>
                        </li>
                        <li>
                            <span>Follow us</span>
                            <div>
                                <a href=""><img src="upload/2023_03_31_1107251.webp" title="" alt=""></a>
                                <a href=""><img src="upload/2023_03_31_1107191.webp" title="" alt=""></a>
                                <a href="https://www.facebook.com/gamemaster99999"><img src="upload/2023_03_31_1107121.webp" title="" alt=""></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <form class="formtable" autocomplete="off" id="contact" action="quote/contact.php" method="post">
                <div class="form-group">
                    有任何需要服務之處，歡迎來電或E-mail洽詢，也可填寫以下表單，我們會盡快安排專人與您聯繫。
                </div>
                <!-- 錯誤訊息請在.form-group加入 .with-errors -->
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
                <div class="form-group" id="mail_form">
                    <label>E-mail<i>*</i></label>
                    <div>
                        <input type="text" name="mail" required="required" placeholder="請輸入帳號">
                        <div class="help-block" id="mail_span"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label>訂單編號</label>
                    <div>
                        <input type="text" name="title" required="required" placeholder="zxc20221006123">
                        <div class="help-block"></div>
                    </div>
                </div>
                <div class="form-group" id="text_form">
                    <label>詢問內容<i>*</i></label>
                    <div>
                        <textarea name="text" cols="30" rows="10" placeholder="請輸入內容"></textarea>
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
                <div class="form-group text-center">
                    <a href="javascript:send();" class="btn yel"><span>SEND</span></a>
                </div>
            </form>
        </div>
        <div class="marquee">
            <div>
                <span>SEE YOU! SEE YOU! SEE YOU! SEE YOU! SEE YOU! SEE YOU! SEE YOU!</span>
                <span>SEE YOU! SEE YOU! SEE YOU! SEE YOU! SEE YOU! SEE YOU! SEE YOU!</span>
            </div>
        </div>
    </div>
    <?php include "include/footer.php"; ?>
    <?php include 'include/jsfoot.php'; ?>
    <script type="text/javascript">
        function send() {
            id_name = "";
            var input_error = "此為必填欄位";
            var mail_error = "請檢查E-mail格式是否正確";
            var error_class = "with-errors";
            $(".form-group").removeClass(error_class);
            check("text", 5, input_error, error_class);
            check("mail", 2, mail_error, error_class);
            check("tel", 1, input_error, error_class);
            check("name", 1, input_error, error_class);
            if (id_name == "") {
                $("#contact").submit();
            } else $('html, body').animate({
                scrollTop: $("#" + id_name + "_span").offset().top - 200
            }, 1000)
        }

        function onSubmit(token) {
            $("#contact").submit();
        }
    </script>
</body>

</html>