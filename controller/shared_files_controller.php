<?php

require  '../class/shared_files_class.php';

// shared_file
function add_shared_file_controller($file_name,$desc,$file){
    // create an instance of the shared_file class
    $shared_file_instance = new Shared_file();
    // call the method from the class
    return $shared_file_instance->add_shared_file($file_name,$desc,$file);

}

function select_shared_file_controller($file_name,$desc){
    // create an instance of the customer class
    $shared_file_instance = new Shared_file();
    // call the method from the class
    return $shared_file_instance->select_shared_file($file_name,$desc);

}

function select_all_shared_files_controller(){
    // create an instance of the customer class
    $shared_file_instance = new Shared_file();
    // call the method from the class
    return $shared_file_instance->select_all_shared_files();

}

function delete_shared_file_controller($shared_file_id){
    // create an instance of the customer class
    $shared_file_instance = new Shared_file();
    // call the method from the class
    return $shared_file_instance->delete_shared_file($shared_file_id);

}

function update_shared_file_controller($shared_file_id,$file_name,$desc,$file){
    // create an instance of the customer class
    $shared_file_instance = new Shared_file();
    // call the method from the class
    return $shared_file_instance->update_shared_file($shared_file_id,$file_name,$desc,$file);

}



?>