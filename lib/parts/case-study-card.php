<?php
    $thumbnail_id = get_field('blog_default_thumbnail', 'option')['ID'];

    if(!empty(get_post_thumbnail_id())) $thumbnail_id = get_post_thumbnail_id();

    $feat_img = getIMG($thumbnail_id, 'xl');
    $permalink = get_the_permalink();
    $card_settings = get_field('card_settings');

    if(!empty($card_settings['mobile_image'])) {
        $mobile_imageID = $card_settings['mobile_image']['id'];
        $mobile_image = getIMG($mobile_imageID, 'lg', false, array('class' => 'mob-only'));
    }
    
    $services = [];

    $hero = get_field('hero');

    if(!empty($hero['services'])) { 
        foreach($hero['services'] as $service) { 
            $serviceTitle = get_the_title($service->ID);
            $single_service = strtolower( str_replace( ' ', '-', $serviceTitle ) );
            array_push( $services, $single_service );
        }
    }
    
?>

<article 
    data-categories="<?php echo implode( " ", $services ); ?>"
    class="case-study-card hover-wrapper <?php if($card_settings['text_white']) : ?>case-study-card--white<?php endif; ?>">
    <a class="case-study-card__thumb" href="<?php echo $permalink; ?>">
        <div class="positioner">
            <?php 
                echo $feat_img; 
                if(!empty($mobile_image)){
                    echo $mobile_image;
                }
            ?>
        </div>
    </a>
    <div class="case-study-card__content">
        <h4 class="case-study-card__title"><?php the_title(); ?></h4>
        <p class="heading-font text-uppercase">
            <?php echo $card_settings['featured_service']; ?>
        </p>
        <a class="case-study-card__btn btn" href="<?php echo $permalink; ?>">
            <span class="dot">&#9679;</span> View Project
        </a>
    </div>
</article>