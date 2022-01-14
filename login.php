<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <nav>
        <h1>Bienvenidos!!</h1></nav>
        <div class="contenedor">
            <form action="./validacion.php" method="post">
            <h2>Login</h2>
            <br><br>
            <label for="">Usuario</label>
            <br>
            <input type="text" name="usuario" required>
            <br><br>
            <label for="">Contraseña</label>
            <br>
            <input type="password" name="contraseña" required>
            <br><br>
            <input type="submit" value="ingresar">
            </form>
            <p class="registrate">¿No tienes una cuenta? Registrate!!</p>
            <p class="vinculo"><a href="./Registro.php" class="r">Registrate</a></p>

        </div>
</body>
</html>