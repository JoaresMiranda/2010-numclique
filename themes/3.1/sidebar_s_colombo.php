<!-- sky -->
<div id="sky" class="publicidade">
    <h4>Publicidade - Skybanner</h4>
    <div>
		<script type='text/javascript'>
        GA_googleFillSlot("Sky_1");
        </script>
    </div>
    <div>
		<script type='text/javascript'>
        GA_googleFillSlot("Sky_2");
        </script>
    </div>

</div>
<!-- /sky -->

<!-- coluna -->
<div id="coluna">
  <!-- midias sociais -->
  <div id="iconesMidias">
    <h4>Ícones para acesso às mídias sociais</h4>
    <ul>
      <li id="icTwitter"><a href="http://www.twitter.com/numclique" target="_blank">Twitter</a></li>
      <li id="icRSS"><a href="http://www.numclique.net/feed" target="_blank">RSS</a></li>
      <li id="icOrkut"><a href="http://www.orkut.com.br/Main#Community?cmm=27743138" target="_blank">Orkut</a></li>
      <li id="icEMail"><a href="http://feedburner.google.com/fb/a/mailverify?uri=numclique&loc=pt_BR" target="_blank">e-mail</a></li>
    </ul>
  </div>
  <!-- /midias sociais -->
  <!-- enquete -->
  <div id="enquete">
    <h3>Enquete da semana</h3>
    <?php
		$my_query = new WP_Query('category_name=Enquete&showposts=1');
		while ($my_query->have_posts()) {
			$my_query->the_post();
			$do_not_duplicate = $post->ID;	?>
    <?php the_content();
		} ?>
  </div>
  <!-- /enquete -->
  <!-- banner quadrado -->
  <div id="bannerQuadrado" class="publicidade">
    <h4>Publicidade - Banner Quadrado</h4>
    <div>
		<script type='text/javascript'>
        GA_googleFillSlot("Quadrado");
        </script>
    </div>
  </div>
  <!-- /banner quadrado -->
  <!-- posts recentes -->
  <div id="postsRecentes">
    <h3>Posts recentes</h3>
    <ul>
      <?php
          $myposts = get_posts('numberposts=15&offset=1');
          foreach($myposts as $post) :
          ?>
      <li><a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <!-- /posts recentes -->

	<?php
  if ( is_home() ) { ?>
  <style type="text/css">
  #mini-banner {
    width:270px;
    clear:both;
    border-bottom:1px dotted #CCC;
    padding-bottom:15px;
    margin-bottom:15px;
    text-align:center;
  }
  </style>
  <div id="mini-banner">
    <div id="anuncio" style="font-family:Verdana, Geneva, sans-serif; width:120px;height:94px; background:url(http://www.mediad1.com/images/colombo.jpg) #fff no-repeat;font-size:11px;text-align:center;padding:1px 0; margin:0 auto;">
    <p style="font-size:10px;">www.colombo.com.br</p>
    Procurando ofertas de <a href="http://www.colombo.com.br/produto/Som-e-Video/TV-LED" target="_blank">TV led</a>? Confira em nosso site os melhores pre&ccedil;os!</p>
  </div>
  </div>
  <?php }?>

  <!-- submarino -->
    <div id="miniQuadrados" class="publicidade">
	    <h4>Publicidade - miniquadrados submarino</h4>
        <div class="submarino1">
			<script type='text/javascript'>
            GA_googleFillSlot("Quadradinho_1");
            </script>
        </div>
        <div class="submarino2">
			<script type='text/javascript'>
            GA_googleFillSlot("Quadradinho_2");
            </script>
        </div>
    </div>
  <!-- /submarino -->

  <!-- categorias -->
  <div id="categorias">
    <h3>Categorias</h3>
    <ul>
      <?php wp_list_categories('show_count=0&title_li=&exclude=7, 546'); ?>
    </ul>
  </div>
  <!-- /categorias -->

  <!-- arquivo -->
  <div id="arquivo">
    <h3>Arquivo</h3>
    <ul>
      <?php wp_get_archives('type=monthly'); ?>
    </ul>
  </div>
  <!-- arquivo -->

  <!-- blogs amigos -->
  <div id="blogsAmigos">
    <h3>Blogs amigos</h3>
    <div> <a href="http://ueba.com.br/" title="U&Ecirc;BA - Os melhores links" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/blogs-amigos/ueba.jpg" /></a> <a href="http://cybervida.com.br/" title="Cyber Vida - Realidade Digital" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/blogs-amigos/cyber-vida.jpg" /></a> <a href="http://www.sedentario.org" title="Sedent&aacute;rio &amp; Hiperativo" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/blogs-amigos/sedentario.jpg" /></a> <a href="http://www.rodrigostoledo.com" title="RodrigoSToledo.com" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/blogs-amigos/rodrigo-toledo.jpg" /></a> <a href="http://iradex.net/" title="Iradex.net" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/blogs-amigos/iradex.jpg" /></a> <a href="http://cinemacomrapadura.com.br/" title="Cinema com Rapadura" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/blogs-amigos/cinema-com-rapadura.jpg" /></a> <a href="http://www.mundotecno.info" title="Mundo Tecno - Tecnologia, internet e divers&atilde;o" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/blogs-amigos/mundo-tecno.jpg" /></a> <a href="http://www.euqueru.net" title="EuQueru.net  - Eu quero e fiquei querendo" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/blogs-amigos/euqueru.jpg" /></a> <a href="http://www.conversamole.net" title="ConversaMole.net" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/blogs-amigos/conversamole.jpg" /></a> <a href="http://www.fayerwayer.com.br" title="FayerWayer Brasil - Doses di&aacute;rias de tecnologia em portugu&ecirc;s" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/blogs-amigos/fayer-wayer.jpg" /></a> <a href="http://blog.opovo.com.br/tecnosfera" title="Tecnosfera" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/blogs-amigos/tecnosfera.jpg" /></a> </div>
  </div>
  <!-- /blogs amigos -->

  <!-- tags -->
  <div id="tags">
    <h3>Tags</h3>
    <div>
      <?php wp_tag_cloud('smallest=8&largest=22&number=60'); ?>
    </div>
  </div>
  <!-- /tags -->	

	<!-- Facebook -->
	<div id="boxFacebook">
        <h3>Facebook</h3>
        <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FNumClique%2F147177731988934&amp;width=270&amp;connections=10&amp;stream=false&amp;header=false&amp;height=255" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:270px; height:255px;" allowTransparency="true"></iframe>
    </div>
    <!-- /Facebook -->

  <!-- monitor on-line -->
  <div id="monitorOnline">
    <h4>Monitor online</h4>
    <a href="http://whos.amung.us/stats/32avkjpycm68/" target="_blank"><img src="http://whos.amung.us/swidget/32avkjpycm68.gif" width="80" height="15" border="0" title="Clique e veja quantas pessoas est&atilde;o online" /></a>
  </div>
  <!-- /monitor on-line -->
</div>
<!-- /coluna -->
