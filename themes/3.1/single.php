<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

      <div class="top-post">
		<script type='text/javascript'>
        GA_googleFillSlot("FullBanner_top");
        </script>
      </div>

      <div id="botoesShare">
      	<p><a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></p>
      	<p><iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=80&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:80px; height:20px"></iframe></p>
      </div>


    <div id="HOTWordsTxt" name="HOTWordsTxt" class="txtPost">
		<?php the_content('(Mais...)'); ?>
    </div>
    
    <?php wp_link_pages(array('before' => '<p class="paginador"><strong>P&aacute;ginas:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

      <div class="top-post">
		<script type='text/javascript'>
        GA_googleFillSlot("FullBanner_bottom");
        </script>
      </div>
    
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
    <!-- /caixa post -->

    <!-- comentarios -->
    <?php comments_template(); ?>
    <!-- /comentarios -->


	<?php endwhile; else: ?>

<div class="entry">

		<h2>Oops!!!</h2>
    <p>Nada referente ao que você estava procurando está aqui... acesse nossa <a href="<?php echo get_option('home'); ?>/">página inicial</a> para ver se encontra o que precisa</p>

</div>

<?php endif; ?>



	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

