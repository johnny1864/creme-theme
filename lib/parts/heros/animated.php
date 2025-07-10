<section <?php echo $classes;?>>
    <div class="container">
        <h1 class="hero__title text-center"><?php echo $title; ?></h1>

        <div class="hero__image-wrapper">
            <?php echo $feat_img;?>
        </div>

        <?php if(!empty($hero['content'])):?>
        <div class="hero__content">
            <?php echo $hero['content'];  ?>
            <?php if(!empty($hero_cta)):?>
                <div class="hero__cta">
                    <a
                        class="btn btn--secondary"
                        href="<?php echo esc_url( $hero_cta['url'] ); ?>"
                        target="<?php echo esc_attr( $hero_cta['target'] ); ?>"
                    >
                        <?php echo esc_html( $hero_cta['title'] ); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        
    </div>
</section>