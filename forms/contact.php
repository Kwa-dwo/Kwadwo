
<?php
  $subject = "my subject";
  $to = "francis.ansong@gmail.com";
  $message1 = 'Name:'.$_POST['name']."\n";
  $message1 .= "email:".$_POST['email']."\n";
  $message1 .= "Message:".$_POST['message']."\n";
  if (isset($_POST['send'])) {
       echo 'sent: ';
       echo $name;
       echo $email;
       echo $message;
       @mail($to,$subject,$message1);
    }
  
?>

