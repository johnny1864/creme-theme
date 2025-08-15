<?php
    global $global, $isHome, $isBlog, $is404, $isSingle, $post_id, $post_type, $isPTArchive, $isCategory, $site_logo;

    $global = get_field('global', 'option');
    $header = get_field('header', 'option');
    $isHome = is_front_page();
    $is404 = is_404();
    $isBlog = is_home();
    $isSingle = is_single();
    $isPTArchive = is_post_type_archive();
    $isCategory = is_category() || is_tax();
    $isArchive = is_archive();

    $post_id = $isBlog ? get_option('page_for_posts') : (is_search() ? -1 : get_the_ID());
    $post_type = $isPTArchive ? 'cpt_' . get_post_type() : get_post_type();

    $site_logo = getIMG( $global['logo']['ID'], 'sm', false, array('alt' => get_bloginfo( 'name' ), 'lazy' => false));
    // $site_logo = getSVG('logo', false, false);
    $site_favicon = $global['favicon'];
?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if($isSingle && $post_type == 'post'): ?>
    <meta property="og:image" content="<?php echo get_the_post_thumbnail_url($post_id,'hero'); ?>" />
    <?php endif; ?>
    <?php if(!empty($site_favicon)): ?>
    <link rel="shortcut icon" href="<?php echo $site_favicon['url']; ?>" type="<?php echo $site_favicon['mime_type']; ?>" />
    <?php endif; ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

    <script>var ajaxURL = "<?php echo esc_url( home_url( '/' ) ) . 'wp-admin/admin-ajax.php' ?>";</script>
    <?php echo get_field('head_scripts', 'option'); ?>
</head>

<body id="top" <?php body_class(); ?>>
    <?php echo get_field('body_scripts_top', 'option'); ?>
    <?php include locate_template( 'lib/layout/header.php' ); ?>
    <?php include locate_template( 'lib/parts/hero.php' ); ?>

    <main>