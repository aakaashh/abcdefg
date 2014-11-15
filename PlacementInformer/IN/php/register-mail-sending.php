<?php
// In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
// of $_FILES.
function sendvmail($usn,$name,$email,$code)
{
	require_once('sendmail2people.php');
echo 'here';
$to=$email;

// Your subject
$subject="Activation of Account for Placements in RVCE";

// From
//$header="Verification of your account at Placement Informer";

// Your message
$message="A confirmation link is present below.\r\n";
$message.="<a href='http://localhost/abcdefg/PlacementInformer/IN/signup.php?passkey='".$code."'>Click on this link to activate your account </a>\r\n";
$message.="http://localhost/abcdefg/PlacementInformer/IN/signup.php?passkey=$code";


    echo sendmail($email,'Placement Informer',$subject,$message);

// send email
//$sentmail = mail($to,$subject,$message,$header);
}

?>