<script>
    var apiBaseUrl = '<?php
        echo get_site_url() . '/' . vp_rest_get_url_prefix() . '/versionpress' ;
    ?>';
</script>

<?php

wp_enqueue_style('versionpress_gui_style', plugins_url('../public/gui/app.css', __FILE__));
wp_enqueue_script('versionpress_gui_script', plugins_url('../public/gui/app.js', __FILE__));