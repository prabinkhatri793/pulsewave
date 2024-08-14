<?php /*Template Name: Services
*/ get_header(); ?>

    <!-- Banner -->
	<section class="banner inner-page">
		<div class="container">
			<div class="banner-wrap">
				<h1><?php the_title();?></span></h1>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo home_url();?>">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
					</ol>
				</nav>
			</div>
		</div>
	</section>
    <!-- Banner End -->


    <!-- Blog -->

    <section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-section">
                        <?php while(have_posts()): the_post();
					        the_content();
					       endwhile; ?>
                    </div>

                    <div class="page-content">
                        <div class="blog-posts">
                            <?php
                            // Arguments to fetch popular posts
                            $args = array(
                                'post_type' => 'service',
                                'posts_per_page' => 9, // Number of posts to display
                                'orderby' => 'meta_value_num', // Order by view count
                                'order' => 'DESC' // Most popular posts first
                            );

                            $popular_posts_query = new WP_Query($args);

                            if ($popular_posts_query->have_posts()) {
                                while ($popular_posts_query->have_posts()) {
                                    $popular_posts_query->the_post(); ?>
                                    <div class="post">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()): ?>
                                                <?php the_post_thumbnail('full', array('class' => 'width-100')); ?>
                                            <?php endif; ?>
                                        </a>
                                        <div class="post-content">
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                                            <b><span class="date"><?php echo get_the_date('M d, Y'); ?> | <?php echo get_the_author(); ?></span></b>
                                        </div>
                                    </div>
                                <?php
                                }
                                wp_reset_postdata();
                            } else {
                                echo '<p>No popular posts found.</p>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>