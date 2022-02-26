<?php 

include '../controller/shared_files_controller.php';

//Use the add file thing from e-commerce

$target_dir = '../files/uploads/';
$target_file = $target_dir . basename($_FILES['uploaded_file']['name']);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


//Add sweet alert

// Add shared_files 
if (isset($_POST['add_shared_file'])) {
    if (file_exists($target_file)) {
        echo 'Sorry, file already exists.';
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES['uploaded_file']['size'] > 500000) {
        echo 'Sorry, your file is too large.';
        $uploadOk = 0;
    }

    // Allow certain file formats
    // if (
    //     $imageFileType != 'jpg' &&
    //     $imageFileType != 'png' &&
    //     $imageFileType != 'jpeg' &&
    //     $imageFileType != 'gif'
    // ) {
    //     echo 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';
    //     $uploadOk = 0;
    // }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo 'Sorry, your file was not uploaded.';
        // if everything is ok, try to upload file
    } else {
        if (
            move_uploaded_file(
                $_FILES['uploaded_file']['tmp_name'],
                $target_file
            )
        ) {
            echo 'The file ' .
                htmlspecialchars(basename($_FILES['uploaded_file']['name'])) .
                ' has been uploaded.';
        } else {
            echo 'Sorry, there was an error uploading your file.';
        }
    }




    $file_name = $_POST['file_name'];
    $description = $_POST['desc'];
    $file = $target_dir . basename($_FILES['uploaded_file']['name']);
    

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