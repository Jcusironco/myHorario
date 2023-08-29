<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Horario</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="horario.css"> <!-- Link to your custom stylesheet -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.0/html2canvas.min.js"></script>

  <style>
    /* Style for 3D buttons */
    .btn-3d {
      background-color: #28a745; /* Green color */
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      transition: transform 0.3s, box-shadow 0.3s;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .btn-3d:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    
    /* Style for the secondary button */
    .btn-secondary-3d {
      background-color: #007bff; /* Blue color */
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      transition: transform 0.3s, box-shadow 0.3s;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .btn-secondary-3d:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    
  </style>
</head>
<body>
<div class="container">
    <button id="downloadImgBtn" class="btn btn-3d"><i class="fas fa-download"></i> Descargar Imagen</button>
    <h1 class="text-center mt-4">Mi Horario Semanal</h1>
    <main>
      <div class="schedule-container">
        <table class="table table-bordered schedule-table mx-auto">
          <tr>
            <th class="day-header"></th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
            <th>Sábado</th>
          </tr>
          <?php for ($hour = 7; $hour <= 22; $hour++): ?>
            <tr>
              <td class="hour-cell"><?= sprintf('%02d', $hour) ?>:00</td>
              <td class="course-cell bg-primary" data-day="lunes" data-hour="<?= $hour ?>"></td>
              <td class="course-cell bg-success" data-day="martes" data-hour="<?= $hour ?>"></td>
              <td class="course-cell bg-warning" data-day="miércoles" data-hour="<?= $hour ?>"></td>
              <td class="course-cell bg-danger" data-day="jueves" data-hour="<?= $hour ?>"></td>
              <td class="course-cell bg-info" data-day="viernes" data-hour="<?= $hour ?>"></td>
              <td class="course-cell bg-secondary" data-day="sábado" data-hour="<?= $hour ?>"></td>
            </tr>
          <?php endfor; ?>
        </table>
      </div>
    </main>
    <div class="delete-content text-center mt-3" id="deleteContent">
      <i class="fas fa-trash"></i> Borrar Contenido
    </div>
  </div>
  <div class="popup-form" id="coursePopup">
    <form>
      <div class="mb-3">
        <label for="courseName" class="form-label">Nombre del Curso:</label>
        <input type="text" id="courseName" name="courseName" class="form-control">
      </div>
      <div class="mb-3">
        <label for="professor" class="form-label">Profesor:</label>
        <input type="text" id="professor" name="professor" class="form-control">
      </div>
      <div class="mb-3">
        <label for="classroom" class="form-label">Aula:</label>
        <input type="text" id="classroom" name="classroom" class="form-control">
      </div>
      <div class="mb-3">
        <label for="color" class="form-label">Color:</label>
        <select id="color" name="color" class="form-select">
          <option value="course-color-1">Amarillo</option>
          <option value="course-color-2">Azul</option>
          <option value="course-color-3">Verde</option>
          <option value="course-color-4">Rojo</option>
          <option value="course-color-5">Gris</option>
          <option value="course-color-6">Naranja</option>
          <option value="course-color-7">Púrpura</option>
          <option value="course-color-8">Morado</option>
        </select>
      </div>
      <div class="text-end mb-3">
        <button type="button" id="cancelBtn" class="btn btn-secondary me-2">Cancelar</button>  
        <button type="submit" id="addCourseBtn" class="btn btn-primary">Agregar Curso</button>        
      </div>      
    </form>
  </div>
  <script>
const downloadImgBtn = document.getElementById('downloadImgBtn');
downloadImgBtn.addEventListener('click', function() {
  const scheduleTable = document.querySelector('.schedule-table');
  const scale = 3; // Increase the scale for higher resolution
  html2canvas(scheduleTable, { scale: scale }).then(function(canvas) {
    const imgData = canvas.toDataURL('image/png', 1.0); // Use maximum image quality
    const link = document.createElement('a');
    link.href = imgData;
    link.download = 'mi_horario.png';
    link.click();
  });
});
  </script>
  <script src="horario.js"></script> <!-- Link to your custom JavaScript file -->
</body>
</html>