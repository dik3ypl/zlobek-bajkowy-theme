<?php
/*
Template Name: Menu with Items
*/

get_header();

// Fetch ACF fields
$pageTitle = get_field('pageTitle');
$image = get_field('image');

// Map info
$email = get_field('contact_email');
$phone = get_field('contact_phone');
$other = get_field('contact_other');

// Card 1
$card1Title = get_field('card1Title');
$card1Link = get_field('card1Link');
$card1Content = get_field('card1Content');

// Card 2
$card2Title = get_field('card2Title');
$card2Link = get_field('card2Link');
$card2Content = get_field('card2Content');
?>

<h1 class="page-title"><?php echo esc_html($pageTitle); ?></h1>
<div class="offer-additional">
    <div class="offer-additional-information-container">
        <div class="offer-additional-information-container-column offer-additional-information-container-column-other">
            <div class="offer-additional-information-container-column-subcontent offer-additional-information-container-column-other-subcontent">
                <div>
                    <p><i class="fa fa-envelope"></i> <?php echo esc_html($email); ?></p>
                    <p><i class="fa fa-phone"></i> <?php echo esc_html($email); ?></p>
                    <p><i class="fa fa-info-circle"></i> <?php echo esc_html($other); ?></p>
                </div>
            </div>
        </div>
        <div class="offer-additional-information-container-column">
            <img src="<?php echo esc_url($image['url']); ?>" alt="Address Image">
        </div>
    </div>
</div>

<div class="page-card-container">
    <a href="<?php echo esc_url($card1Link); ?>" class="page-card page-card-1-additional page-card-1">
        <h3><?php echo esc_html($card1Title); ?></h3>
        <p><?php echo $card1Content; ?></p>
    </a>
    <a href="<?php echo esc_url($card2Link); ?>" class="page-card page-card-2-additional page-card-2">
        <h3><?php echo esc_html($card2Title); ?></h3>
        <p><?php echo $card2Content; ?></p>
    </a>
</div>

<?php get_footer(); ?>
