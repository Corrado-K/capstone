<?php 
   /* q */
?>









<?php

// try adding faqs using cvs reader in php to add to the database/

/* $file = fopen("../files/faq_uploads/faq_csv.csv","r");
while(! feof($file)){
    print_r(fgetcsv($file));
}
fclose($file); */


?>

<?php
/*$ row = 1;
if (($handle = fopen("../files/faq_uploads/faq_csv.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        // echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "new line";
        }
    }
    fclose($handle);
} */

// while (($line = fgetcsv(fopen($file,'r'))) !== FALSE) {
//     $result = add_faq_controller($line[0], $line[1]);
//     // print_r($line[1]);
//  }
//  fclose($file);

// $file = fopen('../files/faq_uploads/faq_csv.csv', 'r');
// while (($line = fgetcsv($file)) !== FALSE) {
//    //$line[0] = '1004000018' in first iteration
//    print_r($line[1]);
// }
// fclose($file);

$file = '../files/shared_files_uploads/faq_csv.csv';


// Use unlink() function to delete a file
// if (!unlink($file)) {
//     echo ("$file cannot be deleted due to an error");
// }
// else {
//     echo ("$file has been deleted");
// }



?>

<?php

	// Initialize a file URL to the variable
	$url =
	'https://media.geeksforgeeks.org/wp-content/uploads/gfg-40.png';
	
	// Use basename() function to return the base name of file
	$file_name = basename($file);
	
	// Use file_get_contents() function to get the file
	// from url and use file_put_contents() function to
	// save the file by using base name
	if (file_put_contents($file_name, file_get_contents($file)))
	{
		echo "File downloaded successfully";
	}
	else
	{
		echo "File downloading failed.";
	}
?>
