<?php get_header() ?>

<body>

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
                    $post_id = 22;
                    $queried_post = get_post($post_id);
                    $title = $queried_post->post_title;
                    echo "<div class='row'>";
                    echo "<div class='col-md-3'>";
                    echo "<h3 id='post-title'>".$title."</h3>";
                    echo "<p>".$queried_post->post_content."</p>";
                    echo "</div>";
                    $post_id = 23;
                    $queried_post = get_post($post_id);
                    $title = $queried_post->post_title;
                    echo "<div class='col-md-3'>";
                    echo "<h3 id='post-title'>".$title."</h3>";
                    echo "<p>".$queried_post->post_content."</p>";
                    echo "</div>";
                    $post_id = 25;
                    $queried_post = get_post($post_id);
                    $title = $queried_post->post_title;
                    echo "<div class='col-md-3'>";
                    echo "<h3 id='post-title'>".$title."</h3>";
                    echo "<p>".$queried_post->post_content."</p>";
                    echo "</div>";
                    $post_id = 27;
                    $queried_post = get_post($post_id);
                    $title = $queried_post->post_title;
                    echo "<div class='col-md-3'>";
                    echo "<h3 id='post-title'>".$title."</h3>";
                    echo "<p>".$queried_post->post_content."</p>";
                    echo "</div>";
                    echo "</div>";
                ?>
            </div>
    </div>
</div>
</div>

</body>
<?php get_footer() ?>
