	<header>
		<div class="title-bar">
			<a href="./" class="logo"><img src="assets/image/logo.webp" alt="logo"></a>
			<a href="javascript:;" class="menuicon">
				<div class="mpsrel">
					<div class="bar"></div>
				</div>
			</a>
		</div>
		<nav class="navBox">

			<ul class="mmenu">
				<li>
					<a href="javscript:;" class="hasmenu">熱門商品<i></i></a>
					<ul class="subBox">
						<li><a href="product_list.php">測試123456789000000000000</a></li>
					</ul>
				</li>
				<li>
					<a href="javscript:;" class="hasmenu">電玩遊戲相關<i></i></a>
					<ul class="subBox">
						<li><a href="product_list.php">NS4</a></li>
						<li><a href="product_list.php">NS3</a></li>
						<li><a href="product_list.php">NS2</a></li>
						<li><a href="product_list.php">NS1</a></li>
						<li><a href="product_list.php">Switch遊戲</a></li>
						<li><a href="product_list.php">PS系列遊戲</a></li>
						<li><a href="product_list.php">XBOX系列遊戲</a></li>
						<li><a href="product_list.php">PC遊戲</a></li>
					</ul>
				</li>
				<li>
					<a href="javscript:;" class="hasmenu">電玩主機/周邊<i></i></a>
					<ul class="subBox">
						<li><a href="product_list.php">電玩主機周邊</a></li>
						<li><a href="product_list.php">XBOX系列主機</a></li>
						<li><a href="product_list.php">Switch系列主機</a></li>
						<li><a href="product_list.php">PS系列主機</a></li>
					</ul>
				</li>
				<li>
					<a href="javscript:;" class="hasmenu">電玩遊戲片<i></i></a>
				</li>
				<li>
					<a href="javscript:;" class="hasmenu">卡牌 / amiibo公仔<i></i></a>
					<ul class="subBox">
						<li><a href="product_list.php"></a></li>
					</ul>
				</li>
			</ul>

			<div class="mo_use">
				<!-- ================ 登入狀態 START ================ -->
				<!-- <a href="quote/session_close.php" class="btn-sign">會員登出</a> -->
				<!-- ================ 登入狀態 END ================ -->

				<!-- ================ 未登入狀態 START ================ -->
				<a href="account_login.php" class="btn-sign">會員登入</a>
				<!-- ================ 未登入狀態 END ================ -->
			</div>
		</nav>
		<div class="searchbx">
			<input type="text" id="keyword" placeholder="請輸入品名">
			<a href="javascript:location.href = 'search_reaults.php?keyword=' + $('#keyword').val();"><img src="assets/image/svg/icon_search.svg" class="svg"></a>
		</div>
		<div class="btngroup">
			<!-- 搜尋 -->
			<a href="javascript:;" class="searchbtn mo_use"><img src="assets/image/svg/icon_search.svg" class="svg"></a>
			<!-- ================ 登入狀態 START ================ -->
			<!-- <a href="quote/session_close.php" class="pc_use"><img src="assets/image/svg/icon_logout.svg" class="svg"></a>
			<a href="account_memberinfo.php" class=""><img src="assets/image/svg/icon_member.svg" class="svg"></a> -->
			<!-- ================ 登入狀態 END ================ -->

			<!-- ================ 未登入狀態 START ================ -->
			<a href="account_login.php" class="pc_use"><img src="assets/image/svg/icon_login.svg" class="svg"></a>
			<a href="account_signin.php"><img src="assets/image/svg/icon_signin.svg" class="svg"></a>
			<!-- ================ 未登入狀態 END ================ -->

			<a href="cart_list.php" class="cart"><img src="assets/image/svg/icon_cart.svg" class="svg"><i class="cart_sum">0</i></a>
		</div>
	</header>