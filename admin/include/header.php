<div class="header">
	<div class="header_text">&nbsp;</div>
	<?
	if (!empty($_SESSION['id']))
	{ ?>
	<div class="login_box">
		Hello, <? echo $_SESSION['login']; ?>! <a href="../handler.php?sign_out=true">Sign out</a>
	</div>
	<? } ?>
	<div class="lang_box">
		<a class="lang_ru" href="../handler.php?lang=ru">&nbsp;</a><a class="lang_en" href="../handler.php?lang=en">&nbsp;</a>
	</div>
</div>