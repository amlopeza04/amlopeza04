<html>
    <head>
    <title>Lectura</title>
        <style>
            table, th, td {
                border:1px solid black;
                border-collapse: collapse;
            }
            body {
                background-color: whitesmoke;
            }
            h2 {
                text-align: center;
                align-content: center;
                text-shadow:1px  0px 0px white,
                0px  1px 0px white,
                -1px  0px 0px white,
                0px -1px 0px white;
                font-family: 'Roboto Light', sans-serif;
                font-weight: 300;
            }
            table{
                margin: 0 auto;
                background-color: white;
            }
            #botoncrear{
                margin-left: 30%;
            }
            body {
            font-family: Arial, sans-serif;
            background-color: #2c2c2c;
            color: #f0f0f0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            }
        h1 {
            margin-bottom: 20px;
        }
        table {
            width: 40%;
            border-collapse: collapse;
            background-color: #3a3a3a;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #4a4a4a;
        }
        tr:nth-child(even) {
            background-color: #505050;
        }
        tr:hover {
            background-color: #606060;
        }
        </style>
    </head>
    <body>
        <?php
            //Crea conexion con nuestra base de datos
            $nombre = $_GET["nombre"];
            $onclick = "location.href='crear.php?nombre=$nombre'";
            print "<h2>Bienvenido $nombre, aqui tiene su información</h2>";

            require "db.php";

            $sql = "SELECT * FROM elementos";
            $resultado = mysqli_query($conexion, $sql);
            if(mysqli_num_rows($resultado)> 0){
                print ("<table>");
                while($fila = mysqli_fetch_assoc($resultado)){
                    print("<tr>");
                    print("<td>".$fila['banco']."</td>");
                    print("<td>".$fila['nombre']."</td>");
                    print("<td>".$fila['cuenta_bancaria']."</td>");
                    print("<td>".$fila['deudas']."</td>");
                    print("<td><button onclick=\"if(confirm('¿Estás seguro de que deseas borrar este registro?')) { location.href='borrar.php?cuenta_bancaria=".$fila['cuenta_bancaria']."&nombre=$nombre'; }\">Borrar</button></td>");
                    print("<td><button onclick=\"location.href='actualizar.php?cuenta_bancaria=".$fila['cuenta_bancaria']."&nombre=$nombre'; }\">Actualizar</button></td>");
                    print("</tr>");
                }
                print("</table>");
                print("<br>");
            }
            
            mysqli_close($conexion);
        ?>
        <br>
        <input id = "botoncrear" type = "submit" value = "Crear" <?php print "onclick=$onclick" ?>>
    </body>
</html>