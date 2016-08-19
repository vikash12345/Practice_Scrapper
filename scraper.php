<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
//
$MAX_ID = 2; //set based on required maximum numbers
/** looping over list of ids of doctors **/
for($id = 1; $id <= $MAX_ID; $id++)
	{
  $html = scraperwiki::scrape("http://www.mciindia.org/ViewDetails.aspx?ID=".$id);
  // Find something on the page using css selectors
   $dom = new simple_html_dom();
 echo   $dom->load($html);   
   // walk through the dom and extract doctor information
// echo 	  $name = $html->find('span[id=Name]',0)->plaintext;
// echo	  $fathername = $html->find('span[id="FatherName"]',0)->plaintext;
// echo	  $DOB = $html->find('span[id="DOB"]',0)->plaintext;
// echo	  $lblinfor = $html->find('span[id="lbl_Info"]',0)->plaintext;
// echo	  $reg = $html->find('span[id="Regis_no"]',0)->plaintext;
// echo	  $date_reg = $html->find('span[id="Date_Reg"]',0)->plaintext;
// echo	  $Lbl_Council = $html->find('span[id="Lbl_Council"]',0)->plaintext;
// echo	  $qual = $html->find('span[id="Qual"]',0)->plaintext;
//echo	  $QualYear = $html->find('span[id="QualYear"]',0)->plaintext;
//echo	  $Univ = $html->find('span[id="Univ"]',0)->plaintext;
//echo  	  $Address = $html->find('span[id="Address"]',0)->plaintext;


// print_r($dom->find("table.list"));
//
// // Write out to the sqlite database using scraperwiki library
/*
scraperwiki::save( array('country'), $record );



 scraperwiki::save_sqlite(array('mci_snum','registration_number'), 
    array('mci_snum' => $id, 
          '$name' => (trim($info['doc_name'])), 
          '$fathername' => (trim($info['doc_fname'])),
          '$DOB' => (trim($info['doc_dob'])),
          '$lblinfor' => (trim($info['doc_infoyear'])),
          '$reg' => (trim($info['doc_regnum'])),
          '$date_reg' => (trim($info['doc_datereg'])),
          '$Lbl_Council' => (trim($info['doc_council'])),
          '$qual' => (trim($info['doc_qual'])),
          '$QualYear' => (trim($info['doc_qualyear'])),
          '$Univ' => (trim($info['Univ'])),
          '$Address' => (trim($info['doc_address']))
    ));
    

  //clean out the dom
  $dom->__destruct();
}
// // An arbitrary query against the database
// scraperwiki::select("* from data where 'name'='peter'")
// You don't have to do things with the ScraperWiki library.
// You can use whatever libraries you want: https://morph.io/documentation/php
// All that matters is that your final data is written to an SQLite database
// called "data.sqlite" in the current working directory which has at least a table
// called "data".
*/
?>
