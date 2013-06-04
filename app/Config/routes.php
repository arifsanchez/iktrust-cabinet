<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/',  array('plugin' => '', 'controller' => 'cabinets', 'action' => 'login'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	
	Router::parseExtensions('pdf');
	
	App::uses('SlugRoute', 'Usermgmt.routes');
	Router::connect('/:slug', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'viewProfile'), array('routeClass' => 'SlugRoute'));
	Router::connect('/login/*', array('plugin' => '', 'controller' => 'cabinets', 'action' => 'login'));
	Router::connect('/logout', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'logout'));
	Router::connect('/forgotPassword', array('controller' => 'cabinets', 'action' => 'forgot_password'));
	Router::connect('/emailVerification', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'emailVerification'));
	Router::connect('/activatePassword/*', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'activatePassword'));
	Router::connect('/register', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'register'));
	Router::connect('/changePassword', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'changePassword'));
	Router::connect('/changeUserPassword/*', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'changeUserPassword'));
	Router::connect('/addUser', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'addUser'));
	Router::connect('/editUser/*', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'editUser'));
	Router::connect('/logoutUser/*', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'logoutUser'));
	Router::connect('/viewUser/*', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'viewUser'));
	Router::connect('/userVerification/*', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'userVerification'));
	Router::connect('/allUsers', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'index'));
	Router::connect('/dashboard', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'dashboard'));
	Router::connect('/permissions', array('plugin' => 'usermgmt', 'controller' => 'user_group_permissions', 'action' => 'index'));
	Router::connect('/update_permission', array('plugin' => 'usermgmt', 'controller' => 'user_group_permissions', 'action' => 'update'));
	Router::connect('/accessDenied', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'accessDenied'));
	Router::connect('/myprofile', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'myprofile'));
	Router::connect('/allGroups', array('plugin' => 'usermgmt', 'controller' => 'user_groups', 'action' => 'index'));
	Router::connect('/addGroup', array('plugin' => 'usermgmt', 'controller' => 'user_groups', 'action' => 'addGroup'));
	Router::connect('/editGroup/*', array('plugin' => 'usermgmt', 'controller' => 'user_groups', 'action' => 'editGroup'));
	Router::connect('/allSettings', array('plugin' => 'usermgmt', 'controller' => 'user_settings', 'action'   => 'index'));
	Router::connect('/editSetting/*', array('plugin' => 'usermgmt', 'controller' => 'user_settings', 'action' => 'editSetting'));
	Router::connect('/editProfile', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'editProfile'));
	Router::connect('/usersOnline', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'online'));
	Router::connect('/deleteCache', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'deleteCache'));
	Router::connect('/viewUserPermissions/*', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'viewUserPermissions'));
	Router::connect('/sendMails/*', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'sendMails'));
	Router::connect('/searchEmails/*', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'searchEmails'));
	Router::connect('/contactUs', array('plugin' => 'usermgmt', 'controller' => 'user_contacts', 'action' => 'contactUs'));
	Router::connect('/allContacts', array('plugin' => 'usermgmt', 'controller' => 'user_contacts', 'action' => 'index'));
	Router::connect('/allPages', array('plugin' => 'usermgmt', 'controller' => 'contents', 'action' => 'index'));
	Router::connect('/addPage', array('plugin' => 'usermgmt', 'controller' => 'contents', 'action' => 'addPage'));
	Router::connect('/editPage/*', array('plugin' => 'usermgmt', 'controller' => 'contents', 'action' => 'editPage'));
	Router::connect('/viewPage/*', array('plugin' => 'usermgmt', 'controller' => 'contents', 'action' => 'viewPage'));
	Router::connect('/contents/*', array('plugin' => 'usermgmt', 'controller' => 'contents', 'action' => 'content'));
	Router::connect('/myaccount/*', array('plugin' => '', 'controller' => 'cabinets', 'action' => 'myaccount'));

	Router::connect('/mybalance/*', array('plugin' => '', 'controller' => 'cabinets', 'action' => 'check_balance'));
	Router::connect('/quotes/*', array('plugin' => '', 'controller' => 'mt4_prices', 'action' => 'quotes'));
	Router::connect('/affilliate/*', array('plugin' => '', 'controller' => 'cabinets', 'action' => 'affilliate'));
	Router::connect('/top_traders/*', array('plugin' => '', 'controller' => 'mt4_users', 'action' => 'top_traders'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
 
 
	#CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
