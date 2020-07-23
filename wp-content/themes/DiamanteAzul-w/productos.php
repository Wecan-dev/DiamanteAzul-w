
<?php
get_header();
?>
<div class='wrapper'>
  <div class="container category-container">
    <div class="category-header">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="category.html">Anillos de Graduación</a>
          </li>
          <li class="breadcrumb-item">
            <a href="category.html">Clásicos</a>
          </li>
          <li aria-current="page" class="breadcrumb-item active">
            <a href="subcategory.html">Tradicionales</a>
          </li>
        </ol>
      </nav>

      
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
    <div class="category-box">


      <div class="category-items">
        <div class="row">
          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="card-catalogue">
              <div class="card-catalogue-img">
                <a href="producto.html"><img src="<?php echo get_template_directory_uri();?>/assets/img/Products/j/01-J-24.jpg">
                </a>
              </div>
              <div class="card-catalogue-content">
                <h2 class="card-catalogue-title">J-24</h2>
                <a class="btn btn-custom" href="">Comprar por Whatsapp
                </a>
                <!-- <a class="btn btn-custom"  href="<?php echo 'https://web.whatsapp.com/send?phone=584246779776&text=Hola,%20Estoy%20interesado%20en%20este%20producto%20'.str_replace( ' ', '%20', get_the_title()) . ' ' . urlencode(get_permalink());?>">Comprar por Whatsapp</a> -->
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="card-catalogue">
              <div class="card-catalogue-img">
                <a href="producto.html"><img src="<?php echo get_template_directory_uri();?>/assets/img/Products/j/01-J-24.jpg">
                </a>
              </div>
              <div class="card-catalogue-content">
                <h2 class="card-catalogue-title">J-24</h2>
                <a class="btn btn-custom" href="">Comprar por Whatsapp
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="card-catalogue">
              <div class="card-catalogue-img">
                <a href="producto.html"><img src="<?php echo get_template_directory_uri();?>/assets/img/Products/j/01-J-24.jpg">
                </a>
              </div>
              <div class="card-catalogue-content">
                <h2 class="card-catalogue-title">J-24</h2>
                <a class="btn btn-custom" href="">Comprar por Whatsapp
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="card-catalogue">
              <div class="card-catalogue-img">
                <a href="producto.html"><img src="<?php echo get_template_directory_uri();?>/assets/img/Products/j/01-J-24.jpg">
                </a>
              </div>
              <div class="card-catalogue-content">
                <h2 class="card-catalogue-title">J-24</h2>
                <a class="btn btn-custom" href="">Comprar por Whatsapp
                </a>
              </div>
            </div>
          </div>


          
          <nav aria-label="..." class="nav-paginator">
            <ul class="pagination">
              <li class="page-item disabled">
                <a aria-label="Previous" class="page-link" href="#">
                  <span aria-hidden="true">«</span>
                </a>
              </li>
              <li aria-current="page" class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a aria-label="Next" class="page-link" href="#">
                  <span aria-hidden="true">»</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>





<?php
get_footer();
?>