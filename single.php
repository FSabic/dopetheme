<?php get_header() ?>
<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-8 col-12-medium">
                                <?php 
                                    if(have_posts()){
                                        the_post(); ?>
                                            <!-- Content -->
                                            <article class="box post">
                                                <a href="<?php the_permalink(); ?>" class="image featured">
                                                <?php the_post_thumbnail('portfolio-featured'); ?>
                                                </a>
                                                <header>
                                                    <h2><?php the_title(); ?></h2>
													<p>Posted on <?php the_date(); ?> at <?php the_time(); ?></p>
                                                </header>
                                                <?php the_content(); ?>
                                            </article>
                                    <?php }
                                ?>
							</div>
                            <?php get_sidebar(); ?>
						</div>
					</div>
				</section>

<?php get_footer() ?>