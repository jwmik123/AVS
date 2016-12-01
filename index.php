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
    <h1>Over AvS Energy Serivce</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Alias assumenda delectus dicta dolor dolores explicabo id ipsum iure laudantium molestias mollitia necessitatibus non,
        numquam obcaecati quaerat saepe sint sunt tempore?</p>
</div>

<?php get_footer() ?>
