<?php get_header();?>

    <!-- Start Slider -->
   <header>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="<?php the_field('slider_image', 'option'); ?>" alt="First Slider Image">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line"></div>
                            <h1><?php the_field('first_slider_text_1', 'option'); ?></h1>
                            <h4><?php the_field('first_slider_text_2', 'option'); ?></h4>
                        </div>
                    </div>
                 </div>
            </div>                    
            <div class="item">
                <img src="<?php the_field('slider_image_2', 'option'); ?>" alt="Second Slider Image">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line animated bounceInLeft"></div>
                            <h1><?php the_field('second_slider_text_1', 'option'); ?></h1>
                            <h4><?php the_field('second_slider_text_2', 'option'); ?></h4>
                        </div>
                    </div>
                 </div>
            </div>                
            <div class="item">
                <img src="<?php the_field('slider_image_3', 'option'); ?>" alt="Third Slider Images">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line animated bounceInLeft"></div>
                            <h1><?php the_field('third_slider_text_1', 'option'); ?></h1>
                            <h4><?php the_field('third_slider_text_2', 'option'); ?></h4>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </header>
    <!-- End Slider -->

    <!-- Start About Us Section -->
    <section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="content">
                        <?php while (have_posts()) : the_post(); ?>

                               <?php the_content(); ?>
    
                           <?php endwhile; ?>
                           <a class="btn" href="/pulsewave/about-us" style="visibility: visible; animation-name: slideIn;">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                </svg>
                            </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image">
                        <?php the_post_thumbnail('full', array('class' => 'width-100')); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Section -->

    <!-- Start Services Sections -->
    <section class="blogs col-4-items service bg-sec pt pb">
        <div class="container">
            <div class="heading-section">
                <span class="sub-heading">Services</span>
                <h2>Our Main Services</h2>
            </div>
            <div class="blog-posts">
                <div class="blog-main">
                    <div class="row">
                        <?php 
                        $args = array(
                            'post_type' => 'service',
                            'posts_per_page' => 4,
                            'orderby' => 'ID',
                            'order' => 'ASC'
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()) {
                            while ($query->have_posts()) : $query->the_post(); ?>
                                <div class="col-md-3">
                                    <div class="blog-col">
                                        <div class="blog-media">
                                            <a href="<?php the_permalink(); ?>" title="">
                                                <div class="blog-image-container">
                                                    <div class="image">
                                                         <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
                                                    </div>
                                                    <div class="blog-overlay">
                                                        <div class="blog-text">
                                                            <h3><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h3>
                                                            <p><?php echo wp_trim_words(get_the_content(), 10); ?></p>
                                                            <a href="<?php the_permalink(); ?>">Continue reading</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; 
                            wp_reset_postdata();
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Sections -->


    <!-- Start Our Team Sections -->
    <section class="team">
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-section">
                            <span class="sub-heading">Our Team</span>
                            <h2>Meet Our Team</h2>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="profile-card">
                            <div class="img">
                                <img src="<?php the_field('first_member_image', 'option'); ?>" alt="">
                            </div>
                            <div class="caption">
                                <h6><?php the_field('first_member_job', 'option'); ?></h6>
                                <h3><?php the_field('first_member_name', 'option'); ?></h3>
                            </div>
                        </div>
                    </div>
                                  
                    <div class="col-md-3">
                        <div class="profile-card">
                            <div class="img">
                                <img src="<?php the_field('second_member_image', 'option'); ?>" alt="">
                            </div>
                            <div class="caption">
                                <h6><?php the_field('second_member_job', 'option'); ?></h6>
                                <h3><?php the_field('second_member_name', 'option'); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="profile-card">
                            <div class="img">
                                <img src="<?php the_field('third_member_image', 'option'); ?>" alt="">
                            </div>
                            <div class="caption">
                                <h6><?php the_field('third_member_job', 'option'); ?></h6>
                                <h3><?php the_field('third_member_name', 'option'); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="profile-card">
                            <div class="img">
                                <img src="<?php the_field('forth_member_image', 'option'); ?>" alt="">
                            </div>
                            <div class="caption">
                                <h6><?php the_field('forth_member_job', 'option'); ?></h6>
                                <h3><?php the_field('forth_member_name', 'option'); ?></h3>
                            </div>
                        </div>
                    </div> 

                        
                    </div>
                </div>
            </div>

    </section>
    <!-- End Our Team Sections -->

     <!-- Start Faqs -->
    <section class="faqs bg-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                        
                    <section class="testimonial text-center">
                        <div class="container">

                            <div class="heading white-heading">
                                Testimonial
                            </div>
                            <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
                             
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <div class="testimonial4_slide">
                                            <img src="<?php the_field('first_testimonial_image', 'option'); ?>">
                                            <?php the_field('first_testimonial_content', 'option'); ?>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="testimonial4_slide">
                                            <img src="<?php the_field('second_testimonial_image', 'option'); ?>">
                                            <?php the_field('second_testimonial_content', 'option'); ?>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                        </div>
                    </section>

                </div>
                <div class="col-md-6 pt pb">
                    
                    <section class="faqs">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="heading-section">
                                        <span class="sub-heading">Faqs</span>
                                        <h2>Frequently Asked Questions(FAQs)</h2>
                                    </div>
                                    <div class="faq-wrap">
                                        <?php 
                                        $faqs=get_field('faqs');
                                        if($faqs){
                                        ?>
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <?php
                                                $a=1;
                                                foreach($faqs as $f){
                                            ?>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading<?php echo $a++; ?>">
                                                    <h3 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $a; ?>" aria-expanded="true">
                                                            <i class="more-less fas fa-chevron-down"></i>
                                                            <?php if($f['questions']){?>
                                                                <?php echo $f['questions'];?>
                                                            <?php } ?>
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div id="collapse<?php echo $a++; ?>" class="panel-collapse collapse<?php if($a==2) echo 'show'; ?>" role="tabpanel" data-parent="#accordion">
                                                    <div class="panel-body">
                                                        <?php if($f['answer']){?>
                                                            <?php echo $f['answer'];?>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } $a++; ?>
                                        </div>
                                        <?php } ?>
                                    </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> 

                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- <script>
        const items = document.querySelectorAll('.accordion button');

            function toggleAccordion() {
              const itemToggle = this.getAttribute('aria-expanded');

              for (i = 0; i < items.length; i++) {
                items[i].setAttribute('aria-expanded', 'false');
              }

              if (itemToggle == 'false') {
                this.setAttribute('aria-expanded', 'true');
              }
            }

            items.forEach((item) => item.addEventListener('click', toggleAccordion));
    </script> -->
<!-- End Faqs -->

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



