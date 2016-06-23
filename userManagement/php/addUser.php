<?php
/**
* Adding User to the table User
* Created By: Kumari Pallavi
* Date: 16/06/2016
**/ 
// Including the library files and all the crediantials;
require_once (__DIR__ . '\cred.php');

// Setting the field names of the table User;
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$record = $fm->createRecord('User');
console.log($fname);
$record->setField('firstName', $firstName);
$record->setField('lastName', $lastName);
$record->setField('email', $email);
$record->setField('gender', $gender);
$record->setField('address', $address);
$result = $record->commit();         
//implement error handling .
if(FileMaker::isError($result)){

	die('Error - ' . $result->getCode() . ' ' . $result->getMessage());
}
?>