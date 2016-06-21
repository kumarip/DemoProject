<?php
/**
* Adding User to the table User
* Created By: Kumari Pallavi
* Date: 16/06/2016
**/ 
// Including the library files and all the crediantials;
require_once (__DIR__ . '\cred.php');
$request = $fm->newFindAllCommand('User');
$result = $request->execute();
$records = $result->getRecords();

$users = [];
/*$response = array(
    'success' => 1,
    'message' => ''
);
*/

foreach ($records as $record) {
    $users['records'][] = [
        'fname' => $record->getField('firstName'),
        'lname' => $record->getField('lastName'),
        'email' => $record->getField('email'),
        'gender' => $record->getField('gender'),
        'address' => $record->getField('address'),
    ]; 
}
echo json_encode($users);


?>