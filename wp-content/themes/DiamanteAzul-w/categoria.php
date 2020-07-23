<?php
get_header();
?>
<div class='wrapper'>
  <div class="container category-container">
    <div class="category-header">
      <h1>Anillos de Graduación</h1>
      <form>
        <div class="input-group">
          <input class="form-control" placeholder="Buscar..." type="text">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="icofont-search"></i>
            </button>
          </div>
        </div>
        <small>Ejemplo: graduación, boda, dije, etc.</small>
      </form>
    </div>

  </div>
  <div class="banner-category-box">
    <img class="banner-category" src="<?php echo get_template_directory_uri();?>/assets/img/Banner/001banner-categoria-grado.jpg">
  </div>
  <div class="container category-container">
    <div class="category-box">
      <div class="category-items">
        <div class="row">
          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="card-catalogue">
              <div class="card-catalogue-img">
                <a href="productos.html"><img src="<?php echo get_template_directory_uri();?>/assets/img/Products/grado/COLL-6X4-WEB-001.jpg">
                </a>
              </div>
              <div class="card-catalogue-content">
                <h2 class="card-catalogue-title">clasicos</h2>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="card-catalogue">
              <div class="card-catalogue-img">
                <a href="productos.html"><img src="<?php echo get_template_directory_uri();?>/assets/img/Products/grado/FONDO-CATEGORIA-GRIEGA.jpg">
                </a>
              </div>
              <div class="card-catalogue-content">
                <h2 class="card-catalogue-title">griega</h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="card-catalogue">
              <div class="card-catalogue-img">
                <a href="productos.html"><img src="<?php echo get_template_directory_uri();?>/assets/img/Products/grado/FONDO-CATEGORIA-JOYA.jpg">
                </a>
              </div>
              <div class="card-catalogue-content">
                <h2 class="card-catalogue-title">JOYA</h2>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();
?>