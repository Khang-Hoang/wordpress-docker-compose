<?php
/**
 * The template for displaying Search Results pages
 *
 * @subpackage Culture
 */
get_header(); ?>

<div id="container">
	<div class="container">
		<div class="row">
			<div id="content" class="col-md-9 col-sm-9 col-xs-12 archive-wrap search-page">
				<div class="inner-content">
					<h2 class="entry-title"><?php printf( __( 'Search Results for : %s', 'culture' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
				
					<div class="entry-listing archive-wrap-box">
						<?php 
							// Start the Loop.
							if(have_posts()) :						
							while(have_posts()) : the_post();
							
							// Include the page content template.							
							get_template_part( 'template-parts/content', get_post_format() );
							endwhile; 

							// Previous/next page navigation.
							the_posts_pagination( array(
								'prev_text'          => __( '<i class="fa fa-angle-left" aria-hidden="true"></i> Previous page', 'culture' ),
								'next_text'          => __( 'Next page <i class="fa fa-angle-right" aria-hidden="true"></i>', 'culture' ),
								'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'culture' ) . ' </span>',
							));
						?> 
						<?php else :
						// Include the page content template.
						get_template_part( 'template-parts/content', 'none' ); ?>
						<?php endif; ?>
					</div>
				</div><!-- .inner-content-->
			</div><!-- #content-->
			
			<?php get_sidebar( 'blog' ); ?>
				
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #container -->
<?php get_footer(); ?>