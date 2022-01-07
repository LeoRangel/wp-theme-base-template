<header id="searchHeader">
    <h1>
        <strong>
            <?php if(get_search_query() == ""): ?>
                Search for something...
            <?php else: ?>
                <!-- Results for "<?php //echo $_GET['s']; ?>" -->
                Results for "<?php echo get_search_query(); ?>"
            <?php endif; ?>
        </strong>
    </h1>
</header>