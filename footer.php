<?php global $global, $site_logo;
    $footer = get_field('footer', 'option');
    $cta = $footer['cta'];
    $headline = $footer['footer_headline'];
    $newsletter_signup_copy = $footer['newsletter_signup_copy'];

    if(!empty($footer['site_logo'])) $site_logo = getIMG( $footer['site_logo']['ID'], 'md', false, array('alt' => get_bloginfo( 'name' ), 'lazy' => false));

    $socials = get_field('global', 'option')['contact']['socials'];
?>

</main>

<footer class="gfooter">
    <div class="gfooter__content">
        <div class="container">
            <p class="copy desk-only">&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>.</p>
            <div class="gfooter__socials">
                <ul>
                <?php 
                    foreach($socials as $item) : 
                        $url = $item['url'];
                        $host = parse_url($url, PHP_URL_HOST);
                        $hostParts = explode('.', $host);
                        $domain = $hostParts[count($hostParts) - 2];
                ?>
                    <li class="gfooter__socials-item">
                      <a target="_blank" class="no-underline text-uppercase heading-font" href="<?php echo $item['url']; ?>">
                        <?php  
                            if(!empty($item['hover_image'])) {
                                $image_id = $item['hover_image']['id'];
                                echo getIMG($image_id, 'md'); 
                            }
                        ?>
                        <span>
                            <?php echo $domain; ?>
                        </span>
                      </a>  
                    </li>
                <?php endforeach; ?>
                </ul>
            </div>

            <div class="gfooter__headline hover-wrapper">
                
                <h2 class="h1">
                    <?php echo $headline ?>
                </h2>
                <a class="site-logo desk-only" href="<?php echo home_url(); ?>"><?php echo $site_logo; ?></a>
                <?php if(!empty($cta)):?>
                    
                    <a
                        class="btn btn--secondary"
                        href="<?php echo esc_url( $cta['url'] ); ?>"
                        target="<?php echo esc_attr( $cta['target'] ); ?>"
                    >
                        <?php echo esc_html( $cta['title'] ); ?>
                    </a>
                    
                <?php endif; ?>
            </div>

            <div class="row position-relative row__wrapper">
                <div class="gfooter__newsletter">
                    <h6 class="gfooter__newsletter-title">
                        <?php echo $newsletter_signup_copy; ?>
                    </h6>
                    <?php echo do_shortcode('[contact-form-7 id="d038426" title="Contact form 1"]') ?>
                </div>
                <div class="row menus-row"> 
                <div class="col col--left">
                    <div class="gfooter-menus">
                        <p class="gfooter-menus__headline">
                            Explore
                        </p>
                        <nav class="menu menu--foot">
                            <?php
                                wp_nav_menu(array(
                                    'container' => false,
                                    'items_wrap' => '<ul id="%1$s">%3$s</ul>',
                                    'walker' => new PDM_Navwalker(),
                                    'theme_location' => 'foot'
                                ));
                            ?>
                        </nav>
                    </div>
                </div>
                <div class="col col--right">
                    <div class="gfooter-menus">
                        <p class="gfooter-menus__headline">
                            Company
                        </p>
                        <nav class="menu menu--foot">
                            <?php
                                wp_nav_menu(array(
                                    'container' => false,
                                    'items_wrap' => '<ul id="%1$s">%3$s</ul>',
                                    'walker' => new PDM_Navwalker(),
                                    'theme_location' => 'foot_company'
                                ));
                            ?>
                        </nav>
                    </div>
                </div>

                <div class="col col--support">
                    <div class="gfooter-menus">
                        <p class="gfooter-menus__headline">
                            Support
                        </p>
                        <nav class="menu menu--foot">
                            <?php
                                wp_nav_menu(array(
                                    'container' => false,
                                    'items_wrap' => '<ul id="%1$s">%3$s</ul>',
                                    'walker' => new PDM_Navwalker(),
                                    'theme_location' => 'foot_legal'
                                ));
                            ?>
                        </nav>
                    </div>
                </div> </div>
            </div>
        </div>
    </div>

    <div class="gfooter__bottom mob-only">
        <div class="container">
            <div class="gfooter__logo">
                <a class="site-logo" href="<?php echo home_url(); ?>"><?php echo $site_logo; ?></a>
            </div>
            <div class="gfooter__copy">
                <p class="copy">&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>.</p>
            </div>
        </div>
    </div>
</footer>

<div class="pdm-lightbox pdm-lightbox--reset">
    <div class="pdm-lightbox__container">
        <button class="pdm-lightbox__close" type="button">Close Popup</button>
        <div class="pdm-lightbox__content"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/TextPlugin.min.js"></script>
<?php wp_footer(); ?>

<?php echo get_field('body_scripts_bottom', 'option'); ?>
</body>

</html>