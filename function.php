<?php
function the_breadcrumb() {
    echo 'You are here: ';
    if (!is_front_page()) {
        echo '<a href="index.php';
        echo get_option('home');
        echo '">Home';
 echo "</a> » ";
        if (is_category() || is_single()) {
            the_category(' ');
            if (is_single()) {
                echo " » ";
                the_title();
            }
        } elseif (is_page()) {
            echo the_title();
        }
    }
    else {
        echo 'Home';
    }
}
?>
