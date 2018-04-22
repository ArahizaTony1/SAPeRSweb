<?
//https://es.stackoverflow.com/questions/52597/mostrar-datos-de-consulta-pdo-en-formato-json
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json,charset=UTF-8');
    require_once ('conexion.php');

    
    // Check connection
    
 $query = "SELECT * FROM Reserva";
 
 $stmt = $DBcon->prepare($query);
 $stmt->execute();
 
 $userData = array();
 
 while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
  
  $userData[] = $row;
 }
 
 echo json_encode($userData);
    
    
?>