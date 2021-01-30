<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contacto</title>
  <meta name="viewport" content="width=device-width, user-sacalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
	<header class="container">
		<div>
			<nav class="navbar navbar-expand-lg navbar-light bgcolor="#C0C0C0">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="contenedor">
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Inicia Sesión</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Principal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Productos</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Mas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Nuevos</a>
                  <a class="dropdown-item" href="#">Especiales</a>
                  <a class="dropdown-item" href="#">Criticas</a>
                  <a class="dropdown-item" href="contacto.php">Contacto</a>
                  <a class="dropdown-item" href="#">FAQS</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <section class="container">
    <header class="container">
      <div class="column2">
       <img src="imagenes/LOGO.png">
     </div>
     <nav class="navbar navbar-light bgcolor="#C0C0C0">
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscador" aria-label="Search">
        <button class="btn btn-dark my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </nav>
  </section>
  <br>
  <section>
    <div class="contenedor">
      <?php
      if(isset($_POST['txtnom'])){
        $asunto = "Solicitud de información";
        $mensaje = "El usuario: ".$_POST['txtnom']." ".$_POST['txtape']." ha solicitado información, sus datos son: Telefono: ".$_POST['txttel']." Correo electrónico: ".$_POST['txtemail']." Su mensaje es: ".$_POST['txtmen'];
        $destino = "amazingrodrick@gmail.com";
        $remitente = "From: amazingrodrick@gmail.com";

        mail($destino,$asunto,$mensaje,$remitente);

        echo "<div align='center'><br><br><br><br><h3>Gracias por sus comentarios, pronto nos contactaremos con usted.<h3><br><br><br><br><div>";
        
      }else{
        ?>
        <form method="post" action="contacto.php" name="frmcontacto">
          <br>
          <input type="type" name="txtnom" required placeholder="Nombre" class="from-control" class="column2" class="caja">
          <input type="type" name="txtape" required placeholder="Apellido" class="from-control" class="column2" class="caja">
          <br>
          <br>
          <input type="type" name="txtemail" required placeholder="Email" class="from-control" class="column2" class="caja">
          <input type="type" name="txttel" required placeholder="Telefono" class="from-control" class="column2" class="caja">
          <br>
          <br>
          <textarea cols="30" rows="5" name="txtmen" class="form-control" class="column2" required placeholder="Comentarios"class="caja"></textarea>
          <br>
          <br>
          <input type="submit" value="Enviar" class="btn-dark">
        </form>
      <?php  }?>
    </div>
  </section>
  <footer>
    <header class="contenedor">
      <div>
        <center>
          <p>Copyright © 2021 Tienda Musica. Powered by Silva Gaona Rodrigo Fabian 3TSM2 Privacy Notice</p></center>
        </div>
      </footer>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="js/bootstrap.min.js"></script>
    </body>
    </html>