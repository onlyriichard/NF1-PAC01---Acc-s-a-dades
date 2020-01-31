<?php
$strDSN = "pgsql:dbname=chaptersix;host=localhost;port=5432;user=chaptersix;password=chaptersix";
// Let’s interrogate the database
$objPDO = new PDO($strDSN);

$strQuery = "INSERT INTO \"user\"(username, password_hash) VALUES(:username, :password)";

$strUsername = 'Richard';
$strPassword = 'mypassword';
$objStatement = $objPDO->prepare($strQuery);
$objStatement->bindParam(':username', $strUsername, PDO::PARAM_STR);
$objStatement->bindParam(':password', $strPassword, PDO::PARAM_STR);
$blSuccess = $objStatement->execute();
?>
