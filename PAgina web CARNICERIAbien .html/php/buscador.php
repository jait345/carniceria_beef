<?php
  if (isset($_GET['busqueda'])) {
    $busqueda = $_GET['busqueda'];
    $archivo = file_get_contents('archivo.txt');
    $resultados = preg_match_all("/\b$busqueda\b/i", $archivo, $coincidencias);
    if ($resultados > 0) {
      echo "<p>Se encontraron $resultados resultados:</p>";
      echo "<ul>";
      foreach ($coincidencias[0] as $coincidencia) {
        echo "<li>$coincidencia</li>";
      }
      echo "</ul>";
    } else {
      echo "<p>No se encontraron resultados para '$busqueda'.</p>";
    }
  }
?>