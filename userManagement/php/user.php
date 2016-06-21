/**
* Creating User to the table User
* Created By: Kumari Pallavi
* Date: 16/06/2016
**/
<?php
// Including the library files and all the crediantials;
require_once ('file:///E:/xampp/htdocs/project/userManagement/php/cred.php');
// Creating the records on table User;
$record = $fm->createRecord('User');
// Setting the field names of the table User;
$record->setField('firstName', 'Kumari');
$record->setField('lastName', 'Pallavi');
$record->setField('email', 'pallavi@gmail.com');
$record->setField('gender', 'female');
$record->setField('address', 'bbsr');
$result = $record->commit();    // Saving all the fields
$request = $fm->newFindAllCommand('User');
$result = $request->execute();
$records = $result->getRecords();
// Display table User
echo '<table border="1">';
echo '<tr>';
echo '<th>firstName</th>';
echo '</tr>';
foreach ($records as $record) {
    echo '<tr>';
    echo '<td>' . $record->getField('firstName') . '</td>';
    echo '<td>' . $record->getField('lastName') . '</td>';    
    echo '<td>' . $record->getField('email') . '</td>';
    echo '<td>' . $record->getField('gender') . '</td>';
    echo '<td>' . $record->getField('address') . '</td>';
    echo "</tr>";
}
echo '</table>';
?>