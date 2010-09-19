<?php

/**
 * Plain Wiki Template
 *
 * A mobile-friendly Dokuwiki template that uses Less v2.
 *
 * This is the main template file.
 *
 * You should leave the doctype at the very top - It should
 * always be the very first line of a document.
 *
 * @link   http://wellactually.net
 * @author George Lesica <glesica@gmail.com>
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>
		    <?php tpl_pagetitle(); ?> [<?php echo strip_tags($conf['title']); ?>]
	    </title>
		<!-- dokuwiki head -->
		<?php tpl_metaheaders(); ?>
		<?php require_once(dirname(__FILE__).'/includes/meta.php'); ?>
		<?php require_once(dirname(__FILE__).'/includes/scripts.php'); ?>
	</head>
	<body>
	    <!-- header -->
        <?php require_once(dirname(__FILE__).'/includes/header.php'); ?>
        <!-- body -->
        <div id="__body">
            <!-- page menu -->
            <?php require_once(dirname(__FILE__).'/includes/pagemenu.php'); ?>
            <!-- content -->
	        <div id="__content">
	            <div class="dokuwiki">
	                <?php tpl_content(); ?>
	            </div>
	            <div style="clear:both;"></div>
            </div>
	        <!-- info bar -->
	        <?php require_once(dirname(__FILE__).'/includes/infobar.php'); ?>
        </div>
        <!-- footer -->
        <?php require_once(dirname(__FILE__).'/includes/footer.php'); ?>
	</body>
</html>
