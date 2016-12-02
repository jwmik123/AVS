<?php get_header() ?>

<body>
<div class="socials">
    <span id="fb">facebook</span>
    <span id="phone">0623521980</span>
    <span id="language">Language</span>
</div>
<div class="navigation">
    <ul>
<!--        <li id="li-link">--><?php //wp_nav_menu( array( 'theme_location' => 'Home' ) ); ?><!--</li>-->
<!--        <li id="li-link">--><?php //wp_nav_menu( array( 'theme_location' => 'Diensten' ) ); ?><!--</li>-->
<!--        <li id="li-link">--><?php //wp_nav_menu( array( 'theme_location' => 'Over' ) ); ?><!--</li>-->
<!--        <li id="li-link">--><?php //wp_nav_menu( array( 'theme_location' => 'Contact' ) ); ?><!--</li>-->
<!--        <li id="logo"></li>-->
        <li id="li-link">Contact</li>
        <li id="li-link">Over</li>
        <li id="li-link">Diensten</li>
        <li id="li-link">Home</li>
        <li id="logo"></li>

    </ul>
</div>

<div class="slider">
    <?php
    echo do_shortcode("[metaslider id=4]");
    ?>
</div>

<div class="over-avs">
        <?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
            <aside id="secondary" class="sidebar widget-area" role="complementary">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
            </aside><!-- .sidebar .widget-area -->
        <?php endif; ?>
</div>
</div>

<?php get_footer() ?>
