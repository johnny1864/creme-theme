<?php
    $section =  get_field('image_content_blocks');

?>

<section class="image-content-blocks">
    <div class="container">
        <div class="section__header">
            <?php if($section['preheading']) : ?>
                <span class="preheading">
                    <?php echo $section['preheading']; ?>
                </span>
            <?php endif; ?>
            <h2>
                <?php echo $section['heading']; ?>
            </h2>
        </div>

        <div class="blocks">
            <?php 
                foreach($section['blocks'] as $index => $block) : 
                $block = $block['block'];
                $image = getIMG($block['image']['ID'], 'xl');
                $block_title = $block['title'];
            ?>
                <div id="image-content-blocks__block-<?php echo $index; ?>" class="image-content-blocks__block mob-accordion">
                    <p class="image-content-blocks__block-count heading-font desk-only">
                        (0<?php echo $index + 1; ?>)
                    </p>
                    <div class="mob-accordion__trigger mob-only">
                        <h5>
                            <?php echo $block_title; ?>
                        </h5>
                        <span class="image-content-blocks__block-count heading-font">
                            (0<?php echo $index + 1; ?>)
                        </span>
                    </div>
                    <div class="row mob-accordion__content">
                        <div class="col col--left">
                            <div class="content">
                                <div class="col__header desk-only">
                                    
                                    <h5>
                                        <?php echo $block['title']; ?>
                                    </h5>
                                </div>
                                <?php echo $block['content']; ?>

                                <?php if ( ! empty( $block['list'] ) ) : ?>
                                    <ul >
                                        <?php foreach ( $block['list'] as $list_item ) : ?>
                                            <li><?php echo $list_item['item']; ?></li>
                                        <?php endforeach ?>
                                    </ul>
                                <?php endif; ?>

                                
                            </div>

                            <?php 
                                    
                                    if(!empty($block['link'])) : 
                                    $cta = $block['link']; 
                                ?>     
                                    
                                    <a
                                        class="image-content-blocks__block-link btn"
                                        href="<?php echo esc_url( $cta['url'] ); ?>"
                                        target="<?php echo esc_attr( $cta['target'] ); ?>"
                                    >
                                        <?php echo esc_html( $cta['title'] ); ?>
                                    </a>
                                   
                                <?php endif; ?>

                            <div class="desk-only image-content-blocks__block-nav">
                                <?php 
                                    foreach($section['blocks'] as $index_inner => $block_inner) :
                                    $block_inner =   $block_inner['block'];
                                ?>
                                    <a class="<?php if( $block_inner['title'] == $block['title'] ) : ?>active<?php endif; ?>" href="#image-content-blocks__block-<?php echo $index_inner; ?>">
                                        <?php echo $block_inner['title'] ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>

                        </div>
                        <div class="col col--right">
                            <div class="image-content-blocks__block-image">
                                <?php echo $image; ?>
                            </div>   
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>