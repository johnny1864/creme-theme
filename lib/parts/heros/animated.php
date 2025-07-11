<section <?php echo $classes;?>>
    <div class="container">
        <h1 class="hero__title text-center"><?php echo $title; ?></h1>

        <div class="hero__image-wrapper">
            <?php if(!empty($hero['video'])) : ?>
                <video autoplay loop muted playsinline>
                        <source
                            src="<?php echo esc_url( $hero['video']['url'] ); ?>"
                            type="video/mp4"
                        >
                    Your browser does not support the video tag.
                </video>
            <?php else : ?>
                <?php echo $feat_img;?>
            <?php endif; ?>
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