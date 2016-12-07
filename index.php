<?php get_header() ?>

<body>

<div class="socials">
    <span id="fb">FB</span>
    <span id="phone">0623521980</span>
    <span id="language">Language</span>
</div>
<div class="navigation">
    <ul>
        <li id="li-link"><?php wp_nav_menu( array( 'theme_location' => 'Home' ) ); ?></li>
        <li id="li-link"><?php wp_nav_menu( array( 'theme_location' => 'Diensten' ) ); ?></li>
        <li id="li-link"><?php wp_nav_menu( array( 'theme_location' => 'Over' ) ); ?></li>
        <li id="li-link"><?php wp_nav_menu( array( 'theme_location' => 'Contact' ) ); ?></li>

    </ul>
</div>

<div class="slider">
    <?php
    echo do_shortcode("[metaslider id=4]");
    ?>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
<div class="over-avs text-center">
    <?php
    $post_id = 1;
    $queried_post = get_post($post_id);
    $title = $queried_post->post_title;
    echo "<div class='row'>";
    echo "<div class='col'"
    echo "<h3 id='post-title'>".$title."</h3>";
    echo "<p>".$queried_post->post_content."</p>";

    ?>
</div>

    </div>
</div>
</div>

</body>
<?php get_footer() ?>
