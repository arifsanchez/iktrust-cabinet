
 <?php  
	$num = str_pad($user['User']['id'], 8, '0', STR_PAD_LEFT); 
	$link = Router::url("/cabinets/view_pdf",true);
	$link2 = Router::url("/cabinets/upload",true);
?>

<h3>Registration Details</h3>

<p>Dear <?php echo $user['User']['first_name']; ?> , </p>
<br><br>

 <p><h3>Welcome to IK Trust <h3></p>

<p>Your application has been successfully received. </p><br>
<p><h4> Your Register Id is WD/IK# <? echo $num; ?></h4> </p><br>
<p>Please print this form <?php echo $link ; ?> ,which contain all your details and signed . </p><br>
<p> Then,upload the form to <?php echo $link2 ; ?> for us to verify the registration </p> <br>
<p>
<br><br><hr>
<p>Your forex trading journey is about to begin. </p>

<br><br><br>
<p>If you require any clarification, please do not hesitate to contact us at support@iktrust.com </p>

<p>Kindest Regards,</p>

<p>IKTrust Customer Service </p>
