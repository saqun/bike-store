<?php
  // http://form.guide/email-form/php-form-to-email.html
  // http://php.net/manual/en/function.mail.php
  // Mail config https://www.phpflow.com/php/how-to-send-email-from-localhost-using-php/
  
  /* https://stackoverflow.com/questions/5773288/configure-wamp-server-to-send-email
   * https://stackoverflow.com/questions/7820225/how-to-send-email-from-local-wamp-server-using-php
   * Connect to https://www.glob.com.au/sendmail/ and download sendmail.zip
   * unzip it nd install in c:\wamp\sendmail
   * Install Fake Sendmail (download sendmail.zip). Then configure C:\wamp\sendmail\sendmail.ini:
   * smtp_server=smtp.gmail.com
   * smtp_port=465
   * auth_username=user@gmail.com
   * auth_password=your_password
   * The above will work against a Gmail account. And then configure php.ini:
   * 
   * sendmail_path = "C:\wamp\sendmail\sendmail.exe -t"
   * Now, restart Apache, and that is basically all you need to do.
  */
  
  $fname = $_POST["first_name"];
  $lname = $_POST["last_name"];
  $visitor_email = $_POST["email_address"];
  $message = $_POST['subject'];
 // echo "$message";
  
  $message = str_replace("\n", "<br>", $message);
 // echo "<br> <br> $message";
   
  $to = "sakun_yim@yahoo.com";
  $email_from = "hok48@free.fr";

  $email_subject = "New Form submission";
  
    $encoding = "utf-8";

    // Preferences for Subject field
    $subject_preferences = array(
        "input-charset" => $encoding,
        "output-charset" => $encoding,
        "line-length" => 76,
        "line-break-chars" => "\r\n"
    );

    // Mail header
    $header = "Content-type: text/html; charset=".$encoding." \r\n";
    $header .= "From: ".$lname." <".$email_from."> \r\n";
    $header .= "Reply-To: $visitor_email \r\n";
    $header .= "MIME-Version: 1.0 \r\n";
    $header .= "Content-Transfer-Encoding: 8bit \r\n";
	// $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $header .= "Date: ".date("r (T)")." \r\n";
    $header .= iconv_mime_encode("Subject", $email_subject, $subject_preferences);
	
  
  $email_body = "You have received a new message from the user $fname $lname.\n";
  $email_body .= "Here is the message:\r\n $message";
							
  if (@mail($to,$email_subject,$email_body,$header)) {
	  echo 'Successfully sent email. <a href="index.php"> Home </a>';
  } else {
	  echo 'Failed to send email. <a href="index.php"> Home </a>';
  }

 ?>
 