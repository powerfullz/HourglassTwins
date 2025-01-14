<?php
get_header();
?>

	<div id="primary">
		<main id="main">
            <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
                <article class="hentry">
                    <div class="post-title">
                        <h2><a href="<?php the_permalink();?>" rel="bookmark"><?php if(is_sticky()){echo "<i class=\"fas fa-thumbtack\"></i> ";} the_title(); ?></a></h2>
                    </div>
                    <span class="post-index-secondary-title"><span title="发表于 <?php the_time('Y 年 m 月 d 日') ?>"><i
                                class="fas fa-hourglass-start"></i> <?php the_time('Y 年 m 月 d 日') ?></span> / <i
                                class="fas fa-bookmark" aria-hidden="true"></i> <?php $categories = get_the_category();
                        foreach ($categories as $category) {
                            echo "<a href='" . get_category_link($category->term_id) . "' class='post-cate'>" . $category->cat_name . "</a>";
                        } ?></span>
                </article>
            <?php endwhile; ?>
            <?php endif; ?>

		</main>
	</div>

	<!-- Pagination links -->
	<div class="pagination">
		<div class="nav-next alignleft"><?php next_posts_link( '<< 上一页' ); ?></div>
		<div class="nav-previous alignright"><?php previous_posts_link( '下一页 >>' ); ?></div>
	</div>

<?php

get_footer();
