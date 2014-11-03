<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Пряж - see you at the beach | Главная</title>
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
				<div class="nav-member3 active"><a href="#">Главная</a></div>
				<div class="nav-member3"><a href="./program.php">Программа</a></div>
				<div class="nav-member3"><a href="./register.php">Регистрация</a></div>
			</div>
		</div>
		<div class="content">
			<h1>Куда приводит выпускной!</h1>
			
			<div class="slides_box">
				<div class="slides">
					<div class="div_prev">
						<a href="#" class="prev"><img class="arrow" src="img/slides/arrow-prev.png" alt="Arrow Prev"></a>
					</div>
					<div class="div_next">
						<a href="#" class="next"><img class="arrow" src="img/slides/arrow-next.png" alt="Arrow Next"></a>
					</div>
					<div class="slides_container">
						<div>
							<img class="slide_picture" src="img/slides/slide-1.jpg" alt="Slide 1">
							<div class="caption" style="bottom:0">
								<p class="p_caption">Ура!!!</p>
							</div>
						</div>
						<div>
							<img class="slide_picture" src="img/slides/slide-2.jpg" alt="Slide 2">
							<div class="caption">
								<p class="p_caption">Сессии конец!</p>
							</div>
						</div>
						<div>
							<img class="slide_picture" src="img/slides/slide-3.jpg" alt="Slide 3">
							<div class="caption">
								<p class="p_caption">Отдых!</p>
							</div>
						</div>
						<div>
							<img class="slide_picture" src="img/slides/slide-4.jpg" alt="Slide 4">
							<div class="caption">
								<p class="p_caption">Love...</p>
							</div>
						</div>
						<div>
							<img class="slide_picture" src="img/slides/slide-5.jpg" alt="Slide 5">
							<div class="caption">
								<p class="p_caption">&ldquo;I must go down to the sea again, to the lonely sea and the sky...&rdquo;</p>
							</div>
						</div>
						<div>
							<img class="slide_picture" src="img/slides/slide-6.jpg" alt="Slide 6">
							<div class="caption">
								<p class="p_caption">Beach</p>
							</div>
						</div>
						<div>
							<img class="slide_picture" src="img/slides/slide-7.jpg" alt="Slide 7">
							<div class="caption">
								<p class="p_caption">Party</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<br />
			<p>Впервые в России мы организуем поездку на море для всех российских студентов. Поездка включает в себя полный пакет с учетом перелета, трансфера, проживания в отеле, питания, напитков и развлечений. Днем - пляжный волейбол, лимбо, speedating и многое другое ! Вечером - легендарные тематические DJs пати. Это твой шанс отпраздновать окончание ВУЗа вместе со всеми студентами. 
Короче говоря, если ты хочешь прочувствовать сумасшедшую атмосферу и повеселится с друзьями - отправляйся на ПЛЯЖ!!!</p>
			<p style="text-align: center;"><button>VK</button><button>Facebook</button></p>
        </div>
	</body>
</html>

