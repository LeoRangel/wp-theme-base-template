<?php
    global $wp_query;
    $curauth = $wp_query->get_queried_object();
?>

<header id="authorHeader">
    <div>
        <img
            src="<?php echo get_avatar_url(get_the_author_meta( 'ID' ), ['size' => '150']); ?>"
            alt="<?php echo $curauth->nickname; ?>"
            loading="lazy"
        />
        <h1><strong><?php echo $curauth->nickname; ?></strong></h1>
        <p><?php echo $curauth->user_email; ?></p>
        <p><?php echo $curauth->description; ?></p>
    </div>
</header>