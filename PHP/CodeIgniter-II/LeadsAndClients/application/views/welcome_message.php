<!DOCTYPE html>
<html lang='en'>
<head>
	<title>Leads and Clients</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script>
	
	window.onload = function () {

var options = {
	title: {
		text: "Customer and Number of New Leads"
	},
	subtitles: [{
		text: "As of April, 2021"
	}],
	animationEnabled: false,
	data: [{
		type: "pie",
		startAngle: 40,
		toolTipContent: "<b>{label}</b>: {y}%",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - {y}%",
		dataPoints: [
			{ y: 1, label: "Kei" },
			{ y: 2, label: "Shoyo" },
			{ y: 4, label: "Netzuko" },
			{ y: 4, label: "Tsuki" },
		]
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
</script>
<style>
form{
	float: right;
}
</style>
</head>
<body>

	<form>
		<input type="date"  name="update">
		<input type="date"  name="update">
		<input type="submit" value='Update'>
	</form>

	<div class="container">
				<div id="container">
					<h1>List of all Customers and # of Leads</h1>
					<table class="table">
						<thead>
							<tr>
								<th>Customer Name</th>
								<th>Number of Leads</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($customers as $key => $customer):?>
							<tr>
								<td><?php echo $customer['Customer Name']?></td>
								<td><?php echo $customer['Number of Leads']?></td>
							</tr>
							
							<?php endforeach;?>
						
						</tbody>
					</table>
				</div>

			</div>

			<div id="chartContainer" style="height: 370px; width: 100%;"></div>
	<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
	<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>




</body>
</html>
