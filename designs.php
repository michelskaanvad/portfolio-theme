<?php
/* Template Name: Designs */
get_header();

$designs_h1 = get_field('designs_h1');
$designs_photo_btn = get_field('designs_photo_btn');
$designs_photo_btn_p = get_field('designs_photo_btn_p');
$designs_design_btn = get_field('designs_design_btn');
$designs_design_btn_p = get_field('designs_design_btn_p');
$designs_video_btn = get_field('designs_video_btn');
$designs_video_btn_p = get_field('designs_video_btn_p');
$designs_image_one = get_field('designs_image_one');
$designs_image_two = get_field('designs_image_two');
$designs_image_three = get_field('designs_image_three');

?>

     <div class="recent-work-hero-h1">
      <h1><?php echo esc_html($designs_h1) ?></h1>
    </div> 

  <div class="button-group">
    <<a href="<?php echo esc_url($designs_photo_btn) ?>"><?php echo esc_html($designs_photo_btn_p)?></a>
    <a href="<?php echo esc_url($designs_design_btn) ?>"><?php echo esc_html($designs_design_btn_p)?></a>
    <a href="<?php echo esc_url($designs_video_btn) ?>"><?php echo esc_html($designs_video_btn_p)?></a>
  </div>

  <section class="content">
    <!-- 🧠 Replace with your own designs later -->
    <img src="<?php echo esc_url($designs_image_one["url"]) ?>" alt="">
    <img src="<?php echo esc_url($designs_image_two["url"]) ?>" alt="">
    <img src="<?php echo esc_url($designs_image_three["url"]) ?>" alt="">
  </section>

  <?php
  get_footer();
  ?>
  
