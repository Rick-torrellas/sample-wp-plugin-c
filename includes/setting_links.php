<?php
function setting_links_register() {
    $path = plugin_basename(dirname(__FILE__,2)) . '/sample-wp-plugin-c.php';
    add_filter("plugin_action_links_$path" ,'setting_links');
}
function setting_links($links) {
    $template = "admin.php";
    $page_name = PAGE_SLUG;
    $href = "$template?page=$page_name";
    $settings_link = "<a href='$href'>Configuracion</a>";
    array_push($links,$settings_link);
    return $links;
}