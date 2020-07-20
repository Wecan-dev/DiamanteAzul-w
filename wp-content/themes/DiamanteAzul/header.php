<!DOCTYPE html>
<html lang="en">
<head>
  <title>Joyería Diamante Azul</title>
  <meta charset='utf-8'>
  <meta content='width=device-width, initial-scale=1.0' name='viewport'>
  <meta content='Diamante Azul | Joyería para toda ocasión' name='description'>
  <meta content='#ffffff' name='theme-color'>
  <!-- CORE CSS -->
  <link href='https://allyoucan.cloud/cdn/icofont/1.0.1/icofont.css' rel='stylesheet'>
  <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/offcanvas.css">
  <link href='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' rel='stylesheet'>
  <link href='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css' rel='stylesheet'>
  <!-- THEME CSS -->
  <link href='<?php echo get_template_directory_uri();?>/assets/css/main.css' rel='stylesheet' type='text/css'>
  <link href='<?php echo get_template_directory_uri();?>/assets/css/font-awesome.css' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>


  <a class="float-button btn btn-float" href="https://api.whatsapp.com/send?phone=584246779776">
    <i class="icofont-whatsapp"></i>
  </a>
  <div class="main-fixed__ws">
    <a href="<?php bloginfo('url'); ?>/contactanos#contactp_form" class="text-fixed__ws">
      Contactanos
    </a>
  </div>



  <div class='fixed-top'>
    <nav class='navbar navbar-top navbar-expand-lg'>
      <a class='navbar-brand'>
        <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-default.png">
      </a>

    </nav>
    <button class="navbar-toggler p-2 border-0 hamburger hamburger--elastic ml-autos" data-toggle="offcanvas" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
    <nav class='navbar navbar-expand-lg'>

      <div class='navbar-collapse offcanvas-collapse'>
        <ul class='navbar-nav mx-auto'>
          <li class='nav-item'>
            <a href="<?php bloginfo('url'); ?>" class='nav-link'>Inicio</a>
          </li>
          <li class='nav-item'>
            <a href="<?php bloginfo('url'); ?>/catalogo" class='nav-link'>Catálogo</a>
          </li>
          <li class='nav-item'>
            <a href="<?php bloginfo('url'); ?>/nosotros" class='nav-link'>Diseño de Joyas</a>
          </li>
          <li class='nav-item'>
            <a href="<?php bloginfo('url'); ?>/contactanos" class='nav-link'>Contacto</a>
          </li>
          
          <li class="search">
          <i class="icofont-search"></i>
            <div class="search-bar">
              <form action="<?php bloginfo('url'); ?>" method="get">
                <input type="text" name="s" placeholder="Buscar...">
              </form>
            </div>
          </li>
          <li class="search_mobile">
            <form>
              <div class="input-group">
                <input class="form-control" placeholder="Buscar..." type="text">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="icofont-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </li>
          
        </ul>
      </div>
      <!-- <div class="boton-navbar">
        <form class="Search" action="<?php bloginfo('url'); ?>" method="get">
         <span class="Search-close">
          <span class="lnr lnr-cross"></span>
        </span>
        <input type="text" class="form-control Search-box" name="s" id="Search-box" placeholder="Search">
          <label for="Search-box" class="Search-box-label">
            <i class="fa fa-search"></i>
          </label>
      </form>
    </div> -->
  </nav>

</div>


<style>
.search{
	position:relative;
	display:inline-block;
	color:white;
	padding:10px 12px;
	float:right;
}
.search-bar{
	position:absolute;
	display:none;
	right:0;
	top:45px;
}
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border-radius: 4px;
    font-size: 16px;
    outline:none;
    padding: 12px 14px;
    transition: width 0.4s ease-in-out;
}

.search:hover{
  background-color: #1e46a1;
    border-color: #1e46a1;
  color:#fff;
}
.search:hover .search-bar{
	display:block;
}
.search form input[type="text"]:focus{
	width:300px;
	background-color:#fff;
}


</style>
