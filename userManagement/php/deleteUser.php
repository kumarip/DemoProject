
<?php
/***********************************
* Deleting User from the table User
* Created By: Kumari Pallavi
* Date: 16/06/2016
************************************/ 

require_once (__DIR__ . '\cred.php');

$userId = $_POST['userId'];
$deleteRecord = $fm->newDeleteCommand('User', $userId);
$result = $deleteRecord->execute();
?>