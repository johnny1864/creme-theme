
<section <?php echo $classes;?>>
    <div class="container">
        <div class="hero__breadcrumbs">
            <a href="/services">
                Services
            </a>
            <span>- <?php echo str_replace(" ", "-", $title); ?></span>
        </div>
        <h1 class="hero__title"><?php echo $title; ?></h1>
        <?php if(!empty($hero['content'])):?>
        <div class="hero__content"><?php echo $hero['content'];  ?></div>
        <?php endif; ?>

        <?php if(!empty($hero['gallery'])):?>
            <div class="hero__gallery">
            <?php 
                $images = $hero['gallery'];
                foreach( $images as $image ): 
            ?> 
                <figure>
                    <div class="positioner">
                        <?php echo getIMG($image['id']); ?>
                    </div>
                </figure>
            <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>