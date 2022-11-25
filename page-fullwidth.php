<?php 
/*
* Template Name: Fullwidth page
*/
?>
<?php get_header() ?>
<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-12 col-12-medium">
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
                                                </header>
                                                <?php the_content(); ?>
                                            </article>
                                    <?php }
                                ?>
							</div>
						</div>
					</div>
				</section>

<?php get_footer() ?>