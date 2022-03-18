<table class="table">
    <thead>
        <tr style="background-color: #576F51; color: whitesmoke;">
            <th scope="col-2">ID</th>
            <th scope="col-2">NOMBRE</th>
            <th scope="col-2">UNIDADES</th>
            <th scope="col-2">PRECIO</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($resultado as $alumno){
            echo("<tr id='rojo'>");
                echo("<td style='text-align: center; background-color: #C96F6F;'>");
                    echo($alumno[0]);
                echo("</td><td>");
                    echo($alumno[1]);
                echo("</td><td>");
                    echo($alumno[2]);
                echo("</td><td>");
                    echo($alumno[3]);
                echo("</td>");
            echo("</tr>");
        } ?>
    </tbody>

</table>