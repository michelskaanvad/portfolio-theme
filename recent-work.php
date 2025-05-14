<?php
/* Template Name: Recent Work */
get_header();
?>

<?php
$recent_work_h1 = get_field('recent_work_h1');
$recent_work_photo_btn = get_field('recent_work_photo_btn');
$recent_work_photo_btn_p = get_field('recent_work_photo_btn_p');
$recent_work_design_btn = get_field('recent_work_design_btn');
$recent_work_design_btn_p = get_field('recent_work_design_btn_p');
$recent_work_video_btn = get_field('recent_work_video_btn');
$recent_work_video_btn_p = get_field('recent_work_video_btn_p');

?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
  <div class="recent-work-hero-h1">
    <h1><?php echo esc_html($recent_work_h1); ?></h1>
  </div>

  <div class="button-group">
    <a href="<?php echo esc_url($recent_work_photo_btn); ?>"><?php echo esc_html($recent_work_photo_btn_p); ?></a>
    <a href="<?php echo esc_url($recent_work_design_btn); ?>"><?php echo esc_html($recent_work_design_btn_p); ?></a>
    <a href="<?php echo esc_url($recent_work_video_btn); ?>"><?php echo esc_html($recent_work_video_btn_p); ?></a>
  </div>

  <section class="content">
    <?php
    $args = array(
      'post_type' => 'recent-work', // Use your CPT slug here
      'posts_per_page' => -1
    );

    $loop = new WP_Query($args);
    if ($loop->have_posts()):
      while ($loop->have_posts()): $loop->the_post();
        $project_image = get_field('recent_image'); // use your ACF field name
    ?>
      <?php if ($project_image): ?>
        <img src="<?php echo esc_url($project_image['url']); ?>" alt="">
      <?php endif; ?>
    <?php endwhile; wp_reset_postdata(); ?>
    <?php else: ?>
      <p>No recent images yet.</p>
    <?php endif; ?>
  </section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
