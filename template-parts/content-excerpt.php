<?php
/**
 * Standard Excerpt Template
 *
 * @package bootstrap2wordpress
 * @since 2.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="meta">
        <span><?= get_the_date( 'M d, Y'); ?></span>
    </div>
    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2>
    </a>
    <p class="excerpt">
        <?php force_balance_tags( the_excerpt() ); ?>
    </p>
    <a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e( 'Read the full post ->', 'bootstrap2wordpress'); ?></a>
</article>