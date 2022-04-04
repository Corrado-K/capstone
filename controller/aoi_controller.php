<?php

require '../class/aoi_class.php';

// aoi
function add_aoi_controller($name, $description){
    // create an instance of the aoi class
    $aoi_instance = new AOI();
    // call the method from the class
    return $aoi_instance->add_aoi($name, $description);

}

function select_aoi_controller($name, $description){
    // create an instance of the customer class
    $aoi_instance = new AOI();
    // call the method from the class
    return $aoi_instance->select_aoi($name, $description);

}

function select_all_aois_controller(){
    // create an instance of the customer class
    $aoi_instance = new AOI();
    // call the method from the class
    return $aoi_instance->select_all_aois();

}

function select_all_aois_to_json_controller(){
    // create an instance of the customer class
    $aoi_instance = new AOI();
    // call the method from the class
    return $aoi_instance->select_all_aois_to_json();

}

function select_all_lecturer_aoi_controller(){
    // create an instance of the customer class
    $aoi_instance = new AOI();
    // call the method from the class
    return $aoi_instance->select_all_lecturer_aois();
}

function find_aoi_controller($aoi){
    // create an instance of the customer class
    $aoi_instance = new AOI();
    // call the method from the class
    return $aoi_instance->find_aoi($aoi);
}

// function delete_aoi_controller($aoi_id){
//     // create an instance of the customer class
//     $aoi_instance = new AOI();
//     // call the method from the class
//     return $aoi_instance->delete_aoi($aoi_id);

// }

function update_aoi_controller($aoi_id, $name, $description){
    // create an instance of the customer class
    $aoi_instance = new AOI();
    // call the method from the class
    return $aoi_instance->update_aoi($aoi_id,$name, $description);

}


?>