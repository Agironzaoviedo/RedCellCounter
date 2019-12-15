
<!DOCTYPE html>
<?php


if(isset($_REQUEST['enviarDB'])){

    $conn = new PDO("mysql:host=localhost;dbname=usuariosrcc","root","");

    if(isset($conn)){
        echo "DB is connect";
    }
    $identi=$_REQUEST['idP'];
    echo $identi;
    
    $nombre=$_REQUEST['nomP'];
    echo $nombre;
    $sexo=$_REQUEST['sexP'];
    echo $sexo;
    
    $sql="INSERT into pacientes(IdPaciente,NombrePaciente,Genero) values ('$identi','$nombre','$sexo')";

    $sentencia=$conn->prepare($sql);

    if (!$sentencia->execute()) {
    	echo "Esta vania no sirve";
    }else{
        echo "Esta vania si sirve";
        header('Location: Pacientes.php');
    }
    

}
  

?>
