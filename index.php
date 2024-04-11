<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="styles.css"> <!-- Archivo de estilos CSS -->
</head>
<body>
    <div class="container">
        <h2>Iniciar sesión</h2>
        <?php
        // Inicialización de variables
        $usuario_valido = "usuario";
        $contraseña_valida = "123456";

        // Verificar si se ha enviado el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener datos del formulario
            $usuario = $_POST["usuario"];
            $contraseña = $_POST["contraseña"];

            // Verificar credenciales
            if ($usuario === $usuario_valido && $contraseña === $contraseña_valida) {
                echo "<p class='success'>¡Inicio de sesión exitoso!</p>";
            } else {
                echo "<p class='error'>Usuario o contraseña incorrectos</p>";
            }
        }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <div class="form-group">
                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" required>
            </div>
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>
