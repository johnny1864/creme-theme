<section <?php echo $classes;?>>
    <div class="container">
        <h1 class="hero__title text-center"><?php echo $title; ?></h1>

        <div class="hero__image-wrapper">
            <?php echo $feat_img;?>
        </div>

        <?php if(!empty($hero['content'])):?>
        <div class="hero__content"><?php echo $hero['content'];  ?></div>
        <?php endif; ?>
        
    </div>
</section>