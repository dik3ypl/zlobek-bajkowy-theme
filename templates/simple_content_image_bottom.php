<?php
/*
Template Name: Simple Content Image Bottom
*/

get_header();

// Fetch ACF fields
$contentImage = get_field('content_image');
$contentTitle = get_field('content_title');
$contentText = get_field('content_text');
?>

<div class="page-card-container">
    <h1 class="post-title"><?php echo esc_html($contentTitle); ?></h1>
    <div class="post-text">
        <?php echo $contentText; ?>
    </div>
</div>

<div class="post-image-container">
    <?php if ($contentImage) : ?>
        <img class="post-image" src="<?php echo esc_url($contentImage['url']); ?>"
             alt="<?php echo esc_attr($contentImage['alt']); ?>">
    <?php endif; ?>
</div>

<?php get_footer(); ?>
