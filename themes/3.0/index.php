<?php get_header(); ?>

    <!-- destaque -->
    <div id="destaque">
      <div id="slider1" class="contentslide">
        <div class="opacitylayer">  
          <?php
            $getposts = get_posts('category=1184&numberposts=4');
            foreach($getposts as $post):
            setup_postdata($post);
            $tipo_img = 'img-destaque';
          ?>
          <div class="contentdiv">
            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="<?php echo get_post_meta($post->ID, $tipo_img, true); ?>" /></a>
            <h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="pagination" id="paginate-slider1">
      </div>
      <script type="text/javascript">
      //Define: ContentSlider("slider_ID", [autorotate_miliseconds], [custompaginatelinkstext], [customnextlinktext])
      ContentSlider("slider1", 6000)
      </script>
    </div>
    <!-- /destaque -->

  <?php 
  query_posts($query_string . 'cat=-546');
  if (have_posts()) : ?>
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
        <?php the_content('(Mais...)'); ?>
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
    </div>
    <!-- caixa post -->

  <?php endwhile; ?>

    <!-- paginacao -->
    <div id="navegacao">
    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    </div>
    <!-- /paginacao -->

  <?php else : ?>
  <div class="entry">
    <h2>Oops!</h2>
    <p>Esta p&aacute;gina n&atilde;o foi encontrada...</p>
  </div>
  <?php endif; ?>

  </div>
  <!-- /conteudo -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>