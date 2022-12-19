<html>
    <body>
        <p>**** El original de este fichero se encuentra en /opt/lampp/htdocs ****</p>

        <h1 style="text-align:center;">Proceso servidor Apache XAMPP: Recibiendo datos del formulario de inscripción...</h1>

        <table>
            <caption><h2>Datos recopilados</h2></caption>
            <tr><td>Nombre</td>
            <td><?php echo $_POST["nombre"]; ?></td></tr>
            <tr><td>Apellidos</td>
            <td><?php echo $_POST["apellidos"]; ?></td></tr>
            <tr><td>Email</td>
            <td><?php echo $_POST["email"]; ?></td></tr>
            <tr><td><Telefono/td>
            <td><?php echo $_POST["telefono"]; ?></td></tr>
            <tr><td>Foto</td>
            <td><?php echo $_POST["foto"]; ?></td></tr>
            <tr><td>Motivos</td>
            <td><?php echo $_POST["motivos"]; ?></td></tr>
            <tr><td>Profesión</td>
            <td><?php echo $_POST["profesion"]; ?></td></tr>
            <tr><td>Taller al que sasistirá</td>
            <td><?php echo $_POST["taller"]; ?></td></tr>
            <tr><td>Fechas en las que sasistirá   </td>
            <td><?php echo $_POST["fechas"]; ?></td></tr>
            <tr><td>Acepta política</td>
            <td><?php echo $_POST["acepto"]; ?></td></tr>
         
</body>
</html>
