<html>
    <body style="text-align:center">        

        <h1>Proceso servidor Apache XAMPP</h1>
        <h2>Recibiendo datos del formulario de inscripción...</h2>

        <table>
            <caption><h3>Datos recopilados</h2></caption>
            <tr><td><b>label ........ </b></td>
            <td><b>input ........ </b></td></tr>
            <tr><td>Nombre</td>
            <td><i><?php echo $_POST["nombre"]; ?></i></td></tr>
            <tr><td>Apellidos</td>
            <td><i><?php echo $_POST["apellidos"]; ?></i></td></tr>
            <tr><td>Email</td>
            <td><i><?php echo $_POST["email"]; ?></i></td></tr>
            <tr><td>Telefono</td>
            <td><i><?php echo $_POST["telefono"]; ?></i></td></tr>
            <tr><td>Foto</td>
            <td><i><?php echo $_POST["foto"]; ?></i></td></tr>
            <tr><td>Motivos</td>
            <td><i><?php echo $_POST["motivos"]; ?></i></td></tr>
            <tr><td>Profesión</td>
            <td><i><?php echo $_POST["profesion"]; ?></i></td></tr>
            <tr><td>Taller</td>
            <td><i><?php echo $_POST["taller"]; ?></i></td></tr>
            <tr><td>Fechas</td>
            <td><i><?php echo $_POST["fechas"]; ?></i></td></tr>
            <tr><td>Acepta</td>
            <td><i><?php echo $_POST["acepto"]; ?></i></td></tr>
         </table>
         
         <p>***** El original de este fichero se encuentra en /opt/lampp/htdocs *****</p>
        
     </body>
</html>
