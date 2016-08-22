<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
//
$MAX_ID = 3; //set based on required maximum numbers
/** looping over list of ids of doctors **/
for($id = 1; $id <= $MAX_ID; $id++)
{
  // // Read in a MCI doctor page
    $html = scraperwiki::scrape("http://www.mciindia.org/ViewDetails.aspx?ID=".$id);
  // Find something on the page using css selectors
   $dom = new simple_html_dom();
   $dom->load($html);
  
	  $name = $dom->find('span[id=Name]',0)->plaintext;
	  $fathername = $dom->find('span[id="FatherName"]',0)->plaintext;
	  $DOB = $dom->find('span[id="DOB"]',0)->plaintext;
	  $lblinfor = $dom->find('span[id="lbl_Info"]',0)->plaintext;
	  $reg = $dom->find('span[id="Regis_no"]',0)->plaintext;
	  $date_reg = $dom->find('span[id="Date_Reg"]',0)->plaintext;
	  $Lbl_Council = $dom->find('span[id="Lbl_Council"]',0)->plaintext;
	  $qual = $dom->find('span[id="Qual"]',0)->plaintext;
	  $QualYear = $dom->find('span[id="QualYear"]',0)->plaintext;
	  $Univ = $dom->find('span[id="Univ"]',0)->plaintext;
      	 $Address = $dom->find('span[id="Address"]',0)->plaintext;
      
      
      
      scraperwiki::save_sqlite(array('mci_snum','registration_number'), 
    array('mci_snum' => $id, 
          'name' => (trim($nam)), 
          'fathers_name' => (trim($fathername)),
          'date_of_birth' => (trim($DOB)),
          'information_year' => (trim($lblinfor)),
          'registration_number' => (trim($reg)),
          'date_of_reg' => (trim($date_reg)),
          'council' => (trim($Lbl_Council)),
          'qualifications' => (trim($qual)),
          'qualification_year' => (trim($QualYear)),
          'Uni' => (trim($Univ)),
          'permanent_address' => (trim($Address)));
      
      
      
      
      
   // walk through the dom and extract doctor information
//   $info['doc_name'] = $dom->find('span[id=Name]')->plaintext;
//   $info['doc_fname'] = $dom->find('span[id="FatherName"]')->plaintext;
//   $info['doc_dob'] = $dom->find('span[id="DOB"]')->plaintext;
// $info['doc_infoyear'] = $dom->find('span[id="lbl_Info"]')->plaintext;
//   $info['doc_regnum'] = $dom->find('span[id="Regis_no"]')->plaintext;
//   $info['doc_datereg'] = $dom->find('span[id="Date_Reg"]')->plaintext;
//   $info['doc_council'] = $dom->find('span[id="Lbl_Council"]')->plaintext;
//   $info['doc_qual'] = $dom->find('span[id="Qual"]')->plaintext;
//   $info['doc_qualyear'] = $dom->find('span[id="QualYear"]')->plaintext;
//   $info['doc_univ'] = $dom->find('span[id="Univ"]')->plaintext;
//   $info['doc_address'] = $dom->find('span[id="Address"]')->plaintext;
// print_r($dom->find("table.list"));
//
// // Write out to the sqlite database using scraperwiki library
 /*
 scraperwiki::save_sqlite(array('mci_snum','registration_number'), 
    array('mci_snum' => $id, 
          'name' => (trim($info['doc_name'])), 
          'fathers_name' => (trim($info['doc_fname'])),
          'date_of_birth' => (trim($info['doc_dob'])),
          'information_year' => (trim($info['doc_infoyear'])),
          'registration_number' => (trim($info['doc_regnum'])),
          'date_of_reg' => (trim($info['doc_datereg'])),
          'council' => (trim($info['doc_council'])),
          'qualifications' => (trim($info['doc_qual'])),
          'qualification_year' => (trim($info['doc_qualyear'])),
          'permanent_address' => (trim($info['doc_address']))
    ));
    */
  //clean out the dom
}
// // An arbitrary query against the database
// scraperwiki::select("* from data where 'name'='peter'")
// You don't have to do things with the ScraperWiki library.
// You can use whatever libraries you want: https://morph.io/documentation/php
// All that matters is that your final data is written to an SQLite database
// called "data.sqlite" in the current working directory which has at least a table
// called "data".
?>
