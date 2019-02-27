<?php get_header(); ?>
<main>
  <section class="posts" style="float:left; margin-top:150px;">
<?php if ( have_posts() ) : 
  while ( have_posts() ) : the_post(); ?>
      <article class="article-full">
          <h2><a class="Principal" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          Creado por: <?php the_author(); ?>
        <?php the_excerpt(); ?>
      </article>
<?php endwhile; else : ?>
      <article>
        <p>No hay posts para mostrar</p>
      </article>
<?php endif; ?>
  </section><?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>

