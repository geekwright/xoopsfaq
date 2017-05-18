<?php
/*
 You may not change or alter any portion of this comment or credits of
 supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit
 authors.

 This program is distributed in the hope that it will be useful, but
 WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */
/**
 * Module: XoopsFaq
 *
 * Module Configuration file
 *
 * @package         module\xoopsfaq\initialization
 * @author          John Neill
 * @author          XOOPS Module Development Team
 * @copyright       http://xoops.org 2001-2017 &copy; XOOPS Project
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 */

defined('XOOPS_ROOT_PATH') || exit('Restricted access');

$moduleDirName = basename(__DIR__);

// Module configs
$modversion['version']             = 1.25;
$modversion['module_status']       = 'RC1';
$modversion['release_date']        = '2017/05/18';
$modversion['name']                = _MI_XOOPSFAQ_NAME;
$modversion['description']         = _MI_XOOPSFAQ_DESC;
$modversion['author']              = 'John Neill, Kazumi Ono';
$modversion['credits']             = 'The XOOPS Module Development Team, ZySpec, Mamba';
$modversion['license']             = 'GNU GPL 2.0';
$modversion['license_url']         = "www.gnu.org/licenses/gpl-2.0.html";
$modversion['official']            = 0;
$modversion['image']               = 'assets/images/slogo.png';
$modversion['dirname']             = $moduleDirName;

// About
$modversion['author_website_url']  = 'http://xoops.org';
$modversion['author_website_name'] = 'XOOPS';
$modversion['module_website_url']  = 'http://xoops.org';
$modversion['module_website_name'] = 'XOOPS';
$modversion['min_php']             = '5.3.7';
$modversion['min_xoops']           = '2.5.9';
$modversion['min_db']              = array('mysql'=>'5.0.7', 'mysqli'=>'5.0.7');
$modversion['min_admin']           = '1.2';

// Help Files
$modversion['help']                = 'page=help';
$modversion['helpsection']         = array(array('name' => _MI_XOOPSFAQ_HELP_OVERVIEW,
                                                 'link' => 'page=help'),
                                           array('name' => _MI_XOOPSFAQ_HELP_TIPS,
                                                 'link' => 'page=tips')
);

// Module Sql
$modversion['sqlfile']['mysql']    = 'sql/mysql.sql';

// Module SQL Tables
$modversion['tables']              = array('xoopsfaq_contents',
                                         'xoopsfaq_categories'
) ;

// Scripts to run upon installation or update
$modversion['onInstall']           = "include/oninstall.inc.php";
$modversion['onUpdate']            = "include/onupdate.inc.php";
//$modversion['onUninstall']         = "include/action.module.php";

// Module Admin
$modversion['hasAdmin']            = 1;
$modversion['adminindex']          = 'admin/index.php';
$modversion['adminmenu']           = 'admin/menu.php';

/*
 * Admin Menu
 * Set to:
 *    0 if you do not want to display menu generated by system module
 *    1 if you want to display menu generated by system module
 */
$modversion['system_menu']         = 1;

// Module Main
$modversion['hasMain']             = 1;

// Blocks
$modversion['blocks']              = array(array('file' => 'xoopsfaq_rand.php',
                                                 'name' => _MI_XOOPSFAQ_BNAME1,
                                          'description' => _MI_XOOPSFAQ_BNAME1_DESC,
                                            'show_func' => 'b_xoopsfaq_random_show',
                                            'edit_func' => 'b_xoopsfaq_rand_edit',
                                              'options' => '100|0',
                                             'template' => 'xoopsfaq_block_rand.tpl'),

                                           array('file' => 'xoopsfaq_recent.php',
                                                 'name' => _MI_XOOPSFAQ_BNAME2,
                                          'description' => _MI_XOOPSFAQ_BNAME2_DESC,
                                            'show_func' => 'b_xoopsfaq_recent_show',
                                            'edit_func' => 'b_xoopsfaq_recent_edit',
                                              'options' => '10|100|1|0',
                                             'template' => 'xoopsfaq_block_recent.tpl'),

                                           array('file' => 'xoopsfaq_category.php',
                                                 'name' => _MI_XOOPSFAQ_BNAME3,
                                          'description' => _MI_XOOPSFAQ_BNAME3_DESC,
                                            'show_func' => 'b_xoopsfaq_category_show',
                                            'edit_func' => 'b_xoopsfaq_category_edit',
                                              'options' => '1',
                                             'template' => 'xoopsfaq_block_category.tpl')
);

// Module Search
$modversion['hasSearch']           = 1;
$modversion['search']['file']      = 'include/search.inc.php';
$modversion['search']['func']      = 'xoopsfaq_search';

// Module Templates
$modversion["templates"]           = array(array('file' => "{$moduleDirName}_index.tpl",
                                          'description' => _MI_XOOPSFAQ_TPL_INDEX_DESC),

                                           array('file' => "{$moduleDirName}_category.tpl",
                                          'description' => _MI_XOOPSFAQ_TPL_CATEGORY_DESC)
);

// Module Comments
$modversion['hasComments']         = 1;
$modversion['comments']            = array('itemName' => 'cat_id',
                                           'pageName' => 'index.php'
);

// Module Configs
xoops_load('XoopsEditorHandler');
$editor_handler = XoopsEditorHandler::getInstance();
$editorList     = array_flip($editor_handler->getList());

$modversion['config']              = array(array('name' => 'use_wysiwyg',
                                                'title' => '_MI_XOOPSFAQ_EDITORS',
                                          'description' => '_MI_XOOPSFAQ_EDITORS_DESC',
                                             'formtype' => 'select',
                                            'valuetype' => 'text',
                                              'options' => $editorList,
                                              'default' => 'dhtmltextarea')
);
