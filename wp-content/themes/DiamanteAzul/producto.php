<?php
get_header();
?>
<div class='wrapper'>
  <div class="container product-container">
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
    </div>
    <div class="product-box">
      <div class="product-images">
        <div class="product-images-for">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/Products/j/01-J-24.jpg">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/Products/j/01-J-24.jpg">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/Products/j/01-J-24.jpg">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/Products/j/01-J-24.jpg">
        </div>
        <div class="product-images-nav">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/Products/j/01-J-24.jpg">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/Products/j/01-J-24.jpg">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/Products/j/01-J-24.jpg">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/Products/j/01-J-24.jpg">
        </div>
      </div>
      <div class="product-description">
        <form action="">
          <h3>REF: CLE 10X8 AN</h3>
          <h1>316</h1>
          <div class="row">
            <div class="col-sm-12">
              <h4>Materiales</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="inputBox">
                <label class="checkbox-container">
                  Oro 18k
                  <input name="additional[oro-18k]" type="checkbox">
                  <span class="checkmark"></span>
                </label>
                <label class="checkbox-container">
                  Oro 10k
                  <input name="additional[oro-10k]" type="checkbox">
                  <span class="checkmark"></span>
                </label>
                <label class="checkbox-container">
                  Plata Ley 950
                  <input name="additional[plata-ley-950]" type="checkbox">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="inputBox">
                <label class="checkbox-container">
                  Plata con baño de oro 24k
                  <input name="additional[plata-baño-oro-24k]" type="checkbox">
                  <span class="checkmark"></span>
                </label>
                <label class="checkbox-container">
                  Plata con baño de rodio
                  <input name="additional[plata-baño-rodio]" type="checkbox">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
          </div>

          <h4>Características</h4>
          <ul>
            <li>Garantía de por vida&nbsp;</li>
          </ul>


          <div class="row">

            <div class="col-lg-12 col-xs-12">
              <div class="form-footer">
                <button class="btn btn-custom" type="submit">
                  Comprar por Whatsapp
                </button>
              </div>
            </div>
          </div>
        </div>

      </form>

    </div>
  </div>
</div>
</div>


<?php
get_footer();
?>
