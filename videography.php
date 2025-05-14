<?php
/* Template Name: Videography */
get_header();

$video_h1 = get_field('video_h1');
$video_photo_btn = get_field('video_photo_btn');
$video_photo_btn_p = get_field('video_photo_btn_p');
$video_design_btn = get_field('video_design_btn');
$video_design_btn_p = get_field('video_design_btn_p');
$video_video_btn = get_field('video_video_btn');
$video_video_btn_p = get_field('video_video_btn_p');
$video_youtube_one = get_field('video_youtube_one');
$video_youtube_two = get_field('video_youtube_two');
$video_youtube_three = get_field('video_youtube_three');

?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
     <div class="recent-work-hero-h1">
      <h1><?php echo esc_html($video_h1) ?></h1>
    </div> 

  <div class="button-group">
    <a href="<?php echo esc_url($video_photo_btn) ?>"><?php echo esc_html($video_photo_btn_p)?></a>
    <a href="<?php echo esc_url($video_design_btn)?>"><?php echo esc_html($video_design_btn_p)?></a>
    <a href="<?php echo esc_url($video_video_btn)?>"><?php echo esc_html($video_video_btn_p)?></a>
  </div>
  <section class="content">
    <?php
    $args = array(
      'post_type' => 'videography', // Use your CPT slug here
      'posts_per_page' => -1
    );

    $loop = new WP_Query($args);
    if ($loop->have_posts()):
      while ($loop->have_posts()): $loop->the_post();
        $video_link = get_field('video_link'); // use your ACF field name
    ?>
      <?php if ($video_link): ?>
        
        <iframe width="100%" height="400" src="<?php echo esc_url($video_link) ?>" 
      title="YouTube video player" frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
      allowfullscreen>
    </iframe>
      <?php endif; ?>
    <?php endwhile; wp_reset_postdata(); ?>
    <?php else: ?>
      <p>No recent video yet.</p>
    <?php endif; ?>
  </section>
  
  <?php endwhile; endif; ?>
  <?php
  get_footer();
  ?>
  
