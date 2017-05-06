<?php wp_footer(); ?>

<?php get_header(); ?>


    <main>

        <section class="header-section">

            <div class="left">

                <h2><?php the_title(); ?></h2>

            </div>

            <div class="right">

                <h3>Home &#160; / &#160; <a class="blog-url" href="<?php the_permalink(); ?>/blog/">Blog</a> &#160;</h3>

            </div>

        </section>
		

		<section class="post">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php  $current_user = wp_get_current_user(); ?>
			<?php echo the_post_thumbnail(); ?>
			
			<span>BY: <strong><?php echo $current_user->display_name; ?></strong></span> <span><?php echo get_the_date(); ?></span> <span><i class="fa fa-thumbs-up"></i> 65</span> <span><i class="fa fa-comments"></i> 5</span> 
			<h2><?php the_title(); ?></h2>
			<p><?php the_content(); ?></p>
			<?php endwhile; ?>
			<?php endif; ?>
		</section>
		
		
		
<?php get_footer(); ?>