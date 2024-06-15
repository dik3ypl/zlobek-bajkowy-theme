<?php
/*
Template Name: Posts List ACF
*/

get_header();

// Get the current page title from ACF
$pageTitle = get_field('page_title');
$contentBlocks = get_field('content_blocks');
?>

<?php if ($pageTitle): ?>
    <h1 class="page-title"><?php echo esc_html($pageTitle); ?></h1>
<?php endif; ?>

<div class="posts-list">
    <?php if ($contentBlocks): ?>
        <?php $index = 0; ?>
        <?php foreach ($contentBlocks as $block): ?>
            <?php
            $title = $block['title'];
            $text = $block['text'];
            $image = $block['image'];
            $backgroundClass = $index % 2 == 0 ? 'posts-list-background-2' : 'posts-list-background-1';
            ?>
            <div class="posts-list-element <?php echo $backgroundClass; ?>">
                <div class="posts-list-element-image">
                    <?php if ($image): ?>
                        <img src="<?php echo esc_url($image['url']); ?>"
                             alt="<?php echo esc_attr($title); ?>">
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default.jpg"
                             alt="<?php echo esc_attr($title); ?>">
                    <?php endif; ?>
                </div>
                <div class="posts-list-element-text">
                    <h3><?php echo esc_html($title); ?></h3>
                    <p><?php echo wp_kses_post($text); ?></p>
                </div>
            </div>
            <?php $index++; ?>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No content blocks found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>