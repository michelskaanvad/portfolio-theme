<footer class="site-footer">
    <div class="footer-content">

        <!-- Footer Menu -->
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer',
            'container' => false,
            'menu_class' => 'footer-links',
            'fallback_cb' => false,
        ));
        ?>

        <!-- Copyright -->
        <p class="footer-logo">© <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?></p>

        <!-- Social Media Links from Customizer -->
        <div class="footer-socials">
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


    </div>
</footer>
