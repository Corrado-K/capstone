<?php 

require_once '../controller/student_controller.php';
require_once '../controller/advisor_controller.php';


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
            echo 'Success';
        }else{
            echo 'Fail';
        }
    } else {
        $student_result = select_student_controller($email);
        echo $student_result['student_email'];
        if($student_result['student_email'] == $email && password_verify($password, $student_result['student_pass']) ){
            $_SESSION['user_id'] = $student_result['student_id'];
            $_SESSION['email'] = $student_result['student_email'];
            $_SESSION['name'] = $student_result['student_name'];
    
            // Change to sweet alert
            echo 'Success';
        }else{
            echo 'Fail';
        }
    }

    
    
}
?>