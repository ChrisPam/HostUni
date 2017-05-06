<?php /* Template Name: Blog Page */ ?>


<?php wp_footer(); ?>

<?php get_header(); ?>


    <main>

        <section class="header-section">

            <div class="left">

                <h2><?php the_title(); ?></h2>

            </div>

            <div class="right">

                <h3>Home &#160; / &#160; <?php the_title(); ?></h3>

            </div>

        </section>
		

			<?php 
				// the query
				$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

				<?php if ( $wpb_all_query->have_posts() ) : ?>

		<section class="posts">

				<!-- the loop -->
				<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
			<article>
				<?php  $current_user = wp_get_current_user(); ?>
				<?php echo the_post_thumbnail(); ?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<span><?php echo $current_user->display_name; ?></span> <span><?php echo get_the_date('d-m-Y'); ?></span>
			</article>
				<?php endwhile; ?>
				<!-- end of the loop -->

		</section>

				<?php wp_reset_postdata(); ?>

				<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
		
		
<?php get_footer(); ?>