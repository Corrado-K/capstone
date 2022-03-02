<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<body style="background-color: #9b1c1c">

<?php 

require '../controller/faq_controller.php';

// Add faq 
if (isset($_POST['add_faq'])) {
    $question = $_POST['question'];
    $response = $_POST['answer'];

    $result = add_faq_controller($question, $response);

    if ($result) {
        echo "Success";
    }else {
        echo "Failed";
    }
    
}





// Add faq using csv

$isFile = false;

$target_dir = '../files/faq_uploads/';

$target_file = $target_dir . basename($_FILES['uploaded_faq_file']['name']);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$isFile = true;




if(isset($_POST['process_faq_csv'])){

    if (file_exists($target_file)) {
        echo '<p style="display:none">File already exists.</p>';
        $error = "File already exists.";

        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES['uploaded_faq_file']['size'] > 5000000) {
        echo '<p style="display:none">File is too large.</p>';
        $error = "File is too large.";

        $uploadOk = 0;
    }

  
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<script>swal('Sorry, your file was not uploaded. ".$error."').then(() => {
            window.location = '../advisor_view/faq.php';
            });</script>";
        
        // if everything is ok, try to upload file
    } else {
        if (
            move_uploaded_file(
                $_FILES['uploaded_faq_file']['tmp_name'],
                $target_file
            )
        ) {
            echo '<p style="display:none">The file '.
                htmlspecialchars(basename($_FILES['uploaded_faq_file']['name'])) .
            ' has been uploaded.</p>';

        } else {
            echo "<script>swal('Sorry, there was an error uploading your file.').then(() => {
                window.location = '../advisor_view/faq.php';
                });</script>";
            
        }
    }

    if(!isset($target_file)){
        $file = null;
    }else{
        $file = $target_file;
    }

    $file_open = fopen($file,'r');


    while (($line = fgetcsv($file_open)) !== FALSE) {
        $result = add_faq_controller($line[0], $line[1]);
        // print_r($line[1]);
     }
     fclose($file_open);


     if ($result) {
        //  Check with Mr Sampah if it is necessary to delete the file after running or not
        // unlink($file);
        echo '<script>
                swal({
                    title: "FAQs added!",
                    text: "FAQs added successfully!",
                    icon: "success",
                    button: "Ok",
                    timer: 2000
                }).then(() => {
                    window.location = "../advisor_view/faq.php";
                    });
            </script>';



    }else{
        //  Check with Mr Sampah if it is necessary to delete the file after running or not
        // unlink($file);
        echo '<script>swal("Failed").then(() => {
            window.location = "../advisor_view/faq.php";
            });
            </script>';
    }
}

?>




<?php 


// Update faq 
if (isset($_POST['update_faq'])) {
    $question = '';
    $response = '';

    $result = '';
    
}

?>


<?php 


// Delete faq 
if (isset($_POST['delete_faq'])) {
    $question = '';
    $response = '';

    $result = '';
    
}

?>