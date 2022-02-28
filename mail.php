<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
           Email: <input type="text" name="email"> <br/><br/>
           Subjects: <input type="text" name="subject"> <br/><br/>
           Message: <br/>
           <textarea name="message" rows="15" cols="40"></textarea><br/><br/>
           <input type="esubmit" name="submit">
        </form>
    </body>
</html>

<?php

$to = "Hello@gmail.com";
$subject = "Test Mail";
$message ="Hello, This is my Email";
$from = "Hello@gmail.net";
$header = "From : $from";

mail($to, $subject, $message, $header);

echo" Mail Sent.";




?>