
<?php
/**
* Deleting User from the table User
* Created By: Kumari Pallavi
* Date: 16/06/2016
**/ 

require_once (__DIR__ . '\cred.php');
for($i=0; $i <= 10 ; $i++ )
{
$deleteRecord = $fm->newDeleteCommand('User', $i);
$result = $deleteRecord->execute();
}
?>