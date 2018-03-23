<?php session_start();
require_once('config/config.php');
?>
 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>макет сайта</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <link rel="stylesheet" href="css/style.css"/>
	    <script src="js/script.js"></script> 
	</head>
	<body>
		<div id="wrapper">
			<div id="header"><!--начало шапки сайта-->
				<div class="golova">
				<div class="logo"></div>
					<div class="site-info">	
					<div class="telefon">
					<div><img src="/img/mts.png"></img><span class="prefix">+375(29)</span> <span class="namber">111 11 11</span></div><div><img src="/img/velcom.png"<img><span class="prefix">+375(25)</span> <span class="namber">222 22 22</span></div><div><img src="/img/mail.png"></img><a href="#" class="mail">info@steklaris.by</a></div>
					</div>
					<form>
						<input type="serch" name="p" class="ground" placeholder="поиск по сайту">
						<input type="submit" class="button" value="">
					</form>
				</div>
				 <div id="head-menu">
							<ul class="top-navigation">
								<li><a href="/">Home</a>
								<ul>
									<li><a href="home1">дом 1</a></li>
									<li><a href="home2">дом 2</a></li>
									<li><a href="home3">дом 3</a></li>
									<li><a href="home4">дом 4</a></li>
								</ul>
								</li>
								<li><a href="/index.php?url=aboth">About us</a>
								<ul>
									<li><a href="home1">дом 1987</a></li>
									<li><a href="home2">дом 1234</a></li>
									<li><a href="home3">дом 234</a></li>
									<li><a href="home4">дом 123</a></li>
								</ul>
								</li>
								<li><a href="/index.php?url=contact">srvios</a></li>
								<li><a href="#">solution</a></li>
								<li><a href="#">portner</a></li>
								<li class="last"><a href="#">Contact</a></li>
								<?php
								echo $_SESSION['user_id'];
								 if ($_SESSION['user_id']){
				?>
<li><a href="kabinet.php">кабинет</a></li>
<li><a href="logout.php">выход</a></li>
<?
}else{
	?>
	<li><a href="reg.php">регистрация</a></li>
	<li><a href="login.php">вход</a></li>
	<?php
}

?>
							</ul>
							<div class="clrb"></div>
					</div>
					</div>	
			</div><!-- конец шапки сайта-->
			
			<div class="all_wrap">
				<div class="tusha">
				<div id="content-wrapp"><!-- конетент-->
		<div id=" top content"></div>
		<div id="bot-cintent"><!-- центральный контент-->
			<div class="page"><!-- страница-->
