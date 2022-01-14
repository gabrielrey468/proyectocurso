<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./registro.css">
    <title>Registro</title>
</head>
<body>
<nav>
        <h1>Unete a nuestra pagina!!</h1></nav>
        <div class="contenedor_p">
        <form action="validacion_registro.php" method="POST">

        <h2>Registro</h2>
        <br><br>
        <label for="">Nombre</label>
        <br>
        <input type="text" name="nombre" required>
        <br><br>
        <label for="">Usuario</label>
        <br>
        <input type="text" name="usuario" required>
        <br><br>
        <label for="">Contraseña</label>
        <br>
        <input type="password" name="contrasena" required>
        <br><br>
        <label for="">Correo</label>
        <br>
        <input type="email" name="email" required>
        <br><br>
        <button type="submit">Registrarse</button>
        </form>
        <p class="text">¿Ya tienes una cuenta? Logueate aquí</p>
        <p class="login"><a href="./Login.php">Login</a></p>
        </div>

</body>
</html>