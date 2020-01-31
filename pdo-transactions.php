<?php
$strDSN = "pgsql:dbname=chaptersix;host=localhost;port=5432;user=chaptersix;password=chaptersix";
$objPDO = new PDO($strDSN);
$objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$strQuery1 = "INSERT INTO \"user\"(username, password_hash) VALUES(:username, :password)";
$strQuery2 = "INSERT INTO \"user23\"(username, password_hash) VALUES(:username, :password)";


$strUsername = 'Ricardo3';
$strPassword = 'mypassword';
$objStatement = $objPDO->prepare($strQuery1);
$objStatement->bindParam(':username', $strUsername, PDO::PARAM_STR);
$objStatement->bindParam(':password', $strPassword, PDO::PARAM_STR);



$objStatement2 = $objPDO->prepare($strQuery2);
$objStatement2->bindParam(':username', $strUsername, PDO::PARAM_STR);
$objStatement2->bindParam(':password', $strPassword, PDO::PARAM_STR);

try {

	// begin the transaction
	$objPDO->beginTransaction();
	$objStatement->execute();
	$objStatement2->execute();
	//$objPDO->exec($strQuery2);

// commit the transaction
$objPDO->commit();

} catch (Exception $e) {

	// rollback the transaction
	$objPDO->rollBack();
	echo "Failed: ".$e->getMessage();
}
?>
