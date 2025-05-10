<?php 
    $hero = get_field('hero');
    $title = get_the_title();

    $feat_img_id =  get_post_thumbnail_id();
    $feat_img = getIMG($feat_img_id, 'xl');
?>

<section class="hero hero--case-study">
    <div class="container">
        
        <h1 class="hero--case-study__title text-center"><?php echo $title; ?></h1>

        <div class="hero--case-study__row">
            <?php if(!empty($hero['content'])):?>
                <div class="hero--case-study__text">
                    <p class="headline-label">Case Study</p>
                    <div class="h3">
                        <?php echo $hero['content']; ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(!empty($hero['services'])):?>
                
                <div class="hero--case-study__services">
                    <p class="heading-font label">Services</p>
                    <ul>
                    <?php foreach($hero['services'] as $service) : ?>
                        <li>
                            <?php echo get_the_title($service->ID); ?>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
        <?php if(!empty($feat_img)) : ?>
        <div class="hero--case-study__image">
            <?php echo $feat_img ?>
        </div>
        <?php endif; ?>
    </div>
</section>