<?php

$message_sent = false;
if(isset($_POST['email']) && $_POST['email'] != ' ') {

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $userSubject = $_POST['subject'];
        $userMessage = $_POST['message'];

        $to = "sidrouth@gmail.com";
        $body = "";

        $body .= "From: ".$userName. "\r\n"; 
        $body .= "E-mail: ".$userEmail. "\r\n"; 
        $body .= "Subject: ".$userSubject. "\r\n"; 
        $body .= "Message: ".$userMessage. "\r\n"; 

        mail($to, $userSubject, $body);

        $message_sent = true;
    }
    else{
        $invalid_class_name = "form-invalid";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Feel free to contact me !!</h3>
        <div class="container">
            <div class="contact-left">
                <h3>Send a Mail</h3>
                <form class="my-form" action="index.php" method="POST">
                    <div class="details">
                        <div class="name s1">
                            <label>Name : </label>
                            <input type="text" placeholder="John Doe" name="name" class="form-control">
                        </div>
                        <div class="email s1">
                            <label>E-mail : </label>
                            <input type="email" placeholder="example@domain.com" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="content">
                        <div class="subject s1">
                            <label>Subject : </label>
                            <input type="text" placeholder="subject" name="subject" class="form-control">
                        </div>
                        <div class="message">
                            <label>Message Content :</label>
                            <textarea rows="5" placeholder="what do you want to talk about ?" name="message"></textarea>
                        </div>
                    </div>
                    <button type="submit"> Send Message</button>
                </form>
            </div>
            <div class="contact-right">
                <h3>Contact Information</h3>
                <table>
                    <tr>
                        <td>E-mail</td>
                        <td>sidrouth@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>+91-9007160722</td>
                    </tr>
                </table>
            </div>
        </div>
</body>
</html>