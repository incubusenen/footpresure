<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
.chartWrapper {
 position: relative;
}

.chartWrapper > canvas {
  position: absolute;
  left: 0;
  top: 0;
  pointer-events: none;
}

.chartAreaWrapper {
  width: 600px;
  overflow-x: scroll;
}
	</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
	
var time =0;
var interval=null;	
var dataPointsA0 = [];
var dataPointsA1 = [];
var dataPointsA2 = [];
var dataPointsA3 = [];
var dataPointsA4 = [];
var dataPointsA5 = [];
var dataPointsA6 = [];

var chartA0=null;
var chartA1=null;
var chartA2=null;
var chartA3=null;
var chartA4=null;
var chartA5=null;
var chartA6=null;
var status=  "NO";
window.onload = function(){

	chartA0 = new CanvasJS.Chart("chartContainerA0", {
		theme: "light2",
		title: {
			text: "Posisi 1"
		},
		axisY:{
			suffix: " kPa"
		},
		data: [{
			type: "line",
			yValueFormatString: "#,##0.0#",
			toolTipContent: "{y} kPa",
			dataPoints: dataPointsA0
		}]
	});
	chartA0.render();

	chartA1 = new CanvasJS.Chart("chartContainerA1", {
		animationEnabled: true,
		theme: "light2",
		zoomEnabled: true,
		title: {
			text: "Posisi 2"
		},
		axisY:{
			suffix: " kPa"
		},
		data: [{
			type: "line",
			yValueFormatString: "#,##0.0#",
			toolTipContent: "{y} kPa",
			dataPoints: dataPointsA1
		}]
	});
	chartA1.render();

	chartA2 = new CanvasJS.Chart("chartContainerA2", {
		animationEnabled: true,
		theme: "light2",
		zoomEnabled: true,
		title: {
			text: "Posisi 3"
		},
		axisY:{
			suffix: " kPa"
		},
		data: [{
			type: "line",
			yValueFormatString: "#,##0.0#",
			toolTipContent: "{y} kPa",
			dataPoints: dataPointsA2
		}]
	});
	chartA2.render();

	chartA3 = new CanvasJS.Chart("chartContainerA3", {
		animationEnabled: true,
		theme: "light2",
		zoomEnabled: true,
		title: {
			text: "Posisi 4"
		},
		axisY:{
			suffix: " kPa"
		},
		data: [{
			type: "line",
			yValueFormatString: "#,##0.0#",
			toolTipContent: "{y} kPa",
			dataPoints: dataPointsA3
		}]
	});
	chartA3.render();

	chartA4 = new CanvasJS.Chart("chartContainerA4", {
		animationEnabled: true,
		theme: "light2",
		zoomEnabled: true,
		title: {
			text: "Posisi 5"
		},
		axisY:{
			suffix: " kPa"
		},
		data: [{
			type: "line",
			yValueFormatString: "#,##0.0#",
			toolTipContent: "{y} kPa",
			dataPoints: dataPointsA4
		}]
	});
	chartA4.render();

	chartA5 = new CanvasJS.Chart("chartContainerA5", {
		animationEnabled: true,
		theme: "light2",
		zoomEnabled: true,
		title: {
			text: "Posisi 6"
		},
		axisY:{
			suffix: " kPa"
		},
		data: [{
			type: "line",
			yValueFormatString: "#,##0.0#",
			toolTipContent: "{y} kPa",
			dataPoints: dataPointsA5
		}]
	});
	chartA5.render();

	chartA6 = new CanvasJS.Chart("chartContainerA6", {
		animationEnabled: true,
		theme: "light2",
		zoomEnabled: true,
		title: {
			text: "Posisi 7"
		},
		axisY:{
			suffix: " kPa"
		},
		data: [{
			type: "line",
			yValueFormatString: "#,##0.0#",
			toolTipContent: "{y} kPa",
			dataPoints: dataPointsA6
		}]
	});
	chartA6.render();
}

function addDataA0(data) {
		// dataPoints = [];
		$avg = 0;
		$.each(data , function(index, item) { 
			dataPointsA0.push({
				x: item.x,
				y: item.y
			});
			$avg +=  item.y;
			lastTimeA0 = new Date(item.z).getTime();
		});
		// var dps = data.price_usd;
		// for (var i = 0; i < dps.length; i++) {
		// 	dataPoints.push({
		// 		x: new Date(dps[i][0]),
		// 		y: dps[i][1]
		// 	});
		// }
		console.log($avg);
		$('#AVGA0').html("Rata-rata : " + $avg/10);
		chartA0.render();
	}
	function addDataA1(data) {
		// dataPoints = [];
		$avg = 0;
		$.each(data , function(index, item) { 
			dataPointsA1.push({
				x: item.x,
				y: item.y
			});
			$avg +=  item.y;
			lastTimeA1 = new Date(item.z).getTime();
		});
		// var dps = data.price_usd;
		// for (var i = 0; i < dps.length; i++) {
		// 	dataPoints.push({
		// 		x: new Date(dps[i][0]),
		// 		y: dps[i][1]
		// 	});
		// }
		$('#AVGA1').html("Rata-rata : " + $avg/10);
		chartA1.render();
	}
	function addDataA2(data) {
		// dataPoints = [];
		$avg = 0;
		$.each(data , function(index, item) { 
			dataPointsA2.push({
				x: item.x,
				y: item.y
			});
			$avg +=  item.y;
			lastTimeA2 = new Date(item.z).getTime();
		});
		// var dps = data.price_usd;
		// for (var i = 0; i < dps.length; i++) {
		// 	dataPoints.push({
		// 		x: new Date(dps[i][0]),
		// 		y: dps[i][1]
		// 	});
		// }
		$('#AVGA2').html("Rata-rata : " + $avg/10);
		chartA2.render();
	}
	function addDataA3(data) {
		// dataPoints = [];
		$avg = 0;
		$.each(data , function(index, item) { 
			dataPointsA3.push({
				x: item.x,
				y: item.y
			});
			$avg +=  item.y;
			lastTimeA3 = new Date(item.z).getTime();
		});
		// var dps = data.price_usd;
		// for (var i = 0; i < dps.length; i++) {
		// 	dataPoints.push({
		// 		x: new Date(dps[i][0]),
		// 		y: dps[i][1]
		// 	});
		// }
		$('#AVGA3').html("Rata-rata : " + $avg/10);
		chartA3.render();
	}
	function addDataA4(data) {
		// dataPoints = [];
		$avg = 0;
		$.each(data , function(index, item) { 
			dataPointsA4.push({
				x: item.x,
				y: item.y
			});
			$avg +=  item.y;
			lastTimeA4 = new Date(item.z).getTime();
		});
		// var dps = data.price_usd;
		// for (var i = 0; i < dps.length; i++) {
		// 	dataPoints.push({
		// 		x: new Date(dps[i][0]),
		// 		y: dps[i][1]
		// 	});
		// }
		$('#AVGA4').html("Rata-rata : " + $avg/10);
		chartA4.render();
	}
	function addDataA5(data) {
		// dataPoints = [];
		$avg = 0;
		$.each(data , function(index, item) { 
			dataPointsA5.push({
				x: item.x,
				y: item.y
			});
			$avg +=  item.y;
			lastTimeA5 = new Date(item.z).getTime();
		});
		// var dps = data.price_usd;
		// for (var i = 0; i < dps.length; i++) {
		// 	dataPoints.push({
		// 		x: new Date(dps[i][0]),
		// 		y: dps[i][1]
		// 	});
		// }
		$('#AVGA5').html("Rata-rata : " + $avg/10);
		chartA5.render();
	}
	function addDataA6(data) {
		// dataPoints = [];
		$.each(data , function(index, item) { 
			dataPointsA6.push({
				x: item.x,
				y: item.y
			});
			$avg +=  item.y;
			lastTimeA6 = new Date(item.z).getTime();
		});
		// var dps = data.price_usd;
		// for (var i = 0; i < dps.length; i++) {
		// 	dataPoints.push({
		// 		x: new Date(dps[i][0]),
		// 		y: dps[i][1]
		// 	});
		// }
		$('#AVGA6').html("Rata-rata : " + $avg/10);
		chartA6.render();
	}
	function updateChart() {
		if(time > 10){
			clearInterval(interval); // stop the interval
		}
		if(time <=5){
			$('#label').html("Mulai menginjak SOL " + time);
		}else if(time > 5 && time <= 10){
			$('#label').html("Mulai membaca data " + time);
		}
		if(time == 10){
			$.getJSON("<?PHP base_url();?>home/getData?types=A0", addDataA0);
			$.getJSON("<?PHP base_url();?>home/getData?types=A1", addDataA1);
			$.getJSON("<?PHP base_url();?>home/getData?types=A2", addDataA2);
			$.getJSON("<?PHP base_url();?>home/getData?types=A3", addDataA3);
			$.getJSON("<?PHP base_url();?>home/getData?types=A4", addDataA4);
			$.getJSON("<?PHP base_url();?>home/getData?types=A5", addDataA5);
			$.getJSON("<?PHP base_url();?>home/getData?types=A6", addDataA6);
		
		}
		
		time+=1;
	};  
function start(){
	time =0;
	interval = setInterval(function () { updateChart() }, 1000);

}
</script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<button type="submit" onclick="start()">Start</start>
		</div>
		<div class="col-sm-12">
			<label id="label">
		</div>
		<div class="col-sm-4">
			<div id="AVGA0" style="width: 100%;text-align: center;"></div>
			<div id="chartContainerA0" style="height: 370px; width: 100%;"></div>
		</div>
		<div class="col-sm-4">
			<div id="AVGA1" style="width: 100%;text-align: center;"></div>
			<div id="chartContainerA1" style="height: 370px; width: 100%;"></div>
		</div>
		<div class="col-sm-4">
			<div id="AVGA2" style="width: 100%;text-align: center;"></div>
			<div id="chartContainerA2" style="height: 370px; width: 100%;"></div>
		</div>
		<div class="col-sm-4">
			<div id="AVGA3" style="width: 100%;text-align: center;"></div>
			<div id="chartContainerA3" style="height: 370px; width: 100%;"></div>
		</div>
		<div class="col-sm-4">
			<div id="AVGA4" style="width: 100%;text-align: center;"></div>
			<div id="chartContainerA4" style="height: 370px; width: 100%;"></div>
		</div>
		<div class="col-sm-4">
			<div id="AVGA5" style="width: 100%;"></div>
			<div id="chartContainerA5" style="height: 370px; width: 100%;"></div>
		</div>
		<div class="col-sm-4">
			<div id="AVGA6" style="width: 100%;text-align: center;"></div>
			<div id="chartContainerA6" style="height: 370px; width: 100%;"></div>
		</div>
	</div>
</div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>   