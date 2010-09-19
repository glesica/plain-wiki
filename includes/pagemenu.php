<?php

/**
 * Plain Wiki Template
 *
 * A mobile-friendly Dokuwiki template that uses Less v2.
 *
 * This file handles the page menu links (edit page, login, etc.).
 *
 * @link   http://wellactually.net
 * @author George Lesica <glesica@gmail.com>
 */

?>
<div id="__pagemenu">
    <ul>
        <li><?php tpl_actionlink('edit'); ?></li>
        <li><?php tpl_actionlink('history'); ?></li>
        <li><?php tpl_actionlink('subscribe'); ?></li>
        <li><?php tpl_actionlink('login'); ?></li>
        <li><?php tpl_actionlink('admin'); ?></li>
    </ul>
</div>
