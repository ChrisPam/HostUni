<?php wp_footer(); ?><?php get_header(); ?>
    <main>
		<?php if(get_theme_mod('hide_slider') == ''){ ?>
        <section class="header">
            <img src="<?php echo get_theme_mod('slider_image'); ?>" alt="server-panel-image"/>
            
			<div class="left-side">
                <ul>
                    <li><?php echo get_theme_mod('slider_first_parameter'); ?></li>
                    <li>&bull;&nbsp;&nbsp;&nbsp;<?php echo get_theme_mod('slider_second_parameter'); ?></li>
                    <li>&bull;&nbsp;&nbsp;&nbsp;<?php echo get_theme_mod('slider_third_parameter'); ?></li>
                </ul>
                <h2><?php echo get_theme_mod('slider_title'); ?></h2>
                <p><?php echo get_theme_mod('slider_desc'); ?></p>
				<?php if(get_theme_mod('slider_button') != ''){ ?>
				<form action="<?php echo home_url(); echo get_theme_mod('slider_button_url'); ?>">
					<button><?php echo get_theme_mod('slider_button'); ?></button>
				</form>
				<?php } ?>
            </div>
        </section>
		<?php } ?>
		
		<?php if(get_theme_mod('hide_search_section') == ''){ ?>		
        <section class="domain-check">
            <div class="left-part">
                <h2><?php echo get_theme_mod('search_domain_title'); ?></h2>
                <p><?php echo get_theme_mod('search_domain_desc'); ?></p>
            </div>
            <div class="right-part">
                <div class="search-domain">
                    <form>
                        <input type="text" name="domain" placeholder="Enter domain name here"/>
                        <button><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="domains">
					<?php if(get_theme_mod('search_domain_section_first_domain') != ''){ ?>		
						<input type="radio" name="domains"/>
						<label>.<?php echo get_theme_mod('search_domain_section_first_domain'); ?></label>
					<?php } ?>
					<?php if(get_theme_mod('search_domain_section_second_domain') != ''){ ?>
						<input type="radio" name="domains"/>
						<label>.<?php echo get_theme_mod('search_domain_section_second_domain'); ?></label>
					<?php } ?>
					<?php if(get_theme_mod('search_domain_section_third_domain') != ''){ ?>
						<input type="radio" name="domains"/>
						<label>.<?php echo get_theme_mod('search_domain_section_third_domain'); ?></label>
					<?php } ?>
					<?php if(get_theme_mod('search_domain_section_fourth_domain') != ''){ ?>
						<input type="radio" name="domains"/>
						<label>.<?php echo get_theme_mod('search_domain_section_fourth_domain'); ?></label>
					<?php } ?>
					<?php if(get_theme_mod('search_domain_section_fifth_domain') != ''){ ?>
						<input type="radio" name="domains"/>
						<label>.<?php echo get_theme_mod('search_domain_section_fifth_domain'); ?></label>
					<?php } ?>					
                </div>
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
		<?php if(get_theme_mod('hide_get_start_now_box') == '' 
				&& !get_theme_mod('get_start_now_moto') == ''
				&& !get_theme_mod('get_start_now_button') == ''){ ?>
		<section class="start-now">
            <h2><?php echo get_theme_mod('get_start_now_moto'); ?></h2>
            <button class="get-start-now"><?php echo get_theme_mod('get_start_now_button'); ?></button>
        </section>
		<?php } ?>
		<section class="plans">
			<?php
				$myplans = new WP_Query( array(
					'post_type' => 'plans',
					'orderby' => 'post_date',
					'order' => 'ASC',
					));
			?>
            <h2>
				<?php
					$name=get_post_type_object('plans');
						echo $name->labels->name;
				?>			
			</h2>
            <p>
				<?php
					$descr=get_post_type_object('plans');
						echo $descr->description;
				?>			
			</p>
			<?php
				while($myplans -> have_posts()) : $myplans -> the_post();
			?>				
            <article>
			<?php $prices = get_post_meta($post->ID, 'price', false); ?>
			<?php $ordertexts = get_post_meta($post->ID, 'order-text', false); ?>
			
			<?php $firstParameter = get_post_meta($post->ID, 'firstParameter', false); ?>
			<?php $firstParameterIcon = get_post_meta($post->ID, 'firstParameter-icon', false); ?>
			
			<?php $secondParameter = get_post_meta($post->ID, 'secondParameter', false); ?>
			<?php $secondParameterIcon = get_post_meta($post->ID, 'secondParameter-icon', false); ?>
			
			<?php $thirdParameter = get_post_meta($post->ID, 'thirdParameter', false); ?>
			<?php $thirdParameterIcon = get_post_meta($post->ID, 'thirdParameter-icon', false); ?>			
			
			<?php $fourthParameter = get_post_meta($post->ID, 'fourthParameter', false); ?>
			<?php $fourthParameterIcon = get_post_meta($post->ID, 'fourthParameter-icon', false); ?>				
                <h3><?php the_title(); ?></h3>
                <a href="#"><?php the_post_thumbnail(); ?></a>
                <ul>
					<?php
					
					//---------------------------------------------
					//---------------------------------------------
					//---------------------------------------------
					foreach($firstParameterIcon as $firstIcon) {
						$check = $firstIcon;
					}

					if ($check == "check" ){
						foreach($firstParameter as $firstparam) {
							echo '<li><i class="fa fa-check"></i> '.$firstparam.'</li>';
						}
					}
					else {
						foreach($firstParameter as $firstparam) {
							echo '<li><i class="fa fa-times"></i> '.$firstparam.'</li>';
						}
					}
					//---------------------------------------------
					//---------------------------------------------
					//---------------------------------------------
					foreach($secondParameterIcon as $secondIcon) {
						$check = $secondIcon;
					}

					if ($check == "check" ){
						foreach($secondParameter as $secondparam) {
							echo '<li><i class="fa fa-check"></i> '.$secondparam.'</li>';
						}
					}
					else {
						foreach($secondParameter as $secondparam) {
							echo '<li><i class="fa fa-times"></i> '.$secondparam.'</li>';
						}
					}
					//---------------------------------------------
					//---------------------------------------------
					//---------------------------------------------
					foreach($thirdParameterIcon as $thirdIcon) {
						$check = $thirdIcon;
					}

					if ($check == "check" ){
						foreach($thirdParameter as $thirdparam) {
							echo '<li><i class="fa fa-check"></i> '.$thirdparam.'</li>';
						}
					}
					else {
						foreach($thirdParameter as $thirdparam) {
							echo '<li><i class="fa fa-times"></i> '.$thirdparam.'</li>';
						}
					}
					//---------------------------------------------
					//---------------------------------------------
					//---------------------------------------------
					foreach($fourthParameterIcon as $fourthIcon) {
						$check = $fourthIcon;
					}

					if ($check == "check" ){
						foreach($fourthParameter as $fourthparam) {
							echo '<li><i class="fa fa-check"></i> '.$fourthparam.'</li>';
						}
					}
					else {
						foreach($fourthParameter as $fourthparam) {
							echo '<li><i class="fa fa-times"></i> '.$fourthparam.'</li>';
						}
					}
					?>
                </ul>
                <span>
				<?php foreach($prices as $price) {
						echo $price;
				} ?>
				</span>
				<form action="<?php the_permalink(); ?>">
					<button>
						<?php foreach($ordertexts as $ordertext) {
								echo $ordertext;
						} ?>
					</button>
				</form>
            </article>
			
			<?php
				endwhile;
			?>
        </section>
		
        <section class="server-panel">
			<?php if(get_theme_mod('server_panel_image') != null){ ?>
				<img src="<?php echo get_theme_mod('server_panel_image'); ?>" alt="server-panel-image"/>
			<?php } ?>
            <div class="left-side">
                <h2><?php echo get_theme_mod('server_panel_title'); ?></h2>
                <p><?php echo get_theme_mod('server_panel_desc'); ?></p>
            </div>
            <button class="get-start-now-v2"><?php echo get_theme_mod('server_panel_button'); ?></button>
        </section>

        <section class="site-speed-panel">
			<?php if(get_theme_mod('speed_panel_image') != null){ ?>
				<img src="<?php echo get_theme_mod('speed_panel_image'); ?>" alt="site-speed-panel-image"/>
            <?php } ?>
			<div class="right-side">
                <h2><?php echo get_theme_mod('speed_panel_title'); ?></h2>
                <p><?php echo get_theme_mod('speed_panel_desc'); ?></p>
            </div>
            <button class="get-start-now-v3"><?php echo get_theme_mod('speed_panel_button'); ?></button>
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
<?php get_footer(); ?>