<?php include("include/header.php")
?>
<?php


$conn = new PDO("mysql:host=localhost;dbname=usuariosrcc","root","");


    $consulta=$conn->query("SELECT * FROM pacientes");
    
    $datos=array();
    foreach ($consulta as $row) {
        $datos[]=$row;
    }
?>

<div class="cuadrado-2" id="cudrado-pacientes">
    <div class="linea3">
        <h5>Listado de Pacientes</h5>
    </div>

    <center>

        <form action="agregarPacientes.php" method="POST">
            <h3>Masculino</h3>

            <input class="button1" type="text" name="idP" placeholder="Identificacion" />
            <input class="button1" type="text" name="nomP" placeholder="Nombre completo" />

            <select class="button1" name="sexP">
                <option>Masculino</option>
                <option>Femenino</option>
                <option>otro</option>
            </select>

            <input class="button1" type="submit" name="enviarDB" value=" Guardar paciente " />
        </form>
    </center>


    <center>
        <table border="1px" bordercolor="#000000" width="80%" bgcolor="#ffffff" cellpadding="8">
            <br>
            <br>
            <tr bgcolor=" #625e5e" color="#ffffff">

                <td>
                    <center>
                        <font face="Verdana" color="#ffffff"> Identificación </font>
                    </center>
                </td>

                <td>
                    <center>
                        <font face="Verdana" color="#ffffff"> Nombre </font>
                    </center>
                </td>

                <td>
                    <center>
                        <font face="Verdana" color="#ffffff"> Genero </font>
                    </center>
                </td>

                <td>
                    <center>
                        <font face="Verdana" color="#ffffff"> FSP </font>
                    </center>
                </td>

            </tr>


            <?php 
            foreach ($datos as $data) {
            ?>
            <tr>
                
                
                    <td><?php echo " 
                    <form action='agregarActual.php' method='POST'> 
                    <input type='text' class='button1' name='idPa' id='idPa' value='".$data["IdPaciente"]."'>
                    "?> 
                    </td>
                    <?php echo " 
                    <td> <a name='nomPa' id='nomPa' >".$data["NombrePaciente"]."</a> </td>
                    <td> <a name='sexPa' id='sexPa' >".$data["Genero"]. "</a> </td>

                    <td>
                    
                    <input class='button1' type='submit' name='escojer' value=' Realizar ' />
                    </form>
                </td>"
                
                ?>
                

            </tr>

            <?php 
            }
            ?>
        </table>
    </center>

    <h3>Masculino</h3>

</div>

</div>
</div>
<footer>Todos los derechos reservados | Anderson Gironza - Jose Mestra</footer>




</body>

</html>