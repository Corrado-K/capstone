<?php

require '../class/faq_class.php';

// faq
function add_faq_controller($question, $answer){
    // create an instance of the faq class
    $faq_instance = new FAQ();
    // call the method from the class
    return $faq_instance->add_faq($question, $answer);

}

function select_faq_controller($question, $answer){
    // create an instance of the customer class
    $faq_instance = new FAQ();
    // call the method from the class
    return $faq_instance->select_faq($question, $answer);

}

function select_all_faqs_controller(){
    // create an instance of the customer class
    $faq_instance = new FAQ();
    // call the method from the class
    return $faq_instance->select_all_faqs();

}

function number_of_faqs_controller(){
    // create an instance of the customer class
    $faq_instance = new FAQ();
    // call the method from the class
    return $faq_instance->number_of_faqs();

}



// function delete_faq_controller($faq_id){
//     // create an instance of the customer class
//     $faq_instance = new FAQ();
//     // call the method from the class
//     return $faq_instance->delete_faq($faq_id);

// }

function update_faq_controller($faq_id,$question, $answer){
    // create an instance of the customer class
    $faq_instance = new FAQ();
    // call the method from the class
    return $faq_instance->update_faq($faq_id,$question, $answer);

}


?>