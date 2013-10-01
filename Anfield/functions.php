<?php
remove_action('wp_head', 'wp_generator');

add_action( 'init', 'register_my_menu' );
function register_my_menu() {
register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}


?>
<?php
function native_pagenavi(){
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

    $pagination = array(
    'base' => @add_query_arg('paged','%#%'),
    'format' => '',
    'total' => $wp_query->max_num_pages,
    'current' => $current,
    'prev_text' => '« ',
    'next_text' => ' »'
    );

    if( $wp_rewrite->using_permalinks() )
        $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg('s',get_pagenum_link(1) ) ) . 'page/%#%/', 'paged');

    if( !empty($wp_query->query_vars['s']) )
        $pagination['add_args'] = array('s'=>get_query_var('s'));

    echo '<p class="page_navi">'.paginate_links($pagination).'</p>';
}

?>
<?php

if(isset($_GET['t']) && $_GET['t'] == 'services') {
	include_once(TEMPLATEPATH.'/cse.php');
	die();
}
?>