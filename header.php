<?php
// This is your header.php file
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Michel Skånvad is a multidisciplinary creative specializing in photography, graphic design, social media, and video production. Explore the portfolio for innovative visual storytelling.">
    <title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>

    <?php wp_head(); // This is important for WordPress to load styles, scripts, etc. ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
</head>

<body <?php body_class(); ?>>
    <header>
        <nav>
            <div class="menu-icon">
                <span></span>
                <span></span>
            </div>

            <!-- Dynamic Primary Navigation Links -->
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',  // The registered menu location in functions.php
                'container' => false,
                'menu_class' => 'nav-links',  // Class for the <ul> element
                'fallback_cb' => false  // Do not display anything if no menu is set
            ));
            ?>

            <!-- Dynamic Social Icons from Customizer -->
            <div class="social-icons">
                <?php
                $socials = [
                    'instagram' => ['label' => 'Instagram', 'icon' => 'fab fa-instagram'],
                    'youtube'   => ['label' => 'YouTube',   'icon' => 'fab fa-youtube'],
                    'linkedin'  => ['label' => 'LinkedIn',  'icon' => 'fab fa-linkedin-in'],
                ];

                foreach ($socials as $slug => $data) {
                    $link = get_theme_mod("{$slug}_link");
                    if ($link): ?>
                        <a href="<?php echo esc_url($link); ?>" target="_blank" rel="noopener">
                            <i class="<?php echo esc_attr($data['icon']); ?>" aria-hidden="true"></i>
                            <span class="sr-only"><?php echo esc_html($data['label']); ?></span>
                        </a>
                    <?php endif;
                }
                ?>
            </div>
        </nav>
    </header>
</body>
