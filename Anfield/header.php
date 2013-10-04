<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="wb:webmaster" content="4b368033e2e6b354" />
<title>
<?php if ( is_single() || is_page() || is_category() || is_tag() ) { wp_title(''); } else { bloginfo('name'); } ?>
</title>
<meta name="application-name" content="艾菲路的博客" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="alexaVerifyID" content="y9t9QBAIMujwzU3Wi60Ouy5uyeA" />
<meta name="wumiiVerification" content="9b115fe8-8889-4f56-8c70-d605a3e3f170" />
<meta property="wb:webmaster" content="4b368033e2e6b354" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<link title="RSS 2.0" type="application/rss+xml" href="http://feed.feedsky.com/freeislife" rel="alternate" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon"/>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>

<body>
<div class="container">
	<div id="header">
		<div id="header_title" class="clearfix">
			<a class="text-center" href="<?php bloginfo('url'); ?>" title="艾菲路的博客">艾菲路的博客</a>
		</div>
		<div class="search-bar">
			<?php get_search_form(); ?>
		</div>
		<div id="navigation" class="clearfix">
			<?php wp_nav_menu( array(
				'theme_location' => 'primary-menu',
				'menu'=>'nav',
				'container_class' => 'menu',
				'container' =>'',
				'menu_class' => 'nav nav-pills',
				'exclude' => '378'
			) ); ?>

			<!-- <div class="header_data fr">
				<a href="http://www.feedsky.com/msub_wr.html?burl=freeislife" target="_blank" title="邮件订阅" class="fl" id="mail">邮件订阅 </a>
				 <a href="http://feed.feedsky.com/freeislife" target="_blank" title="feed订阅"  class="fl" id="feedsky"> feed订阅 </a>
			</div> -->
			<!--feedsky-->
		</div>
		<!--navigation-->

		<?php if ( is_404() || is_category() || is_day() || is_month() || is_year() || is_search() ) {?>
			<div class="page-msg alert alert-info alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<?php /* If this is a 404 page */ if (is_404()) { ?>

				<?php /* If this is a category archive */ } elseif (is_category()) { ?>
					<p>你正在浏览文章分类<strong><?php single_cat_title(''); ?></strong>. 如果没有找到结果，请返回首页<a class="alert-link" href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a></p>

				<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
					<p>你正在浏览<a class="alert-link" href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> <?php the_time('l, F jS, Y'); ?>存档.</p>

				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
					<p>你正在浏览<a class="alert-link" href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> <?php the_time('F, Y'); ?>存档.</p>

				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
					<p>你正在浏览<a class="alert-link" href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> <?php the_time('Y'); ?>存档.</p>

				<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
					<p>你已搜索关键词<strong>'<?php the_search_query(); ?>'</strong>. 如果没有找到结果，请返回首页<a class="alert-link" href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a>.</p>
				<?php } ?>
			</div>
			<!-- page-msg -->
		<?php }?>
	</div>
	<!--header-->
