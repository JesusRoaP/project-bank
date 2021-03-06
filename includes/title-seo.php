<?php
function filter_project_title_content( $titulo ) {
	$codigo = get_query_var('codigo');
	if ( is_page('Proyecto codigo') ) {
		$titulo = str_replace('codigo', $codigo, $titulo);
	}
    return $titulo;
}
add_filter( 'the_title', 'filter_project_title_content' );

function filter_project_wpyoastseo_title($title) {
    if( is_page('Proyecto codigo') ) {
        $title = get_the_title() . " - Banco de Proyectos - " . get_bloginfo( 'name' );
    }
    return $title;
}
add_filter('wpseo_title', 'filter_project_wpyoastseo_title');

function filter_project_wprankmathseo_title( $title ) {
    if( is_page('Proyecto codigo') ) {
        $title = get_the_title() . " - Banco de Proyectos - " . get_bloginfo( 'name' );
    }
    return $title;
}
add_filter( 'rank_math/frontend/title', 'filter_project_wprankmathseo_title');

function filter_project_title($title) {
	if ( is_page('Proyecto codigo') ) {
		$title = get_the_title() . " - Banco de Proyectos - " . get_bloginfo( 'name' ); 
	}
	return $title;
}
add_filter('pre_get_document_title', 'filter_project_title');
?>