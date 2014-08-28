<?php 
// check if fields passed are empty 
 
 if(empty($_POST['contact-adress'])  ||
    empty($_POST['emailMsg'])||   
    !filter_var($_POST['contact-adress'],FILTER_VALIDATE_EMAIL))    
  {     
       echo "No arguments Provided!";   return false;    
  } 
     
  $email_address = $_POST['contact-adress']; 
  $message = $_POST['emailMsg'];      
 
 // create email body and send it    
 $to = 'skrzynka_magdy@o2.pl; art2p@o2.pl'; 
 // put your email 
 $email_subject = "Contact form submitted by:  $name"; $email_body = "You have received a new message. \n\n".                 
                   " Here are the details:\n".                  
                   "Email: $email_address\n Message \n $message"; 
 $headers = "From: art2p@o2.pl\n"; 
 $headers .= "Reply-To: $email_address";     
 
 mail($to,$email_subject,$email_body,$headers); return true;             
?>