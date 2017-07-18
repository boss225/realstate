<?php get_header(); ?>
<?php
global $ss_options;
globaL $wp_query;
global $post;
$category = get_the_category($post->ID);
$category_name = '';
foreach($category as $cd){
    $category_name = $cd->slug;
}
$banner_url = (strcmp($category_name,'news')== 0) ? $ss_options['bg-news']['url'] : $ss_options['bg-recruit-news']['url'];
$banner_title = (strcmp($category_name,'news')== 0) ? $ss_options['news-title'] : $ss_options['recruit-news-title'];
?>
<div class="<?php echo $category_name; ?>">
    <div class="container">
        <div class="top-banner">
            <?php if(!empty($banner_url)) : ?>
                <img src="<?php echo $banner_url; ?>" alt="">
            <?php endif; ?>
            <div class="banner-content">
                <h1><?php echo $banner_title; ?></h1>
            </div>
        </div>
        <div class="two-columns-module menu-left ">
            <div class="main-content">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <!--                        <article id="post---><?php ////the_ID();?><!--" class="post-content">-->
                        <?php the_content(); ?>
                        <!--                        </article>-->
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
