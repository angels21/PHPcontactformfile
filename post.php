<?php

 if(isset($_POST['submit_btn']))
 {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $department = $_POST['department'];
  $gender = $_POST['gender'];
  $message = $_POST['message'];
  $text = $firstname . "," . $lastname . "," . $email . "," . $department . "," . $gender . "," . $message . "\n";
  $filename = $firstname.$lastname;
  $fp = fopen($filename, 'a+');

    if(fwrite($fp, $text))  {
        echo 'Your details have been updated';

    }
fclose ($fp);    
}
?>