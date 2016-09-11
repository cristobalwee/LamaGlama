<?php 
if(isset($_POST['submit'])){
    $to = "cristobal.wee@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $comment = $_POST['message']
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = "Name: " . $first_name . "\nEmail: " . $from "\nMessage: " . $comment;
    $message2 = "Hello there " . $first_name. ", this is Cristobal Grana, thank you for your interest and for visiting LamaGlama.";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header('Location:thankyou.html');
    // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
