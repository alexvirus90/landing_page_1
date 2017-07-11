<?php
	require_once "functions/start.php";

	if (!isset($_SESSION["camp_id"]) || !$_SESSION["camp_id"]) {}

	if (!isset($_SESSION["camp_id"]) || !$_SESSION["camp_id"]) {
			$data = array();
			$data["ip"] = ip2long($_SERVER["REMOTE_ADDR"]);
			$data["utm_source"] = isset($request["utm_source"])? $request["utm_source"] : null;
			$data["utm_campaign"] = isset($request["utm_campaign"])? $request["utm_campaign"] : null;
			$data["utm_content"] = isset($request["utm_content"])? $request["utm_content"] : null;
			$data["utm_term"] = isset($request["utm_term"])? $request["utm_term"] : null;
			$camp_id = getCampID($data);
			if (!$camp_id) {
					$data["ref"] = isset($_SERVER["HTTP_REFERER"])? $_SERVER["HTTP_REFERER"] : null;
					$data["date"] = time();
					$camp_id = addCamp($data);
			}
			$_SESSION["camp_id"] = $camp_id;
	}
?>
<!doctype html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title>Создание лендингов на заказ</title>
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Заказ на создание лендинга." />
	<meta name="keywords" content="заказ лендинга, создание лендинга" />
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="/css/main.css" />
	<link rel="stylesheet" href="/css/fonts.css" />
	<link rel="stylesheet" href="/css/media.css" />
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" href="lib/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="lib/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="lib/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="lib/owl-carousel/owl.carousel.css" />
	<link rel="stylesheet" href="lib/countdown/jquery.countdown.css" />
</head>
<body>

	<!-- БЛОК POPUP -->

	<div id="parent_popup">
		<div id="popup">
			<div id="popup_close">
				<img src="images/popup_close.png" alt="Закрыть">
			</div>
			<div id="popup_main">
				<h3>Мы Вам перезвоним<br />через несколько минут</h3>
				<form action="order.php" name="order" method="post">
					<div>
						<input type="text" name="phone" placeholder="Телефон" required />
					</div>
					<div>
						<input type="submit" name="order" value="Жду звонка!" />
					</div>
				</form>
			</div>
		</div>
	</div>

	<div id="menu">
		<a href="#advantages">Наши преимущества</a>
		<a href="#steps">Порядок работы</a>
		<a href="#why">Достижение эффективности</a>
		<a href="#works">Наши работы и цены</a>
		<a href="#guarantee">Гарантия</a>
		<a class="order" href="#">Оформить заявку</a>
	</div>

	<!-- БЛОК HEADER -->

	<div class="header">
		<header>
			<h1 class="wow bounceInLeft">Landing Page под ключ</h1>
			<h2 class="wow bounceInRight">без предоплаты и с гарантией результата</h2>
		</header>
	</div>

	<!-- БЛОК ADVANTAGES -->

	<div class="advantages">
		<div id="advantages">
			<h2 class="wow flipInX">Наши преимущества</h2>
			<div class="container">
				<div class="row wow fadeInDown">
					<div class="col-md-4">
						<img src="images/a_1.png" alt>
						<p>Срок разработки<br />не более 14 дней</p>
					</div>
					<div class="col-md-4">
						<img src="images/a_2.png" alt>
						<p>Высокое качество работ<br />(портфолио ниже)</p>
					</div>
					<div class="col-md-4">
						<img src="images/a_3.png" alt>
						<p>Делаем всё под ключ</p>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="row wow fadeInUp">
					<div class="col-md-4">
						<img src="images/a_4.png" alt>
						<p>Бесплатное создание рекламной<br />кампании в Яндекс.Директ<br />(рекламный бюджет уже входит<br />в стоимость создания лендинга)</p>
					</div>
					<div class="col-md-4">
						<img src="images/a_5.png" alt>
						<p>Проводим SPLIT-тестирование<br />для достижения максимальной<br />эффективности лендинга</p>
					</div>
					<div class="col-md-4">
						<img src="images/a_6.png" alt>
						<p>Без предоплаты! </p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="button wow swing">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</div>
		</div>
	</div>

	<!-- БЛОК STEPS -->

	<div class="steps">
		<div id="steps">
			<h2 class="wow flipInX">Порядок работы</h2>
			<div id="steps_table">
				<div class="step wow slideInLeft">
					<p class="number">01</p>
					<p>Вы оставляете заявку</p>
				</div>
				<div class="step wow slideInLeft">
					<p class="number">03</p>
					<p>Мы готовим прототип, в который<br />Вы можете вносить коррективы</p>
				</div>
				<div class="step wow slideInLeft">
					<p class="number">05</p>
					<p>Запускаем рекламу<br />и получаем Вам первых клиентов</p>
				</div>
				<div class="clear"></div>
				<div class="step wow slideInRight">
					<p class="number">02</p>
					<p>Мы созваниваемся с Вами<br />и консультируем Вас, опираясь<br />на специфику Вашего бизнеса</p>
				</div>
				<div class="step wow slideInRight">
					<p class="number">04</p>
					<p>Делаем полностью лендинг,<br />в который Вы также можете<br />вносить коррективы</p>
				</div>
				<div class="step wow slideInRight">
					<p class="number">06</p>
					<p>Вы оплачиваете<br />стоимость лендинга,<br />а мы присылаем все<br />исходники, даём<br />доступ к уже работа-<br />ющей рекламной<br />кампании и к<br />первым клиентам</p>
				</div>
				<div class="clear"></div>
			</div>
			<div class="button wow swing">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</div>
		</div>
	</div>

	<!-- БЛОК WHY -->

	<div class="why">
		<div id="why">
			<h2 class="wow flipInX">Почему наши лендинги эффективны?</h2>
			<div class="container">
				<div class="row">
					<div class="col-md-4 wow rotateIn">
						<img src="images/w_1.png" alt>
						<p>Все наши лендинги оптимизированы под мобильные устройства</p>
					</div>
					<div class="col-md-4 wow rotateIn">
						<img src="images/w_2.png" alt>
						<p>Мы используем jQuery – библиотеку JavaScript, которая позволяет делать очень приятную анимацию.Это делает Ваш лендинг более красивым и современным, что, безусловно,положительно скажется на конверсии</p>
					</div>
					<div class="col-md-4 wow rotateIn">
						<img src="images/w_3.png" alt>
						<p>Оповещение о заявках по SMS.<br />По Вашему желанию мы сможем сделать так, чтобы сразу после заявки Вам отправлять SMS с номером телефона клиента. И Вы сразу сможете позвонить ему. Клиент будет точно приятно шокирован от Вашей скорости!</p>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-md-6 wow rotateIn">
						<img src="images/w_4.png" alt>
						<p>Оптимизация рекламной кампании. Сюда входит анализ каждого ключевого запроса: удаление неэффективных, снижение цен на слабоэффективных и повышение цен на высокоэффективные с целью повышение числа клиентов. В результате, Вы гарантированно получаете максимальное число заявок при минимальной её стоимости.</p>
					</div>
					<div class="col-md-6 wow rotateIn">
						<img src="images/w_5.png" alt>
						<p>В обязательном порядке мы проводим SPLIT-тесты. Например, берётся цена и изменяется в сторону увеличения. Дальше половина клиентов видят повышенную цену, а другая половина – старую цену. И смотрится, от какой половины в итоге больше прибыль. Очень часто получается, что при увеличении цены на 50%, число заявок уменьшается лишь на 10% или не изменяется вовсе. На нашей практике даже бывали случаи, когда количество продаж становится даже больше, поэтому прибыль вырастает сильнее, чем цена.</p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="button wow swing">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</div>
		</div>
	</div>

	<!-- БЛОК WORKS -->

	<div class="works">
		<div id="works">
			<h2 class="wow flipInX">Наши последние работы и цены на них</h2>
			<div class="container">
				<div class="row mb wow lightSpeedIn">
					<div class="col-md-4">
						<div class="site">
							<a href="images/works/site_1.jpg">
								<img src="images/works/site_1_s.png" alt />
							</a>
						</div>
						<div class="row">
							<div class="col-md-6 cell">Общая стоимость:</div>
							<div class="col-md-6 cell">15000 рублей</div>
						</div>
						<div class="row">
							<div class="col-md-6 cell">Цена заявки:</div>
							<div class="col-md-6 cell">190 рублей</div>
						</div>
						<div class="row">
							<div class="col-md-6 cell">Заявок в неделю:</div>
							<div class="col-md-6 cell">12</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="site">
							<a href="images/works/site_2.jpg">
								<img src="images/works/site_2_s.png" alt />
							</a>
						</div>
						<div class="row">
							<div class="col-md-6 cell">Общая стоимость:</div>
							<div class="col-md-6 cell">10000 рублей</div>
						</div>
						<div class="row">
							<div class="col-md-6 cell">Цена заявки:</div>
							<div class="col-md-6 cell">280 рублей</div>
						</div>
						<div class="row">
							<div class="col-md-6 cell">Заявок в неделю:</div>
							<div class="col-md-6 cell">37</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="site">
							<a href="images/works/site_3.jpg">
								<img src="images/works/site_3_s.png" alt />
							</a>
						</div>
						<div class="row">
							<div class="col-md-6 cell">Общая стоимость:</div>
							<div class="col-md-6 cell">12000 рублей</div>
						</div>
						<div class="row">
							<div class="col-md-6 cell">Цена заявки:</div>
							<div class="col-md-6 cell">160 рублей</div>
						</div>
						<div class="row">
							<div class="col-md-6 cell">Заявок в неделю:</div>
							<div class="col-md-6 cell">48</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="row mb wow lightSpeedIn">
					<div class="col-md-4">
						<div class="site">
							<a href="images/works/site_4.jpg">
								<img src="images/works/site_4_s.png" alt />
							</a>
						</div>
						<div class="row">
							<div class="col-md-6 cell">Общая стоимость:</div>
							<div class="col-md-6 cell">15000 рублей</div>
						</div>
						<div class="row">
							<div class="col-md-6 cell">Цена заявки:</div>
							<div class="col-md-6 cell">240 рублей</div>
						</div>
						<div class="row">
							<div class="col-md-6 cell">Заявок в неделю:</div>
							<div class="col-md-6 cell">15</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="site">
							<a href="images/works/site_5.jpg">
								<img src="images/works/site_5_s.png" alt />
							</a>
						</div>
						<div class="row">
							<div class="col-md-6 cell">Общая стоимость:</div>
							<div class="col-md-6 cell">15000 рублей</div>
						</div>
						<div class="row">
							<div class="col-md-6 cell">Цена заявки:</div>
							<div class="col-md-6 cell">220 рублей</div>
						</div>
						<div class="row">
							<div class="col-md-6 cell">Заявок в неделю:</div>
							<div class="col-md-6 cell">37</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="site">
							<a href="images/works/site_6.jpg">
								<img src="images/works/site_6_s.png" alt />
							</a>
						</div>
						<div class="row">
							<div class="col-md-6 cell">Общая стоимость:</div>
							<div class="col-md-6 cell">17000 рублей</div>
						</div>
						<div class="row">
							<div class="col-md-6 cell">Цена заявки:</div>
							<div class="col-md-6 cell">350 рублей</div>
						</div>
						<div class="row">
							<div class="col-md-6 cell">Заявок в неделю:</div>
							<div class="col-md-6 cell">24</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<!-- БЛОК GUARANTEE -->

	<div class="guarantee">
		<div id="guarantee">
			<div class="container">
				<div class="row">
					<div class="col-md-4 icon wow flash">
						<img src="images/guarantee_icon.png" alt />
					</div>
					<div class="col-md-7 guarantee_text wow flipInY">
						<p>Мы гарантируем наивысшее качество своей работы. Но подобные гарантии дают все. Поэтому мы делаем очень просто: не требуем никакой предоплаты, не требуем даже денег на рекламный бюджет. Мы просто всё делаем, а потом показываем результат в виде эффективного лендинга, анализа проведённых SPLIT-тестов, полностью настроенной и оптимизированной рекламной кампании и реальных клиентов. По этой причине мы боимся не получить оплату, поскольку Вам самим будет невыгодно отказаться от всего этого. Однако, если Вам не понравится, то Вы сможете отказаться от лендинга и не платить за него.</p>
						<p>Согласитесь, что это очень выгодное предложение для Вас, так как Вы не рискуете ни копейкой.</p>
					</div>
				</div>
			</div>
			<div class="button wow swing">ОСТАВИТЬ ЗАЯВКУ</div>
		</div>
	</div>

	<!-- БЛОК FOOTER -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p>Copyright &copy; <?=date("Y") ?>. Все права защищены.</p>
				</div>
				<div class="col-md-3">
					<p>Телефон: +7 (495) 104-45-54</p>
				</div>
				<div class="col-md-3">
					<p>E-mail: info@mysite.ru</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</footer>

	<!--[if lt IE 9]>
	<script src="lib/html5shiv/es5-shim.min.js"></script>
	<script src="lib/html5shiv/html5shiv.min.js"></script>
	<script src="lib/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="lib/respond/respond.min.js"></script>
	<![endif]-->
	<script src="lib/jquery/jquery-3.2.1.min.js"></script>
	<script src="lib/jquery-mousewheel/jquery.mousewheel.min.js"></script>
	<script src="lib/fancybox/jquery.fancybox.pack.js"></script>
	<script src="lib/waypoints/waypoints-1.6.2.min.js"></script>
	<script src="lib/scrollto/jquery.scrollTo.min.js"></script>
	<script src="lib/owl-carousel/owl.carousel.min.js"></script>
	<script src="lib/countdown/jquery.plugin.js"></script>
	<script src="lib/countdown/jquery.countdown.min.js"></script>
	<script src="lib/countdown/jquery.countdown-ru.js"></script>
	<script src="lib/landing-nav/navigation.js"></script>
	<script src="lib/inputmask/inputmask.js"></script>
	<script src="lib/inputmask/jquery.inputmask.js"></script>
	<script src="lib/wow/wow.min.js"></script>
	<script src="js/functions.js"></script>

	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

</body>

</html>
