<?php 
$techup_enable_features_section = get_theme_mod( 'techup_enable_features_section', false );
if($techup_enable_features_section==true ) {
        $techup_features_no        = 3;
        $techup_features_pages      = array();
        for( $i = 1; $i <= $techup_features_no; $i++ ) {
             $techup_features_pages[] = get_theme_mod('techup_features_page '.$i); 
             $techup_features_icon[]= get_theme_mod('techup_features_icon '.$i,'fa fa-user');
        }
        $techup_features_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $techup_features_pages ),
        'posts_per_page' => absint($techup_features_no),
        'orderby' => 'post__in'
        ); 
        $techup_features_query = new WP_Query( $techup_features_args );
?>

      <section id="feature" class="feature-area">
      <div class="container-fluid">
        <div class="row p-0">
          <?php
            $count = 0;
            while($techup_features_query->have_posts() && $count <= 2 ) :
            $techup_features_query->the_post();
          ?>      
          <div class="col-lg-4 col-md-6 col-sm-12 p-0" data-wow-delay="0.2s">
            <div class="feature-box text-center bg-color">
              <div class="icon">
                <i class="fa <?php echo esc_html($techup_features_icon[$count]); ?>"></i>
              </div>
              <div class="content">
                <h5 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p class="description">
                  <?php echo esc_html(get_the_excerpt()); ?>
                </p>
              </div>
            </div>
          </div>
          <?php
            $count = $count + 1;
            endwhile;
            wp_reset_postdata();
          ?>
        </div>
      </div>
    </section>
   

<?php } ?>