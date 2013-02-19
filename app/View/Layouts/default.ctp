<?php
/**
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
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'IKT [CABINET]');
?>
<!DOCTYPE html>
<html>
<head>
	<script language="javascript">
		var urlForJs="<?php echo SITE_URL ?>";
    </script>

	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

		echo $this->Html->css('/usermgmt/css/umstyle.css?q='.QRDN);
	    echo $this->Html->script('/usermgmt/js/jquery-1.7.2.min.js');
	    echo $this->Html->script('/usermgmt/js/umscript.js?q='.QRDN);
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, '/'); ?>&nbsp;|&nbsp;<?php if ($this->UserAuth->isLogged()) { echo $this->Html->link('Dashboard', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'dashboard')); } else { echo $this->Html->link('Login', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'login')); }; ?></h1>
		</div>
		<div id="content">

			<div class="messageHolder"><?php echo $this->Session->flash(); ?></div>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
