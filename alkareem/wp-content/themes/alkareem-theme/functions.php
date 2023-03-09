<?php
function short_content($word_number=10) {
    $content = get_the_content();
    $excerpt = wp_trim_words( $content, $word_number, '...' );
    echo $excerpt;
  }