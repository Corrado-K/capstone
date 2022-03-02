<?php

require_once '../class/advisor_class.php';

// advisor
function add_advisor_controller($name,$email,$password,$contact, $image){
    // create an instance of the advisor class
    $advisor_instance = new Advisor();
    // call the method from the class
    return $advisor_instance->add_advisor($name,$email,$password,$contact,$image);

}

function select_advisor_controller($email){
    // create an instance of the advisor class
    $advisor_instance = new Advisor();
    // call the method from the class
    return $advisor_instance->select_advisor($email);

}

function select_all_advisors_controller(){
    // create an instance of the advisor class
    $advisor_instance = new Advisor();
    // call the method from the class
    return $advisor_instance->select_all_advisors();

}

/* function delete_advisor_controller($advisor_id){
    // create an instance of the advisor class
    $advisor_instance = new Advisor();
    // call the method from the class
    return $advisor_instance->delete_advisor($advisor_id);

}

function update_advisor_controller($name,$email,$password,$contact, $image){
    // create an instance of the advisor class
    $advisor_instance = new Advisor();
    // call the method from the class
    return $advisor_instance->update_advisor($name,$email,$password,$contact, $image);

}

function count_advisor_controller(){
    // create an instance of the advisor class
    $advisor_instance = new Advisor();
    // call the method from the class
    return $advisor_instance->count_advisors();

} */


?>