<?php

require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';

	include_once('simple_html_dom.php');
	$MAX_ID = 2;
	for($id = 1; $id <= $MAX_ID; $id++)
	{

	$html = file_get_html("http://www.mciindia.org/ViewDetails.aspx?ID=".$id);
	  
echo 	  $name = $html->find('span[id=Name]',0)->plaintext;
echo	  $fathername = $html->find('span[id="FatherName"]',0)->plaintext;
echo	  $DOB = $html->find('span[id="DOB"]',0)->plaintext;
echo	  $lblinfor = $html->find('span[id="lbl_Info"]',0)->plaintext;
echo	  $reg = $html->find('span[id="Regis_no"]',0)->plaintext;
echo	  $date_reg = $html->find('span[id="Date_Reg"]',0)->plaintext;
echo	  $Lbl_Council = $html->find('span[id="Lbl_Council"]',0)->plaintext;
echo	  $qual = $html->find('span[id="Qual"]',0)->plaintext;
echo	  $QualYear = $html->find('span[id="QualYear"]',0)->plaintext;
echo	  $Univ = $html->find('span[id="Univ"]',0)->plaintext;
echo  	 $Address = $html->find('span[id="Address"]',0)->plaintext;




}

	
?>
