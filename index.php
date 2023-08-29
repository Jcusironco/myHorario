<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-oKw7wT5jy5X+j5n2DTv/2FpxlqTwCezj6PDc4q4WgqV9Gm4t5t+UHE2ska/2fyG+" crossorigin="anonymous">
  <style>
    /* Estilo del fondo */
    body {
      background-color: #f4f4f4;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    /* Estilo adicional para centrar el contenido */
    .center-content {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    
    /* Estilo para los contenedores de enlace */
    .link-container {
      margin: 10px;
      text-align: center;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s, box-shadow 0.2s;
    }
    .link-container:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }
    
    /* Estilo para los iconos */
    .link-icon {
      font-size: 3rem;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="container center-content">
    <div class="btn-group-vertical">
      <div class="link-container">
        <a href="" class="btn btn-primary btn-lg">
          <i class="fas fa-chart-line link-icon"></i><br>
          Economía
        </a>
      </div>
      <div class="link-container">
        <a href="calculadora.php" class="btn btn-success btn-lg">
          <i class="fas fa-calculator link-icon"></i><br>
          Calculadora
        </a>
      </div>
      <div class="link-container">
        <a href="horario.php" class="btn btn-info btn-lg">
          <i class="far fa-clock link-icon"></i><br>
          Horarios
        </a>
      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
