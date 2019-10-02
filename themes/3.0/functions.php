<?php
/*
 * Resgata os ultimos comentários.
 * O primeiro parâmetro refere-se à quantidade de comentários que aparecerão.
 * O segundo parâmetro refere-se ao tamanho do resumo do comentário. Se for utilizado.
 */
function ultimos_comentarios ($numComments = 5, $tamanhoResumo = 200) {
	global $wpdb;
	
	$sql = 
	"SELECT DISTINCT
		ID, post_title, post_password, comment_ID,
		comment_post_ID, comment_author, comment_date_gmt, 
		comment_approved, comment_type, comment_author_url, 
		SUBSTRING(comment_content,1,".$tamanhoResumo.") AS com_excerpt
	FROM $wpdb->comments 
		LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID = $wpdb->posts.ID)
	WHERE 
		comment_approved = '1' AND
		comment_type = '' AND
		post_password = ''
	ORDER BY comment_date_gmt DESC
	LIMIT ".$numComments;
	
	$comments = $wpdb->get_results($sql);
	
	$output = $pre_HTML;
	$output .= "\n<ul>";
	foreach ($comments as $comment) {
		
		$output .=
		"<li><a href=\"" . get_permalink($comment->ID) . "#comment-" . $comment->comment_ID . 
		"\" title=\"Coment&aacute;rio em: " . $comment->post_title . "\">" .
		"\n<b>" . strip_tags($comment->comment_author) . "</b> comentou em <em>" . strip_tags($comment->post_title)
		."</em>
		</a></li>";
	}
	$output .= "\n</ul>";
	$output .= $post_HTML;
	echo $output;
}

/*
 * Resgata o autor linkado para seu Site.
 * A diferença dessa função é que monta o link do autor com um TARGET e sem o REL
 */
function get_autor_comentarios_link() {
	$url    = get_comment_author_url();
	$author = get_comment_author();

	if ( empty( $url ) || 'http://' == $url )
		echo $return = $author;
	else
		echo $return = "<a href='$url' class='url' target=_blank>$author</a>";
	return apply_filters('get_autor_comentarios_link', $return);
}

?>