<?php

/**
 * Plain Wiki Template
 *
 * A mobile-friendly Dokuwiki template that uses Less v2.
 *
 * This file handles the info area (boxes at the bottom).
 *
 * @link   http://wellactually.net
 * @author George Lesica <glesica@gmail.com>
 */

require_once(dirname(__FILE__).'/helpers.php');
// get boxes
$use_boxes = tpl_getConf('use_boxes');
$box_pages = false;
if ($use_boxes) {
    $box_pages = get_boxes();
}

// check if we are in admin or edit
$in_admin = ($ACT == 'admin');
$in_edit = ($ACT == 'edit');
$in_login = ($ACT == 'login');

// check if we're off the main page
$off_page = ($in_admin or $in_edit or $in_login);

if ($use_boxes and $box_pages and !$off_page) {
?>
<div id="__infobar">
    <?php
    foreach ($box_pages as $page) {
    ?>
    <div class="box">
        <div class="boxcontent">
            <?php tpl_include_page($page); ?>
        </div>
    </div>
    <?php
    }
    ?>
    <div style="clear:both;"></div>
</div>
<?php
}
?>
