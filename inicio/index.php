<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="shortcut icon" href="media/logo.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Jersey+10&family=Karla:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

  <title>Login form</title>
</head>

<body>

  <div class="outer-container">
    <div class="main-container">
      <div class="form-container">
        <form action="./process.php" method="POST">

          <p>Correo Electrónico<span><box-icon class="flecha" type='solid' name='down-arrow'></box-icon></span></p>
          <input type="email" placeholder="" name="Correo" required>

          <p>Contraseña<span><box-icon class="flecha" type='solid' name='down-arrow'></box-icon></span></p>
          <input type="password" placeholder="" name="Contraseña" required>

          <div class="remember-me">
            <input type="checkbox" id="rememberMe">
            <label for="rememberMe">Recordar Contraseña</label>
          </div>

          <button type="submit">Iniciar Sesión</button>
        </form>
      </div>

      <div class="logo-container">
        <img src="./media/logo.png" alt="Logo">
      </div>
    </div>
  </div>

</body>

</html>