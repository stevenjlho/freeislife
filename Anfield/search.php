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
                    <div class="post_data cls">
                        <span class="date fl"><?php the_time('Y年n月j日') ?></span>
                    </div>

                    <div class="post_content">
                        <?php the_content(); ?>
                    </div>

                    <div class="post_data cls">
                        <span class="category fl"><?php the_category(', ') ?></span>
                        <span class="tag fl"><?php the_tags('标签：', ', ', ''); ?></span>
                    </div>
                    <span class="comment show_comment"><?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?></span>
                </div>
                <!-- e:entry-->
            </div>
            <?php endwhile; ?>

            <!-- 翻页导航 -->
            <?php get_template_part( 'pager' ); ?>

        <?php else : ?>
           <h1 class="post_title errorbox">找不到内容！</h1>
        <?php endif; ?>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>