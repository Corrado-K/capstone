<?php

require_once '../class/student_class.php';

// student
function add_student_controller($name,$email,$password,$contact){
    // create an instance of the student class
    $student_instance = new Student();
    // call the method from the class
    return $student_instance->add_student($name,$email,$password,$contact);

}

function select_student_controller($email){
    // create an instance of the student class
    $student_instance = new Student();
    // call the method from the class
    return $student_instance->select_one_student($email);

}

function select_all_students_controller(){
    // create an instance of the student class
    $student_instance = new Student();
    // call the method from the class
    return $student_instance->select_all_students();

}

/* function delete_student_controller($student_id){
    // create an instance of the student class
    $student_instance = new Student();
    // call the method from the class
    return $student_instance->delete_student($student_id);

}

function update_student_controller($name,$email,$password,$contact, $image){
    // create an instance of the student class
    $student_instance = new Student();
    // call the method from the class
    return $student_instance->update_student($name,$email,$password,$contact, $image);

} 
*/

function count_students_controller(){
    // create an instance of the student class
    $student_instance = new Student();
    // call the method from the class
    return $student_instance->number_of_students();

} 


?>