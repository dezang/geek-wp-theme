<?php get_header(); ?>
<div class="container">
	<div id="single-post" class="row">
		<main id="main">
			<section>
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<article>
						<h1 id="post-title">
							<span class="return-value">
								<?php $format = get_post_format(); 
								if($format != false) {
									echo $format;
								} else {
									echo "post";
								}
								?>
							</span>
							<?php the_title(); ?>
						</h1>
						<p class="post-bracket">{</p>
						<p class="post-info"><span class="post-info-title">updated</span> : <?php the_modified_date(''); ?> <?php the_modified_time(); ?>,</p>
						<p class="post-info"><span class="post-info-title">category</span> : [ <?php the_category(' ,'); ?> ],</p>
						<p class="post-info"><span class="post-info-title">tags</span> : <?php the_tags('[ ',', ',' ]'); ?>,</p>
						<p class="post-info"><span class="post-info-title">content</span> : below <i class="fa fa-chevron-circle-down"></i></p>
						<hr>
						<div id="content">
						<?php the_content(); ?>
						</div>
						<p class="post-bracket">}</p>
						<section>
							<h2><span class="return-value">Comments</span></h2>
							<p class="post-bracket">{</p>
							<?php comments_template(); ?>
							<p class="post-bracket">}</p>
						</section>
					</article>
				<?php endwhile; else: ?>
				<h2>미안해요, 글이 없네요</h2>
			<?php endif; ?>

			<!-- paging -->
			<nav id="paging">
				<?php
				global $wp_query;
				$big = 999999999;
				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages,
					) );
					?>
				</nav>
			</section>
		</main>
	</div>
</div>
<?php get_footer(); ?>