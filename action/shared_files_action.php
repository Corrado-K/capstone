<?php 

include '../controller/shared_files_controller.php';

//Use the add file thing from e-commerce

$target_dir = '../files/shared_files_uploads/';
$target_file = $target_dir . basename($_FILES['uploaded_file']['name']);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


//Add sweet alert

// Add shared_files 
if (isset($_POST['add_shared_file'])) {
    if (file_exists($target_file)) {
        echo '<p style="display:none">File already exists.</p>';
        $error = "File already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES['uploaded_file']['size'] > 5000000) {
        echo '<p style="display:none">File is too large.</p>';
        $error = "File is too large.";

        $uploadOk = 0;
    }


    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<script>swal('Sorry, your file was not uploaded. ".$error."').then(() => {
            window.location = '../advisor_view/shared_files.php';
            });</script>";
        // if everything is ok, try to upload file
    } else {
        if (
            move_uploaded_file(
                $_FILES['uploaded_file']['tmp_name'],
                $target_file
            )
        ) {
            echo '<p style="display:none">The file '.
                htmlspecialchars(basename($_FILES['uploaded_file']['name'])) .
                ' has been uploaded.</p>';
        } else {
            echo "<script>swal('Sorry, there was an error uploading your file.').then(() => {
                window.location = '../advisor_view/shared_files.php';
                });</script>";
        }
    }




    $file_name = $_POST['file_name'];
    $description = $_POST['desc'];
    $file = $target_file;
    

    $result = add_shared_file_controller($file_name,$description,$file);

    if ($result) {
        echo '<script>
                swal({
                    title: "File added!",
                    text: "File added successfully!",
                    icon: "success",
                    button: "Ok",
                    timer: 2000
                }).then(() => {
                    window.location = "../advisor_view/shared_files.php";
                    });
            </script>';
    }else{
        // echo $subject.$message.$file.$date;
        echo '<script>swal("Failed").then(() => {
            window.location = "../advisor_view/shared_files.php";
            });
            </script>';
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