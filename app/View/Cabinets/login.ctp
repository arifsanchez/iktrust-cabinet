
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
	<h1 class="logintitle"><?php echo $this->Html->image('logologin.png', array('alt' => 'Trust XE Logo' , 'class' => "floatLeft animate3 fadeInRightBig" ));?>Sign in<span class="subtitle">Hello! Sign in to get you started!</span>
	</h1>
        <div class="loginwrapperinner">
            <?php echo $this->Form->create('User'); ?>
                <p class="animate4 bounceIn"><?php echo $this->Form->input("email" ,array('label' => false, 'id'=> "username", 'div' => false, 'placeholder'=>__('Email'), 'title'=>__('Email')))?></p>
                <p class="animate5 bounceIn"><?php echo $this->Form->input("password" ,array("type" => "password", 'label' => false, 'div' => false, 'id'=>"password", 'placeholder'=>__('Password'), 'title'=>__('Password')))?></p>
                <p class="animate6 bounceIn"><?php echo $this->Form->button(__('Sign In'), array('id' =>' cloginSubmitBtn', 'class' => "btn btn-danger btn-block"));?></p>
                <p class="animate7 fadeIn"><span class="icon-question-sign"></span> <?php echo $this->Html->link(' Forgot Password ', array('controller' => 'cabinets', 'action' => 'forgot_password')); ?></p>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
    <div class="loginshadow animate3 fadeInUp"></div>
    <p style="text-align:center;color:#5D5D5D"> Not registered yet? <?php echo $this->Html->link(' Register Now! ', array('controller' => 'cabinets', 'action' => 'register')); ?></p>
	
</div>

	

<script>
jQuery.noConflict();

jQuery(document).ready(function(){
	
	var anievent = (jQuery.browser.webkit)? 'webkitAnimationEnd' : 'animationend';
	jQuery('.loginwrap').bind(anievent,function(){
		jQuery(this).removeClass('animate2 bounceInDown');
	});
	
	jQuery('#username,#password').focus(function(){
		if(jQuery(this).hasClass('error')) jQuery(this).removeClass('error');
	});
	
	jQuery('#loginform button').click(function(){
		if(!jQuery.browser.msie) {
			if(jQuery('#username').val() == '' || jQuery('#password').val() == '') {
				if(jQuery('#username').val() == '') jQuery('#username').addClass('error'); else jQuery('#username').removeClass('error');
				if(jQuery('#password').val() == '') jQuery('#password').addClass('error'); else jQuery('#password').removeClass('error');
				jQuery('.loginwrap').addClass('animate0 wobble').bind(anievent,function(){
					jQuery(this).removeClass('animate0 wobble');
				});
			} else {
				jQuery('.loginwrapper').addClass('animate0 fadeOutUp').bind(anievent,function(){
					jQuery('#loginform').submit();
				});
			}
			return false;
		}
	});
});
</script>
