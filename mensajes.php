<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <LINK REL=StyleSheet HREF="css/css.css" TYPE="text/css" MEDIA=screen>
    <link rel="icon" type="image/png" href="img/GATOU.png">
    <title>Mensajitos<3</title>
</head>
<body>

    <header>
        <img src="img/GATOU.png" alt="">
        <div>Nuestra Pagina Web <3</div>
    </header>
    <nav>
        <div class="navhor">
            <ul>
                <li><a href="index.php"> Inicio </a></li>	
                <li><a href="meses.html"> Meses </a></li>
                <li><a href="fotitos.html"> Fotitos </a></li>
                <li><a href="spoti.html"> Spoti </a></li>
                <li><a href="mensajes.php"> Mensajes </a></li>
            </ul>
        </div>

        <div id="menu">
			<button id="botonazo"> <img src="img/menu.png"width="30px"> </button>
			<div id="down">
                <a href="index.php"> Inicio </a>
				<a href="meses.html"> Meses </a> 
				<a href="fotitos.html"> Fotitos </a> 
                <a href="Spoti.html"> Spoti </a> 
                <a href="mensajes.php"> Mensajes </a> 
			</div>
		</div>
    </nav>
    <main>
        <article>

            <div>
                ¡Aqui podremos dejarnos notitas o cositas que nos queramos decir!
                <br> Estos mensajitos quedaran aca para siempre, pero tambien en mi corazoncito C:
            </div>

            <br><br>

            <div><img src="img/mail.png" class="gatomail"></div>

            <br><br>

            <div>
                <a href="formMensaje.html" class="btnMensaje">Escribir Mensaje </a>
            </div>

            <br><br>

            <?php 
                $db_host = "localhost";
                $db_username = "root"; 
                $db_password = "";
                $db_name = "Usuarios";
                $counter_page = "access_page";
                $counter_field = "access_counter";
                $db = mysqli_connect ($db_host, $db_username, $db_password, $db_name) or die("Host o base de datos no disponible");
            
                $sqlselect = "SELECT texto, usuario, fecha FROM mensajes";
            
                $result = mysqli_query($db, $sqlselect);

                if (mysqli_num_rows($result) > 0) { ?>
                    <div class="centradito">
                    <?php
                    while($row = mysqli_fetch_assoc($result)) {
                    ?>

                            <div class="notita">
                                
                                <?php echo $row["fecha"]; ?>

                                <br><br>

                                <?php echo "♡ " .$row["texto"] . " ♡"?>

                                <br><br>

                                <?php echo "- ".$row["usuario"] ?>
                            </div>
                        
                            <br>

                    <?php } ?>
                    </div>
                    <?php
                }else { ?>
                    <div>
                        <div class="notita">
                            No hay mensajes 
                        </div>
                    </div>
                  <?php }
            ?>
            
        </article>
    </main>
    <footer>
        <div class=titulo>Nicolas - Gaby - Nata</div>
        <br>
        <div>Familia Madrugar <3</div>
    </footer>
</body>
</html>