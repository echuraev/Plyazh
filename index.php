<? include_once './include/common.php'; 
$lang = (!strcmp($_SESSION['lang'], "en")) ? "en" : "ru";
$result = mysql_query("SELECT * FROM pages WHERE name='main' AND lang='".$lang."'");
if (mysql_num_rows($result) == 0)
{
	$title = (!strcmp($_SESSION['lang'], "en")) ? "Error!" : "Ошибка!";
	$description = "";
	$keywords = "";
	$text = (!strcmp($_SESSION['lang'], "en")) ? "<h1>Error!</h1><p>Error! Table in db is empty! Try later...</p>" : 
	"<h1>Ошибка!</h1><p>Ошибка! Таблица в базе данных пуста! Попробуйте позже...</p>";
}
else {
	$myrow = mysql_fetch_array($result);
	$title = $myrow['title'];
	$description = $myrow['description'];
	$keywords = $myrow['keywords'];
	$text = $myrow['text'];
}
$exp = "|slideshow-tag|";
$slide_dir = "./img/slides/images/";
$pos = strpos($text, $exp);
if ($pos !== false)
{
	$start_pos = $pos;
	$end_pos = $pos + strlen($exp);
	$p_pos = strpos($text, "<p>", $pos - 3);
	if ($p_pos !== false)
	{
		$start_pos = $p_pos;
		$p_end_pos = strpos($text, "</p>", $pos - 3);
		if ($p_end_pos !== false)
		{
			$end_pos = $p_end_pos + 4;
		}
		else 
		{
			$end_pos = strlen($text);
		}
	}
	$substring = substr($text, $start_pos, $end_pos - $start_pos);
	$replacestring = "<div class=\"slides_box\">
				<div class=\"slides\">
					<div class=\"div_prev\">
						<a href=\"#\" class=\"prev\"><img class=\"arrow\" src=\"./img/slides/arrow-prev.png\" alt=\"Arrow Prev\"></a>
					</div>
					<div class=\"div_next\">
						<a href=\"#\" class=\"next\"><img class=\"arrow\" src=\"img/slides/arrow-next.png\" alt=\"Arrow Next\"></a>
					</div>
					<div class=\"slides_container\">";
	$replacestring .= "<div>
							<img class=\"slide_picture\" src=\"img/slides/images/slide-1.jpg\" alt=\"Slide 1\">
							<div class=\"caption\" style=\"bottom:0\">
								<p class=\"p_caption\">Ура!!!</p>
							</div>
						</div>
						<div>
							<img class=\"slide_picture\" src=\"img/slides/images/slide-2.jpg\" alt=\"Slide 2\">
							<div class=\"caption\">
								<p class=\"p_caption\">Сессии конец!</p>
							</div>
						</div>";
	$replacestring .= "</div>
					
				</div>
			</div><br/>";
	$text = str_replace($substring, $replacestring, $text);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><? echo $title; ?></title>
		<meta name="description" content="<? echo $description; ?>">
		<meta name="keywords" content="<? echo $keywords; ?>" />
		<? include_once("include/head_static.php") ?>
		<script>
			$(function(){
				$('.slides').slides({
					preload: true,
					preloadImage: 'img/slides/loading.gif',
					play: 5000,
					pause: 2500,
					hoverPause: true,
					animationStart: function(){
						$('.caption').animate({
							bottom:-35
						},100);
					},
					animationComplete: function(current){
						$('.caption').animate({
							bottom:0
						},200);
						if (window.console && console.log) {
							console.log(current);
						};
					}
				});
			});
		</script>
	</head>
	<body>
		<? include_once("include/header.php") ?>
		<div class="nav">
			<div class="nav-hide-borders">
				<? if (!strcmp($_SESSION['lang'], "en")) { ?>
				<div class="nav-member3 active"><a href="#">Main page</a></div>
				<div class="nav-member3"><a href="./program.php">Program</a></div>
				<div class="nav-member3"><a href="./register.php">Registration</a></div>
				<? } else { ?>
				<div class="nav-member3 active"><a href="#">Главная страница</a></div>
				<div class="nav-member3"><a href="./program.php">Программа</a></div>
				<div class="nav-member3"><a href="./register.php">Регистрация</a></div>
				<? } ?>
			</div>
		</div>
		<div class="content">
			<? echo $text; ?>
        </div>
	</body>
</html>
