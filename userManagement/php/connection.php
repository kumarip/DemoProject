
<?php
/**
* Connection Check from the table User
* Created By: Kumari Pallavi
* Date: 16/06/2016
**/ 
require_once (__DIR__ . '\cred.php');

$request = $fm->newFindRequest('User');
$request->addFindCriterion('firstName', 'k');

$request2 = $fm->newFindRequest('User');
$request2->addFindCriterion('lastName', 'p');

//$request3 = $fm->newFindRequest('User');
//$request3->addFindCriterion('email', '');
//$request3->setOmit(TRUE);

$compoundFind = $fm->newCompoundFindCommand('User');
$compoundFind->add(1, $request);
$compoundFind->add(2, $request2);
/*$compoundFind->add(3, $request3);
$compoundFind->addSortRule('Account Name', 1, FILEMAKER_SORT_ASCEND);
*/
$result = $compoundFind->execute();
$records = $result->getRecords();

echo '<table border="1">';
echo '<tr>';
echo '<th>firstName</th>';
echo '<th>lastName</th>';
echo '<th>email</th>';
echo '<th>gender</th>';
echo '<th>address</th>';
echo '</tr>';
foreach ($records as $record) {
    echo '<tr>';
     echo '<td>' . $record->getField('firstName') . '</td>';
    echo '<td>' . $record->getField('lastName') . '</td>';    
    echo '<td>' . $record->getField('email') . '</td>';
    echo '<td>' . $record->getField('gender') . '</td>';
    echo '<td>' . $record->getField('address') . '</td>';
    echo '</tr>';
}
echo '</table>';

?>
