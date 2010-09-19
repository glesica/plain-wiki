<?php

/**
 * Plain Wiki Template
 *
 * A mobile-friendly Dokuwiki template that uses Less v2.
 *
 * This file handles the header, site title and main menu.
 *
 * @link   http://wellactually.net
 * @author George Lesica <glesica@gmail.com>
 */

require_once(dirname(__FILE__).'/helpers.php');
// get menu page
$use_menu = tpl_getConf('use_menu');
$menu_page = false;
if ($use_menu) {
    $menu_page = locate_page(tpl_getConf('menu_page_name'));
}
?>
<?php html_msgarea(); ?>
<div id="__header">
    <div class="content">
        <div id="__sitetitle"><?php echo strip_tags($conf['title']); ?></div>
        <?php
        // include the menu page contents if option is set
        // and page exists, otherwise skip
        if ($use_menu and $menu_page) {
        ?>
        <div id="__sitemenu">
            <?php tpl_include_page($menu_page); ?>
        </div>
        <?php
        }
        ?>
    </div>
    <div style="clear:both;"></div>
</div>
