<h3 class="column-title">Popular en tipsti</h3>

<?php
    if (function_exists('wpp_get_mostpopular')){
        wpp_get_mostpopular( 'wpp_start="<ul>"&thumbnail_width=250&thumbnail_height=150&stats_views=0&post_html="<li><a href=\'{url}\'>{thumb_img}</a> <h3><a href=\'{url}\'>{text_title}</a></h3></li>"');
    }
?>
