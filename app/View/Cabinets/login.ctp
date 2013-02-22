<style>
img.floatLeft { 
    float: left;
    margin-right: 10px;
    width: 43px;

}
</style>
<div class="loginwrapper">
	<div class="loginwrap zindex100 animate2 bounceInDown">
	<h1 class="logintitle"><?php echo $this->Html->image('logologin.png', array('alt' => 'Trust XE Logo' , 'class' => "floatLeft animate3 fadeInRightBig" ));?>Sign in<span class="subtitle">Hello! Sign in to get you started!</span></h1>
        <div class="loginwrapperinner">
            <form id="loginform" action="dashboard.html" method="post">
                <p class="animate4 bounceIn"><input type="text" id="username" name="username" placeholder="Username" /></p>
                <p class="animate5 bounceIn"><input type="password" id="password" name="password" placeholder="Password" /></p>
                <p class="animate6 bounceIn"><button class="btn btn-danger btn-block">Submit</button></p>
                <p class="animate7 fadeIn"><a href=""><span class="icon-question-sign icon-white"></span> Forgot Password?</a></p>
            </form>
        </div><!--loginwrapperinner-->
    </div>
    <div class="loginshadow animate3 fadeInUp"></div>
</div><!--loginwrapper-->


