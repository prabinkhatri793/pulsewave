 <div class="blog-sidebar">
    <div class="search-bar">
      <form action="<?php echo home_url();?>" method="get">
        <input type="text" name="s" placeholder="Search..." class="form-control">
        <button type="submit" class="btn btn-danger"><i class="fas fa-search" aria-hidden="true"></i></button>
      </form>
    </div>
    <div class="blog-sidebar-wrap">
      <div class="heading-section d-flex justify-content-between align-items-center">
        <div class="category-name">
            <h3>Recent Posts</h3>
        </div>
        <div class="view-all">
            <a href="#"><i class="fas fa-long-arrow-alt-right"></i> View All</a>
        </div>
    </div>
      <ul>
         <?php $args=array('post_type'=>'post','posts_per_page'=>5);
            $query=new WP_Query($args);
            if($query->have_posts()){
            while($query->have_posts()):$query->the_post();?>
        <li>
            <a href="<?php the_permalink();?>">
                <?php if(has_post_thumbnail()){?>
                <div class="recent-post-img">
                <?php the_post_thumbnail(array(54,54));?>
                </div>
            <?php } ?>
                <div class="recent-post-info">
                <h5><span><?php the_title();?></span><h5>
                <b><span class="date"><?php echo get_the_date('M d, Y'); ?> | <?php echo get_the_author(); ?></span></b>
                </div>
            </a>
        </li>
          <?php  endwhile; wp_reset_query(); } ?>
      </ul>
    </div>
</div>