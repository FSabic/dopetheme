<?php get_header(); ?>	
            <!-- Main -->
            <!-- Banner -->
                <section id="banner" style="background-image:  url(<?php echo get_theme_mod('hero_image', 'doptheme'); ?>">
					<header>
						<h2><?php echo get_theme_mod('hero_heading', 'doptheme'); ?></h2>
						<p><?php echo get_theme_mod('hero_text', 'doptheme'); ?></p>
					</header>
				</section>
            <div class="row">
                    					<!-- Intro -->
						<section id="intro" class="container">
							<div class="row">
								<div class="col-4 col-12-medium">
									<section class="first">
										<i class="<?php the_field('icon_service_one');?>"></i>
										<header>
											<h2><?php the_field('title_service_one');?></h2>
										</header>
										<p><?php the_field('subtitle_service_one');?></p>
									</section>
								</div>
								<div class="col-4 col-12-medium">
									<section class="middle">
										<i class="<?php the_field('icon_service_two');?>"></i>
										<header>
											<h2><?php the_field('title_service_two');?></h2>
										</header>
										<p><?php the_field('subtitle_service_two');?></p>
									</section>
								</div>
								<div class="col-4 col-12-medium">
									<section class="last">
										<i class="<?php the_field('icon_service_three');?>"></i>
										<header>
											<h2><?php the_field('title_service_three');?></h2>
										</header>
										<p><?php the_field('subtitle_service_three');?></p>
									</section>
								</div>
							</div>
							<footer>
								<ul class="actions">
									<li><a href="<?php the_field('button_one_url');?>" class="button large"><?php the_field('button_one_text');?></a></li>
									<li><a href="<?php the_field('button_two_url');?>" class="button alt large"><?php the_field('button_two_text');?></a></li>
								</ul>
							</footer>
						</section>

            </div>
				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- Portfolio -->
									<section>
										<header class="major">
											<h2>My Portfolio</h2>
										</header>
										<div class="row">
											<?php 
											add_filter( 'excerpt_length', function( $length ) { return 15; } );
												$portfolio_arguments = array (
													'post_type' => 'portfolio',
													'posts_per_page' => 6
												);
												$portfolios = new WP_Query($portfolio_arguments);
												while($portfolios -> have_posts())	{
													$portfolios->the_post();
																	
											?>
											<div class="col-4 col-6-medium col-12-small">
												<section class="box">
													<a href="<?php the_permalink(); ?>" class="image featured">
													<?php the_post_thumbnail('portfolio-featured'); ?>
													</a>
													<header>
														<h3><?php the_title(); ?></h3>
													</header>
													<?php the_excerpt()?>
													<footer>
														<ul class="actions">
															<li><a href="<?php the_permalink(); ?>" class="button alt">Find out more</a></li>
														</ul>
													</footer>
												</section>
											</div>
											<?php } ?>
											<?php wp_reset_postdata()?>
										</div>
									</section>

							</div>
							<div class="col-12">

								<!-- Blog -->
									<section>
										<header class="major">
											<h2>The Blog</h2>
										</header>
										<div class="row">
											<?php 
												$blog_arguments = array (
													'post_type' => 'post',
													'posts_per_page' => 2
												);
												$posts = new WP_Query($blog_arguments);
												while($posts -> have_posts())	{
													$posts->the_post();
																	
											?>
											<div class="col-6 col-12-small">
												<section class="box">
													<a href="<?php the_permalink(); ?>" class="image featured">
														<?php the_post_thumbnail('home-featured'); ?>
													</a>
													<header>
														<h3><?php the_title(); ?></h3>
														<p>Posted on <?php the_date(); ?> at <?php the_time(); ?></p>
													</header>
													<?php the_excerpt()?>
													<footer>
														<ul class="actions">
															<li><a href="<?php the_permalink(); ?>" class="button icon solid fa-file-alt">Continue Reading</a></li>
															<li><a href="<?php comments_link(); ?>" class="button alt icon solid fa-comment"><?php echo get_comments_number()?> comments</a></li>
														</ul>
													</footer>
												</section>
											</div>
											<?php }?>
										</div>
									</section>

							</div>
						</div>
					</div>
				</section>
<?php get_footer(); ?>