    <div id="busca">
    <h4>Busca</h4>
    <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
        <input type="text" value="busca" name="s" id="s" onfocus="if(this.value=='busca')this.value=''" onblur="if(this.value=='')this.value='busca'" />
        <input type="image" id="searchsubmit" src="<?php bloginfo('url'); ?>/wp-content/themes/numclique_3.0/img/btBusca.gif" value="Buscar" />
    </form>
    </div>