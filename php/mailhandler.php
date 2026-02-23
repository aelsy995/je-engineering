<?php 
if(isset($_POST['submit'])){
    $to = "superagroengine@gmail.com"; // this is your Email address
    $from = $_POST['Email']; // this is the sender's Email address
    $Name = $_POST['Name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $Message = $Name . " " . " wrote the following:" . "\n\n" . $_POST['Message'];
    $Message2 = "Here is a copy of your message " . $Name . "\n\n" . $_POST['Message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$Message,$headers);
    mail($from,$subject2,$Message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
