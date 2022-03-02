<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<body style="background-color: #9b1c1c">


<?php

require_once '../controller/student_controller.php';
require_once '../controller/advisor_controller.php';

session_start();


// Add user

if (isset($_POST['addUserButton'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $contact = $_POST['contact'];
    // $image = $_POST['image'];

    $is_advisor = false;

    if(isset($_POST['is_advisor'])){
        
        if ($_POST['is_advisor'] ==  true) {
            $is_advisor = true;
        }
    }

    echo 'Verify if advisor with advisor secret login code';

    // Password check here 

    if ($password != $confirm_password) {
        echo 'Passwords, do not match';
    }


    // Use password hash or md5
    $password = password_hash($password, PASSWORD_DEFAULT);


    if ($is_advisor) {
        $result = add_advisor_controller($name,$email,$password,$contact);
    } else {
        $result = add_student_controller($name,$email,$password,$contact);
    }

    if ($result) {
        // Change to sweet alert
        echo '<script>
                swal({
                    title: "Account created!",
                    text: "Account created successfully!",
                    icon: "success",
                    button: "Ok",
                    timer: 2000
                }).then(() => {
                    window.location = "../login/login.html";
                    });
            </script>';
        // echo 'Success';
    }else{
        echo '<script>
                swal({
                    title: "Error!",
                    text: "Failed to create account! Please try again",
                    icon: "error",
                    button: "Ok",
                    timer: 2000
                }).then(() => {
                    window.location = "../login/create-account.html";
                    });
            </script>';
        // echo 'Fail';
    }
}


// Select user and login

if (isset($_POST['loginButton'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $is_advisor = false;

    if(isset($_POST['is_advisor'])){
        
        if ($_POST['is_advisor'] ==  true) {
            $is_advisor = true;
        }
    }

    if ($is_advisor) {
        $advisor_result = select_advisor_controller($email);

        if ($advisor_result['advisor_email'] == $email && password_verify($password, $advisor_result['advisor_pass']) ) {
            $_SESSION['user_id'] = $advisor_result['advisor_id'];
            $_SESSION['email'] = $advisor_result['advisor_email'];
            $_SESSION['name'] = $advisor_result['advisor_name'];
    
            // Change to sweet alert
            echo '<script>
                swal({
                    title: "Account created!",
                    text: "Login successful!",
                    icon: "success",
                    button: "Ok",
                    timer: 2000
                }).then(() => {
                    window.location = "../advisor_view/home.php";
                    });
            </script>';
        }else{
            echo '<script>
            swal({
                title: "Error!",
                text: "Failed to login! Please try again",
                icon: "error",
                button: "Ok",
                timer: 2000
            }).then(() => {
                window.location = "../login/login.html";
                });
        </script>';
        }
    } else {
        $student_result = select_student_controller($email);

        if($student_result['student_email'] == $email && password_verify($password, $student_result['student_pass']) ){
            $_SESSION['user_id'] = $student_result['student_id'];
            $_SESSION['email'] = $student_result['student_email'];
            $_SESSION['name'] = $student_result['student_name'];
    
            // Change to sweet alert
            echo '<script>
                swal({
                    title: "Login!",
                    text: "Login successful!",
                    icon: "success",
                    button: "Ok",
                    timer: 2000
                }).then(() => {
                    window.location = "../student_view/home.php";
                    });
            </script>';
        }else{
            echo '<script>
            swal({
                title: "Error!",
                text: "Failed to login! Please try again",
                icon: "error",
                button: "Ok",
                timer: 2000
            }).then(() => {
                window.location = "../login/login.html";
                });
        </script>';
        }
    }

    
    
}


// Logout

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user_id']);
    unset($_SESSION['email']);
    unset($_SESSION['name']);
    header('location: ../index.php');
}






?>
