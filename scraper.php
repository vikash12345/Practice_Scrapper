<?
// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
//
// // Read in a page
echo $html = scraperwiki::scrape("http://www.mciindia.org/ViewDetails.aspx?ID=1");

//$dom = new simple_html_dom();
//$dom->load($html);

//echo $html->find('span[id=Name]', 0)->plaintext;





// // Find something on the page using css selectors
//$dom = new simple_html_dom();
//$dom->load($html);
//print_r($dom->at('span.Name'))->text;
//
// // Write out to the sqlite database using scraperwiki library
//scraperwiki::save_sqlite(array('name'), array('name' => 'susan', 'occupation' => 'software developer'));
//
// // An arbitrary query against the database
//scraperwiki::select("* from data where 'name'='peter'")

?>

