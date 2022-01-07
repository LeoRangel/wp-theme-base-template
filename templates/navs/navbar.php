<nav id="navbar">
    <ul>
        <li>
            <span><strong>Wordpress theme base template</strong></span>
        </li>
        <li>
            <a href="<?php echo bloginfo('url') ?>">
                Home
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