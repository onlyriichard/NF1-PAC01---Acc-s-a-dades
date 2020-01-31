<?php
$strDSN = "pgsql:dbname=chaptersix;host=localhost;port=5432;user=chaptersix;password=chaptersix";
// Let’s interrogate the database
$objPDO = new PDO($strDSN);
$i = 0;
$strUsername = 'ed';
$strQuery = "SELECT * FROM \"user\" WHERE username = '$srtUsername'";
$objStatement = $objPDO->prepare($strQuery);
$objStatement -> execute();
while ($arRow = $objStatement->fetch(PDO::FETCH_ASSOC)) {
        print "Row $i <br/>\n";
        foreach($arRow as $key => $value) {
                
					print "- Column $key, value $value <br/>\n";
        };
        $i++;
};  
?>
