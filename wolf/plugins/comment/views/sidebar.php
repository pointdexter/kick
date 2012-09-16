<?php
/*
 * Wolf CMS - Content Management Simplified. <http://www.wolfcms.org>
 * Copyright (C) 2008-2010 Martijn van der Kleijn <martijn.niji@gmail.com>
 * Copyright (C) 2008 Philippe Archambault <philippe.archambault@gmail.com>
 *
 * This file is part of Wolf CMS. Wolf CMS is licensed under the GNU GPLv3 license.
 * Please see license.txt for the full license text.
 */

/* Security measure */
if (!defined('IN_CMS')) { exit(); }

/**
 * The Comment plugin provides an interface to enable adding and moderating page comments.
 *
 * @package Plugins
 * @subpackage comment
 *
 * @author Philippe Archambault <philippe.archambault@gmail.com>
 * @author Bebliuc George <bebliuc.george@gmail.com>
 * @author Martijn van der Kleijn <martijn.niji@gmail.com>
 * @copyright Philippe Archambault, Bebliuc George & Martijn van der Kleijn, 2008
 * @license http://www.gnu.org/licenses/gpl.html GPLv3 license
 */
?>
<p class="button"><a href="<?php echo get_url('plugin/comment/'); ?>"><img src="<?php echo COMMENT_ROOT;?>/images/comment.png" align="middle" alt="page icon" /> <?php echo __('Comments'); ?></a></p>
<p class="button"><a href="<?php echo get_url('plugin/comment/moderation/'); ?>"><img src="<?php echo COMMENT_ROOT;?>/images/moderation.png" align="middle" alt="page icon" /> <?php echo __('Moderation'); ?></a></p>
<p class="button"><a href="<?php echo get_url('plugin/comment/settings'); ?>"><img src="<?php echo COMMENT_ROOT;?>/images/settings.png" align="middle" alt="page icon" /> <?php echo __('Settings'); ?></a></p>
<p class="button"><a href="<?php echo get_url('plugin/comment/documentation/'); ?>"><img src="<?php echo COMMENT_ROOT;?>/images/documentation.png" align="middle" alt="page icon" /> <?php echo __('Documentation'); ?></a></p>