<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<body style="background-color: #9b1c1c">
    
</body>
<?php 

require_once '../controller/announcement_controller.php';

$isFile = false;

$target_dir = '../files/announcement_uploads/';
if (basename($_FILES['uploaded_file']['name']) != "") {
    $target_file = $target_dir . basename($_FILES['uploaded_file']['name']);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $isFile = true;
}
else{
    echo '<p style="display:none">no file</p>';
    $isFile = false;
}
    



// Add announcement 
if (isset($_POST['add_announcement'])) {

    if ($isFile == 1) {
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
                window.location = '../advisor_view/announcements.php';
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
                    window.location = '../advisor_view/announcements.php';
                    });</script>";
                
            }
        }
    }


    $subject = $_POST['subject'];
    $message = $_POST['desc'];
    if(!isset($target_file)){
        $file = null;
    }else{
        $file = $target_file;
    }
    $date = date("Y/m/d h:i:sa");

    echo $file;
    $result = add_announcement_controller($subject,$message,$file,$date);

    if ($result) {

        echo '<script>
                swal({
                    title: "Announcement Added!",
                    text: "Announcement created successfully!",
                    icon: "success",
                    button: "Ok",
                    timer: 2000
                }).then(() => {
                    window.location = "../advisor_view/announcements.php";
                    });
            </script>';

    }else{
        // echo $subject.$message.$file.$date;
        echo '<script>
                swal("Failed").then(() => {
                    window.location = "../advisor_view/announcements.php";
                });
            </script>';
    }
    

    
    
}


?>


<?php 


// Update announcement 
if (isset($_POST['update_announcement'])) {
    $announcement_id = $_POST[''];
    $subject = $_POST[''];
    $message = $_POST[''];
    $date = date("Y/m/d h:i:sa");

    $result = update_announcement_controller($announcement_id, $subject, $message, $date);
    
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