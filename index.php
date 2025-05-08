<?php
/* Template Name: landingpage */
get_header();

$hero_video = get_field('hero_video');
$recentwork_h2 = get_field('recent_work_description');
$recentwork_p = get_field('recent_work_smaller_description_');
$recentwork_btn = get_field('recent_work_link');
$recentwork_btn_p = get_field('recent_work_btn_p');
$about_me_h2 = get_field('about_me_h2');
$about_me_h3 = get_field('about_me_h3');
$about_me_image = get_field('about_me_image');
$about_me_btn = get_field('about_me_link');
$about_me_btn_p = get_field('about_me_btn_p');
$about_me_video_h2 = get_field('about_me_video_h2');
$about_me_video_h3 = get_field('about_me_video_h3');
$about_me_video = get_field('about_me_video');
?> 

    <!--Hero Section with Background Video -->
    <section class="hero" id="home">
        <video class="hero-video" autoplay muted loop playsinline>
         <source src="<?php echo esc_url($hero_video["url"]) ?>" type="video/mp4">
        </video>
    </section>


    <!--Recent Work Section-->
    <section class="recent-work">
        <div class="recent-work-content">
          <h2><?php echo esc_html($recentwork_h2) ?></h2>
          <p>
            <?php echo esc_html($recentwork_p) ?>
          </p>
          <a href="<?php echo esc_url($recentwork_btn) ?>" class="explore-btn"><?php echo esc_html($recentwork_btn_p) ?></a>
        </div>
      </section>

      <section class="about-me" id="about">
        <div class="image-container">
            <img src="<?php echo esc_url($about_me_image["url"]) ?>" alt="Photo of Michel">
          <div class="image-gradient"></div>
        </div>
        <div class="about-text">
          <h2><?php echo esc_html($about_me_h2) ?></h2>
          <p> <?php echo esc_html($about_me_h3) ?> </p>
          <a href="<?php echo esc_url($about_me_btn) ?>" class="explore-btn"><?php echo esc_html($about_me_btn_p) ?></a>
        </div>
      </section>

      <!--About me, but told with sound and moving pictures-->
      <section class="about-video">
        <h2><?php echo esc_html($about_me_video_h2) ?></h2>
        <h3><?php echo esc_html($about_me_video_h3) ?></h3>
        <div class="video-container">
          <iframe 
            src="<?php echo esc_url($about_me_video) ?>" 
            title="YouTube video player" 
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            allowfullscreen>
          </iframe>
        </div>
      </section>

      <?php
  get_footer();
  ?>
  
