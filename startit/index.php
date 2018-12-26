        <?php get_header(); ?>
        <div class="main-wrapper">
            <?php get_template_part( 'parts/page', 'service'); ?>
            <?php get_template_part( 'parts/page', 'about'); ?>
            <?php get_template_part( 'parts/category', 'works'); ?>
            <?php get_template_part( 'parts/category', 'blog'); ?>
            <?php get_template_part( 'parts/page', 'contact'); ?>
        </div>
        <?php get_footer(); ?>
