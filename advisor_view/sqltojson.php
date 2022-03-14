<?php

require_once('../settings/db_cred.php');

// require_once('../settings/db_class.php');

    $conn =  mysqli_connect(SERVER, USER, PASSWORD, DATABASE);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      

    $sql = "SELECT CONCAT('[',
         GROUP_CONCAT(
              CONCAT({\"announcement_id\":,\"announcement_id,\"),
              CONCAT(\"announcement_subject\":,\"announcement_subject,\"),
              CONCAT(\"announcement_message\":,\"announcement_message\"})
         )
    ,']') 
AS json FROM announcements
INTO OUTFILE './pairing.json'";

    $result = $conn->query($sql);

    if ($result) {
        echo "Success";
        header("Location: ./pairing.json");
    }else{
        echo "Failed";
    }
    


?>

/* Export JSON data to a file */
<!-- DECLARE @sql varchar(1000)
SET @sql = 'bcp "SELECT CityID, CityName, ' + 
    'LatestRecordedPopulation FROM Application.Cities ' + 
    'FOR JSON PATH, INCLUDE_NULL_VALUES" ' +
    'queryout  "c:Beaulin-Tempcities.json" ' + 
    '-c -S MACWIN2 -d WideWorldImporters -T'
EXEC sys.XP_CMDSHELL @sql
GO -->