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
    <h4>Icones para acesso as midias sociais</h4>
    <ul>
      <li id="icTwitter"><a href="http://www.twitter.com/numclique" target="_blank">Twitter</a></li>
      <li id="icRSS"><a href="http://www.numclique.net/feed" target="_blank">RSS</a></li>
      <li id="icOrkut"><a href="http://www.orkut.com.br/Main#Community?cmm=27743138" target="_blank">Orkut</a></li>
      <li id="icEMail"><a href="http://feedburner.google.com/fb/a/mailverify?uri=numclique&loc=pt_BR" target="_blank">e-mail</a></li>
    </ul>
  </div>
  <!-- /midias sociais -->
  
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

  <!-- blogs amigos -->
  <div id="blogsAmigos">
    <h3>Blogs amigos</h3>
    
    <p><a href="http://iradex.net" title="Iradex.net - Comerciais, Propagandas e V&iacute;deos" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/blogs-amigos/iradex.net.jpg" /></a></a>
    
    <div> <a href="http://ueba.com.br/" title="U&Ecirc;BA - Os melhores links" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/blogs-amigos/ueba.jpg" /></a> <a href="http://cybervida.com.br/" title="Cyber Vida - Realidade Digital" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/blogs-amigos/cyber-vida.jpg" /></a> <a href="http://www.sedentario.org" title="Sedent&aacute;rio &amp; Hiperativo" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/blogs-amigos/sedentario.jpg" /></a> <a href="http://www.rodrigostoledo.com" title="RodrigoSToledo.com" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/blogs-amigos/rodrigo-toledo.jpg" /></a> <a href="http://cinemacomrapadura.com.br/" title="Cinema com Rapadura" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/blogs-amigos/cinema-com-rapadura.jpg" /></a> <a href="http://www.mundotecno.info" title="Mundo Tecno - Tecnologia, internet e divers&atilde;o" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/blogs-amigos/mundo-tecno.jpg" /></a> <a href="http://www.euqueru.net" title="EuQueru.net  - Eu quero e fiquei querendo" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/blogs-amigos/euqueru.jpg" /></a> <a href="http://www.conversamole.net" title="ConversaMole.net" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/blogs-amigos/conversamole.jpg" /></a> <a href="http://www.fayerwayer.com.br" title="FayerWayer Brasil - Doses di&aacute;rias de tecnologia em portugu&ecirc;s" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/blogs-amigos/fayer-wayer.jpg" /></a> </div>
  </div>
  <!-- /blogs amigos -->

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
      <?php wp_list_categories('show_count=0&title_li=&exclude=7, 546, 3450'); ?>
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

  <!-- tags -->
  <div id="tags">
    <h3>Tags</h3>
    <div>
      <?php wp_tag_cloud('smallest=8&largest=22&number=60'); ?>
    </div>
  </div>
  <!-- /tags -->	

</div>
<!-- /coluna -->
