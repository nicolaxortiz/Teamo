<?php 
    $db_host = "localhost";
    $db_username = "root"; 
    $db_password = "";
    $db_name = "Usuarios";
    $counter_page = "access_page";
    $counter_field = "access_counter";
    $db = mysqli_connect ($db_host, $db_username, $db_password, $db_name) or die("Host o base de datos no disponible");

    date_default_timezone_set('America/Bogota');
    $fecha_actual = date("d-m-Y H:i:s");

    $Texto = $_POST["texto"];
    $Usuario = $_POST["usuario"];

    $sqlinsert = "INSERT INTO mensajes(texto, usuario, fecha) VALUES ('" . $Texto . "', '". $Usuario ."', '". $fecha_actual ."')";

    $result = mysqli_query($db, $sqlinsert);

    if($Usuario == "Gaby de Nicolas"){
        $to = "nicolaxortiz@gmail.com";
        $subject = "Anuntsio";
        $message = "Revisa la pagina que Gaby puso un mensajito <3";
        $headers = "From: lachangua123@gmail.com";
        
        mail($to, $subject, $message, $headers);

    } else if($Usuario == "Nicolas de Gaby"){
        $to = "gdiazcastellanos5@gmail.com";
        $subject = "Anuntsio";
        $message = "Revisa la pagina que Nicolas puso un mensajito <3";
        $headers = "From: lachangua123@gmail.com";
        
        mail($to, $subject, $message, $headers);
    }

    mysqli_close($db);

    header("Location: mensajes.php");
?>