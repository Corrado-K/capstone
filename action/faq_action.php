<?php 

require '../controller/faq_controller.php';
// require '../controller/announcement_controller.php';

// include __DIR__ . '/vendor/autoload.php';

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