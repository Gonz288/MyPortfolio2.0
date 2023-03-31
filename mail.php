<?php 
    if(isset($_POST['submit'])){
        if(!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['issue']) && !empty($_POST['message'])){
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $issue = $_POST['issue'];
            $message = $_POST['message'];
            
            $header = 'From: '. $email. "\r\n";
            $header .= 'Reply-To'. $email. "\r\n";
            $header .= 'X-Mailer: PHP/'. phpversion() . "\r\n";

            $destination = 'gonza_gonzalez28@hotmail.com';

            $mail = @mail($destination, $issue, $message, $header);
            if($mail){
                echo "<script>alert('The email has been sent successfully'); </script>";
                header('Location:index.html');
            }
        }
    }
?>