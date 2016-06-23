<?php
/**
* Search User from the table User
* Created By: Kumari Pallavi
* Date: 22/06/2016
**/ 
// Including the library files and all the crediantials;
require_once (__DIR__ . '\cred.php');
$element = $_POST['data'];
$request1 = $fm->newFindRequest('User');
$request1->addFindCriterion('firstName', $element);
$request1->addFindCriterion('status', 'active');

$request2 = $fm->newFindRequest('User');
$request2->addFindCriterion('lastName', $element);
$request2->addFindCriterion('status', 'active');

$request3 = $fm->newFindRequest('User');
$request3->addFindCriterion('email', $element);
$request3->addFindCriterion('status', 'active');
//$request3->setOmit(TRUE);
$request4 = $fm->newFindRequest('User');
$request4->addFindCriterion('gender', $element);
$request4->addFindCriterion('status', 'active');

$request5 = $fm->newFindRequest('User');
$request5->addFindCriterion('address', $element);
$request5->addFindCriterion('status', 'active');

$compoundFind = $fm->newCompoundFindCommand('User');
$compoundFind->add(1, $request1);
$compoundFind->add(2, $request2);
$compoundFind->add(3, $request3);
$compoundFind->add(4, $request4);
$compoundFind->add(5, $request5);
//$compoundFind->addSortRule('', 1, FILEMAKER_SORT_ASCEND);

$result = $compoundFind->execute();
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