<?php
/**
 *
 */
function bp_register_query_vars($vars){
    $vars[]='trips-pagination';
    return $vars;
}
add_filter('query_vars','bp_register_query_vars');