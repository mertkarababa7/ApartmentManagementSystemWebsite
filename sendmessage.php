<?php

if (isset($_POST['signUp'])) {

          $message = 'Message Sent.';
    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('homepage.php');
    </SCRIPT>";
}
?>


