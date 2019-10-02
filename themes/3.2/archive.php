<?php get_header(); ?>

		<?php if (have_posts()) : ?>

		 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		 <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">Posts de &#8216;<?php single_cat_title(); ?>&#8217;</h2>

 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Posts de <?php the_time('j M Y'); ?></h2>

	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Posts de <?php the_time('F Y'); ?></h2>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Posts de <?php the_time('Y'); ?></h2>

	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Autor</h2>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>

		<?php } ?>


  <?php while (have_posts()) : the_post(); ?>
    <!-- caixa post -->
    <div class="cxPost">

      <h2>
	      <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
      </h2>
      <p class="infoPost"><small>Postado em
      <?php the_time('j \d\e F \d\e Y') ?>
      em
      <?php the_category(', '); ?>
      </small></p>
      <div id="HOTWordsTxt" name="HOTWordsTxt" class="txtPost">
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>" class="more">(Mais...)</a>
      </div>

      <p class="comentariosPosts">Coment&aacute;rios:
        <?php comments_popup_link('Nenhum. Seja o primeiro!', '1 Coment&aacute;rio', '% Coment&aacute;rios'); ?>
      </p>
      
      <!-- info do post -->
      <div class="boxInfoPost">
      	<div class="caixaAutor">
					<?php echo get_avatar( get_the_author_email(), '70' ); ?>
          <p class="nomeAutor"><?php the_author(); ?></p>
          <p><?php the_author_description(); ?></p>
          <p>Ver todos os posts de <?php the_author_posts_link(); ?> | Twitter: <a href="http://www.twitter.com/<?php the_author_nickname(); ?>" target="_blank">@<?php the_author_nickname(); ?></a></p>
        </div>
      </div>
      <!-- /info do post -->
      <!-- posts relacionados -->
      <div class="postsRelacionados">
        <h3>Posts relacionados</h3>
        <?php similar_posts(); ?>
      </div>
      <!-- /posts relacionados -->
    </div>
    <!-- caixa post -->
						
		<?php endwhile; ?>

    <div id="navegacao">
    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    </div>

	<?php else : ?>
  <div class="entry">
		<h2 class="center">Oops!<br />
		Nada foi encontrado...</h2>
  </div>

	<?php endif; ?>

  </div>
  <!-- /conteudo -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>