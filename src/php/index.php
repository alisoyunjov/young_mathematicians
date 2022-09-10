<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head><meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<link href="App_Themes/fav-logo.ico" rel="shortcut icon" type="image/x-icon" />
<link href="App_Themes/design.css" rel="stylesheet" type="text/css" />
<link href="App_Themes/index.css" rel="stylesheet" type="text/css" />
<link href="App_Themes/print.css" rel="stylesheet" type="text/css" media="print" />
<title>
International Physics Olympiad
</title></head>
<body>
<? include 'header_top.php'; ?>
<div id="main">
	<canvas id="canvas" width="400" height="300"></canvas>
	<!-- <img src="logo.png" /> -->
	<br /><br /><br />
	<div class="intro">
		The International Physics Olympiad (IPhO) is the World Championship Physics Competition for High School students and is held annually in a different country. The first IPhO was held in 1967 in Poland. It has gradually expanded to over 100 countries from 5 continents. The IPhO International Board ensures that the competition takes place each year and that each host country observes the regulations and traditions of the IPhO.
	</div>
	<br />
	<div class="intro">
		<a href="http://ipho-unofficial.org/">ipho-unofficial.org</a> is an online resource for past and upcoming Physics Olympiads. It is unofficial and non-profit, and does not hold any rights over its contents. The data is taken from various websites including <a href="http://ipho.org/">ipho.org</a>, which is the official webpage of IPhO.<br>
		The theme and design of the webpage is based on <a href="http://imo-official.org/">imo-official.org</a>.
	</div>
</div>
<? include 'footer.php'; ?>
<script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var bx = 230, by = 110, br = 20, ba = 0;
var a = 250;
setInterval(function(){
        bx = 200 + 70 * Math.sin(ba);
        by = 150 + 70 * Math.cos(ba);
        ba += .1;
		ctx.save();
		ctx.beginPath();
		ctx.rect(200 - a / 2 + a * .4, 150 - a / 2 + a * .18, a * .6, a * .6);
		ctx.fillStyle="#ff9090";
		ctx.fill();
		ctx.strokeStyle="#ff0000";
		ctx.stroke();
		ctx.clip();
		ctx.fillStyle="#ff0000";
		ctx.beginPath();
		ctx.arc(bx, by, br, 0, 7);
		ctx.fill();
		ctx.restore();
		
		ctx.save();
		ctx.beginPath();
		ctx.rect(200 - a / 2 + a * .18, 150 - a / 2 + a * .4, a * .6, a * .6);
		ctx.fillStyle="#9090ff";
		ctx.fill();
		ctx.strokeStyle="#0000ff";
		ctx.stroke();
		ctx.clip();
		ctx.fillStyle="#0000ff";
		ctx.beginPath();
		ctx.arc(bx, by, br, 0, 7);
		ctx.fill();
		ctx.restore();
		
		ctx.save();
		ctx.beginPath();
		ctx.rect(200 - a / 2, 150 - a / 2, a * .6, a * .6);
		ctx.fillStyle="#ffff90";
		ctx.fill();
		ctx.strokeStyle="#ffff00";
		ctx.stroke();
		ctx.clip();
		ctx.fillStyle="#ffff00";
		ctx.beginPath();
		ctx.arc(bx, by, br, 0, 7);
		ctx.fill();
		ctx.restore();
	},40);
</script>
</body>
</html>