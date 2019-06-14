<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="utf-8">
	<title>EG</title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	
	<link rel="stylesheet" href="css/main.min.css">
</head>
<body>
	<?php include('icons/symbol_sprite.php'); ?>
	<div class="preloader">
		<div class="preloader__in">
			<div class="preloader__center">
				<div class="preloader__logo">
					<svg width="159" height="120" viewBox="0 0 159 120" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path class="letter-g" d="M158.265 33.9507C158.017 46.9729 158.017 57.7859 147.994 68.0176C138.961 77.2029 125.226 82.2025 111.986 82.2025C86.1239 82.2025 65.2117 67.2038 65.2117 41.6245C65.3354 15.5801 85.629 0 112.357 0C127.082 0 147.376 6.8599 153.934 20.4634L125.102 30.3463C122.751 26.2769 118.297 24.1841 113.471 24.1841C102.458 24.1841 96.3944 33.0205 96.3944 42.6709C96.3944 51.3911 102.21 59.6462 112.233 59.6462C117.059 59.6462 123.246 57.5534 124.731 52.6701H110.748V33.9507H158.265Z" fill="white"/>
					<path class="letter-e" d="M43.1856 81.9699C43.1856 88.8298 44.4231 96.3873 53.4562 96.3873C58.0346 96.3873 61.3756 93.3643 62.2418 89.4112H104.685C98.8691 109.758 74.7396 119.176 54.0749 119.176C25.8619 119.176 0 105.456 0 76.389C0 48.368 23.0158 30.9276 51.6 30.9276C72.1411 30.9276 89.836 38.9502 99.2404 53.1351C104.561 61.0414 107.407 70.6918 106.541 82.0862H43.1856V81.9699ZM63.6029 64.4132C63.6029 58.716 59.1482 53.4839 52.9612 53.4839C46.4029 53.4839 43.1856 58.5997 43.1856 64.4132H63.6029Z" fill="white"/>
					<path class="letter" d="M105.895 82.1761C82.8504 80.1855 64.954 65.4314 64.954 41.5438C64.954 38.2651 65.3217 35.2206 65.812 32.1761C65.812 32.1761 107.734 38.3822 105.895 82.1761Z" fill="#70B62C"/>
					</svg>

				</div>
				<div class="preloader__number">0%</div>	
			</div>
		</div>
		
	</div>
	<!-- begin header -->
	<header class="header">
		<div class="header__in">
			<div class="container header__mob">
				<div class="header__wrap">
					<a href="http://evrogazon.smarto.com.ua/" class="logo">
						<img src="./img/EG_logo_eng.svg" alt="logo">
					</a>
					<ul class="menu">
						<li class="menu__item">
							<a href="#project" class="menu__link">Проектування</a>
						</li>
						<li class="menu__item">
							<a href="#auto-watering" class="menu__link">Системи Автоматичного поливу</a>
						</li>
						<li class="menu__item">
							<a href="#three" class="menu__link">Рулонний газон</a>
						</li>
						<li class="menu__item">
							<a href="#auto-watering" class="menu__link">Послуги</a>
						</li>
						<li class="menu__item">
							<a href="#foto-video" class="menu__link">Відео-Фото</a>
						</li>
						<li class="menu__item">
							<a href="#contacts" class="menu__link">Контакти</a>
						</li>
					</ul>		
					<div class="header__right">
						<a href="tel:+8067327-12-87" class="tel">
							<img src="./img/tel.svg" alt="">
							<span class="tel__link">(067) 327-12-87</span>
						</a>
						<div class="lang">
							<a href="" class="lang__item">Рус</a>
							<a href="" class="lang__item">Укр</a>
						</div>
						<div class="menu-btn-mob">
							<p>Меню</p>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- <div class="container"> -->
			<div class="logo-circle">
				<?php include('img/group.php') ?>
			</div>
		<!-- </div> -->
		<div class="social">
			<div class="social__bg">
				<svg width="48" height="199" viewBox="0 0 48 199" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path class="wow rotateIn" data-wow-delay="2s" 
					data-wow-duration="1s" d="M34.582 189.284C38.1778 183.861 39.6778 177.294 38.8089 170.785C38.432 167.99 37.548 165.198 36.3234 162.453C35.3881 160.536 34.2112 158.706 32.8561 157.034C27.5606 161.474 23.9449 166.659 22.1081 172.63C22.0171 173.03 21.926 173.43 21.7677 173.826C19.6896 181.607 20.8401 190.229 24.9696 198.19C26.645 197.279 28.1977 196.158 29.6552 194.929C31.5523 193.119 33.2157 191.261 34.582 189.284Z" fill="#3E762D"/>
					<path class="wow rotateIn" data-wow-delay="2s" 
					data-wow-duration="1.5s" d="M19.315 174.327C23.5635 173.137 27.2429 170.432 29.6812 166.706C30.7262 165.105 31.5098 163.28 32.0978 161.328C32.4671 159.93 32.674 158.47 32.7193 157.011C28.0343 156.943 23.881 158.002 20.2926 160.253C20.0687 160.418 19.8447 160.583 19.588 160.716C15.0736 163.788 11.8436 168.723 10.4355 174.638C11.699 174.913 12.9926 175.026 14.285 175.041C16.0606 174.953 17.7375 174.737 19.315 174.327Z" fill="#56A33E"/>
					<path d="M0 54C0 40.7452 10.7452 30 24 30H48V165H24C10.7452 165 0 154.255 0 141V54Z" fill="#6CBE45"/>
					<path class="wow rotateIn" data-wow-delay="2s" 
					data-wow-duration="1s" d="M4.40693 20.4475C5.81437 27.4642 9.7377 33.7434 15.4591 38.1384C17.9186 40.0224 20.7704 41.5106 23.851 42.6979C26.064 43.4642 28.3979 43.9755 30.7478 44.2252C31.4244 36.6544 30.2168 29.8075 27.0169 23.7303C26.7776 23.3481 26.5383 22.9659 26.3547 22.5345C21.9391 14.86 14.3608 9.03815 4.97878 6.04518C4.38185 8.05592 4.04352 10.1351 3.86227 12.2239C3.7898 15.107 3.93644 17.846 4.40693 20.4475Z" fill="#56A33E"/>
					<path class="wow rotateIn" data-wow-delay="2s" 
					data-wow-duration="1.5s" d="M7.46391 40.7799C10.8637 44.1955 15.4016 46.2614 20.2481 46.6007C22.3296 46.7436 24.4841 46.5184 26.6551 46.0391C28.1824 45.6462 29.6827 45.0653 31.0949 44.3315C28.6589 39.8296 25.4344 36.4351 21.3778 34.2136C21.1013 34.088 20.8248 33.9624 20.5613 33.7886C15.2281 31.1225 8.80842 30.6727 2.42833 32.4819C2.84107 33.8327 3.42443 35.1258 4.09958 36.3659C5.13117 38.0113 6.23222 39.4944 7.46391 40.7799Z" fill="#458A30"/>
				</svg>
			</div>
			<div class="social-icons">
				<a href="">
					<svg class="svg-facebook">
						<use xlink:href="#icon-facebook"></use>
					</svg>
				</a>
				<a href="">
					<svg class="svg-instagram">
						<use xlink:href="#icon-instagram"></use>
					</svg>
				</a>
				<a href="">
					<svg class="svg-youtube">
						<use xlink:href="#icon-youtube"></use>
					</svg>
				</a>
			</div>	
		</div>		
	</header>
	<!-- end header -->

	<div class="menu-mob">
		<div class="menu-mob__overlay"></div>
		<div class="menu-mob__content">
			<ul>
				<li class="menu-mob__item">
					<a href="#project" class="menu-mob__link">Проектування</a>
				</li>
				<li class="menu-mob__item">
					<a href="#auto-watering" class="menu-mob__link">Системи Автоматичного поливу</a>
				</li>
				<li class="menu-mob__item">
					<a href="#three" class="menu-mob__link">Рулонний газон</a>
				</li>
				<li class="menu-mob__item">
					<a href="#auto-watering" class="menu-mob__link">Послуги</a>
				</li>
				<li class="menu-mob__item">
					<a href="#foto-video" class="menu-mob__link">Відео-Фото</a>
				</li>
				<li class="menu-mob__item">
					<a href="#contacts" class="menu-mob__link">Контакти</a>
				</li>
			</ul>
			
		<div class="btn-close"></div>
		</div>
	</div>

	<!-- begin hero -->
	<div class="hero" id="hero">
		<div class="slider-hero js-slider-hero">
			<div class="slider-hero__item">
				<img src="./img/bg-1.png" alt="">
			</div>
			<div class="slider-hero__item">
				<img src="./img/bg-1.png" alt="">
			</div>
			<div class="slider-hero__item">
				<img src="./img/bg-1.png" alt="">
			</div>
			<div class="slider-hero__item">
				<img src="./img/bg-1.png" alt="">
			</div>
		</div>
		<div class="slider-hero__info wow slideInLeft" data-wow-delay="2s" 
					data-wow-duration="1.5s">
			<div class="container">
				<div class="slider-hero__info-in">
					<h1 class="title-lg">
						Прохолода і бездоганність натуральних газонів
					</h1>
					<div class="slider-hero__icon">
						<svg width="48" height="3" viewBox="0 0 48 3" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M20 0H0V1H-0.00012207V2H0V3H20V2H47.9999V1H20V0Z" fill="#6CBE45"/>
						</svg>
					</div>	
					<p class="slider-hero__text">
						<span class="bold">Компанія EVROGAZON</span><br> 
						працює для Вашого задоволення.
					</p>
					<div class="slider-hero__btns">
						<div class="slider-hero__btn slider-hero__btn-prev">
							<img src="./img/Arrow.svg" alt="">
						</div>
						<div class="slider-hero__btn slider-hero__btn-next">
							<img src="./img/Arrow.svg" alt="">
						</div>
					</div>
				</div>		
			</div>	
		</div>
	</div>
	<!-- end hero -->

	<!-- begin project -->
	<div class="project" id="project">
		<div class="container">
			<div class="project__title  wow fadeInDown">
				<h2 class="title-md">Проектування</h2>
			</div>
			
			<div class="project__wrap">
				<div class="project__item">
					<div class="project__subtitle">
						Ландшафтне проектування Київ і Проект ландшафтного дизайну
					</div>
					<div class="project__info">
						<span class="green">Ландшафтне проектування можна сміливо вважати основою мистецтва під назвою "Ландшафтний дизайн"!</span> Але, для успішного втілення Вашої садової мрії в реальність, слід починати з того, щоб детально розробити ландшафтний проект. Для досягнення цієї мети фахівці з озеленення повинні мати досить глибокими науковими знаннями підкріпленими практичні досвідом. Саме такі люди будуть займатися ландшафтним проектуванням озеленення Вашої ділянки якщо Ви звернетеся в компанію "Магія саду" Київ.
						Але, для успішного втілення Вашої садової мрії в реальність, слід починати з того, щоб детально розробити ландшафтний проект. Для досягнення цієї мети фахівці з озеленення повинні мати досить глибокими науковими знаннями підкріпленими практичні досвідом. Саме такі люди будуть займатися ландшафтним проектуванням озеленення Вашої ділянки якщо Ви звернетеся в компанію "Магія саду" Київ.
					</div>
				</div>
				<div class="project__item">
					<div class="slider-project">
						<div class="slider-project__top">
							<div class="slider-project__title">Галерея</div>
							<div class="slider-project__btns">
								<div class="slider__btn slider-project__btn-prev">
									<svg width="29" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28.412 9.127c-8.221-.065-16.377-.13-24.565-.162 2.363 2.168 4.66 4.466 6.894 6.764 1.23 1.295-1.068.939-1.748.259a150.261 150.261 0 0 0-7.962-7.767C.87 8.059.514 7.573.772 7.314l.065-.064c.033-.033.033-.033.097-.033C4.106 5.6 6.727 3.431 8.896.615c.55-.744 2.88.744 2.362 1.392C9.64 4.078 7.829 5.826 5.692 7.25c6.99.064 13.981.13 20.94.162.809.032 2.75 1.715 1.78 1.715z"/></svg>
								</div>
								<div class="slider__btn slider-project__btn-next">
									<svg width="29" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28.412 9.127c-8.221-.065-16.377-.13-24.565-.162 2.363 2.168 4.66 4.466 6.894 6.764 1.23 1.295-1.068.939-1.748.259a150.261 150.261 0 0 0-7.962-7.767C.87 8.059.514 7.573.772 7.314l.065-.064c.033-.033.033-.033.097-.033C4.106 5.6 6.727 3.431 8.896.615c.55-.744 2.88.744 2.362 1.392C9.64 4.078 7.829 5.826 5.692 7.25c6.99.064 13.981.13 20.94.162.809.032 2.75 1.715 1.78 1.715z"/></svg>
								</div>
							</div>
						</div>
						<div class="slider-project__wrap js-slider-project">
							<a href="./img/project14.jpg" class="slider-project__item">
								<img src="./img/project14.jpg" alt="">
							</a>
							<a href="./img/project16.jpg" class="slider-project__item">
								<img src="./img/project16.jpg" alt="">
							</a>
							<a href="./img/project2.jpg" class="slider-project__item">
								<img src="./img/project2.jpg" alt="">
							</a>
							<a href="./img/project3.jpg" class="slider-project__item">
								<img src="./img/project3.jpg" alt="">
							</a>
							<a href="./img/project4.jpg" class="slider-project__item">
								<img src="./img/project4.jpg" alt="">
							</a>
							<a href="./img/project5.jpg" class="slider-project__item">
								<img src="./img/project5.jpg" alt="">
							</a>
							<a href="./img/project6.jpg" class="slider-project__item">
								<img src="./img/project6.jpg" alt="">
							</a>
							<a href="./img/project7.jpg" class="slider-project__item">
								<img src="./img/project7.jpg" alt="">
							</a>
							<a href="./img/project8.jpg" class="slider-project__item">
								<img src="./img/project8.jpg" alt="">
							</a>
							<a href="./img/project9.jpg" class="slider-project__item">
								<img src="./img/project9.jpg" alt="">
							</a>
							<a href="./img/project10.jpg" class="slider-project__item">
								<img src="./img/project10.jpg" alt="">
							</a>
							<a href="./img/project1.jpg" class="slider-project__item">
								<img src="./img/project1.jpg" alt="">
							</a>
							<a href="./img/project12.jpg" class="slider-project__item">
								<img src="./img/project12.jpg" alt="">
							</a>
							<a href="./img/project13.jpg" class="slider-project__item">
								<img src="./img/project13.jpg" alt="">
							</a>
							<a href="./img/project.jpg" class="slider-project__item">
								<img src="./img/project11.jpg" alt="">
							</a>
							<a href="./img/project15.jpg" class="slider-project__item">
								<img src="./img/project15.jpg" alt="">
							</a>
							<a href="./img/project1.jpg" class="slider-project__item">
								<img src="./img/project1.jpg" alt="">
							</a>
							<a href="./img/project17.jpg" class="slider-project__item">
								<img src="./img/project17.jpg" alt="">
							</a>
							<a href="./img/project18.jpg" class="slider-project__item">
								<img src="./img/project18.jpg" alt="">
							</a>
							<a href="./img/project19.jpg" class="slider-project__item">
								<img src="./img/project19.jpg" alt="">
							</a>
						</div>	
					</div>
				</div>	
			</div>
		</div>
	</div>
	<!-- end project -->

	<!-- begin landscape-project -->
	<div class="landscape-project">
		<div class="container">
			<div class="landscape-project__title wow fadeInDown">
				<span class="title-lg">
					Ландшафтний проект складається з наступних складових частин:
				</span>
			</div>
			<div class="landscape-project__info">
				<div class="landscape-project__item">
					<ul class="list-block">
						<li class="list-block__item">
							<img src="./img/icon1.svg" alt="" class="wow fadeInDown">
							<span class="list-block__text"><span class="bold">Ландшафтний ескіз</span> дизайн проекту;</span>
						</li>
						<li class="list-block__item">
							<img src="./img/icon2.svg" alt="" class="wow fadeInDown">
							<span class="list-block__text"><span class="bold">3D-візуалізація</span> ландшафтного проекту;</span>
						</li>
						<li class="list-block__item">
							<img src="./img/icon3.svg" alt="" class="wow fadeInDown">
							<span class="list-block__text"><span class="bold">2D-візуалізація</span> ландшафтного проекту;</span>
						</li>
						<li class="list-block__item">
							<img src="./img/icon4.svg" alt="" class="wow fadeInDown">
							<span class="list-block__text"><span class="bold">Генеральний план</span> ландшафтного дизайн проекту;</span>
						</li>
						<li class="list-block__item">
							<img src="./img/icon5.svg" alt="" class="wow fadeInDown">
							<span class="list-block__text"><span class="bold">Дендрологічний план</span> озеленення (дендроплан);</span>
						</li>
						<li class="list-block__item">
							<img src="./img/icon6.svg" alt="" class="wow fadeInDown">
							<span class="list-block__text bold">Роздільне креслення</span>
						</li>
					</ul>
				</div>
				<div class="landscape-project__item">
					<ul class="list-block">
						<li class="list-block__item">
							<img src="./img/icon7.svg" alt="" class="wow fadeInDown">
							<span class="list-block__text bold">Посадкове креслення;</span>
						</li>
						<li class="list-block__item">
							<img src="./img/icon8.svg" alt="" class="wow fadeInDown">
							<span class="list-block__text"><span class="bold">План-схема системи</span> автоматичного поливу;</span>
						</li>
						<li class="list-block__item">
							<img src="./img/icon9.svg" alt="" class="wow fadeInDown">
							<span class="list-block__text"><span class="bold">Схема розстановки</span> освітлювальних приладів;</span>
						</li>
						<li class="list-block__item">
							<img src="./img/icon10.svg" alt="" class="wow fadeInDown">
							<span class="list-block__text"><span class="bold">Геодезична або топографічна</span> зйомка ділянки (при необхідності);</span>
						</li>
						<li class="list-block__item">
							<img src="./img/icon11.svg" alt="" class="wow fadeInDown">
							<span class="list-block__text"><span class="bold">Робочі креслення</span> реалізації ландшафтного проектування дизайну озеленення.</span>
						</li>						
					</ul>
				</div>
			</div>
			<div class="landscape-project__btn">
				<a href="pdf/11859.pdf" target="blank" class="btn-white">Прайс</a>
			</div>
		</div>
	</div>
	<!-- end landscape-project -->

	<!-- begin auto-watering -->
	<div class="auto-watering" id="auto-watering">
		<div class="container">
			<div class="auto-watering__title wow fadeInDown">
				<h2 class="title-md">
					Системи автоматичного поливу
				</h2>
			</div>
		</div>
		<div class="auto-watering__top">
			<div class="container">
				<div class="auto-watering__in">
					<div class="auto-watering__text-bold text-bold">
						Надаємо послуги по встановленню та продажу обладнання для автополиву
					</div>
					<div class="auto-watering__text-light text-light">
						<span class="bold">Автоматичний полив вже давно перестав бути заморською дивиною</span> і використовується наразі для зрошування газонів в міських парках , на футбольних майданчиках та на ділянках заміських будинків.
					</div>
					<div class="auto-watering__images">
						<img src="./img/four.svg" alt="">
					</div>
				</div>
			</div>	
		</div>
		<div class="auto-watering__center" id="three">
			<!-- <img src="img/maxresdefault.jpg" alt=""> -->
			<div class="auto-watering__main">
				<div class="auto-watering__left">
					<div class="auto-watering__item">
						<img src="./img/rectangle1.svg" alt="">
						<div class="auto-watering__info">
							<div class="auto-watering__icon">
								<img src="./img/ball.svg" alt="">
							</div>
							<p>Спортивний Газон</p> 
							<p class="text-big bold">65,00 грн/м</p>
						</div>
						
					</div>
					<div class="auto-watering__item">
						<img src="./img/rectangle1.svg" alt="" class="img-rotate">
						<div class="auto-watering__info">
							<div class="auto-watering__icon">
								<img src="./img/butterfl.svg" alt="">
							</div>
							<p>Універсальний Газон</p> 
							<p class="text-big bold">57,00 грн/м</p>
						</div>
					</div>
				</div>
				<div class="auto-watering__right">
					<div class="auto-watering__right-in">
					<!-- img src="img/letter.svg" alt=""> -->
						<div class="auto-watering__info-big">
							<div class="auto-watering__subtitle">
								<span class="title-lg">
									Рулонний газон
								</span>
							</div>
							<p class="text-bold">Разом з газоном Ви отримаєте</p>
							<p>не тільки красивий ландшафт своєї території, а також і повний спектр послуг і рекомендацій по догляду.</p>
							<div class="auto-watering__btn">
								<a href="" class="btn-green">Прайс</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="auto-watering__bottom">
			<div class="container">
				<div class="auto-watering__in">
					<div class="auto-watering__proect">
						<img src="./img/dozgdevanie.png" alt="">
					</div>
					<div class="auto-watering__description">
						<div class="auto-watering__description-name title-sm">
							Розробка проектів автополиву
						</div>
						<div class="auto-watering__description-text">
							<p>
								<span class="green">Автоматичний полив - це складна система дощовиків, форсунок, електромагнітних клапанів, трубопроводу з сполученими фітингами що керується контролерами.</span> Лідером в даний час на цьому ринку є компанія Hunter Industries і Rain Bird що створили величезний спектр устаткування для вирішення будь-яких завдань і продовжують вводити різноманітні інновації.
							</p>
							<p>						
								<span class="green">Для поливу різних площ існують різні дощовики, що розрізняються по потужності і споживанню води.</span> Так, наприклад, для поливу футбольних полів найкращим рішенням будуть роторні дощовики з металевим штоком. Такі
							</p>
							<p>						
								<span class="green">Для поливу різних площ існують різні дощовики, що розрізняються по потужності і споживанню води.</span> Так, наприклад, для поливу футбольних полів найкращим рішенням будуть роторні дощовики з металевим штоком. Такі
							</p>
						</div>
					</div>
				</div>	
			</div>		
		</div>
	</div>
	<!-- end auto-watering -->
		
	<!-- begin foto-video -->
	<div class="foto-video" id="foto-video">
		<div class="container">
			<div class="foto-video__title wow fadeInDown">
				<h2 class="title-md">
					Відео-фото
				</h2>
			</div>
			<div class="foto-video__subtitle title-sm">Наші роботи</div>
		</div>
		<div class="slider-work">
			<div class="slider-work__in js-slider-work">
				<div class="slider-work__item">
					<img src="./img/slider-work1.jpg" alt="">
				</div>
				<div class="slider-work__item">
					<img src="./img/slider-work1.jpg" alt="">
				</div>
				<div class="slider-work__item">
					<img src="./img/slider-work1.jpg" alt="">
				</div>
			</div>
			<div class="slider-work__btns">
				<div class="slider-work__btn-prev">
					<img src="./img/Arrow.svg" alt="">
				</div>
				<div class="slider-work__btn-next">
					<img src="./img/Arrow.svg" alt="">
				</div>
			</div>	
		</div>
		<div class="video">
			<div class="container">
				<div class="video__in">
					<div class="video__item">
						<div class="video__title title-sm">
							Назва відео
						</div>
						<div class="video__video">
							<video  width="400" height="300" class="js-video" poster="./img/vide-bg.jpg">
							  <source src="video/video.mp4" type="video/mp4"><!-- MP4 для Safari, IE9, iPhone, iPad, Android, и Windows Phone 7 -->
							  <source src="video.webm" type="video/video.webm"><!-- WebM/VP8 для Firefox4, Opera, и Chrome -->
							</video>
						</div>
					</div>
					<div class="video__item">
						<div class="video__title title-sm">
							Назва відео
						</div>
						<div class="video__video">
							<video  width="400" height="300" class="js-video" poster="./img/vide-bg.jpg">
							  <source src="video/video.mp4" type="video/mp4"><!-- MP4 для Safari, IE9, iPhone, iPad, Android, и Windows Phone 7 -->
							  <source src="video.webm" type="video/video.webm"><!-- WebM/VP8 для Firefox4, Opera, и Chrome -->
							</video>
						</div>
					</div>
				</div>
			</div>	
		</div>
		
	</div>
	<!-- end foto-video -->
	<!-- begin reviews -->
	<div class="reviews">
		<div class="container">
			<div class="reviews__title wow fadeInDown">
				<h2 class="title-md">
					Відгуки
				</h2>
			</div>

			<div class="slider-reviews">
				<div class="slider-reviews__in">
					<div class="slider-reviews__btns">
						<div class="slider__btn slider-reviews__btn-prev">
							<svg width="29" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28.412 9.127c-8.221-.065-16.377-.13-24.565-.162 2.363 2.168 4.66 4.466 6.894 6.764 1.23 1.295-1.068.939-1.748.259a150.261 150.261 0 0 0-7.962-7.767C.87 8.059.514 7.573.772 7.314l.065-.064c.033-.033.033-.033.097-.033C4.106 5.6 6.727 3.431 8.896.615c.55-.744 2.88.744 2.362 1.392C9.64 4.078 7.829 5.826 5.692 7.25c6.99.064 13.981.13 20.94.162.809.032 2.75 1.715 1.78 1.715z"/></svg>
						</div>
						<div class="slider__btn slider-reviews__btn-next">
							<svg width="29" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28.412 9.127c-8.221-.065-16.377-.13-24.565-.162 2.363 2.168 4.66 4.466 6.894 6.764 1.23 1.295-1.068.939-1.748.259a150.261 150.261 0 0 0-7.962-7.767C.87 8.059.514 7.573.772 7.314l.065-.064c.033-.033.033-.033.097-.033C4.106 5.6 6.727 3.431 8.896.615c.55-.744 2.88.744 2.362 1.392C9.64 4.078 7.829 5.826 5.692 7.25c6.99.064 13.981.13 20.94.162.809.032 2.75 1.715 1.78 1.715z"/></svg>
						</div>
					</div>		
					<div class="slider-reviews__wrap js-slider-reviews">
						<div class="slider-reviews__item">
							<div class="slider-reviews__item-in">
								<div class="slider-reviews__img">
									<img src="./img/client.jpg" alt="">
								</div>
								<div class="slider-reviews__info">
									<p class="slider-reviews__name title-sm">
										Евгеній Степанович
									</p>
									<p class="slider-reviews__description">
										Дуже дякую. Гарна команда. Встановила швидко, якісно та не дорого! Дуже дякую. Гарна команда. Встановила швидко, якісно та не дорого! Дуже дякую. Гарна команда. Встановила швидко, якісно та не дорого! Дуже дякую. Гарна команда. Встановила швидко, якісно та не дорого! 
									</p>
								</div>
							</div>			
						</div>
						<div class="slider-reviews__item">
							<div class="slider-reviews__item-in">
								<div class="slider-reviews__img">
									<img src="./img/client2.jpg" alt="">
								</div>
								<div class="slider-reviews__info">
									<p class="slider-reviews__name title-sm">
										Віктор Березець
									</p>
									<p class="slider-reviews__description">
										Дуже дякую. Гарна команда. Встановила швидко, якісно та не дорого! Дуже дякую. Гарна команда. Встановила швидко, якісно та не дорого!
									</p>
								</div>
							</div>		
						</div>
						<div class="slider-reviews__item">
							<div class="slider-reviews__item-in">
								<div class="slider-reviews__img">
									<img src="./img/client2.jpg" alt="">
								</div>
								<div class="slider-reviews__info">
									<p class="slider-reviews__name title-sm">
										Віктор Березець
									</p>
									<p class="slider-reviews__description">
										Дуже дякую. Гарна команда. Встановила швидко, якісно та не дорого! Дуже дякую. Гарна команда. Встановила швидко, якісно та не дорого!
									</p>
								</div>
							</div>		
						</div>
					</div>
				</div>	
			</div>	
		</div>
	</div>
	<!-- end reviews -->

	<!-- begin contacts -->
	<div class="contacts" id="contacts">
		<div class="container">
			<div class="reviews__title wow fadeInDown">
				<h2 class="title-md">
					Контакти
				</h2>
			</div>
		</div>
		<div class="contacts__main">
			<div class="contacts__form wow slideInLeft">
				<form class="mainForm" id="contact">
					<div class="mainForm__title">
						<p class="text-bold">У Вас виникли запитання?</p>
						<p class="text-bold">Напишіть нам!</p>
					</div>
		            <div class="mainForm-wrap mainForm-wrap_brt requaired">
		              <span class="mainForm__text" data-defaultMessage="Имя:" data-errorMessage="Імя не заповнено:">Ваше ім'я:</span>
		              <input name="name" type="text" class="mainForm__input mainForm__input-requaired">
		            </div>
		            <!--  </mainForm-wrap> -->
		            <div class="mainForm-wrap requaired">
		              <span class="mainForm__text" data-defaultMessage="Ваш телефон:" data-errorMessage="Телефон не заповнений:">Ваш телефон:</span>
		              <input name="tel" type="text" class="mainForm__input mainForm__input-requaired inputtelmask">
		            </div>
		            <!--  </mainForm-wrap> -->
		            <div class="mainForm-wrap mainForm-wrap_brb">
		              <span class="mainForm__text mainForm__text_brb " data-defaultMessage="Повідомлення:" data-errorMessage="Заповніть повідомлення">Заповніть повідомлення:</span>
		              <textarea  rows="10" cols="45" name="message" class="mainForm__input"></textarea>
		            </div>
		            <!--  </mainForm-wrap> -->
		            <button class="button button--purple sand-form">Надіслати
		              <span class="span-animation-1 span-animation"></span>
		              <span class="span-animation-2 span-animation"></span>
		              <span class="span-animation-3 span-animation"></span>
		              <span class="span-animation-4 span-animation"></span>
		            </button>
		        </form>
			</div>
			<div class="contacts__info  wow slideInRight">
				<!-- <div class="contacts__img">
					<img src="img/letter2.svg" alt="">
				</div> -->
				<div class="contacts__info-in">
					<ul class="contacts-list">
						<li class="contacts__item">
							<a href="" class="contacts__link">
								<svg class="svg-map">
							       <use xlink:href="#icon-map"></use>
							    </svg>
								<span>м.Київ, вул.Онуфрія Трутенка,8</span>
							</a>
						</li>
						<li class="contacts__item">
							<a href="tel:+380673271287" class="contacts__link">
								<svg class="svg-phone">
							       <use xlink:href="#icon-phone"></use>
							    </svg>
								<span>+380673271287</span>               
							</a>
						</li>
						<li class="contacts__item">
							<a href="tel:+380636258555" class="contacts__link">
								<svg class="svg-phone">
							       <use xlink:href="#icon-phone"></use>
							    </svg>
								<span>+380636258555</span>
							</a>         
						</li>
						<li class="contacts__item">
							<a href="" class="contacts__link">
								<svg class="svg-mail">
							       <use xlink:href="#icon-mail"></use>
							    </svg>
								<span>evrogazoner@gmail.com</span>
							</a>  
						</li>
						<li class="contacts__item">
							<a href="" class="contacts__link">
								<svg class="svg-clock">
							       <use xlink:href="#icon-clock"></use>
							    </svg>
								<span>Режим работи: з 9:00 до 20:00 щоденно без вихідних.</span>
							</a> 
						</li>
					</ul>
					<div class="contacts__soc">
						<p>Слідкуйте за нами у соц. мережах</p>
						<div class="soc-list">
							<a href="" class="soc-list__link">
								<svg class="svg-facebook">
							       <use xlink:href="#icon-facebook"></use>
							    </svg>
							</a>
							<a href="" class="soc-list__link">
								<svg class="svg-youtube">
							       <use xlink:href="#icon-youtube"></use>
							    </svg>
							</a>
							<a href="" class="soc-list__link">
								<svg class="svg-instagram">
							       <use xlink:href="#icon-instagram"></use>
							    </svg>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contacts -->
	<footer class="footer">
		<div class="container">
			<div class="footer__in">
				<div class="copyright">© 2018 Еврогазон усі права захищено</div>
				<div class="logo-dev">
					<a href="https://smarto.agency/"><img src="./img/logo-dev.svg" alt=""></a>
				</div>
			</div>
		</div>
	</footer>
	<script src="js/scripts.min.js"></script>
</body>
</html>
