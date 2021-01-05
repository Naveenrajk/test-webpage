<?php
// Variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];

// check input fields
if (empty($name) || empty($email) || empty($message))
{
    echo "Please fill all the fields";
}
else 
{
 mail("cavecoder.dev@gmail.com", "Cavecoder Web Message", $message , "From: $name <$email>");
    
   echo "<script type='text/javascript'>alert('your message sent successfully');
         window.history.log(-1);
         </script>";
}
?>
