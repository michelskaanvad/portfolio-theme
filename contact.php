<?php
/* Template Name: contact */
get_header();

$contact_desc = get_field('contact_description');
$contact_small_desc = get_field('contact_smaller_description');
$cv_desc = get_field('cv_description');
$cv_image = get_field('cv_image');
$cv_pdf_knap = get_field('cv_pdf_knap');
$mail = get_field('contact_email');

?>


     <section class="contact">
        <div class="contact-content">
          <h2><?php echo esc_html($contact_desc) ?></h2>
          <p><?php echo esc_html($contact_small_desc) ?></p>
          <a href="mailto:<?php echo esc_html($mail) ?>" class="email-link"><?php echo esc_html($mail) ?></a>
        </div>
      </section>

      <section class="cv-section">
        <div class="cv-wrapper">
         <h2><?php echo esc_html($cv_desc) ?></h2>
          <!-- CV Image -->
          <img src="<?php echo esc_url($cv_image["url"]) ?>" alt="Michel's CV" class="cv-image">
          <!-- Download Button -->
          <a href="<?php echo esc_url($cv_pdf_knap["url"]) ?>" download class="explore-btn">Download CV</a>
        </div>
      </section>

      <?php
  get_footer();
  ?>



