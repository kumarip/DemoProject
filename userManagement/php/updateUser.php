
<?php
/**
* Updating User to the table User
* Created By: Kumari Pallavi
* Date: 17/06/2016
**/
// Including the library files and all the crediantials;
require_once (__DIR__ . '\cred.php');
$userId = $_POST['userId'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$record = $fm->newEditCommand('User',$userId);
$record->setField('firstName',$firstName );
$record->setField('lastName', $lastName);
$record->setField('email', $email);
$record->setField('gender', $gender);
$record->setField('address', $address);
$result = $record->execute();


?>