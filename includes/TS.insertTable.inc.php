<?php

// $table = $_POST['TBL'];

// $table= array();

// echo $table[0];


$htmlContent = file_get_contents("../html/testtable.php");
		
	$DOM = new DOMDocument();
	$DOM->loadHTML($htmlContent);
	
	$Header = $DOM->getElementsByTagName('th');
    $Detail = $DOM->getElementsByTagName('td');
    // $aDataTableHeaderHTML[];

    //#Get header name of the table
	foreach($Header as $NodeHeader) 
	{
        $aDataTableHeaderHTML[] = trim($NodeHeader->textContent);
        echo ($aDataTableHeaderHTML);
    }
    die();
    
    

?>