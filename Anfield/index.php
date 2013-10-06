<?php get_header(); ?>
<div id="main">

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="page-header">
				<h1>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h1>
			</div>

			<!-- s:entry-->
			<div class="entry">
				<div class="post_data btn-toolbar">
			        <div class="btn-group">
						<span class="glyphicon glyphicon-calendar"></span><?php the_time('Y年n月j日') ?>
			        </div>
			    </div>

				<div class="post_content">
					<?php the_content(); ?>
				</div>
				<div class="post_data btn-toolbar">
					<div class="btn-group">
						<span class="glyphicon glyphicon-th-list"></span><?php the_category(', ') ?>
			        </div>
			        <div class="btn-group">
						<span class="glyphicon glyphicon-tag"></span><?php the_tags('标签：', ', ', ''); ?>
			        </div>
				</div>

				<div class="comment btn-toolbar">
			        <div class="btn-group">
						<span class="glyphicon glyphicon-comment"></span><?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?>
			        </div>
			    </div>
			</div>
			<!-- e:entry-->
		</div>
		<?php endwhile; ?>

		<!-- 翻页导航 -->
		<?php get_template_part( 'pager' ); ?>

	<?php else : ?>
		<div class="page-header">
		    <h1 class="errorbox">没有内容！</h1>
		</div>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
