<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?=base_url()?>css/styles.css">
	<title>Google Directions API</title>
</head>
<body>
	<div class="wrapper">
		<header>
			<img src="<?=base_url()?>images/car.png" alt="car photo">
			<h2>Direction API</h2>
		</header>
		<form action="/maps/direction" method="post">
			<label for="origin">From</label>
			<input type="text" name="origin" id="origin">
			<label for="destination">To</label>
			<input type="text" name="destination" id="destination">
			<input type="submit" value="Get Directions">
		</form>
		<ol class="direction"></ol>
	</div>
	<script src="<?= base_url() ?>js/index.js"></script>
</body>
</html>