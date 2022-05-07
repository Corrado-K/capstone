<?php

require  '../class/course_class.php';

// add course
function add_course_controller($course_code,$course_name,$course_passgrade){
    // create an instance of the course class
    $course_instance = new Course();
    // call the method from the class
    return $course_instance->add_course($course_code,$course_name,$course_passgrade);

}

// add course prerequisite
function add_course_prerequisite_controller($course,$prerequisite){
    // create an instance of the course class
    $course_instance = new Course();
    // call the method from the class
    return $course_instance->set_prerequisite($course,$prerequisite);

}

function select_course_controller($course_name){
    // create an instance of the customer class
    $course_instance = new Course();
    // call the method from the class
    return $course_instance->select_course($course_name);

}

function has_prerequisite_controller($course_id){
    // create an instance of the customer class
    $course_instance = new Course();
    // call the method from the class
    return $course_instance->has_prerequisite($course_id);

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