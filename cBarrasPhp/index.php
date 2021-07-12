<!DOCTYPE html>
<html>
<head>
	<title>Codigo BarrasC</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<script src="JsBarcode.all.min.js"></script>
</head>
<body>

<div class="container">
	<center>
	<h1>Generar codigo de barras</h1>
	<img src="https://www.latiendadelasbarras.com/wp-content/uploads/2019/07/codigo-39-barras.jpg" style="width: 180px; height: 70px">
	</center>
	<img src="https://images-na.ssl-images-amazon.com/images/I/51Q7ZYjIPqL._AC_SX425_.jpg" style="width: 90px; height: 70px">
	<div class="row">
		<div class="col-sm-4">
			<form action="php/insertar.php" method="post">
				<label>Nombre</label>
				<input type="text" name="codigo" class="form-control">
				<br>
				<button type="submit" class="btn btn-danger">Generar CodigoB</button>
			</form>
		</div>	
	</div>
	<hr>
	<div class="row">
			<div class="col-sm-10">
				<?php require_once "tabla.php"; ?>
			</div>
			
		</div>

</div>

</body>
</html>
