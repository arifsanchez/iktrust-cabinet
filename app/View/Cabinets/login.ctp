
<style>
img.floatLeft { 
    float: left;
    margin-right: 10px;
    width: 43px;

}
</style>

<?php echo $this->Html->script(array('/usermgmt/js/ajaxValidation.js?q='.QRDN)); ?>
<?php echo $this->element('Usermgmt.ajax_validation', array("formId" => "cloginForm", "submitButtonId" => "cloginSubmitBtn")); ?>

<div class="loginwrapper">
	<div class="loginwrap zindex100 animate2 bounceInDown">
	<h1 class="logintitle"><?php echo $this->Html->image('logologin.png', array('alt' => 'Trust XE Logo' , 'class' => "floatLeft animate3 fadeInRightBig" ));?>Sign in<span class="subtitle">Hello! Sign in to get you started!</span></h1>
        <div class="loginwrapperinner">
            <?php echo $this->Form->create('User', array('url'=>array('controller' => 'users', 'action' => 'login', 'plugin'=>'usermgmt'), 'id'=>'cloginForm')); ?>
                <p class="animate4 bounceIn"><?php echo $this->Form->input("email" ,array('label' => false, 'id'=>"username", 'div' => false, 'placeholder'=>__('Email / Username'), 'title'=>__('Email / Username')))?></p>
                <p class="animate5 bounceIn"><?php echo $this->Form->input("password" ,array("type"=>"password", 'label' => false,'div' => false, 'id'=>"password", 'placeholder'=>__('Password'), 'title'=>__('Password')))?></p>
                <p class="animate6 bounceIn"><?php echo $this->Form->button(__('Sign In'), array('id'=>'cloginSubmitBtn', 'class'=>"btn btn-danger btn-block"));?></p>
                <p class="animate7 fadeIn"><a href="#"><span class="icon-question-sign icon-white"></span> Forgot Password?</a></p>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
    <div class="loginshadow animate3 fadeInUp"></div>
</div>


<?php //echo $this->Html->script(array('/usermgmt/js/ajaxValidation.js?q='.QRDN)); ?>
<?php //echo $this->element('Usermgmt.ajax_validation', array("formId" => "cloginForm", "submitButtonId" => "cloginSubmitBtn")); ?>
<!--div id="umLogin">
	<div class='title'><?php echo __('Sign In');?></div>
	<?php echo $this->Form->create('User', array('url'=>array('controller' => 'users', 'action' => 'login', 'plugin'=>'usermgmt'), 'id'=>'cloginForm')); ?>
	<div class="umstyle4"><?php echo $this->Form->input("email" ,array('label' => false,'div' => false,'class'=>"umstyle5", 'placeholder'=>__('Email / Username'), 'title'=>__('Email / Username')))?></div>
	<div class="umstyle4"><?php echo $this->Form->input("password" ,array("type"=>"password", 'label' => false,'div' => false,'class'=>"umstyle5", 'placeholder'=>__('Password'), 'title'=>__('Password')))?></div>
	<?php if(!isset($this->request->data['User']['remember'])) { $this->request->data['User']['remember']=true; } ?>
	<div class="umstyle4"><?php echo $this->Form->input("remember" ,array("type"=>"checkbox", 'label' => false,'div' => false, 'title'=>__('Remember Me')))?><?php echo __('Remember Me');?></div>
	<div class="umstyle4"><?php echo $this->Form->button(__('Sign In'), array('id'=>'cloginSubmitBtn', 'class'=>"btn btn-danger btn-block"));?></div>
	<?php echo $this->Form->end(); ?>
	<div  align="left"><?php echo $this->Html->link(__("Register"),"/register",array("class"=>"style30")) ?></div>
	<div  align="left"><?php echo $this->Html->link(__("Forgot Password?"),"/forgotPassword",array("class"=>"style30")) ?></div>
	<div  align="left"><?php echo $this->Html->link(__("Email Verification"),"/emailVerification",array("class"=>"style30")) ?></div>
</div-->
