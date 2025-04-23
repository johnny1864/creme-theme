<?php $cta = $hero['cta']; ?>

<section <?php echo $classes; ?>>
    <?php echo $feat_img; ?>
    <div class="container">
        <?php if(!empty($hero['left_text'])):?>
            <span class="hero__left-text text-uppercase heading-font">
                <?php echo $hero['left_text'];  ?>
            </span>
        <?php endif; ?>

        <h1 class="hero__title text-center"><?php echo $title; ?></h1>
        <?php if(!empty($hero['right_text'])):?>
            <span class="hero__right-text text-uppercase heading-font">
                <?php echo $hero['right_text'];  ?>
            </span>
        <?php endif; ?>
        <?php if(!empty($hero['content'])):?>
        <div class="hero__content h6 text-center"><?php echo $hero['content'];  ?></div>
        <?php endif; ?>

        <?php if(!empty($cta)):?>
            <div class="hero__cta text-end">
                <a
                        class="btn"
                        href="<?php echo esc_url( $cta['url'] ); ?>"
                        target="<?php echo esc_attr( $cta['target'] ); ?>"
                    >
                        <?php echo esc_html( $cta['title'] ); ?>
                    </a>
            </div>
        <?php endif; ?>
    </div>
</section>