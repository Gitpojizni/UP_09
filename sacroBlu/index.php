<?php 
session_start();

?>

<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<meta charset="utf-8">
		<title>INDX</title>
	</head>
	<body>
		<header>
			<div id="icon_of_company">
				<img src="src/image02.jpg">
			</div>
			
			<div class="header_button_section">
				<a href="exit_of_account.php"><button class="header_button">Выйти</button></a>
				<a href="index.php">
					<button class="header_button">
						Главная
					</button>
				</a>
				<a href="reg.html">
					<button class="header_button">
						Регистрация
					</button>
				</a>
				<a href="auto.html">
					<button class="header_button">
						Войти
					</button>
				</a>
				<a href="see_bid.html">
					<button class="header_button">
						Просмотреть заявки
					</button>
				</a>
				<a href="add_bid.html">
					<button class="header_button">
						Добавить заявку
					</button>
				</a>
				<!-- Показывать только в случае если пользователь зарегистрирован как администратор-->
				<a href="admin_panel.html">
					<button class="header_button">
						Панель администратора
					</button>
				</a>
			</div>
		</header>
		<main>
			<div class="index_container">
				<br>
				<div class="tovar_bar">
					<div class="img_of_tovar">
						<img src="src/image10.webp" alt="Изображение кабинета для обучения">
					</div>
					<div class="name_and_description_of_tovar">
						<h1>|Курс по ООП на Python|Научись ООП|</h1>
						<hr>
						<p>Мега-курс по ООП. Дальнейшее трудоустройство на кирпичный завод!!! Зарплаты - нет, откажитесь от материального в пользу метафизического + опыт</p>
					</div>
				</div>
				<br>
				<div class="tovar_bar">
					<div class="img_of_tovar">
						<img src="src/image11.jpg" alt="Изображение кабинета для обучения">
					</div>
					<div class="name_and_description_of_tovar">
						<h1>|Курс по ООП на Python|Научись ООП|</h1>
						<hr>
						<p>Мега-курс по ООП. Дальнейшее трудоустройство на кирпичный завод!!! Зарплаты - нет, откажитесь от материального в пользу метафизического + опыт</p>
					</div>
				</div>
				<br>
				<div class="tovar_bar">
					<div class="img_of_tovar">
						<img src="src/image12.webp" alt="Изображение кабинета для обучения">
					</div>
					<div class="name_and_description_of_tovar">
						<h1>|Курс по ООП на Python|Научись ООП|</h1>
						<hr>
						<p>Мега-курс по ООП. Дальнейшее трудоустройство на кирпичный завод!!! Зарплаты - нет, откажитесь от материального в пользу метафизического + опыт</p>
					</div>
				</div>
				<br>
				<div class="tovar_bar">
					<div class="img_of_tovar">
						<img src="src/image13.webp" alt="Изображение кабинета для обучения">
					</div>
					<div class="name_and_description_of_tovar">
						<h1>|Курс по ООП на Python|Научись ООП|</h1>
						<hr>
						<p>Мега-курс по ООП. Дальнейшее трудоустройство на кирпичный завод!!! Зарплаты - нет, откажитесь от материального в пользу метафизического + опыт</p>
					</div>
				</div>
				<br>
				<div class="tovar_bar">
					<div class="img_of_tovar">
						<img src="src/image09.webp" alt="Изображение кабинета для обучения">
					</div>
					<div class="name_and_description_of_tovar">
						<h1>|Курс по ООП на Python|Научись ООП|</h1>
						<hr>
						<p>Мега-курс по ООП. Дальнейшее трудоустройство на кирпичный завод!!! Зарплаты - нет, откажитесь от материального в пользу метафизического + опыт</p>
					</div>
				</div>
				<? 
				echo $_SESSION['registered'];
				if ($_SESSION['registered'] != '1')
				{
				?>
					<div class="blur_container">
						
					</div>
					<div class="alert_about_reg">
						<p><a href="reg.html">Зарегистрируйтесь</a> чтобы просматривать курсы</p>
					</div>
				<? 
				} else {
					echo "alo_problemo_puto";
				}
				?>
			</div>
		</main>
		<footer>
			
		</footer>
	</body>
</html>