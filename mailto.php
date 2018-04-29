<?PHP
if (get_magic_quotes_gpc() || ini_get('register_globals')) 
{
  $FATAL_ERROR = 'มีการตั้งค่าที่ไม่ปลอดภัยใน php.ini';
}
if (empty($_POST['txtName']) && empty($_POST['txtEmail']) && empty($_POST['txtMessage']))
{
	echo "False"; exit();
}else{
	require_once('class.phpmailer.php');
	$SendDate = date('Y-m-d H:i:s');

	$RecUser = $_POST['txtName'];
	$RecEmail = $_POST['txtEmail'];
	$RecMessage = $_POST['txtMessage'];

	$output = '<h3>มีข้อความใหม่ ติดต่อมาจากคุณ '.$RecUser.'</h3>';
	$output .= '<strong>มาจาก : </strong>'.$RecEmail.'<br>';
	$output .= '<strong>ส่งเมื่อวันที่ : </strong>'.$SendDate.'<br>';
	$output .= '<strong>เนื้อหา : </strong>'.$RecMessage.'<br>';
	$mail = new PHPMailer();
	$mail->CharSet = 'UTF-8';
	$mail->AddReplyTo("s.ngdskills@gmail.com","Tuckk.Thatsaya");
	$mail->SetFrom('s.ngdskills@gmail.com', 'Tuckk.Thatsaya');
	$mail->AddReplyTo("s.ngdskills@gmail.com","Tuckk.Thatsaya");
	$recipients = array(
	   's.ngdskills@gmail.com' => 'Akkarat T',
	   'tuckk.thatsaya@gmail.com' => 'Thatsaya S',
	);
	foreach($recipients as $email => $name)
	{
	   $mail->AddAddress($email, $name);
	}
	$mail->Subject    = "มีข้อความใหม่";
	$mail->MsgHTML($output);
	if(!$mail->Send()) {
	  echo "False" . $mail->ErrorInfo;
	} else {
	  echo "True";
	}
}
?>