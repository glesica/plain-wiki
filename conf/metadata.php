<?php

/**
 * Plain Wiki Template
 *
 * A mobile-friendly Dokuwiki template that uses Less v2.
 *
 * This file sets up configuration options.
 *
 * @link   http://wellactually.net
 * @author George Lesica <glesica@gmail.com>
 */

// whether or not to use main menu (top)
$meta['use_menu']           = array('onoff');
// name of page to use as menu, if enabled
$meta['menu_page_name']     = array('string', '_pattern' => '#[a-z0-9]*#');
// whether or not to use the footer (if disabled the license will be displayed)
$meta['use_footer']          = array('onoff');
// name of page to use as footer
$meta['footer_page_name']         = array('string', '_pattern' => '#[a-z0-9]*#');
// whether or not to use info area (boxes)
$meta['use_boxes']          = array('onoff');
// a prefix to use for box pages, box pages are then named <prefix>box<n>
// where n is an integer from 0 through max_boxes - 1
$meta['box_prefix']         = array('string', '_pattern' => '#[a-z0-9]*#');
// maximum number of boxes to bring in to a page
// the box in the lowest namespace with a given number is used
$meta['max_boxes']          = array('numeric');
?>
