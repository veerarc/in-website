<?php 
$techup_enable_team_section = get_theme_mod( 'techup_enable_team_section', false );
$techup_team_title  = get_theme_mod( 'techup_team_title' );
$techup_team_subtitle  = get_theme_mod( 'techup_team_subtitle' );

if($techup_enable_team_section==true ) {
        $techup_teams_no        = 6;
        $techup_teams_pages      = array();
        for( $i = 1; $i <= $techup_teams_no; $i++ ) {
             $techup_teams_pages[] = get_theme_mod('techup_team_page'.$i);

        }
        $techup_teams_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $techup_teams_pages ),
        'posts_per_page' => absint($techup_teams_no),
        'orderby' => 'post__in'
        ); 
        $techup_teams_query = new WP_Query( $techup_teams_args );
      

?> 
	
	<!-- ======= Team Section ======= -->

    <section class="our-team-sec">
      <div class="container">
        <div class="section-title-5">
        	<?php if($techup_team_title) : ?>
          <h2><?php echo esc_html($techup_team_title); ?></h2>
          <?php endif; ?>
          <div class="separator">
            <ul>
              <li><i class="fa fa-briefcase"></i></li>
            </ul>
          </div>
          <?php if($techup_team_subtitle) : ?>
          <p><?php echo esc_html($techup_team_subtitle); ?></p>
          <?php endif; ?>
        </div>

        <div class="row">
        	<?php
						$count = 0;
						while($techup_teams_query->have_posts() && $count <= 5 ) :
						$techup_teams_query->the_post();
					?>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="our-team">
                <div class="pic">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="team-content">
                    <a href="<?php the_permalink(); ?>"><h3 class="title"><?php the_title(); ?></h3></a>
                    <span class="post"><?php echo esc_html(get_the_excerpt()); ?></span>
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
    <!-- End Team Section -->

	
<?php } ?>