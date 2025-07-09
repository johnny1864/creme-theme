<?php 
    $hero = get_field('hero');
    $title = get_the_title();

    if(!empty($hero['headline'])) {
        $title = $hero['headline'];
    }

    $feat_img_id =  get_post_thumbnail_id();
    $feat_img = getIMG($feat_img_id, 'xl');
?>

<section class="hero hero--use-case">
    <div class="container">
        
        <h1 class="hero--use-case__title"><?php echo $title; ?></h1>

        
        <?php if(!empty($hero['services'])):?>
            <div class="hero--use-case__services">
                <?php 
                    foreach($hero['services'] as $service) : 
                        $service_title = str_replace("&", "%26", get_the_title($service->ID));
                        $service_title = str_replace( '#038;', '', $service_title );
                        $service_handle = strtolower( str_replace( ' ', '-', $service_title ) );
                ?>
                    <a href="/case-studies?filter=<?php echo $service_handle; ?>" class="service-tag category-tag">
                        <?php echo get_the_title($service->ID); ?>
                    </a>
                <?php endforeach; ?>   
            </div>
        <?php endif; ?>
       
        <?php if(!empty($feat_img)) : ?>
        <div class="hero--use-case__image">
            <?php echo $feat_img ?>
        </div>
        <?php endif; ?>
    </div>
</section>