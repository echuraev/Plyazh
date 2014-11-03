<div class="header">
	<div class="header_text">&nbsp;</div>
	<?
	if (!empty($_SESSION['id']))
	{ ?>
	<div class="login_box">
		Hello, <? echo $_SESSION['login']; ?>! <a href="./index.php?sign_out=true">Sign out</a>
	</div>
	<? } ?>
</div>