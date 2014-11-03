<div class="header">
	<div class="header_text">&nbsp;</div>
	<?
	if (!empty($_SESSION['id']))
	{ ?>
	<div class="login_box">
		Hello, <a href="./admin/index.php"><? echo $_SESSION['login']; ?></a>! <a href="./admin/index.php?sign_out=true">Sign out</a>
	</div>
	<? } ?>
	<div class="lang_box">
		<a class="lang_ru" href="#">&nbsp;</a><a class="lang_en" href="#">&nbsp;</a>
	</div>
</div>