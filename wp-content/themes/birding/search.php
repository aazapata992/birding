<?php get_header(); ?>

<h1 class="title-ppal">SEARCH RESULTS</h1>
<div class="bg-search full">
	<div class="wrapper-main center result-search">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			
			<div class="result col-xs-12 col-sm-6 col-md-6 col-lg-6">

				<article id="post-<?php the_ID(); ?>" <?php post_class('cf '); ?> role="article" class="" >
					<a href="<?php the_permalink() ?>">
						<figure>
							<?php the_post_thumbnail('bones-thumb-456'); ?>
						</figure>
					</a>
					<div class="info">
						<h3 class="search-title entry-title">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>
						<p><?php echo excerpt(15); ?></p>
						<a href="<?php the_permalink() ?>" class="view-more"><?php echo __('View More', 'birding') ?></a>
					</div>
				</article>
			</div>
		<?php endwhile; ?>
				<?php bones_page_navi(); ?>
			<?php else : ?>
				<article id="post-not-found" class="hentry cf" style="height: auto;">
					<div class="article-header">
						<h2><?php echo __( 'Nothing found for your search. Try another something different.', 'birding' ) ?></h2>
					</div>
				</article>
			<?php endif; ?>
			<div class="clr"></div>
	</div>
</div>


<?php get_footer(); ?>
