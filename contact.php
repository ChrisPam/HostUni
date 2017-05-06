<?php /* Template Name: Contact Page */ ?>

<?php wp_footer(); ?>

<?php get_header(); ?>


    <main>

        <section class="header-section">

            <div class="left">

                <h2><?php the_title(); ?></h2>

            </div>

            <div class="right">

                <h3>Home &#160; / &#160; <a class="blog-url" href="<?php the_permalink(); ?>/contact/">Contact</a> &#160;</h3>

            </div>

        </section>
		<section class="contact">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</section>
		
<?php get_footer(); ?>