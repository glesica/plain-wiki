<?php

/**
 * Plain Wiki Template
 *
 * A mobile-friendly Dokuwiki template that uses Less v2.
 *
 * This file handles the page footer.
 *
 * @link   http://wellactually.net
 * @author George Lesica <glesica@gmail.com>
 */

require_once(dirname(__FILE__).'/helpers.php');
// get footer page
$use_footer = tpl_getConf('use_footer');
$footer_page = false;
if ($use_footer) {
    $footer_page = locate_page(tpl_getConf('footer_page_name'));
}
?>

<div id="__footer">
    <div class="content">
        <?php
        // include the footer page contents if option is set
        // and page exists, otherwise include the license
        if ($use_footer and $footer_page) {
            tpl_include_page($footer_page);
        } else {
            tpl_license($img='');
        }
        ?>
    </div>
    <?php tpl_indexerWebBug(); ?>
</div>
