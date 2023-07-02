<?php get_header(); ?>
	<div class="content">
		<div class="posts">
					<div class="posts-head">
						<a href="https://flyawayads.com/">Trang chủ</a>
						<span class="material-symbols-outlined">chevron_right</span>
						<a href="https://flyawayads.com/category/bai-viet/"><?php single_cat_title(); ?></a>
					</div>
					<div style="height: 20px;"></div>
						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<div class="posts-list">
								<h3>
									<a id="post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
								<div id="post-time-view">
										<span style="margin-left: 0;" class="material-symbols-outlined">schedule</span>
										<?php
										    $timeago = vi_human_time_diff(get_the_time('U'), current_time('timestamp'));
										    if ($timeago == false) {
										        the_time('d/m/Y');
										    } else {
										        echo $timeago . ' trước';
										    }
										?>
										<span class="material-symbols-outlined">visibility</span>
										<?php echo getpostviews(get_the_ID()) ?>
									</div>
								<div class="post-infor">
									<a class="post-thumbnail" href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('full'); ?>
									</a>
									<div id="post-discription">
										<p><?php the_excerpt(); ?></p>
									</div>
								</div>
							</div>
						<?php endwhile;?>
						<?php endif; ?>

					<?php if(paginate_links()!='') {?>
						<div class="quatrang">
							<?php
							global $wp_query;
							$big = 999999999;
							echo paginate_links( array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' => '?paged=%#%',
								'prev_text'    => __('« Mới hơn'),
								'next_text'    => __('Tiếp theo »'),
								'current' => max( 1, get_query_var('paged') ),
								'total' => $wp_query->max_num_pages
								) );
						    ?>
						</div>
					<?php } ?>
		</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>