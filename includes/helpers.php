<?php

/**
 * Plain Wiki Template
 *
 * A mobile-friendly Dokuwiki template that uses Less v2.
 *
 * This file provides some helper functions.
 *
 * @link   http://wellactually.net
 * @author George Lesica <glesica@gmail.com>
 */

/**
 * Look for a page with a given name in current NS and parent NSs.
 * For example, can be used to find the lowest level menu page available.
 *
 * @author George Lesica <glesica@gmail.com>
 * @param $name - Name of the page to look for.
 * @return An ID suitable for including or false is not found.
 */
function locate_page($name) {
    global $ID;
    $ns = '';
    $path  = explode(':', $ID);
    while (count($path) > 0) {
        array_pop($path);
        $ns = implode(':', $path).':'.$name;
        if (@page_exists($ns) && @auth_quickaclcheck($ns) >= AUTH_READ) {
            // found page and have permission to read it
            return $ns;
        }
    }
    // no luck
    return false;
}

/**
 * Find all pages that are meant to be included as info boxes.
 * Search is done up the namespace tree for boxes. The first page found
 * for each number is included. So, for example, box0 in the root namespace
 * can be overridden in a lower namespace by another box0.
 *
 * @author George Lesica <glesica@gmail.com>
 * @return An array of page IDs suitable for inclusion or false.
 */
function get_boxes() {
    $boxes = array();
    $pre = tpl_getConf('box_prefix');
    $max = tpl_getConf('max_boxes');
    for ($i=0; $i<$max; $i++) {
        $b = locate_page($pre.box.$i);
        if ($b) {
            $boxes[] = $b;
        }
    }
    if (count($boxes) > 0) {
        return $boxes;
    } else {
        return false;
    }
}

?>
