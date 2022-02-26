<?php

require  '../class/course_class.php';

// course
function add_course_controller($course_code,$course_name,$course_passgrade){
    // create an instance of the course class
    $course_instance = new Course();
    // call the method from the class
    return $course_instance->add_course($course_code,$course_name,$course_passgrade);

}

function select_course_controller($course_code,$course_name,$course_passgrade){
    // create an instance of the customer class
    $course_instance = new Course();
    // call the method from the class
    return $course_instance->select_course($course_code,$course_name,$course_passgrade);

}

function select_all_courses_controller(){
    // create an instance of the customer class
    $course_instance = new Course();
    // call the method from the class
    return $course_instance->select_all_courses();

}

function delete_course_controller($course_id){
    // create an instance of the customer class
    $course_instance = new Course();
    // call the method from the class
    return $course_instance->delete_course($course_id);

}

function update_course_controller($course_id,$course_code,$course_name,$course_passgrade){
    // create an instance of the customer class
    $course_instance = new Course();
    // call the method from the class
    return $course_instance->update_course($course_id,$course_code,$course_name,$course_passgrade);

}



?>