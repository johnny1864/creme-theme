<section <?php echo $classes; echo $feat_img;?>>
    <div class="container">

        <?php if(!empty($hero['gif'])):?>
            <div class="hero__gif">
                <?php echo getIMG($hero['gif']['ID'], 'md') ?>
            </div>
        <?php endif ?>

        <?php if(!empty($hero['preheading'])):?>
            <p class="preheading">
                <?php echo $hero['preheading']; ?>
            </p>
        <?php endif; ?>
        
        <h1 class="hero__title"><?php echo $title; ?></h1>

        <?php if(!empty($hero['content'])):?>
        <div class="hero__content h6"><?php echo $hero['content'];  ?></div>
        <?php endif; ?>

    </div>
</section>