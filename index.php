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
			
			<!--
			<h1>Куда приводит выпускной!</h1>
			
			<p>
				</p><div class="slides">
					<div class="div_prev">
						<a href="#" class="prev"><img class="arrow" src="img/slides/arrow-prev.png" alt="Arrow Prev"></a>
					<p></p>
					<p>
						<a href="#" class="next"><img class="arrow" src="img/slides/arrow-next.png" alt="Arrow Next"></a>
					</p>
					<p>
						</p><div>
							<img class="slide_picture" src="img/slides/slide-1.jpg" alt="Slide 1">
							<div class="caption" style="bottom:0">
								<p class="p_caption">Ура!!!</p>
							<p></p>
						</div>
						<p>
							<img class="slide_picture" src="img/slides/slide-2.jpg" alt="Slide 2">
							</p><div class="caption">
								<p class="p_caption">Сессии конец!</p>
							<p></p>
						</div>
						<p>
							<img class="slide_picture" src="img/slides/slide-3.jpg" alt="Slide 3">
							</p><div class="caption">
								<p class="p_caption">Отдых!</p>
							<p></p>
						</div>
						<p>
							<img class="slide_picture" src="img/slides/slide-4.jpg" alt="Slide 4">
							</p><div class="caption">
								<p class="p_caption">Love...</p>
							<p></p>
						</div>
						<p>
							<img class="slide_picture" src="img/slides/slide-5.jpg" alt="Slide 5">
							</p><div class="caption">
								<p class="p_caption">“I must go down to the sea again, to the lonely sea and the sky...”</p>
							<p></p>
						</div>
						<p>
							<img class="slide_picture" src="img/slides/slide-6.jpg" alt="Slide 6">
							</p><div class="caption">
								<p class="p_caption">Beach</p>
							<p></p>
						</div>
						<p>
							<img class="slide_picture" src="img/slides/slide-7.jpg" alt="Slide 7">
							</p><div class="caption">
								<p class="p_caption">Party</p>
							<p></p>
						</div>
					</div>
					
				</div>
			</div>
			
			<br>
			<p>Впервые в России мы организуем поездку на море для всех российских студентов. Поездка включает в себя полный пакет с учетом перелета, трансфера, проживания в отеле, питания, напитков и развлечений. Днем - пляжный волейбол, лимбо, speedating и многое другое ! Вечером - легендарные тематические DJs пати. Это твой шанс отпраздновать окончание ВУЗа вместе со всеми студентами. 
Короче говоря, если ты хочешь прочувствовать сумасшедшую атмосферу и повеселится с друзьями - отправляйся на ПЛЯЖ!!!</p>
			<p style="text-align: center;"><button>VK</button><button>Facebook</button></p>

			-->
        </div>
	</body>
</html>

