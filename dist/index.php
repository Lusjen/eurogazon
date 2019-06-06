<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	
	<link rel="stylesheet" href="css/main.min.css">
</head>
<body>
	<?php include('icons/symbol_sprite.php'); ?>
	<!-- begin header -->
	<header class="header">
		<div class="header__in">
			<div class="container">
				<div class="header__wrap">
					<div class="logo">
						<img src="img/EG_logo_eng.svg" alt="logo">
					</div>
					<ul class="menu">
						<li class="menu__item">
							<a href="#" class="menu__link">Проектування</a>
						</li>
						<li class="menu__item">
							<a href="#" class="menu__link">Системи Автоматичного поливу</a>
						</li>
						<li class="menu__item">
							<a href="#" class="menu__link">Рулонний газон</a>
						</li>
						<li class="menu__item">
							<a href="#" class="menu__link">Послуги</a>
						</li>
						<li class="menu__item">
							<a href="#" class="menu__link">Відео-Фото</a>
						</li>
						<li class="menu__item">
							<a href="#" class="menu__link">Контакти</a>
						</li>
					</ul>
					<div class="tel">
						<a href="tel:+8067 327-12-87" class="tel__link">(067) 327-12-87</a>
					</div>
					<div class="lang">
						<a href="" class="lang__item">Рус</a>
						<a href="" class="lang__item">Укр</a>
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
				<img src="img/Social.svg" alt="">
			</div>
			<div class="social-icons">
				<a href="">
					<svg width="32" height="33" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M16 0C7.17764 0 0 7.17764 0 16C0 24.8217 7.17764 32 16 32C24.8217 32 32 24.8217 32 16C32 7.17764 24.823 0 16 0ZM19.9791 16.5633H17.376C17.376 20.7221 17.376 25.8413 17.376 25.8413H13.5187C13.5187 25.8413 13.5187 20.7718 13.5187 16.5633H11.6852V13.2841H13.5187V11.1631C13.5187 9.64408 14.2406 7.27044 17.4114 7.27044L20.2697 7.2814V10.4645C20.2697 10.4645 18.5328 10.4645 18.1951 10.4645C17.8574 10.4645 17.3773 10.6334 17.3773 11.3578V13.2848H20.3161L19.9791 16.5633Z" fill="white"/>
					</svg>
				</a>
				<a href="">
					<svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M19.0625 16.5C19.0625 18.2443 17.6914 19.6582 16 19.6582C14.3086 19.6582 12.9375 18.2443 12.9375 16.5C12.9375 14.7557 14.3086 13.3418 16 13.3418C17.6914 13.3418 19.0625 14.7557 19.0625 16.5Z" fill="white"/>
					<path d="M23.1621 10.9123C23.0149 10.5009 22.78 10.1285 22.4749 9.82289C22.1785 9.50818 21.8176 9.26598 21.4185 9.11416C21.0947 8.9845 20.6084 8.83016 19.7126 8.78812C18.7437 8.74255 18.4531 8.73273 16 8.73273C13.5466 8.73273 13.2561 8.74229 12.2874 8.78786C11.3916 8.83016 10.905 8.9845 10.5815 9.11416C10.1824 9.26598 9.82129 9.50818 9.52515 9.82289C9.21997 10.1285 8.98511 10.5007 8.83765 10.9123C8.71191 11.2461 8.56226 11.7479 8.52148 12.6717C8.47729 13.6707 8.46777 13.9703 8.46777 16.5003C8.46777 19.0301 8.47729 19.3297 8.52148 20.329C8.56226 21.2527 8.71191 21.7543 8.83765 22.0881C8.98511 22.4998 9.21973 22.8719 9.5249 23.1775C9.82129 23.4922 10.1821 23.7344 10.5813 23.8863C10.905 24.0162 11.3916 24.1705 12.2874 24.2126C13.2561 24.2581 13.5464 24.2677 15.9998 24.2677C18.4534 24.2677 18.7439 24.2581 19.7124 24.2126C20.6082 24.1705 21.0947 24.0162 21.4185 23.8863C22.2197 23.5675 22.853 22.9144 23.1621 22.0881C23.2878 21.7543 23.4375 21.2527 23.4785 20.329C23.5227 19.3297 23.532 19.0301 23.532 16.5003C23.532 13.9703 23.5227 13.6707 23.4785 12.6717C23.4377 11.7479 23.2881 11.2461 23.1621 10.9123ZM16 21.3653C13.3943 21.3653 11.282 19.1872 11.282 16.5001C11.282 13.8129 13.3943 11.6349 16 11.6349C18.6055 11.6349 20.7178 13.8129 20.7178 16.5001C20.7178 19.1872 18.6055 21.3653 16 21.3653ZM20.9043 12.5795C20.2954 12.5795 19.8018 12.0704 19.8018 11.4425C19.8018 10.8146 20.2954 10.3055 20.9043 10.3055C21.5132 10.3055 22.0068 10.8146 22.0068 11.4425C22.0066 12.0704 21.5132 12.5795 20.9043 12.5795Z" fill="white"/>
					<path d="M16 0C7.16479 0 0 7.38869 0 16.5C0 25.6113 7.16479 33 16 33C24.8352 33 32 25.6113 32 16.5C32 7.38869 24.8352 0 16 0ZM25.1321 20.4062C25.0876 21.4148 24.9321 22.1034 24.7051 22.7061C24.2278 23.9788 23.2522 24.9849 22.0181 25.4771C21.4338 25.7113 20.7659 25.8714 19.7881 25.9175C18.8083 25.9635 18.4954 25.9746 16.0002 25.9746C13.5049 25.9746 13.1921 25.9635 12.2122 25.9175C11.2344 25.8714 10.5664 25.7113 9.98218 25.4771C9.3689 25.2392 8.81372 24.8663 8.35474 24.3842C7.88745 23.9111 7.52588 23.3383 7.29517 22.7061C7.06812 22.1036 6.9126 21.4148 6.86816 20.4065C6.823 19.3959 6.8125 19.0731 6.8125 16.5C6.8125 13.9269 6.823 13.6041 6.86792 12.5938C6.91235 11.5852 7.06763 10.8966 7.29468 10.2939C7.52539 9.66167 7.88721 9.0889 8.35474 8.61582C8.81348 8.13368 9.3689 7.76081 9.98193 7.52289C10.5664 7.28874 11.2341 7.12862 12.2122 7.08254C13.1919 7.03647 13.5049 7.02539 16 7.02539C18.4951 7.02539 18.8081 7.03647 19.7878 7.08279C20.7659 7.12862 21.4336 7.28874 22.0181 7.52264C22.6311 7.76056 23.1865 8.13368 23.6455 8.61582C24.1128 9.08915 24.4746 9.66167 24.7051 10.2939C24.9324 10.8966 25.0876 11.5852 25.1323 12.5938C25.177 13.6041 25.1875 13.9269 25.1875 16.5C25.1875 19.0731 25.177 19.3959 25.1321 20.4062V20.4062Z" fill="white"/>
					</svg>

				</a>
				<a href="">
					<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M14.0071 18.9974L19.2117 15.9999L14.0071 13.0023V18.9974Z" fill="white"/>
					<path d="M16 0C7.16479 0 0 7.16479 0 16C0 24.8352 7.16479 32 16 32C24.8352 32 32 24.8352 32 16C32 7.16479 24.8352 0 16 0ZM25.9976 16.0164C25.9976 16.0164 25.9976 19.2612 25.5859 20.8259C25.3552 21.6824 24.6799 22.3577 23.8235 22.5881C22.2588 23 16 23 16 23C16 23 9.75757 23 8.17651 22.5718C7.32007 22.3413 6.64478 21.6658 6.41406 20.8093C6.0022 19.2612 6.0022 16 6.0022 16C6.0022 16 6.0022 12.7554 6.41406 11.1907C6.64453 10.3342 7.33643 9.64233 8.17651 9.41187C9.74121 9 16 9 16 9C16 9 22.2588 9 23.8235 9.42822C24.6799 9.65869 25.3552 10.3342 25.5859 11.1907C26.0142 12.7554 25.9976 16.0164 25.9976 16.0164Z" fill="white"/>
					</svg>
				</a>
			</div>	
		</div>
				
	</header>
	<!-- end header -->
	<!-- begin one -->
	<div class="one">
		<div class="slider-one js-slider-one">
			<div class="slider-one__item">
				<img src="img/bg-1.png" alt="">
			</div>
			<div class="slider-one__item">
				<img src="img/bg-1.png" alt="">
			</div>
			<div class="slider-one__item">
				<img src="img/bg-1.png" alt="">
			</div>
			<div class="slider-one__item">
				<img src="img/bg-1.png" alt="">
			</div>
		</div>
		<div class="slider-one__info">
			<div class="container">
				<div class="slider-one__info-in">
					<h1 class="title-lg">
						Прохолода і бездоганність натуральних газонів
					</h1>
					<div class="slider-one__icon">
						<svg width="48" height="3" viewBox="0 0 48 3" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M20 0H0V1H-0.00012207V2H0V3H20V2H47.9999V1H20V0Z" fill="#6CBE45"/>
						</svg>
					</div>	
					<p class="slider-one__text">
						<span class="bold">Компанія EVROGAZON</span><br> 
						працює для Вашого задоволення.
					</p>
					<div class="slider-one__btns">
						<div class="slider-one__btn slider-one__btn-prev">
							<img src="img/Arrow.svg" alt="">
						</div>
						<div class="slider-one__btn slider-one__btn-next">
							<img src="img/Arrow.svg" alt="">
						</div>
					</div>
				</div>		
			</div>	
		</div>
	</div>
	<!-- end one -->
	<!-- begin two -->
	<div class="two">
		<div class="container">
			<div class="two__title">
				<h2 class="title-md">Проектування</h2>
			</div>
			
			<div class="two__wrap">
				<div class="two__item">
					<div class="two__subtitle">
						Ландшафтне проектування Київ і Проект ландшафтного дизайну
					</div>
					<div class="two__info">
						<span class="green">Ландшафтне проектування можна сміливо вважати основою мистецтва під назвою "Ландшафтний дизайн"!</span> Але, для успішного втілення Вашої садової мрії в реальність, слід починати з того, щоб детально розробити ландшафтний проект. Для досягнення цієї мети фахівці з озеленення повинні мати досить глибокими науковими знаннями підкріпленими практичні досвідом. Саме такі люди будуть займатися ландшафтним проектуванням озеленення Вашої ділянки якщо Ви звернетеся в компанію "Магія саду" Київ.
						Але, для успішного втілення Вашої садової мрії в реальність, слід починати з того, щоб детально розробити ландшафтний проект. Для досягнення цієї мети фахівці з озеленення повинні мати досить глибокими науковими знаннями підкріпленими практичні досвідом. Саме такі люди будуть займатися ландшафтним проектуванням озеленення Вашої ділянки якщо Ви звернетеся в компанію "Магія саду" Київ.
						</span>
					</div>
				</div>
				<div class="two__item">
					<div class="slider-two">
						<div class="slider-two__top">
							<div class="slider-two__title">Галерея</div>
							<div class="slider-two__btns">
								<div class="slider__btn slider-two__btn-prev">
									<svg width="29" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28.412 9.127c-8.221-.065-16.377-.13-24.565-.162 2.363 2.168 4.66 4.466 6.894 6.764 1.23 1.295-1.068.939-1.748.259a150.261 150.261 0 0 0-7.962-7.767C.87 8.059.514 7.573.772 7.314l.065-.064c.033-.033.033-.033.097-.033C4.106 5.6 6.727 3.431 8.896.615c.55-.744 2.88.744 2.362 1.392C9.64 4.078 7.829 5.826 5.692 7.25c6.99.064 13.981.13 20.94.162.809.032 2.75 1.715 1.78 1.715z"/></svg>
								</div>
								<div class="slider__btn slider-two__btn-next">
									<svg width="29" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28.412 9.127c-8.221-.065-16.377-.13-24.565-.162 2.363 2.168 4.66 4.466 6.894 6.764 1.23 1.295-1.068.939-1.748.259a150.261 150.261 0 0 0-7.962-7.767C.87 8.059.514 7.573.772 7.314l.065-.064c.033-.033.033-.033.097-.033C4.106 5.6 6.727 3.431 8.896.615c.55-.744 2.88.744 2.362 1.392C9.64 4.078 7.829 5.826 5.692 7.25c6.99.064 13.981.13 20.94.162.809.032 2.75 1.715 1.78 1.715z"/></svg>
								</div>
							</div>
						</div>
						<div class="slider-two__wrap js-slider-two">
							<div class="slider-two__item">
								<img src="img/sl-two1.jpg" alt="">
							</div>
							<div class="slider-two__item">
								<img src="img/sl-two2.jpg" alt="">
							</div>
							<div class="slider-two__item">
								<img src="img/sl-two1.jpg" alt="">
							</div>
							<div class="slider-two__item">
								<img src="img/bg-1.png" alt="">
							</div>
						</div>
						
						
					</div>
				</div>	

			</div>
		</div>
	</div>
	<!-- end two -->

	<!-- begin three -->
	<div class="three">
		<div class="container">
			<div class="three__title">
				<span class="title-lg">
					Ландшафтний проект складається з наступних складових частин:
				</span>
			</div>
			<div class="three__info">
				<div class="three__item">
					<ul class="list-block">
						<li class="list-block__item">
							<img src="img/Icon 1.svg" alt="">
							<span class="list-block__text">Ландшафтний ескіз дизайн проекту;</span>
						</li>
						<li class="list-block__item">
							<img src="img/Icon 2.svg" alt="">
							<span class="list-block__text">3D-візуалізація ландшафтного проекту;</span>
						</li>
						<li class="list-block__item">
							<img src="img/Icon 3.svg" alt="">
							<span class="list-block__text">2D-візуалізація ландшафтного проекту;</span>
						</li>
						<li class="list-block__item">
							<img src="img/Icon 4.svg" alt="">
							<span class="list-block__text">Генеральний план ландшафтного дизайн проекту;</span>
						</li>
						<li class="list-block__item">
							<img src="img/Icon 5.svg" alt="">
							<span class="list-block__text">Дендрологічний план озеленення (дендроплан);</span>
						</li>
						<li class="list-block__item">
							<img src="img/Icon 6.svg" alt="">
							<span class="list-block__text">Роздільне креслення</span>
						</li>
					</ul>
				</div>
				<div class="three__item">
					<ul class="list-block">
						<li class="list-block__item">
							<img src="img/Icon 7.svg" alt="">
							<span class="list-block__text">Посадкове креслення;</span>
						</li>
						<li class="list-block__item">
							<img src="img/Icon 8.svg" alt="">
							<span class="list-block__text">План-схема системи автоматичного поливу;</span>
						</li>
						<li class="list-block__item">
							<img src="img/Icon 9.svg" alt="">
							<span class="list-block__text">Схема розстановки освітлювальних приладів;</span>
						</li>
						<li class="list-block__item">
							<img src="img/Icon 10.svg" alt="">
							<span class="list-block__text">Геодезична або топографічна зйомка ділянки (при необхідності);</span>
						</li>
						<li class="list-block__item">
							<img src="img/Icon 11.svg" alt="">
							<span class="list-block__text">Робочі креслення реалізації ландшафтного проектування дизайну озеленення.</span>
						</li>						
					</ul>
				</div>
			</div>
			<div class="three__btn">
				<a href="" target="blank" class="btn-white">Прайс</a>
			</div>
		</div>
	</div>
	<!-- end three -->

	<!-- begin four -->
	<div class="four">
		<div class="container">
			<div class="four__title">
				<h2 class="title-md">
					Системи автоматичного поливу
				</h2>
			</div>
		</div>
		<div class="four__top">
			<div class="container">
				<div class="four__in">
					<div class="four__text-bold text-bold">
						Надаємо послуги по встановленню та продажу обладнання для автополиву
					</div>
					<div class="four__text-light text-light">
						<span class="bold">Автоматичний полив вже давно перестав бути заморською дивиною</span> і використовується наразі для зрошування газонів в міських парках , на футбольних майданчиках та на ділянках заміських будинків.
					</div>
					<div class="four__images">
						<img src="img/four.svg" alt="">
					</div>
				</div>
			</div>	
		</div>
		<div class="four__center">
			<!-- <img src="img/maxresdefault.jpg" alt=""> -->
			<div class="four__main">
				<div class="four__left">
					<div class="four__item">
						<img src="img/rectangle1.png" alt="">
						<div class="four__info">
							<div class="four__icon">
								<img src="img/ball.svg" alt="">
							</div>
							<p>Спортивний Газон</p> 
							<p class="text-big bold">65,00 грн/м</p>
						</div>
						
					</div>
					<div class="four__item">
						<img src="img/rectangle1.png" alt="">
						<div class="four__info">
							<div class="four__icon">
								<img src="img/butterfl.svg" alt="">
							</div>
							<p>Універсальний Газон</p> 
							<p class="text-big bold">57,00 грн/м</p>
						</div>
					</div>
				</div>
				<div class="four__right">
					<img src="img/letter.png" alt="">
					<div class="four__info-big">
						<div class="four__subtitle">
							<span class="title-lg">
								Рулонний газон
							</span>
						</div>
						<p class="text-bold">Разом з газоном Ви отримаєте</p>
						<p>не тільки красивий ландшафт своєї території, а також і повний спектр послуг і рекомендацій по догляду.</p>
						<div class="four__btn">
							<a href="" class="btn-green">Прайс</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="four__bottom">
			<div class="container">
				<div class="four__in">
					<div class="four__proect">
						<img src="img/dozgdevanie.png" alt="">
					</div>
					<div class="four__description">
						<div class="four__description-name title-sm">
							Розробка проектів автополиву
						</div>
						<div class="four__description-text">
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
	<!-- end four -->
		
	<!-- begin five -->
	<div class="five">
		<div class="container">
			<div class="five__title">
				<h2 class="title-md">
					Відео-фото
				</h2>
			</div>
			<div class="five__subtitle title-sm">Наші роботи</div>
		</div>
		<div class="slider-work">
			<div class="slider-work__in js-slider-work">
				<div class="slider-work__item">
					<img src="img/slider-work1.jpg" alt="">
				</div>
				<div class="slider-work__item">
					<img src="img/slider-work1.jpg" alt="">
				</div>
				<div class="slider-work__item">
					<img src="img/slider-work1.jpg" alt="">
				</div>
			</div>
			<div class="slider-work__btns">
				<div class="slider-work__btn-prev">
					<img src="img/Arrow.svg" alt="">
				</div>
				<div class="slider-work__btn-next">
					<img src="img/Arrow.svg" alt="">
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
							<video controls width="400" height="300" class="video">
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
							<video controls width="400" height="300" class="video">
							  <source src="video/video.mp4" type="video/mp4"><!-- MP4 для Safari, IE9, iPhone, iPad, Android, и Windows Phone 7 -->
							  <source src="video.webm" type="video/video.webm"><!-- WebM/VP8 для Firefox4, Opera, и Chrome -->
							</video>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
	</div>
	<!-- end five -->
	<!-- begin reviews -->
	<div class="reviews">
		<div class="container">
			<div class="reviews__title">
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
									<img src="img/client.jpg" alt="">
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
									<img src="img/client2.jpg" alt="">
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
									<img src="img/client2.jpg" alt="">
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
	<div class="contacts">
		<div class="container">
			<div class="reviews__title">
				<h2 class="title-md">
					Контакти
				</h2>
			</div>
		</div>
		<div class="contacts__main">
			<div class="contacts__form">
				<form class="mainForm" id="contact-2">
					<p class="text-bold">У Вас виникли запитання?</p>
					<p class="text-bold">Напишіть нам!</p>
		            <div class="mainForm-wrap mainForm-wrap_brt requaired">
		              <span class="mainForm__text" data-defaultMessage="Имя:" data-errorMessage="Імя не заповнено"></span>
		              <input name="name" type="text" class="mainForm__input mainForm__input-requaired" placeholder="Вашe ім'я:">
		            </div>
		            <!--  </mainForm-wrap> -->
		            <div class="mainForm-wrap requaired">
		              <span class="mainForm__text" data-defaultMessage="Ваш телефон:" data-errorMessage="Телефон не заповнений"></span>
		              <input name="tel" type="text" class="mainForm__input mainForm__input-requaired inputtelmask" placeholder="Ваш телефон:">
		            </div>
		            <!--  </mainForm-wrap> -->
		            <div class="mainForm-wrap mainForm-wrap_brb">
		              <span class="mainForm__text " data-defaultMessage="Повідомлення:" data-errorMessage="Заповніть повідомлення"></span>
		              <input placeholder="Ваше повідомлення:" name="message" type="text" class="mainForm__input" >
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
			<div class="contacts__info">
				<div class="contacts__img">
					<img src="img/letter2.png" alt="">
				</div>
				<div class="contacts__info-in">
					<ul class="contacts-list">
						<li class="contacts__item">
							<a href="" class="contacts__link">
								<svg class="svg-map">
							       <use xlink:href="#icon-map"></use>
							    </svg>
								<spzn>м.Київ, вул.Онуфрія Трутенка,8</spzn>
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
	<script src="js/scripts.min.js"></script>
	<script src=""></script>
	
</body>
</html>
