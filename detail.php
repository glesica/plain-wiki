<?php
/**
 * Plain Wiki Template
 *
 * A mobile-friendly Dokuwiki template that uses Less v2.
 *
 * This is the media detail file.
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
		<!-- dokuwiki head -->
		<?php tpl_metaheaders(); ?>
		<?php require_once(dirname(__FILE__).'/includes/meta.php'); ?>
		<title>
		    <?php tpl_pagetitle(); ?> [<?php echo strip_tags($conf['title']); ?>]
	    </title>
	</head>
	<body>
	    <!-- header -->
        <?php require_once(dirname(__FILE__).'/includes/header.php'); ?>
        <!-- body -->
        <div id="__body">
            <!-- page menu -->
            <?php require_once(dirname(__FILE__).'/includes/pagemenu.php'); ?>
            <!-- content -->
	        <div id="__content" class="detail">
	            <div class="dokuwiki">
                    <h1><?php echo hsc(tpl_img_getTag('IPTC.Headline',$IMG))?></h1>
                    <div class="image">
                        <?php tpl_img(); ?>
                        <div class="caption">
                            <?php print nl2br(hsc(tpl_img_getTag('simple.title'))); ?>
                        </div>
                    </div>
                    <div class="tags">
                        <dl>
                            <?php
                            $t = tpl_img_getTag('Date.EarliestTime');
                            if($t) print '<dt>'.$lang['img_date'].':</dt><dd>'.dformat($t).'</dd>';

                            $t = tpl_img_getTag('File.Name');
                            if($t) print '<dt>'.$lang['img_fname'].':</dt><dd>'.hsc($t).'</dd>';

                            $t = tpl_img_getTag(array('Iptc.Byline','Exif.TIFFArtist','Exif.Artist','Iptc.Credit'));
                            if($t) print '<dt>'.$lang['img_artist'].':</dt><dd>'.hsc($t).'</dd>';

                            $t = tpl_img_getTag(array('Iptc.CopyrightNotice','Exif.TIFFCopyright','Exif.Copyright'));
                            if($t) print '<dt>'.$lang['img_copyr'].':</dt><dd>'.hsc($t).'</dd>';

                            $t = tpl_img_getTag('File.Format');
                            if($t) print '<dt>'.$lang['img_format'].':</dt><dd>'.hsc($t).'</dd>';

                            $t = tpl_img_getTag('File.NiceSize');
                            if($t) print '<dt>'.$lang['img_fsize'].':</dt><dd>'.hsc($t).'</dd>';

                            $t = tpl_img_getTag('Simple.Camera');
                            if($t) print '<dt>'.$lang['img_camera'].':</dt><dd>'.hsc($t).'</dd>';

                            $t = tpl_img_getTag(array('IPTC.Keywords','IPTC.Category','xmp.dc:subject'));
                            if($t) print '<dt>'.$lang['img_keywords'].':</dt><dd>'.hsc($t).'</dd>';
                            ?>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <?php require_once(dirname(__FILE__).'/includes/footer.php'); ?>
	</body>
</html>
