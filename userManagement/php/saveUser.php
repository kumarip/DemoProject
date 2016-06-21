/**
 * Making Ajax Call to the php file
 *
 */
<?php
    $fp = fopen('addUser.php', 'w');
    fwrite($fp, json_encode($_POST['fname']));
    fwrite($fp, json_encode($_POST['lname']));
    fwrite($fp, json_encode($_POST['email']));
    fwrite($fp, json_encode($_POST['gender']));
    fwrite($fp, json_encode($_POST['address']));
    fclose($fp);
?>
    
    