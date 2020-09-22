<?php
$type = get_post_meta( get_the_ID(), 'picture_type', true);
$size = get_post_meta( get_the_ID(), 'size', true);
?>
<hr>
    <?php the_title(); ?><br>
    <?php // the_meta(); ?>
    <?=$type?><br>
    <?=$size?><br><br>
    <?php
        echo get_the_post_thumbnail(get_the_ID(), 'picture-slider');
    ?>

<hr>