<?php
  function visitante($record) {
    $db_host = "localhost";
    $db_username = "root"; 
    $db_password = "";
    $db_name = "Usuarios";
    $db_table = "usuarios";
    $counter_page = "access_page";
    $counter_field = "access_counter";
    $db = mysqli_connect ($db_host, $db_username, $db_password, $db_name) or die("Host o base de datos no disponible");

    $sql_call = "INSERT INTO ".$db_table." (".$counter_page.", ".$counter_field.") VALUES ('".$record."', 1) ON DUPLICATE KEY UPDATE ".$counter_field." = ".$counter_field." + 1"; 

    mysqli_query($db, $sql_call) or die("Error al introducir los datos");

  $sql_call = "SELECT ".$counter_field. " FROM ".$db_table." WHERE ".$counter_page. " = '".$record. "'";
  $sql_result = mysqli_query($db, $sql_call) or die("Error en la petición SQL");
  $row = mysqli_fetch_assoc($sql_result);
  $x = $row[$counter_field];

  mysqli_close($db);
  return $x;
    }

    function dias(){
      date_default_timezone_set('America/Bogota');

      $date1 = new DateTime("01-01-2022");
      $date2 = new DateTime("now");
      $diff = $date1->diff($date2);

      $diferencia = $diff->days;

      return $diferencia;
    }

?>