<?php get_header(); ?>
    <main>
        <section class="header-section">
            <div class="left">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="right">
                <h3><a class="blog-url" href="/">Home</a> &#160; / &#160; <a class="blog-url" href="<?php the_permalink(); ?>/<?php the_title(); ?>/"><?php the_title(); ?></a></h3>
            </div>
        </section>
		<?php if(is_page('about')){ ?>
		<section class="board">
            <div class="on-left">
			<h2><?php echo get_theme_mod('about_board_title'); ?></h2>

            <p><?php echo get_theme_mod('about_board_desc'); ?></p>
            </div>
            <div class="on-right">
			<?php if(get_theme_mod('about_board_image') != null){ ?>			
                <img src="<?php echo get_theme_mod('about_board_image') ?>" alt="board_imd" />
			<?php } ?>
            </div>
        </section>
		<?php } ?>
		<section class="services">
			<h2>
				<?php
					$name=get_post_type_object('services');
						echo $name->labels->name;
				?>	
			</h2>
            <p>
				<?php
					$descr=get_post_type_object('services');
						echo $descr->description;
				?>			
			</p>		
			<?php
				$query = new WP_Query(array(
					'post_type' => 'services',
				));
				while($query -> have_posts()) : $query -> the_post();
			?> 
			<article>
                <div class="icon">
                    <span class="service-icon-1"><?php the_post_thumbnail() ?></span>
                </div>
                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                <p><?php the_excerpt(); ?></p>
			</article>
			<?php
				endwhile;
			?>
        </section>
		<section class="people-about-us">
            <h2>
				<?php
					$name=get_post_type_object('testimonials');
						echo $name->labels->name;
				?>
			</h2>
            <p>
				<?php
					$descr=get_post_type_object('testimonials');
						echo $descr->description;
				?>
			</p>
            <div class="owl-carousel owl-theme">
			<?php
				$args = array('post_type' => 'testimonials');
				
				$mytestimonials = new WP_Query( array(
					'post_type' => 'testimonials'
					));
				while($mytestimonials -> have_posts()) : $mytestimonials -> the_post();
			?>
				<div>
					<?php $authors = get_post_meta($post->ID, 'author', false); ?>	
					<?php $professions = get_post_meta($post->ID, 'profession', false); ?>
                    <article>
                        <?php the_post_thumbnail() ?>
                        <h3>
							<?php foreach($authors as $author) {
								echo $author;
							} ?>
						</h3>
                        <span>
							<?php foreach($professions as $profession) {
								echo $profession;
							} ?>
						</span>
                        <p><?php the_excerpt(); ?></p>
                    </article>
				</div>
			<?php
				endwhile;
			?>
			</div>
        </section>
	</main>
<?php
get_footer();
?>