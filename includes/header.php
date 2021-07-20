<header id="header">
  <div class="caja-logo">
    <a href="/"><img src="/images/logoartescaso.svg" alt="Logo Artescaso" /></a>
  </div>
  <div class="header-container">
    <div class="container-menu" id="menuId">
      <div class="items-menu">
        <a class="menu-item" id="aInicio" href="/">Inicio</a>
      </div>
      <div class="items-menu active">
        <a class="menu-item" id="aServicios" href="#servicios">Servicios</a>
      </div>
      <div class="items-menu">
        <a class="menu-item" id="aSobremi" href="#sobre-mi">Sobre Mí</a>
      </div>
      <div class="items-menu">
        <a class="menu-item" id="aHabilidades" href="#habilidades">Habilidades</a>
      </div>
      <div class="items-menu">
        <a class="menu-item" id="aTrabajos" href="#trabajos">Trabajos</a>
      </div>
      <div class="items-menu">
        <a class="menu-item" id="aMarcas" href="#marcas">Marcas</a>
      </div>
      <div class="items-menu">
        <a class="menu-item" id="aContacto" href="#contacto">Contacto</a>
      </div>
    </div>
  </div>
  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="#servicios" onclick="closeNav()">Servicios</a>
    <a href="#sobre-mi" onclick="closeNav()">Sobre Mí</a>
    <a href="#habilidades" onclick="closeNav()">Habilidades</a>
    <a href="#trabajos" onclick="closeNav()">Trabajos</a>
    <a href="#marcas" onclick="closeNav()">Marcas</a>
    <a href="#contacto" onclick="closeNav()">Contacto</a>
  </div>

  <div id="main">
    <button class="openbtn" onclick="openNav()">☰</button>
  </div>

  <script>
    function openNav() {
      document.getElementById("mySidebar").style.width = "100%";
      document.getElementById("main").style.marginRight = "250px";
    }

    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.marginRight = "0";
    }
  </script>
</header>