<html>
    <head>
        <title>Crear</title>
        <style>
            body {
                background-color: whitesmoke;
            }
            h2 {
                text-align: center;
                align-content: center;
            }
            form {
                text-align: center;
                align-content: center;
            }
            .error{
            border: 1px solid red !important;
            background-color: lightcoral;
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
            font-family: 'Roboto Light', sans-serif;
            font-weight: 300;
        }
        form {
            background-color: #3a3a3a;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
            width: 40%;
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
        }
        input {
            padding: 8px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            background-color: #505050;
            color: #f0f0f0;
        }
        button {
            background-color: #4a4a4a;
            color: #f0f0f0;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #606060;
        }
        </style>
        <script src='miscript.js'></script>
        <link rel="stylesheet" href = "micss.css">
        <script src="miscript.js"></script>
    </head>
    <body>
        <?php
            print "<h2>Formulario de creación</h2>";
        ?>
        <form id="formcrear" action="./crearfila.php" method="post">

            <input type="hidden" name="usuario" <?php print "value='".$_GET['nombre']."'"?>>

            <label for="banco">Banco</label><br>
            <input type="text" id="banco" name="banco">
            <br></br>
            <label for="nombre">Nombre</label><br>
            <input type="text" id="nombre" name="nombre">
            <br></br>
            <label for="cuenta_bancaria">Cuenta bancaria</label><br>
            <input type="text" id="cuenta_bancaria" name="cuenta_bancaria">
            <br></br>
            <label for="deudas">Deudas</label><br>
            <input type="text" id="deudas" name="deudas">
            <br></br>
            <input type = "submit" value = "Enviar" onclick="validar (event)">
        </form>
    </body>
</html>