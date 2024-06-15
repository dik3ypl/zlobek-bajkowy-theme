<?php
/*
Template Name: Colourful Content Left 2
*/

get_header();

// Fetch ACF fields
$pageTitle = get_field('page_title');
$contentTitle = get_field('content_title');
$contentText = get_field('content_text');
$contentImage = get_field('content_image');
?>

<?php if ($pageTitle): ?>
    <h1 class="page-title"><?php echo esc_html($pageTitle); ?></h1>
<?php endif; ?>

<div class="content">
    <div class="content-text content-background-5">
        <?php if ($contentTitle): ?>
            <h3><?php echo esc_html($contentTitle); ?></h3>
        <?php endif; ?>
        <?php if ($contentText): ?>
            <?php echo $contentText; ?>
        <?php endif; ?>
    </div>
    <div class="content-image">
        <?php if ($contentImage): ?>
            <img src="<?php echo esc_url($contentImage['url']); ?>" alt="<?php echo esc_attr($contentImage['alt']); ?>">
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
