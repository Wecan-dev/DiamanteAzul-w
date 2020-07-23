<?php
	get_header();
?>
	<section id="main">
<?php

	// Primero, los datos de la categoría actual
	$categoria_actual = single_cat_title( "", false);
	$categoria_id = get_cat_ID( $categoria_actual );
	$categoria_descr = category_description( $categoria_id );
	$categoria_vinculo = get_category_link( $categoria_id );
	
	// Mostramos los datos de la categoría por pantalla
?>
		<div id="categoria">
			<!-- <div class="categoria numero"><?php // echo $categoria_id; ?></div> -->
			<div class="categoria titulo"><h2>CATEGORIA: <?php echo $categoria_actual; ?></h2></div>
			<div class="categoria descripcion"><?php echo $categoria_descr; ?></div>
			<!-- <div class="categoria vinculo"><?php // echo $categoria_vinculo; ?></div> -->
		</div>
<?php
	
	// Ahora buscamos las categorías inferiores
	$argumentos = array(
		'child_of' => $categoria_id
		);

	// Creamos la matriz $categorias_hijas
	$categorias_hijas = array();
	$categorias_hijas = get_categories( $argumentos );
	
	// Y las mostramos
	if ( !empty( $categorias_hijas ) ) {
		?>
		<div id="subcategorias">
		<h2>Subcategorías</h2>
		<table class="subcategorias">
			<tr class="cabecera">
				<th>Id</th><th>Título</th><th>Posts</th>
			</tr>
		<?php
		foreach( $categorias_hijas as $subcategoria ) {
			?><tr>
				<td><?php echo $subcategoria->cat_ID; ?></td>
				<td><h3><a href="<?php echo get_category_link( $subcategoria->cat_ID ); ?>"><?php echo $subcategoria->cat_name; ?></a></h3></td>
				<td><?php echo $subcategoria->category_count; ?></td>
			</tr>
			<tr>
				<td colspan="3" style="font-size: small;"><?php echo $subcategoria->category_description; ?></td>
			</tr><?php
		}
		?>
		</table>
		</div>
		<?php
	}
	else {
		?><p>Esta categoría no tiene subcategorías</p><?php
	}
	
?>	
	<h2>Posts de la categoría:</h2>
<?php

	// Después, el 'loop' con los artículos de la categoría
	if (have_posts()) : while (have_posts()) : the_post();

		get_template_part( 'partes/articulo' );
 
	endwhile;
	else:
?>
	<p><?php _e('No hay entradas .'); ?></p>
<?php
	endif; 
?>
	</section> <!-- Fin de la sección main -->
<?php
	get_sidebar();
	get_footer();
?>