<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo Configure::read('Application.name') ?>IK Trust | <?php echo !empty($title_for_layout) ? $title_for_layout : ''; ?></title>


 <?php 
 		echo $this->Html->meta('icon');

		

	  echo $this->fetch('meta');
	  echo $this->fetch('css');
	  echo $this->fetch('script');
 		
      echo $this->Html->css('style.default.css');
      echo $this->Html->css('prettify.css');
      echo $this->Html->css('bootstrap-fileupload.min.css');
      echo $this->Html->css('bootstrap-timepicker.min.css');
      echo $this->Html->script('prettify.js');
      echo $this->Html->script('jquery-1.9.1.min.js');
      echo $this->Html->script('jquery-ui-1.9.2.min.js');
      echo $this->Html->script('jquery-migrate-1.1.1.min.js');
      echo $this->Html->script('bootstrap.min.js');
      echo $this->Html->script('jquery.uniform.min.js');
      echo $this->Html->script('jquery.validate.min.js');
      //echo $this->Html->script('custom.js');
      echo $this->Html->script('jquery.validate.min.js');
      echo $this->Html->script('jquery.tagsinput.min.js');
      echo $this->Html->script('jquery.autogrow-textarea.js');
      echo $this->Html->script('ui.spinner.min.js');
      echo $this->Html->script('jquery.tagsinput.min.js');
      echo $this->Html->script('chosen.jquery.min.js');
      echo $this->Html->script('jquery.cookie.js');
    //  echo $this->Html->script('custom.js');
     // echo $this->Html->script('forms.js');
      echo $this->Html->script('bootstrap-fileupload.min.js');
      echo $this->Html->script('bootstrap-timepicker.min.js');
?>


<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->


</head>

<body>

<div class="mainwrapper">
	
    <!-- START OF LEFT PANEL -->
    <?php echo $this->element('sidebar_register'); ?>
    <!-- END OF LEFT PANEL -->
    
    <!-- START OF RIGHT PANEL -->
    <div class="rightpanel">
    	<div class="headerpanel">
        	<a href="" class="showmenu"></a>
            
            <div class="headerright">
            	<!--dropdown-->
                                  
                
                
    			<!--div class="dropdown userinfo">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="/page.html">
                    	
				<?php echo __('Hi,').' '.h($var['User']['first_name']).' '.h($var['User']['last_name']); ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="editprofile.html"><span class="icon-edit"></span> Edit Profile</a></li>
                        <li><a href=""><span class="icon-wrench"></span> Account Settings</a></li>
                        <li><a href=""><span class="icon-eye-open"></span> Privacy Settings</a></li>
                        <li class="divider"></li>
                        <li><?php echo $this->Html->link('<span class="icon-off"></span> Sign Out',array('controller' => '', 'action' => 'logout'),array('escape' => false)); ?></li>         
                    </ul>
                </div--><!--dropdown-->
    		
            </div><!--headerright-->
            
    	</div><!--headerpanel-->
        <div class="breadcrumbwidget">
        	<!--ul class="skins">
                <li><a href="default" class="skin-color default"></a></li>
                <li><a href="orange" class="skin-color orange"></a></li>
                <li><a href="dark" class="skin-color dark"></a></li>
                <li>&nbsp;</li>
                <li class="fixed"><a href="" class="skin-layout fixed"></a></li>
                <li class="wide"><a href="" class="skin-layout wide"></a></li>
            </ul--><!--skins-->
        	<!--ul class="breadcrumb">
                <li><a href="dashboard.html">Home</a> <span class="divider">/</span></li>
                <li class="active">Dashboard</li>
            </ul-->
        </div><!--breadcrumbwidget-->

        <!--Kandungan dalam-->
        <?php echo $this->Session->flash();?>
        <?php echo $this->fetch('content'); ?>
        <!--Tamat kandungan dalam-->

    </div><!--mainright-->
    <!-- END OF RIGHT PANEL -->
    
    <div class="clearfix"></div>
    
   
   <!--footer-->
   <?php echo $this->Session->flash();?>
   <?php echo $this->element('footer'); ?>
   <!-- end footer-->
</div><!--mainwrapper-->
</body>
</html>
