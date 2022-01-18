<?php get_header(); ?>

<!-- Page Title
============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1><?php _e('Page Not Found', 'r-b-theme'); ?></h1>
    </div>
</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="col_half nobottommargin">
                <div class="error404 center">404</div>
            </div>

            <div class="col_half nobottommargin col_last">

                <div class="heading-block nobottomborder">
                    <h4><?php _e("Ooopps! The Page you were looking for, couldn't be found.", 'r-b-theme'); ?></h4>
                    <span><?php _e('Try searching for the best match or browse the links below:', 'r-b-theme'); ?></span>
                </div>

                <?php get_search_form(); ?>

            </div>

        </div>

    </div>

</section><!-- #content end -->

<?php get_footer(); ?>