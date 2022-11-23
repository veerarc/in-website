<?php
$techup_enable_callout_section = get_theme_mod( 'techup_enable_callout_section', false );
$techup_co2_image = get_theme_mod( 'techup_co2_image' );

if($techup_enable_callout_section == true ) {
   
$techup_callout_title = get_theme_mod( 'techup_callout_title');
$techup_callout_content = get_theme_mod( 'techup_callout_content');
$techup_callout_button_label1 = get_theme_mod( 'techup_callout_button_label1');
$techup_callout_button_link1 = get_theme_mod( 'techup_callout_button_link1');
if($techup_co2_image=="")
{
	$techup_co2_image = esc_url(  get_template_directory_uri() ); 
}
?>
 <!-- Start CTA Section -->

    <section id="callout" class="cta-7 bg-img">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" data-wow-delay="0.2s">
                    <h3 class="c-white"><?php echo esc_html($techup_callout_title); ?></h3>
                    <p class="c-white mb-0"><?php echo esc_html($techup_callout_content); ?></p>
                    <?php if($techup_callout_button_label1) :?>
                    <div class="flex-btn">
                      <div class="btn">
                        <a href="<?php echo esc_url($techup_callout_button_link1); ?>"><?php echo esc_html($techup_callout_button_label1); ?></a>
                      </div>
                    </div>
                    <?php endif; ?>
                  </div>
            </div>
        </div>
    </section>

    <!-- End CTA Section -->

<?php } ?>