<?php
$techup_enable_callout_section1 = get_theme_mod( 'techup_enable_callout_section1', false );
$techup_co1_image = get_theme_mod( 'techup_co1_image' );

if($techup_enable_callout_section1 == true ) {
$techup_callout_title1 = get_theme_mod( 'techup_callout_title1');
$techup_callout_content1 = get_theme_mod( 'techup_callout_content1');
if($techup_co1_image=="")
{
	$techup_co1_image = esc_url(  get_template_directory_uri() . '/assets/images/banner.jpg' ); 
}
?>
 
</section>	

 
	
	<!--==== Start CTA- Section 2 =====------>

    <section class="cta-7 bg-img" style="background-image: url(<?php if($techup_co1_image) { echo esc_url($techup_co1_image); } else { echo esc_url(get_header_image()); } ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" data-wow-delay="0.2s">
                    <h3 class="c-white"><?php echo esc_html($techup_callout_title1); ?></h3>
                    <p class="c-white mb-0"><?php echo esc_html($techup_callout_content1); ?></p>
                  </div>
            </div>
        </div>
    </section>

    <!------ End CTA- Section 2------>

<?php } ?>