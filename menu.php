<?php
    session_start();
    $id=$_SESSION['id'];
    $name=$_SESSION['name'];
    if(!isset($_SESSION['loggedin'])){
        echo '<script lenguage="javascript">alert("tienes que acceder con tu usuario y contraseña");location.href="index.php";</script>';
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $name;?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="scripts/js/funciones.js"></script>
    <script src="scripts/js/jquery.min.js"></script>
</head>
<body style="background-color: white;">
<header class="page-header" style="background:#103236">
  <nav>
    <a href="#0" aria-label="logo" class="logo">
    <img src="img/logo.avif" alt="logo" width="160" height="125" style="border-radius: 10px;"></img>
    </a>
    <button class="toggle-mob-menu" aria-expanded="false" aria-label="open menu">
      <svg width="20" height="20" aria-hidden="true">
        <use xlink:href="#down"></use>
      </svg>
    </button>
    <ul class="admin-menu">

      <li class="menu-heading">
        <h3 style="color:darkgray;">INSERTAR</h3>
      </li>
      <li>
        <a href="#0" onclick="graciasGenio('#contenido','cajon.php')">

            <img src="img/coche.png" alt="logo" width="35" height="35"style=""></img>

          <span style="padding: 2%;">CAJON</span>
        </a>
      </li>
      <li>
        <a href="#0" onclick="graciasGenio('#contenido','cliente.php')">
        <img src="img/cliente.png" alt="logo" width="25" height="25"></img>

          <span style="padding: 2%;">CLIENTE</span>
        </a>
      </li>
      <li>
        <a href="#0" onclick="graciasGenio('#contenido','registro.php')">
        <img src="img/verificar.png" alt="logo" width="25" height="25"></img>

          <span style="padding: 2%;">REGISTRO</span>
        </a>
      </li>
      <li>
        <a href="#0" onclick="graciasGenio('#contenido','tarifa.php')">
        <img src="img/gastos.png" alt="logo" width="25" height="25"></img>

          <span style="padding: 2%;">TARIFA</span>
        </a>
      </li  >
      <li>
        <a href="#0" onclick="graciasGenio('#contenido','forVeiculo.php')">
        <img src="img/vehiculo.png" alt="logo" width="25" height="25"style=""></img>

          <span style="padding: 2%;">VEHICULO</span>
        </a>
      </li>
      <li class="menu-heading">
        <h3 style="color:darkgray;">INICIO</h3>
      </li>
      <li>
        <a href="logout.php">
        <img src="img/salir.png" alt="logo" width="23" height="23"></img>

          <span style="padding: 2%;">SALIR</span>
        </a>
      </li>
      <li>
      <a href="#0" onclick="graciasGenio('#contenido','empleados.php')">
        <img src="img/empleados.png" alt="logo" width="23" height="23"></img>

          <span style="padding: 2%;">EMPLEADOS</span>
        </a>
      </li>
      <li>
        <button class="collapse-btn" aria-expanded="true" aria-label="collapse menu">
        <img src="img/flecha.png" alt="logo" width="27" height="27"style=""></img>
          <span>CERRAR</span>
        </button>
      </li>
      <li>
        <div class="switch">
          <input type="checkbox" id="mode" checked>
          <label for="mode">
          </label>
        </div>
      </li>

      <!--
      <li>
        
        <div class="switch">
          <input type="checkbox" id="mode" checked>
          <label for="mode">
            <span></span>
            <span>Dark</span>
          </label>
        </div>

        <button class="collapse-btn" aria-expanded="true" aria-label="collapse menu">
          <svg aria-hidden="true">
            <use xlink:href="#collapse"></use>
          </svg>
          <span>Collapse</span>
        </button>
      </li>-->
    </ul>
  </nav>
</header>
 <!-- <section class="search-and-user">-->
    <div class="page-content" id="contenido">
      <?php
      include 'inicio.php'
      ?>
    </div>
    <!--
    <form>
      <input type="search" placeholder="Search Pages...">
      <button type="submit" aria-label="submit form">
        <svg aria-hidden="true">
          <use xlink:href="#search"></use>
        </svg>
      </button>
    </form>
    
    <div class="admin-profile">
      <span class="greeting">Hello admin</span>
      <div class="notifications">
        <span class="badge">1</span>
        <svg>
          <use xlink:href="#users"></use>
        </svg>
      </div>
    </div>-->
  <!--</section>-->

  <footer class="page-footer">
    </a>
  </footer>
<script src="scripts/js/dashboard.js"></script>

</body>
</html>


