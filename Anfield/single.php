<?php get_header(); ?>
	<div id="main">
		<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
		<div class="post">
			<ol class="breadcrumb">
	  			<li><a title="首页" href="<?php echo get_settings('home'); ?>/" rel="nofollow">首页</a></li>
	  			<li><?php the_category(', '); ?></li>
	   			<li><?php the_title(); ?></li>
			</ol>

			<div class="page-header">
				<h1 class="post_title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h1>
			</div>

			<!-- s:entry-->
			<!-- s:entry-->
			<div class="entry">
				<div class="post_data btn-toolbar">
			        <div class="btn-group">
						<span class="glyphicon glyphicon-calendar"></span><?php the_time('Y年n月j日') ?>
			        </div>
			    </div>

				<p class="post_conternt">
					<?php the_content(); ?>
				<p>

				<div class="post_data btn-toolbar">
						<div class="btn-group">
							<span class="glyphicon glyphicon-th-list"></span><?php the_category(', ') ?>
				        </div>
				        <div class="btn-group">
							<span class="glyphicon glyphicon-tag"></span><?php the_tags('标签：', ', ', ''); ?>
				        </div>
					</div>
				<!-- JiaThis Button BEGIN -->
				<div id="ckepop">
					<a href="http://www.jiathis.com/share/" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank">分享到：</a>
					<a class="jiathis_button_tools_1"></a>
					<a class="jiathis_button_tools_2"></a>
					<a class="jiathis_button_tools_3"></a>
					<a class="jiathis_button_tools_4"></a>
				</div>
				<!-- JiaThis Button END -->
			</div>
			<!-- e:entry-->
			<!-- e:entry-->

		</div>
		<?php comments_template(); ?>
	</div>

	<?php else : ?>
		<div class="page-header">
		    <h1 class="errorbox">没有内容！</h1>
		</div>
	<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>