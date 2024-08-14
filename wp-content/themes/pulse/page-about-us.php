<?php get_header();?>
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
    <section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="content">
                        <?php while (have_posts()) : the_post(); ?>

                               <?php the_content(); ?>
    
                           <?php endwhile; ?>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="image">
                        <?php the_post_thumbnail('full', array('class' => 'width-100')); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Start Why Choose Us -->
<div class="feat pt pb">
    <div class="container">
      <div class="row">
        <div class="section-head col-sm-12">
          <div class="heading-section">
                <span class="sub-heading">Choose Us</span>
                <h2>Why Choose Us</h2>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_one"><i class="fa fa-globe"></i></span>
            <h6><?php the_field('first_why_choose_us_title', 'option'); ?></h6>
            <p><?php the_field('first_why_choose_us_text', 'option'); ?></p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_two"><i class="fa fa-anchor"></i></span>
            <h6><?php the_field('second_why_choose_us_title', 'option'); ?></h6>
            <p><?php the_field('second_why_choose_us_text', 'option'); ?></p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_three"><i class="fa fa-hourglass-half"></i></span>
            <h6><?php the_field('third_why_choose_us_title', 'option'); ?></h6>
            <p><?php the_field('third_why_choose_us_text', 'option'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- End Why Choose Us -->

    <!-- Start call-us Sections -->
    <section class="call-us pt pb">
        <div class="container">
            <div class="row">
                <div class="content">
                    <h2>What is Lorem Ipsum?</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="btn">
                        <a class="btn" href="tel:0000000"><i class="fa fa-envelope" aria-hidden="true"></i> <?php the_field('email', 'option'); ?></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start call-us Sections -->

    <!-- Start Blog Sections -->
    <section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-section">
                        <span class="sub-heading">Blogs</span>
                        <h2>Recent News Articles</h2>
                    </div>

                    <div class="page-content">
                        <div class="blog-posts">
                            <?php
                            // Arguments to fetch popular posts
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 6, // Number of posts to display
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
    <!-- End Blogs Section -->
  
<?php get_footer(); ?>