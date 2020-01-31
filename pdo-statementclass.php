<?php
$strDSN = "pgsql:dbname=chaptersix;host=localhost;port=5432;user=chaptersix;password=chaptersix";
// Let’s interrogate the database
$objPDO = new PDO($strDSN);
$i = 0;
$strQuery = "SELECT * FROM \"user\"";
$objStatement = $objPDO->prepare($strQuery);
$objStatement -> execute();
while ($arRow = $objStatement->fetch(PDO::FETCH_ASSOC)) {
        print "Row $i <br/>\n";
        foreach($arRow as $key => $value) {
                if (!is_numeric($key)) 
					print "- Column $key, value $value <br/>\n";
        };
        $i++;
};  
?>
