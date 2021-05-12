<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?=base_url()?>css/styles.css">
	<title>Document</title>
</head>
<body>
	<div class="wrapper">
		<header>
			<img src="<?=base_url()?>images/logo.png" alt="logo">
			<h2>4Cast Weather App</h2>
			<form action="/weathers/get_weather" method="get">
				<label for="city">Enter a city</label>
				<input type="text" name="city">
				<input type="submit" value="Search">
			</form>
		</header>
		
		<div class="weather"></div>
	</div>
	<script src="<?=base_url()?>js/index.js"></script>
</body>
</html>

