<?php

function captivegreen_preprocess_html(&$vars) {
    $name = variable_get('site_name', 'Drupal');
    $slogan = variable_get('site_slogan', '');
    $vars['head_title_array']['name'] = $name.$slogan;
    $vars['head_title_array']['slogan'] = null;
    if(isset($vars['head_title_array']['title'])) {
        $vars['head_title'] = $vars['head_title_array']['title'] . " | " . $vars['head_title_array']['name'];
    } else {
        $vars['head_title'] = $vars['head_title_array']['name'];
    }
}
