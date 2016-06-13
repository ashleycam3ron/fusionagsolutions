<?php get_header(); ?>
	<div id="content" class="container-fluid">
    	<div class="container entry">
			<h1><?php printf( __( 'Search Results for: %s', 'ashleycameron' ), get_search_query() ); ?></h1>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt("Read More"); ?>
                </article>
			<?php endwhile; else : ?>
       		<section class="no-results not-found">
				<h1><?php _e( 'Nothing posts found.', 'ashleycameron' ); ?></h1>
				<article>
					<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
						<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'ashleycameron' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
			
					<?php elseif ( is_search() ) : ?>
			
						<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'ashleycameron' ); ?></p>
						<?php get_search_form(); ?>
			
					<?php else : ?>
			
						<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'ashleycameron' ); ?></p>
						<?php get_search_form(); ?>
			
					<?php endif; ?>
			
				</article><!-- .page-content -->
			</section><!-- .no-results -->
	<?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>