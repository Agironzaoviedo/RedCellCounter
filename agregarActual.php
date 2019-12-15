
<!DOCTYPE html>
<?php


if(isset($_REQUEST['escojer'])){

    $conn = new PDO("mysql:host=localhost;dbname=usuariosrcc","root","");
    
    $consulta=$conn->query("TRUNCATE TABLE acual");

    $identi=$_REQUEST['idPa'];
    $consulta=$conn->query("SELECT * FROM pacientes WHERE IdPaciente='$identi'");

    $datos= array();
    foreach ($consulta as $row) {
        $datos[]=$row;
    }
    
    foreach($datos as $data){
        $nombre= $data["NombrePaciente"];
        $sexo= $data["Genero"];
    }
    

    $sql="INSERT into acual(nombre,sexo,id) values ('$nombre','$sexo','$identi')";
    $sentencia=$conn->prepare($sql);

    if (!$sentencia->execute()) {
    	echo "Esta vania no sirve";
    }else{
        echo "Esta vania si sirve";
        header('Location: Home.php');
    }

}
  

?>
