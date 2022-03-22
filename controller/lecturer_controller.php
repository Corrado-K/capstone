<?php

require_once '../class/lecturer_class.php';

// lecturer
function add_lecturer_controller($name,$email,$contact){
    // create an instance of the lecturer class
    $lecturer_instance = new Lecturer();
    // call the method from the class
    return $lecturer_instance->add_lecturer($name,$email,$contact);

}

function select_lecturer_controller($email){
    // create an instance of the lecturer class
    $lecturer_instance = new Lecturer();
    // call the method from the class
    return $lecturer_instance->select_one_lecturer($email);

}

function select_all_lecturers_controller(){
    // create an instance of the lecturer class
    $lecturer_instance = new Lecturer();
    // call the method from the class
    return $lecturer_instance->select_all_lecturers();

}

/* function delete_lecturer_controller($lecturer_id){
    // create an instance of the lecturer class
    $lecturer_instance = new Lecturer();
    // call the method from the class
    return $lecturer_instance->delete_lecturer($lecturer_id);

}

function update_lecturer_controller($name,$email,$password,$contact, $image){
    // create an instance of the lecturer class
    $lecturer_instance = new Lecturer();
    // call the method from the class
    return $lecturer_instance->update_lecturer($name,$email,$password,$contact, $image);

} 

function count_lecturer_controller(){
    // create an instance of the lecturer class
    $lecturer_instance = new Lecturer();
    // call the method from the class
    return $lecturer_instance->count_lecturers();

}*/


?>