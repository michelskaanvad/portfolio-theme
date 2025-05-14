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
  <?php if (have_posts()): while (have_posts()): the_post(); ?>
     <div class="recent-work-hero-h1">
      <h1><?php echo esc_html($designs_h1) ?></h1>
    </div> 

  <div class="button-group">
    <<a href="<?php echo esc_url($designs_photo_btn) ?>"><?php echo esc_html($designs_photo_btn_p)?></a>
    <a href="<?php echo esc_url($designs_design_btn) ?>"><?php echo esc_html($designs_design_btn_p)?></a>
    <a href="<?php echo esc_url($designs_video_btn) ?>"><?php echo esc_html($designs_video_btn_p)?></a>
  </div>

  <section class="content">
    <?php
    $args = array(
      'post_type' => 'designs', // Use your CPT slug here
      'posts_per_page' => -1
    );

    $loop = new WP_Query($args);
    if ($loop->have_posts()):
      while ($loop->have_posts()): $loop->the_post();
        $designs_img = get_field('designs_img'); // use your ACF field name
    ?>
      <?php if ($designs_img): ?>
        <img src="<?php echo esc_url($designs_img['url']); ?>" alt="">
      <?php endif; ?>
    <?php endwhile; wp_reset_postdata(); ?>
    <?php else: ?>
      <p>No recent images yet.</p>
    <?php endif; ?>
  </section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
  
