<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 2015-09-22
 * Time: 10:10 PM
 */

function pr($arr) {
    $cli = (php_sapi_name() == 'cli');
    if (!$cli) echo "<pre style='font-size: 8pt; text-align: left; background-color: #ffffff;'>";
    print_r($arr);
    if (!$cli) echo "</pre>";
}


/**
 * @return string of current page's permalink
 */
function getPageClass() {

    //Get the current page name
    global $currentPage;
    $currentPage = basename($_SERVER['REQUEST_URI']);
    if($currentPage == ""){
        $currentPage = "home";
    }

    return $currentPage;

}