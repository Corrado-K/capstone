<?php 

require '../controller/announcement_controller.php';


// Add announcement 
if (isset($_POST['add_announcement'])) {
    $subject = $_POST['subject'];
    $message = $_POST['desc'];
    $file = $_POST['file'];
    $date = date("Y/m/d");

    $result = add_announcement_controller($subject,$message,$file,$date);

    if ($result) {
        echo "Success";
    }else{
        // echo $subject.$message.$file.$date;
        echo "Failed";
    }
    
}


?>


<?php 


// Update announcement 
if (isset($_POST['update_announcement'])) {
    $subject = '';
    $message = '';
    $date = date();

    $result = '';
    
}

?>


<?php 


// Delete announcement 
if (isset($_POST['delete_announcement'])) {
    $subject = '';
    $message = '';
    $date = date()  ;

    $result = '';
    
}

?>