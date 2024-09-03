<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro Form</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="shortcut icon" href="media/logo.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jersey+10&family=Karla:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
  <script src="./code.js"></script>
</head>
<body>

  <div class="outer-container">
    <div class="main-container">
      <div class="form-container">
        <form action="./process.php" method="POST">
          <p>Nombre<span><box-icon class="flecha" type='solid' name='down-arrow'></box-icon></span></p>

          <input type="text" name="Nombre">

          <p>Apellido<span><box-icon class="flecha" type='solid' name='down-arrow'></box-icon></span></p>

          <input type="text" name="Apellido">

          
          
          
          <p>Correo Electrónico<span><box-icon class="flecha" type='solid' name='down-arrow'></box-icon></span></p>
          
          <input type="email" placeholder="Ingresa tu correo" required name="Correo">
          
          <p>Contraseña<span><box-icon class="flecha" type='solid' name='down-arrow'></box-icon></span></p>
          
          <input type="password" placeholder="" name="Contraseña" required>
          
          <p>Numero identificacion <span><box-icon class="flecha" type='solid' name='down-arrow'></box-icon></span></p>
          
          <input type="text" placeholder="Ingresa tu identificador " name ="Numero_identificacion" required>
          
          <p>Tipo de usuario<span><box-icon class="flecha" type='solid' name='Tipo_Usuario'></box-icon></span></p>
          <select name="Tipo_Usuario" id="">
      
            <option value="cliente">Cliente</option>
            <option value="programador">Programador</option>
            
            
          </select>
          <button type="submit" name="boton_registro">Registrarse</button>
        </form>
      </div>
      
      <div class="logo-container">
        <img src="./media/logo.png" alt="Logo">
      </div>
    </div>
  </div>

</body>
</html>