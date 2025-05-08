<?php
/* Template Name: Recent Work */
get_header();

$recent_work_h1 = get_field('recent_work_h1');
$recent_work_photo_btn = get_field('recent_work_photo_btn');
$recent_work_photo_btn_p = get_field('recent_work_photo_btn_p');
$recent_work_design_btn = get_field('recent_work_design_btn');
$recent_work_design_btn_p = get_field('recent_work_design_btn_p');
$recent_work_video_btn = get_field('recent_work_video_btn');
$recent_work_video_btn_p = get_field('recent_work_video_btn_p');
$recent_work_image_one = get_field('recent_work_image_one');
$recent_work_image_two = get_field('recent_work_image_two');
$recent_work_image_three = get_field('recent_work_image_three');

?>

  <div class="recent-work-hero-h1">
    <h1><?php echo esc_html($recent_work_h1) ?></h1>
  </div> 

  <div class="button-group">
    <a href="<?php echo esc_url($recent_work_photo_btn) ?>"><?php echo esc_html($recent_work_photo_btn_p) ?></a>
    <a href="<?php echo esc_url($recent_work_design_btn) ?>"><?php echo esc_html($recent_work_design_btn_p) ?></a>
    <a href="<?php echo esc_url($recent_work_video_btn) ?>"><?php echo esc_html($recent_work_video_btn_p) ?></a>
  </div>

  <section class="content">
    <!--photography content-->
    <img src="<?php echo esc_url($recent_work_image_one["url"]) ?>" alt="">
    <img src="<?php echo esc_url($recent_work_image_two["url"]) ?>" alt="">
    <img src="<?php echo esc_url($recent_work_image_three["url"]) ?>" alt="">
    <!-- indsæt senere
    <img src="test.jpg" alt="test">
    <img src="test.jpg" alt="test">
    <img src="test.jpg" alt="test">
    <img src="test.jpg" alt="test">
    <img src="test.jpg" alt="test">
    <img src="test.jpg" alt="test">
    <img src="test.jpg" alt="test">
    <img src="test.jpg" alt="test"> -->
  </section>

  <?php
  get_footer();
  ?>
