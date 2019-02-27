<?php get_header(); ?>
<main>
  <section style="float:left; margin-top:50px;">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="article-full">
          <h2><?php the_title(); ?></h2>
          By: <?php the_author(); ?>
        <?php the_content(); ?>
      </article>
<?php endwhile; else : ?>
      <article>
        <p>La pagina no existe</p>
      </article>
<?php endif; ?>
  </section><?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>