<?php
/*
Template Name: Simple Content with PDF
*/

get_header();

// Fetch ACF fields
$contentImage = get_field('content_image');
$contentTitle = get_field('content_title');
$contentText = get_field('content_text');
$pdfFile = get_field('content_pdf_file');
?>

<div class="post-image-container">
    <?php if ($contentImage) : ?>
        <img class="post-image" src="<?php echo esc_url($contentImage['url']); ?>"
             alt="<?php echo esc_attr($contentImage['alt']); ?>">
    <?php endif; ?>
</div>

<div class="page-card-container">
    <h1 class="post-title"><?php echo esc_html($contentTitle); ?></h1>
    <div class="post-text">
        <?php echo $contentText; ?>
    </div>
    <?php if ($pdfFile) : ?>
        <div class="pdf-download">
            <a href="<?php echo esc_url($pdfFile['url']); ?>" class="button" style="margin-left: 1rem" download>
                <i class="fa fa-file"></i>
                Pobierz plik PDF
            </a>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
