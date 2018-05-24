<!DOCTYPE html>

<html lang="es">

<head>
<title>Titilo Formulario</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="estilos.css" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="alternate" title="Pozolería RSS" type="application/rss+xml" href="/feed.rss" />
</head>

<body>
    <header>
       <h1>Creando formulario</h1>
       <p>Llena los datos</p>
    </header>
    <section>
		<form name="formulario" id= "formulario" action="recepto.php" method="post">
		   <br><label for="nom">Nombre: </label>
		   <input type="text" id="nom" name="nom"/></br>
		   
		   <br><label for="correo"> Correo: </label>
		   <input type="email" id="correo" name="correo"/></br>
		   
		   <br><label for="telefono"> Telefono: </label>
		   <input type="text" id="telefono"name="telefono"/></br>
		   
		   <input type="submit"  value="Enviar">
		</form>
    </section>
</body>
</html>