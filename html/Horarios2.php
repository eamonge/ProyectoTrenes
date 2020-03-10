<!DOCTYPE html>
<html>
<head>
<title>HorariosUI</title>
</head>
<body>
	<center>
	<h1>Horarios de Trenes</h1>
	<img src="../img/tren.jpg" width="50%" height="50%">
	</center>
	<div class="pre-spoiler">
	<span style=><h1>Rutas</h1></span>
	<input type="button" value="Mostrar" style="width:80px;font-size:15px;margin:0px;padding:0px;"
	onclick="if(this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = '';this.innerText = ''; this.value = 'Ocultar'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Mostrar';}"
	</div>
	<div>
	<div class="spoiler" style="display: none;">

	<table border="1" cellpadding="0" cellspacing="0" width="100%" height="250">
	<tr>
		<th bgcolor="lightblue"><h2>Trayecto</h2></th>
		<th bgcolor="lightblue"><h2>Salida</h2></th>
		<th bgcolor="lightblue"><h2>Llegada</h2></th>
		<th bgcolor="lightblue"><h2>Duracion</h2></th>
	</tr>
	<tr>
		<th bgcolor="lightgray" align="center" rowspan="4">San Jose-Cartago</th>
		<th bgcolor="lightgray" align="center">5:00am</th>
		<th bgcolor="lightgray" align="center">6:00am</th>
		<th bgcolor="lightgray" align="center">60min</th>
    </tr>
    <tr>
		<th bgcolor="lightgray" align="center">8:00am</th>
		<th bgcolor="lightgray" align="center">9:00am</th>
		<th bgcolor="lightgray" align="center">60min</th>
    </tr>
    <tr>
		<th bgcolor="lightgray" align="center">3:00pm</th>
		<th bgcolor="lightgray" align="center">3:55am</th>
		<th bgcolor="lightgray" align="center">55min</th>
    </tr>
    <tr>
		<th bgcolor="lightgray" align="center">6:00pm</th>
		<th bgcolor="lightgray" align="center">6:55pm</th>
		<th bgcolor="lightgray" align="center">55min</th>
    </tr>
    <tr>
		<th align="center" rowspan="4">San Jose-Heredia</th>
		<th align="center">5:15am</th>
		<th align="center">5:55am</th>
		<th align="center">40min</th>
    </tr>
    <tr>
		<th align="center">7:00am</th>
		<th align="center">7:40am</th>
		<th align="center">40min</th>
    </tr>
    <tr>
		<th align="center">3:20pm</th>
		<th align="center">4:00pm</th>
		<th align="center">40min</th>
    </tr>
    <tr>
		<th align="center">6:30pm</th>
		<th align="center">7:10pm</th>
		<th align="center">40min</th>
    </tr>
    <tr>
		<th bgcolor="lightgray" align="center" rowspan="4">San Jose-Alajuela</th>
		<th bgcolor="lightgray" align="center">6:45am</th>
		<th bgcolor="lightgray" align="center">7:35am</th>
		<th bgcolor="lightgray" align="center">50min</th>
    </tr>
    <tr>
		<th bgcolor="lightgray"align="center">8:00am</th>
		<th bgcolor="lightgray" align="center">8:50am</th>
		<th bgcolor="lightgray" align="center">50min</th>
    </tr>
    <tr>
		<th bgcolor="lightgray" align="center">3:30pm</th>
		<th bgcolor="lightgray" align="center">4:20pm</th>
		<th bgcolor="lightgray" align="center">50min</th>
    </tr>
    <tr>
		<th bgcolor="lightgray" align="center">5:30pm</th>
		<th bgcolor="lightgray" align="center">6:20pm</th>
		<th bgcolor="lightgray" align="center">50min</th>
    </tr>
	</div>
	</div>
</body>
</html>