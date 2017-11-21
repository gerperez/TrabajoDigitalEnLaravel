
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pagina Inicio Cliente</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/cliente.css') }}">
		<meta name="viewport" content="initial-scale=1">
	</head>
	<body>
			<div class="opciones">
				<div style="float: left; margin-left: 18px; margin-top: 16px" >
				<a href="#">Servicio al consumidor</a></div>
				<div style="float: right">
				<nav class="main.nav">
						<ul>
							<li><a href="main.php">Home</a></li>
							<li><a href="iniciosesion.php">Iniciar sesión</a></li>
							<li><a href="registro.php">Regístrese</a></li>
							<li><a href="#">Contacto</a></li>
						</ul>
				</nav></div>
			</div>
			<br style="clear: both">
			<div class="top-bar" >
				<header class="main-header">
					<center>
						<img src="./images/titulo.png"></center>
				</header>
			</div>
<br>
<center>
		<form action="registro.php" class="registro" method="post" enctype="multipart/form-data">
		<div class="rounded">
			<div>
  			Nombre:<br>
  			<input type="text" name="nombre" value="">
  			<br>

            <span style="color:red;">

            </span>

  			</div>
  			<br>
  			<div>
  			Apellido:<br>
  			<input type="text" name="apellido" value="">
  			<br>

            <span style="color:red;">

            </span>

  			</div>
  			<br>
  			<div>
  			Mail:<br>
  			<input type="text" name="email" value="">
  			<br>

            <span style="color:red;">

            </span>

  			</div>
        <br>
        <div class="form-group">
          <label for="">Foto de Perfil (Opcional):</label>
          <br>


            <input class="form-control error" type="file" name="foto-perfil">

            <input class="form-control" type="file" name="foto-perfil">

        </div>
  			<br>
  			<div>
  			Sexo:<br>
        <input type="hidden" name="sexo" value="off">
  			Masculino<input type="radio" name="sexo" value="masculino">
  			Femenino<input type="radio" name="sexo" value="femenino">
        Otro<input type="radio" name="sexo" value="otro">
        <br>

            <span style="color:red;">

            </span>

  			</div>
  			<br>
  			<div>
  			Contraseña:<br>
  			<input type="password" name="contrasena" value="">
  			<br>

            <span style="color:red;">

            </span>

  			</div>
  			<br><br>
  			<div>
  			Confirmar contraseña:<br>
  			<input type="password" name="ccontrasena" value="">
  			<br>

            <span style="color:red;">

            </span>

  			</div>
  			<br>
  			<div>
  			<h6>Acepta los terminos y condiciones?
        <input type="hidden" name="terminos" value="off">
  			<input type="checkbox" name="terminos"></h6>

            <span style="color:red; position: relative; bottom: 23px;">

            </span>

  			</div>
  		</div>
  			<input type="submit" value="Crear cuenta">
		</form>
				<footer class= "main-footer">
						<ul>
							<li><a href="main.html">Home</a></li>
							<li><a href="#">Quienes somos</a></li>
							<li><a href="#">Contacto</a></li>
							<li>Seguinos en las redes!</li>
							<img src="./images/fb.png">
							<img src="./images/pi.png">
							<img src="./images/tw.png">
							<img src="./images/in.png">
							<img src="./images/you.png">
							<img src="./images/tu.png">
						</ul>
				</footer>
			</div></center>
	</body>
</html>
