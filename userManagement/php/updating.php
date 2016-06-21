
<?php
/**
* Updating User to the table User
* Created By: Kumari Pallavi
* Date: 17/06/2016
**/
// Including the library files and all the crediantials;
require_once (__DIR__ . '\cred.php');
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$gen = $_POST['gen'];
$add = $_POST['address'];
$request = $fm->newFindCommand('User');
$request->addFindCriterion('firstName', $fname);
$request->addFindCriterion('lastName', $lname);
$request->addFindCriterion('email', $email);
$request->addFindCriterion('gender', $gen);
$request->addFindCriterion('address', $add);
$result = $request->execute();
$records = $result->getRecords();

foreach ($records as $record) {
    $record->setField('firstName', '');
    $record->setField('lastName', '');
    $record->setField('email', '');
    $record->setField('gender', '');
    $record->setField('address', '');
    $record->commit();
}

?>