<?php
$hero = $isPTArchive ? get_field('hero', $post_type) : get_field('hero', $post_id);
if(empty($hero) || $post_type == "case-study" || $hero['style'] == 'none') return;

$feat_img_id = $isPTArchive ? get_field('feat_img', $post_type)['ID'] : get_post_thumbnail_id($post_id);
$feat_img = getIMG($feat_img_id, 'xl', true);

$classList = array('hero', 'hero--'.$hero['style']);
if(!empty($feat_img)) $classList[] = 'lazy';

if($isHome){
    $classList[] = 'hero--home';
    $feat_img = getIMG($feat_img_id, 'xl');
} elseif ($isBlog){
    $classList[] = 'hero--blog hero--archive';
} elseif ($isCategory){
    $classList[] = 'hero--category hero--archive';
} elseif ($isArchive || $isPTArchive){
    $classList[] = 'hero--archive';
} else {
    $classList[] = 'hero--single';
    if($post_type)  $classList[] = 'hero--'.$post_type;
}

if( $hero['style'] == "animated" || $hero['style'] == "full-image" ){
    $feat_img = getIMG($feat_img_id, 'xl');
} 

if($hero['text_align_center']) {
    $classList[] = 'text-center';
}

if (is_404()) {
    $title = 'Page Not Found';
} elseif($hero['headline']) {
    $title = $hero['headline'];
} elseif ($isPTArchive) {
	$title = post_type_archive_title('', false);
} elseif ($isCategory || $isArchive) {
    $query = get_queried_object(  );
    $title = $query->name;
} else {
    $title = get_the_title($post_id);
}

$hero_cta = "";
if(!empty($hero['cta'])) {
$hero_cta = $hero['cta'];
}

if(empty($title)) return;

$classes = buildAttr('class', $classList);

include locate_template( 'lib/parts/heros/'.$hero['style'].'.php');
?>