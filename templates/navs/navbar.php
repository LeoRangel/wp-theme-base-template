<nav id="navbar">
    <ul>
        <li>
            <a href="<?php echo bloginfo('url') ?>">
                <img
                    src="<?php bloginfo('template_url'); ?>/static/images/logo.png"
                    alt="Website logo"
                    width="120px"
                    height="120px"
                    loading="lazy"
                >
            </a>
        </li>
        <li>
            <a href="<?php echo bloginfo('url') ?>/feed/" target="_blank" rel="noopener">
                Feed RSS
            </a>
        </li>
        <li>
            <a href="<?php echo bloginfo('url') ?>/contact/">
                Contact
            </a>
        </li>
        <li>
            <a href="<?php echo bloginfo('url') ?>/privacy-policy/">
                Privacy Policy
            </a>
        </li>
        <li>
            <?php get_search_form(); ?>
        </li>
    </ul>
</nav>