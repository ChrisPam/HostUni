<?php /* Template Name: Contact Page */ ?>

<?php get_header(); ?>


    <main>

        <section class="header-section">

            <div class="left">

                <h2><?php the_title(); ?></h2>

            </div>

            <div class="right">

                <h3><a class="blog-url" href="/">Home</a> &#160; / &#160; Contact Us &#160;</h3>

            </div>

        </section>
		<section class="contact">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</section>
		
<?php get_footer(); ?>