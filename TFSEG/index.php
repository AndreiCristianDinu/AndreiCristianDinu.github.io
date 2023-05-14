<?php
  session_start();
  //$_SESSION ['usuario'] = "Cristian";

require_once('Bloques/P-arriba.php');
require_once('Bloques/Navegador.php');
require_once('conexion.php');

?>

<header>
<div
  class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-with-icon" 
  style="
    height: 100vh;
  "
>
  <h1 class="">UJI-SECURiTY</h1>

  <?php
      if (isset($_SESSION['usuario'])) {
        echo'
          
          <p> Bienvenido ' .$_SESSION['usuario'].'</p>';
      }
      else {
        echo'
          <p>Por favor registrate o haz login</p>';
      }
    ?>
</div>
</header>
<?php
 
require_once('Bloques/PiePag.php');
require_once('Bloques/P-abajo.php');

?>        
