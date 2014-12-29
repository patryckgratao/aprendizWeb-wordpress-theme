<?php
/*
Template Name: Modelo Aprendiz Web
*/
?>
<?php get_header(); ?>
<div id="conteudo">
    <div id="primary">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

         <h1><?php the_title(); ?></h1>

<div id="conteudo_post">
        <?php the_content(); ?>
</div>

<?php endwhile; else: ?>

<h2>Erro 404</h2>
<p>Nada Encontrado</p>

<?php endif; ?>

    </div>

</div> <!-- content -->

<?php get_footer(); ?> <!-- inclui o código do arquivo footer.php -->