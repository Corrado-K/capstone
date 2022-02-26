<?php 

include '../controller/shared_files_controller.php';


//Use the add file thing from e-commerce

//Add sweet alert

// Add shared_files 
if (isset($_POST['add_shared_file'])) {
    $file_name = $_POST['file_name'];
    $description = $_POST['desc'];
    $file = $_POST['file'];
    

    $result = add_shared_file_controller($file_name,$description,$file);

    if ($result) {
        echo "Success";
    }else{
        echo $subject.$message.$file.$date;
        echo "Failed";
    };
    
}

?>


<?php 


// Update shared_files 
if (isset($_POST['update_shared_files'])) {
    $title = '';
    $files = '';
    

    $result = '';
    
}

?>


<?php 


// Delete shared_files 
if (isset($_POST['delete_shared_files'])) {
    $title = '';
    $files = '';
    

    $result = '';
    
}

?>