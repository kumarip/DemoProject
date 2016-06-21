<?php
/**
* Displaying User Details from the table/layout User
* Created By: Kumari Pallavi
* Date: 16/06/2016
**/ 
// Including the library files and all the crediantials;
require_once (__DIR__ . '\cred.php');
$request = $fm->newFindAllCommand('User');
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
        'userId' => $record->getRecordId(),
    ]; 
}

echo json_encode($users);

?>
