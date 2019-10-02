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
      
      <div class="adSense-top-post">
		<script type='text/javascript'><!--//<![CDATA[
           var m3_u = (location.protocol=='https:'?'https://numclique.net/ads/www/delivery/ajs.php':'http://numclique.net/ads/www/delivery/ajs.php');
           var m3_r = Math.floor(Math.random()*99999999999);
           if (!document.MAX_used) document.MAX_used = ',';
           document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
           document.write ("?zoneid=4");
           document.write ('&amp;cb=' + m3_r);
           if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
           document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
           document.write ("&amp;loc=" + escape(window.location));
           if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
           if (document.context) document.write ("&context=" + escape(document.context));
           if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
           document.write ("'><\/scr"+"ipt>");
        //]]>--></script><noscript><a href='http://numclique.net/ads/www/delivery/ck.php?n=a4c4a038&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://numclique.net/ads/www/delivery/avw.php?zoneid=4&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=a4c4a038' border='0' alt='' /></a></noscript>
      </div>

      <div id="HOTWordsTxt" name="HOTWordsTxt" class="txtPost">
				<?php the_content('(Mais...)'); ?>
			</div>
			

				<?php wp_link_pages(array('before' => '<p class="paginador"><strong>P&aacute;ginas:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>


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

      <!-- posts de outros blogs -->
      <div class="postsRelacionados">
        <h3>Posts interessantes em outros blogs</h3>
		<script type="text/javascript" src="http://2leep.com/ticker2/2201/custom/5/2/80/bottom/transparent|black|Georgia|1.2em|0.04em|11px|540|4241|0|1px|%23c0c0c0|center|middle|square"></script>
      </div>
      <!-- /posts de outros blogs-->

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

