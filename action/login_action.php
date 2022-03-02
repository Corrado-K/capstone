<?php

require_once '../controller/';

// Add user

if (isset($_POST['addUserButton'])) {
    $name = $_POST[''];
    $email = $_POST[''];
    $password = $_POST[''];
    $confirm_password = $_POST[''];
    $contact = $_POST[''];
    $image = $_POST[''];

    $is_advisor = $_POST[''];

    // Password check here 
    // Use password hash or md5

    if ($is_advisor) {
        $result = add_advisor_controller();
    } else {
        $result = add_student_controller();
    }

    if ($result) {
        // Change to sweet alert
        echo 'Success';
    }else{
        echo 'Fail';
    }
}


// Select user and login

if (isset($_POST['addUserButton'])) {
    $email = $_POST[''];
    $password = $_POST[''];
    
    $is_advisor = $_POST[''];

    // Password check here 
    // Use password hash or md5

    if ($is_advisor) {
        $result = select_advisor_controller();
    } else {
        $result = add_student_controller();
    }

    if ($result) {
        // Change to sweet alert
        echo 'Success';
    }else{
        echo 'Fail';
    }
}



?>
