<?php
/**
* Editing User Details to the table User
* Created By: Kumari Pallavi
* Date: 20/06/2016
**/ 
// Including the library files and all the crediantials;
require_once (__DIR__ . '\cred.php');
$request = $fm->newFindCommand('User');
$request->addFindCriterion('userId', $_POST['userId']);
$result = $request->execute();
$records = $result->getRecords();
$users = [];
foreach ($records as $record) {
    $users['records'][] = [
        'firstName' => $record->getField('firstName'),
        'lastName' => $record->getField('lastName'),
        'email' => $record->getField('email'),
        'gender' => $record->getField('gender'),
        'address' => $record->getField('address'),
    ]; 
}

echo json_encode($users);

?>