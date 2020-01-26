<?php 
  $to = "site@totest.com"; 
  $sub = 'NewEmail - ' .$_POST["name_surname"]; 
  $head = "From: site@test.com"; 
  $msg='Name: '.$_POST["name_surname"]. ' Email: '.$_POST["email"].' Number: '.$_POST["phonenumber"];
  if (mail($to,$sub,$msg,$head)) 
      echo "Your Mail is sent successfully."; 
  else
      echo "Your Mail is not sent. Try Again."; 
?>