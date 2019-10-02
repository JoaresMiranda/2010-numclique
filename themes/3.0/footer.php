  <!-- menu -->
  <div id="menu">
		<ul>
    <li><a href="<?php bloginfo('url'); ?>" class="item-Iniciar">Inicial</a></li>
    <li><a href="<?php bloginfo('url'); ?>/mediakit" class="item-Publicidade">Publicidade</a></li>
    <?php wp_list_pages('exclude=495,5085&title_li=&sort_column=menu_order'); ?>
		</ul>
  </div>
  <!-- /menu -->

  <!-- busca -->
  <?php include (TEMPLATEPATH . '/searchform.php'); ?>
  <!-- /busca -->

  <!-- super banner -->
  <div id="SuperBanner" class="publicidade">
  	<h4>Publicidade - Super Banner</h4>
	<div>

		<script type='text/javascript'><!--//<![CDATA[
           var m3_u = (location.protocol=='https:'?'https://numclique.net/ads/www/delivery/ajs.php':'http://numclique.net/ads/www/delivery/ajs.php');
           var m3_r = Math.floor(Math.random()*99999999999);
           if (!document.MAX_used) document.MAX_used = ',';
           document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
           document.write ("?zoneid=8");
           document.write ('&amp;cb=' + m3_r);
           if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
           document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
           document.write ("&amp;loc=" + escape(window.location));
           if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
           if (document.context) document.write ("&context=" + escape(document.context));
           if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
           document.write ("'><\/scr"+"ipt>");
        //]]>--></script><noscript><a href='http://numclique.net/ads/www/delivery/ck.php?n=ab5a8cc6&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://numclique.net/ads/www/delivery/avw.php?zoneid=8&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=ab5a8cc6' border='0' alt='' /></a></noscript>

    </div>
  </div>
  <!-- /super banner -->

</div>
<!-- /main -->

<!-- semi-rodape -->
<div id="semi-rodape">
  <div class="contentRodape">
    <!-- sobre -->
    <div id="sobre">
      <h3>Sobre este blog</h3>
      <p>O blog NumClique pode ser definido de v&aacute;rias maneira, seja por trazer um conte&uacute;do diferenciado em rela&ccedil;&atilde;o aos assuntos ligados n&atilde;o s&oacute; a tecnologia, bem como a tudo o que rola de interessante e que se refere &agrave; nossa grande paix&atilde;o: A internet.</p>
      <h4>Quer saber quem faz este blog?</h4>
      <ul>
        <li id="autor-Joares">
          <img src="<?php bloginfo('url'); ?>/wp-content/themes/numclique_3.0/img/ft-joares.jpg" />
          <h5>Joares</h5>
          <p>CEO / Gerente de neg&oacute;cios</p>
        </li>
        <li id="autor-Antino">
          <img src="<?php bloginfo('url'); ?>/wp-content/themes/numclique_3.0/img/ft-antino.jpg" />
          <h5>Antino</h5>
          <p>CEO / Gerente de conte&uacute;do</p>
        </li>
        <li id="autor-Pedro">
          <img src="<?php bloginfo('url'); ?>/wp-content/themes/numclique_3.0/img/ft-pedro.jpg" />
          <h5>Pedro</h5>
          <p>Produtor de conte&uacute;do</p>
        </li>
      </ul>
    </div>
    <!-- /sobre -->
    
    <!-- ultimos comentarios -->
    <div id="ultimosComentarios">
      <h3>&Uacute;ltimos coment&aacute;rios</h3>
      <?php ultimos_comentarios(); ?>
    </div>
    <!-- /ultimos comentarios -->
    
    <!-- links -->
    <div id="links">
      <h3>Links</h3>
			<ul>
			<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
      </ul>
    </div>
    <!-- /links -->
  </div>
</div>
<!-- /semi-rodape -->

<!-- rodape -->
<div id="rodape">  
  <div class="contentRodape">
    <p><?php bloginfo('name'); ?></p>
    <p><a href="http://www.numclique.net/politica-de-privacidade">Pol&iacute;tica de privacidade</a></p>
    <p>Todo material publicado neste blog e que tem como autor algum membro ou ex-membro da equipe &eacute; de propriedade do blog </p>
		<p><small>Este blog utiliza <a href="http://www.wordpress.org" target="_blank">WordPress</a> como CMS</small></p>
  </div>
</div>
<!-- rodape -->

<script src="http://ads8409.hotwords.com.br/show.jsp?id=8409" type="text/javascript">
</script>

</body>
</html>