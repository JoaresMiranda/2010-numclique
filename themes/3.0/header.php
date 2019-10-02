<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="content-language" content="pt-br" />
<meta name="robots" content="index,follow" />
<meta name="author" content="Equipe NumClique.net" />
<meta name="verify-v1" content="eP+vA6K9ihp+EdJYKdkB9TDF2xZTgdWj9b8uJG6ga7w=" />
<meta name="google-site-verification" content="X3Cxv7Aqei_rddWPix1lhJlmgN5IT9e3rh0KbdTJ56U" />

  <!-- analytics -->
	<script type="text/javascript">
  
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-1502075-4']);
    _gaq.push(['_trackPageview']);
  
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  
  </script>
  <!-- /analytics -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="shortcut icon" type="image/ico" href="http://www.numclique.net/favicon.ico" />
<link rel="alternate" type="application/rss+xml" title="Numclique.net - Estilo de vida digital" href="<?php bloginfo('url'); ?>/feed/" />
<link rel="alternate" type="application/rss+xml" title="Coment&aacute;rios de Numclique.net - Estilo de vida digital" href="<?php bloginfo('url'); ?>/comments/feed/" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/numclique_3.0/destaque/contentslider.css" />
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/numclique_3.0/destaque/contentslider.js"></script>

<title>
<?php if(is_single()): ?>
<?php the_title('', ' &raquo; '); ?>
<?php endif; ?>
<?php bloginfo('name'); ?>
</title>

<?php wp_head(); ?>

<script type="text/javascript">
window.google_analytics_uacct = "UA-1502075-4";
</script>


</head>

<body>
<!-- main -->
<div id="main">
  <!-- header -->
  <div id="header">
    <h1 class="blogtitle">
    	<a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
    </h1>
  </div>
  <!-- /header -->
  <!-- navegacao -->
  <ul id="navegacaoMobile">
    <li><a href="#conteudo">Ir para o cont&uacute;do</a></li>
    <li><a href="#busca">Ir para a busca</a></li>
    <li><a href="#rodape">Ir para o rodap&eacute;</a></li>
  </ul>
  <!-- /navegacao -->
  <!-- conteudo -->
  <div id="conteudo">